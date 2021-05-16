<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_states')->insert([
            [
                'state_name' => 'Punjab',
                'state_status' => 1
            ],
            [
                'state_name' => 'Delhi',
                'state_status' => 1
            ],
            [
                'state_name' => 'Himachal Pardesh',
                'state_status' => 1
            ],
            [
                'state_name' => 'Utar Pardesh',
                'state_status' => 1
            ],
            [
                'state_name' => 'Maharastra',
                'state_status' => 1
            ]
        ]);
    }
}
