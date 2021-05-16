<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educations')->insert([
            [
                'education_level' => 'Secondary(10th Pass)',
                'edu_status' => 1
            ],
            [
                'education_level' => 'Higher Secondary(12th Pass)',
                'edu_status' => 1
            ],
            [
                'education_level' => 'Diploma',
                'edu_status' => 1
            ],
            [
                'education_level' => 'Bachelor',
                'edu_status' => 1
            ],
            [
                'education_level' => 'Master',
                'edu_status' => 1
            ],
            [
                'education_level' => 'Doctorate',
                'edu_status' => 1
            ]
        ]);
    }
}
