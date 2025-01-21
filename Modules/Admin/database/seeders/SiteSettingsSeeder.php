<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\Models\SiteSettings;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSettings::truncate();

        SiteSettings::create([
            'address' => '456 Elm St, Springfield, USA',
            'email' => 'contact@yourbusiness.com',
            'phone_number' => '+1 (555) 123-4567',
            'whatsapp_number' => '+1 (555) 987-6543',
            'facebook_link' => 'https://www.facebook.com/yourbusiness',
            'instagram_link' => 'https://www.instagram.com/yourbusiness/',
            'x_link' => 'https://x.com/yourbusiness',
            'linkedin_link' => 'https://www.linkedin.com/in/yourbusiness/',
            'youtube_link' => 'https://www.youtube.com/yourbusiness',
            'map_link' => 'https://goo.gl/maps/yourbusinesslocation',
        ]);
    }
}
