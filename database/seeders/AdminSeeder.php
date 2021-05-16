<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            [
                'name' => 'surinder singh',
                'email' => 'mesingh9719@gmail.com',
                'mobile' => '729365200',
                'username' => 'surindersingh',
                'password' => Hash::make('admin@321')
            ],
            [
                'name' => 'manjinder singh',
                'email' => 'manjinder@gmail.com',
                'mobile' => '729365200',
                'username' => 'manjinder',
                'password' => Hash::make('admin@321')
            ],
            [
                'name' => 'master admin',
                'email' => 'masteradmin@gmail.com',
                'mobile' => '729365200',
                'username' => 'admin',
                'password' => Hash::make('admin@321')
            ]
        ]);
    }
}
