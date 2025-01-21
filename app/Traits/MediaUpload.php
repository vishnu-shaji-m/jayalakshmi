<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

trait MediaUpload
{
    /**
     * Upload media files to a specified collection for a given model.
     *
     * This method handles both single and multiple file uploads, and clears the existing
     * media collection before adding new files. It can accept either a Request object 
     * containing files or an array of files directly.
     *
     * @param mixed $fileOrRequest The uploaded file(s) or a Request object containing the files.
     * @param Model $model The model instance to which the media will be associated.
     * @param string $collection The name of the media collection where files will be stored.
     *
     * @return void
     */
    public function uploadMedia($fileOrRequest, $model, $collection)
    {
        // Check if we are dealing with a Request object or a file array
        if ($fileOrRequest instanceof Request) {
            // If it's a request, check if the collection key exists in the request
            if ($fileOrRequest->has($collection)) {
                $files = $fileOrRequest->$collection;
            } else {
                $model->clearMediaCollection($collection); // Clear collection if no media in request
                return;
            }
        } else {
            // If it's not a request, it's directly passed as a file or array of files
            $files = $fileOrRequest;
        }

        // Handle single file or array of files
        if (is_array($files)) {
            $model->clearMediaCollection($collection); // Clear existing media collection
            foreach ($files as $file) {
                $model->addMedia($file)->toMediaCollection($collection);
            }
        } else {
            $model->clearMediaCollection($collection); // Clear existing media collection
            $model->addMedia($files)->toMediaCollection($collection);
        }
    }

    /**
     * Optimizes images in the specified media collection.
     *
     * This function checks if the media collection contains any images.
     * If images are found, it optimizes them using the ImageOptimizer library.
     * The function handles both single and multiple image files within the collection.
     *
     * @param Model $model The model instance that contains the media collection.
     * @param string $collection The name of the media collection containing the images to be optimized.
     */
    public function optimizeImage($model, $collection)
    {
        $media = $model->getFirstMedia($collection);
        if ($media == null || $media->type != 'image') {
            return;
        }
        if ($model->getMedia($collection)->count() == 1) {
            ImageOptimizer::optimize($model->getFirstMedia($collection)->getPath());
        } else if ($model->getMedia($collection)->count() > 1) {
            foreach ($model->getMedia($collection) as $media) {
                ImageOptimizer::optimize($media->getPath());
            }
        }
    }
}
