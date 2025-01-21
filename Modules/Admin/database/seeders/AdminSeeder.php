<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@cms-template.com',
            'password' => Hash::make('3P>6a=yD!:k9')
        ]);
    }
}
