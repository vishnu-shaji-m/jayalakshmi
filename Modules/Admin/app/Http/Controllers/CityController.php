<?php

namespace Modules\Admin\Http\Controllers;

use App\Helpers\BackendHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Models\City;
use Yajra\DataTables\Facades\DataTables;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = City::when(
                BackendHelpers::isOrderColumnZero($request),
                fn($query) => $query->orderBy('state_id')->orderBy('name')
            );
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->editColumn('state_id', function ($row) {
                    return $row->state ? $row->state->name : '';
                })
                ->toJson();
        }
        return view('admin::cities.index');
    }

    /**
     * Retrieve the cities for a given state.
     */
    public function getCities(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)
            ->when($request->search, fn($query) => $query->where('name', 'like', "%{$request->search}%"))
            ->get(['id', 'name']);

        return response()->json($cities->map(fn($city) => ['id' => $city->id, 'text' => $city->name]));
    }
}
