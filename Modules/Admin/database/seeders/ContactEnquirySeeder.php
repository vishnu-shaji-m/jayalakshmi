<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Modules\Admin\Models\ContactEnquiry;

class ContactEnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactEnquiry::insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone_number' => '1234567890',
                'subject' => 'Subject Example 1',
                'message' => 'This is a sample message for John Doe.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone_number' => '0987654321',
                'subject' => 'Subject Example 2',
                'message' => 'This is a sample message for Jane Smith.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alex Johnson',
                'email' => 'alexjohnson@example.com',
                'phone_number' => '1122334455',
                'subject' => 'Subject Example 3',
                'message' => 'This is a sample message for Alex Johnson.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
