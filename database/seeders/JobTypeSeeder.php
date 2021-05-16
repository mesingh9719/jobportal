<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_types')->insert([
            [
                'job_type' => 'Full Time',
                'status' => 1
            ],
            [
                'job_type' => 'Part Time',
                'status' => 1
            ],
            [
                'job_type' => 'Temperory',
                'status' => 1
            ],
            [
                'job_type' => 'Permanent',
                'status' => 1
            ],
            [
                'job_type' => 'Freelance',
                'status' => 1
            ]
        ]);
    }
}
