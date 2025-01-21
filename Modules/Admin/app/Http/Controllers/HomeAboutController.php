<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\MediaUpload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\HomeAboutRequest;
use Modules\Admin\Models\HomeAbout;

class HomeAboutController extends Controller
{
    use MediaUpload;

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $homeAbout = HomeAbout::firstOrFail();
        return view('admin::home-about.edit', compact('homeAbout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeAboutRequest $request, $id)
    {
        DB::beginTransaction();

        try {
            $homeAbout = HomeAbout::findOrFail(base64_decode($id));
            $homeAbout->update($request->all());

            $this->uploadMedia($request, $homeAbout, 'image');

            DB::commit();

            $this->optimizeImage($homeAbout, 'image');

            return response()->json(['success' => true, 'message' => 'Home About updated successfully']);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error($e);

            return response()->json(['success' => false, 'message' => 'Something went wrong']);
        }
    }
}
