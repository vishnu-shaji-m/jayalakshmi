<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Modules\Admin\Models\BannerAndMetaTag;

class BannerAndMetaTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing media collections
        BannerAndMetaTag::query()->each(function ($record) {
            $record->clearMediaCollection('banner');
            $record->clearMediaCollection('banner_mobile');
        });
        BannerAndMetaTag::truncate();

        $bannerAndMetaTags = [
            [
                'page' => 'home',
                'title' => 'Home',
                'has_banner' => false,
            ],
            [
                'page' => 'about',
                'title' => 'About',
                'has_banner' => true,
                'banner' => 'backend/images/banner.jpg',
                'banner_mobile' => 'backend/images/banner-mobile.jpg',
            ],
            [
                'page' => 'contact',
                'title' => 'Contact',
                'has_banner' => true,
                'banner' => 'backend/images/banner.jpg',
                'banner_mobile' => 'backend/images/banner-mobile.jpg',
            ],
        ];

        foreach ($bannerAndMetaTags as $data) {
            $bannerAndMetaTag = BannerAndMetaTag::create([
                'page' => $data['page'],
                'title' => $data['title'],
                'has_banner' => $data['has_banner'],
            ]);

            if ($data['has_banner']) {
                $this->copyMediaToModel($bannerAndMetaTag, $data['banner'], 'banner');
                $this->copyMediaToModel($bannerAndMetaTag, $data['banner_mobile'], 'banner_mobile');
            }
        }
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
