<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Modules\Admin\Models\HomeAbout;

class HomeAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if ($record = HomeAbout::first()) {
            $record->clearMediaCollection('image');
        }
        HomeAbout::truncate();

        $homeAbout = HomeAbout::create([
            'title' => 'Lorem ipsum',
            'subtitle' => 'Lorem ipsum',
            'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.'
        ]);

        $this->copyMediaToModel($homeAbout, 'backend/images/home-about.jpg', 'image');
    }

    /**
     * Copy the media file to the specified collection if the file exists.
     */
    private function copyMediaToModel($model, string $filePath, string $collection): void
    {
        if (File::exists($fullPath = public_path($filePath))) {
            $model->copyMedia($fullPath)->toMediaCollection($collection);
        }
    }
}
