<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_locations')->insert([
            [
                'state_id' => 1,
                'city_name' => 'Bathinda',
                'location_status' => 1
            ],
            [
                'state_id' => 1,
                'city_name' => 'Mohali',
                'location_status' => 1
            ],
            [
                'state_id' => 1,
                'city_name' => 'Barnala',
                'location_status' => 1
            ],
            [
                'state_id' => 1,
                'city_name' => 'Patiala',
                'location_status' => 1
            ]
        ]);
    }
}
