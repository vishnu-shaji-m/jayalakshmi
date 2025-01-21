<?php

namespace Modules\Admin\Http\Controllers;

use App\Helpers\BackendHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\CareerRequest;
use Modules\Admin\Models\Career;
use Modules\Admin\Models\City;
use Modules\Admin\Models\JobType;
use Modules\Admin\Models\State;
use Yajra\DataTables\Facades\DataTables;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Career::with(['jobType:id,title', 'state:id,name', 'city:id,name'])
                ->when(
                    BackendHelpers::isOrderColumnZero($request),
                    fn($query) => $query->orderByDesc('id')
                );
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('sort_order', function ($row) {
                    return '<input type="text" value="' . $row->sort_order . '"
                        class="form-control w-50 sort-order numeric-input" data-model="Career"
                        data-id="' . base64_encode($row->id) . '" name="sort_order">';
                })
                ->editColumn('status', function ($row) {
                    $fieldValue = $row->status ? 'checked' : '';
                    $fieldLabel = $row->status ? 'Enabled' : 'Disabled';
                    return '<div class="form-check form-switch">
                        <input type="checkbox" id="status' . base64_encode($row->id) . '" class="form-check-input toggle-switch" data-name="Status" data-labels="Enabled;Disabled" data-column="status" data-model="Career"
                            value="' . $row->status . '"
                            data-id="' . base64_encode($row->id) . '" name="status"
                            ' . $fieldValue . '>
                        <label class="custom-control-label" for="status' . base64_encode($row->id) . '">' . $fieldLabel . '</label>
                    </div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('careers.edit', base64_encode($row->id)) . '" class="btn btn-primary btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" style="margin-right: 3px;"><i class="fas fa-edit"></i></a>';
                    $btn .= '<form action="' . route('careers.destroy', base64_encode($row->id))  . '" method="POST" style="display: inline-block;">' . csrf_field() . method_field('DELETE') . '<button type="button" class="btn btn-danger btn-sm delete-btn" data-delete-message-type="itemOnly" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash"></i></button></form>';
                    return $btn;
                })
                ->rawColumns(['sort_order', 'status', 'action'])
                ->toJson();
        }
        return view('admin::career.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobTypes = JobType::all();
        $states = State::all();
        $sort_order = Career::max('sort_order') + 1;
        return view('admin::career.create', compact('jobTypes', 'states', 'sort_order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareerRequest $request)
    {
        DB::beginTransaction();
        try {
            Career::create($request->all());

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Career created successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $career = Career::findOrFail(base64_decode($id));
        $jobTypes = JobType::all();
        $states = State::all();
        $cities = City::where('state_id', $career->state_id)->get();
        return view('admin::career.edit', compact('career', 'jobTypes', 'states', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareerRequest $request, $id)
    {
        DB::beginTransaction();

        try {
            $career = Career::findOrFail(base64_decode($id));
            $career->update($request->all());

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Career updated successfully']);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error($e);

            return response()->json(['success' => false, 'message' => 'Something went wrong']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $career = Career::findOrFail(base64_decode($id));
            $career->delete();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Career deleted successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
