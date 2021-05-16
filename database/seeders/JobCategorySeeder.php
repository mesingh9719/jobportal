<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_categories')->insert([
            [
                'category_title' => 'Information Technology',
                'category_icon' => '',
                'category_status' => 1
            ],
            [
                'category_title' => 'Marketing',
                'category_icon' => '',
                'category_status' => 1
            ],
            [
                'category_title' => 'Mechanical',
                'category_icon' => '',
                'category_status' => 1
            ],
            [
                'category_title' => 'Accounts',
                'category_icon' => '',
                'category_status' => 1
            ],
            [
                'category_title' => 'BPO',
                'category_icon' => '',
                'category_status' => 1
            ],
            [
                'category_title' => 'Driver',
                'category_icon' => '',
                'category_status' => 1
            ]
        ]);
    }
}
