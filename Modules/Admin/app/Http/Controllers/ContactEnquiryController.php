<?php

namespace Modules\Admin\Http\Controllers;

use App\Helpers\BackendHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Models\ContactEnquiry;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\Facades\FastExcel;
use Yajra\DataTables\Facades\DataTables;

class ContactEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contactEnquiries = ContactEnquiry::all();

        if ($request->ajax()) {
            $data = ContactEnquiry::when(
                BackendHelpers::isOrderColumnZero($request),
                fn($query) => $query->orderByDesc('id')
            );
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return $row->date_formatted;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('contact-enquiries.show', base64_encode($row->id)) . '" class="btn btn-primary btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show" style="margin-right: 3px;"><i class="fas fa-eye"></i></a>';
                    $btn .= '<form action="' . route('contact-enquiries.destroy', base64_encode($row->id))  . '" method="POST" style="display: inline-block;">' . csrf_field() . method_field('DELETE') . '<button type="button" class="btn btn-danger btn-sm delete-btn" data-delete-message-type="itemOnly" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash"></i></button></form>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin::contact-enquiry.index', compact('contactEnquiries'));
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $contactEnquiry = ContactEnquiry::findOrFail(base64_decode($id));
        return view('admin::contact-enquiry.show', compact('contactEnquiry'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $contactEnquiry = ContactEnquiry::findOrFail(base64_decode($id));
            $contactEnquiry->delete();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Contact Enquiry deleted successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Export the contact enquiries to an Excel file using FastExcel.
     */
    public function export(Request $request)
    {
        $contactEnquiries = ContactEnquiry::query();

        if ($request->start_date && $request->end_date) {
            $startDate = $request->start_date . ' 00:00:00'; // Include start of the day
            $endDate = $request->end_date . ' 23:59:59'; // Include end of the day
            $contactEnquiries->whereBetween('created_at', [$startDate, $endDate]);
        }
        $contactEnquiries = $contactEnquiries->get();
        $filename = 'contact-enquiries-' . now()->format('Y-m-d-H-i') . '.xlsx';

        return FastExcel::data($contactEnquiries->map(function ($contactEnquiry, $index) {
            return [
                'SN' => $index + 1,
                'Name' => $contactEnquiry->name,
                'Email' => $contactEnquiry->email,
                'Phone Number' => $contactEnquiry->phone_number,
                'Subject' => $contactEnquiry->subject,
                'Message' => $contactEnquiry->message,
                'Date' => $contactEnquiry->date_formatted,
            ];
        }))
            ->headerStyle((new Style())->setFontBold())
            ->rowsStyle((new Style())->setFontSize(12))
            ->download($filename);
    }
}
