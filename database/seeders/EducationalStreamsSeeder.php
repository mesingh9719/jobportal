<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalStreamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educational_streams')->insert([
            [
                'streams_name' => 'Computer Science Engineering',
                'icon' => '',
                'status' => 1,
            ],
            [
                'streams_name' => 'Electronics and Communication Engineering',
                'icon' => '',
                'status' => 1,
            ],
            [
                'streams_name' => 'Mechanical Engineering',
                'icon' => '',
                'status' => 1,
            ],
            [
                'streams_name' => 'Electrical Engineering',
                'icon' => '',
                'status' => 1,
            ],
            [
                'streams_name' => 'Information Technology',
                'icon' => '',
                'status' => 1,
            ]
        ]);
    }
}
