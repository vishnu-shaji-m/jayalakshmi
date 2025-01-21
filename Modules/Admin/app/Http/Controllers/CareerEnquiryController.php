<?php

namespace Modules\Admin\Http\Controllers;

use App\Helpers\BackendHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Modules\Admin\Models\CareerEnquiry;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\Facades\FastExcel;
use Yajra\DataTables\Facades\DataTables;

class CareerEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $careerEnquiries = CareerEnquiry::all();

        if ($request->ajax()) {
            $data = CareerEnquiry::when(
                BackendHelpers::isOrderColumnZero($request),
                fn($query) => $query->orderByDesc('id')
            );
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('career_id', function ($row) {
                    return $row->career ? $row->career->title : '';
                })
                ->editColumn('resume', function ($row) {
                    if ($row->resume_value)
                        return '<a href="' . $row->resume_value . '" target="_blank" class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i class="bx bxs-file label-icon"></i> ' . $row->resume_extension . '</a>';
                    else
                        return '<a href="javascript: void(0);" class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i class="bx bx-file label-icon"></i> No File</a>';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->date_formatted;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('career-enquiries.show', base64_encode($row->id)) . '" class="btn btn-primary btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show" style="margin-right: 3px;"><i class="fas fa-eye"></i></a>';
                    $btn .= '<form action="' . route('career-enquiries.destroy', base64_encode($row->id))  . '" method="POST" style="display: inline-block;">' . csrf_field() . method_field('DELETE') . '<button type="button" class="btn btn-danger btn-sm delete-btn" data-delete-message-type="itemOnly" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash"></i></button></form>';
                    return $btn;
                })
                ->rawColumns(['resume', 'action'])
                ->toJson();
        }

        return view('admin::career-enquiry.index', compact('careerEnquiries'));
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $careerEnquiry = CareerEnquiry::findOrFail(base64_decode($id));
        return view('admin::career-enquiry.show', compact('careerEnquiry'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $careerEnquiry = CareerEnquiry::findOrFail(base64_decode($id));
            $careerEnquiry->delete();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Career Enquiry deleted successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Export the career enquiries to an Excel file using FastExcel.
     */
    public function export(Request $request)
    {
        $careerEnquiries = CareerEnquiry::query();

        if ($request->start_date && $request->end_date) {
            $startDate = $request->start_date . ' 00:00:00'; // Include start of the day
            $endDate = $request->end_date . ' 23:59:59'; // Include end of the day
            $careerEnquiries->whereBetween('created_at', [$startDate, $endDate]);
        }
        $careerEnquiries = $careerEnquiries->get();
        $filename = 'career-enquiries-' . now()->format('Y-m-d-H-i') . '.xlsx';

        return FastExcel::data($careerEnquiries->map(function ($careerEnquiry, $index) {
            return [
                'SN' => $index + 1,
                'Career' => $careerEnquiry->career->title,
                'Name' => $careerEnquiry->name,
                'Email' => $careerEnquiry->email,
                'Phone Number' => $careerEnquiry->phone_number,
                'Resume' => $careerEnquiry->resume_value ? '=HYPERLINK("' . URL::to($careerEnquiry->resume_value) . '", "View")' : 'No File',
                'Message' => $careerEnquiry->message,
                'Date' => $careerEnquiry->date_formatted,
            ];
        }))
            ->headerStyle((new Style())->setFontBold())
            ->rowsStyle((new Style())->setFontSize(12))
            ->download($filename);
    }
}
