<?php

namespace Modules\Admin\Http\Controllers;

use App\Helpers\BackendHelpers;
use App\Http\Controllers\Controller;
use App\Traits\MediaUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\BlogRequest;
use Modules\Admin\Models\Blog;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    use MediaUpload;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::when(
                BackendHelpers::isOrderColumnZero($request),
                fn($query) => $query->orderByDesc('id')
            );
            return DataTables::eloquent($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    return '<img src="' . $row->image_value . '" alt="' . $row->title . '" class="table-thumbnail">';
                })
                ->editColumn('published_on', function ($row) {
                    return $row->published_on_value;
                })
                ->editColumn('status', function ($row) {
                    $fieldValue = $row->status ? 'checked' : '';
                    $fieldLabel = $row->status ? 'Published' : 'Draft';
                    return '<div class="form-check form-switch">
                        <input type="checkbox" id="status' . base64_encode($row->id) . '" class="form-check-input toggle-switch" data-name="Status" data-labels="Published;Draft" data-column="status" data-model="Blog"
                            value="' . $row->status . '"
                            data-id="' . base64_encode($row->id) . '" name="status"
                            ' . $fieldValue . '>
                        <label class="custom-control-label" for="status' . base64_encode($row->id) . '">' . $fieldLabel . '</label>
                    </div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('blogs.edit', base64_encode($row->id)) . '" class="btn btn-primary btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" style="margin-right: 3px;"><i class="fas fa-edit"></i></a>';
                    $btn .= '<a href="' . route('blogs.show', base64_encode($row->id)) . '" class="btn btn-primary btn-sm mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show" style="margin-right: 3px;"><i class="fas fa-eye"></i></a>';
                    $btn .= '<form action="' . route('blogs.destroy', base64_encode($row->id))  . '" method="POST" style="display: inline-block;">' . csrf_field() . method_field('DELETE') . '<button type="button" class="btn btn-danger btn-sm delete-btn" data-delete-message-type="itemOnly" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash"></i></button></form>';
                    return $btn;
                })
                ->rawColumns(['image', 'status', 'action'])
                ->toJson();
        }
        return view('admin::blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        DB::beginTransaction();
        try {
            $blog = Blog::create($request->all());

            $this->uploadMedia($request, $blog, 'image');
            $this->uploadMedia($request, $blog, 'banner');

            DB::commit();

            $this->optimizeImage($blog, 'image');
            $this->optimizeImage($blog, 'banner');

            return response()->json(['success' => true, 'message' => 'Blog created successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::findOrFail(base64_decode($id));
        return view('admin::blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail(base64_decode($id));
        return view('admin::blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, $id)
    {
        DB::beginTransaction();

        try {
            $blog = Blog::findOrFail(base64_decode($id));
            $blog->update($request->all());

            $this->uploadMedia($request, $blog, 'image');
            $this->uploadMedia($request, $blog, 'banner');

            DB::commit();

            $this->optimizeImage($blog, 'image');
            $this->optimizeImage($blog, 'banner');

            return response()->json(['success' => true, 'message' => 'Blog updated successfully']);
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
            $blog = Blog::findOrFail(base64_decode($id));
            $blog->delete();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Blog deleted successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
