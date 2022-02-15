<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                'account_id' => '1',
                'role_id' => 1,
                'gender_id' => 2,
                'first_name' => 'Windah',
                'middle_name' => '',
                'last_name' => 'Basudara',
                'email' => 'windah@admin.com',
                'password' => bcrypt('bocilkematian123'),
                'display_picture_link' => 'images/profile/windah.jpg'
            ],
            [
                'account_id' => '2',
                'role_id' => 2,
                'gender_id' => 1,
                'first_name' => 'Ahmad',
                'middle_name' => 'Nadhirsyah',
                'last_name' => 'Jaman',
                'email' => 'anadhirsyah@yahoo.com',
                'password' => bcrypt('onadio15'),
                'display_picture_link' => 'images/profile/Rickroll.jpg'
            ]
        ]);
    }
}
