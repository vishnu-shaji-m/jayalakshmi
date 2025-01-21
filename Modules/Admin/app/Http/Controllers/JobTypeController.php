<?php

namespace Modules\Admin\Http\Controllers;

use App\Helpers\BackendHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Models\JobType;
use Yajra\DataTables\Facades\DataTables;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JobType::when(
                BackendHelpers::isOrderColumnZero($request),
                fn($query) => $query->orderBy('id')
            );
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->toJson();
        }
        return view('admin::job-type.index');
    }
}
