<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts =
        [
            [
                "userType_id" => "1",
                "name" => "Admin",
                "email" => "admin@barbatos.com",
                "password" => Hash::make('admin123'),
                "gender" => "Male",
                "DoB" => Carbon::create('2000', '01', '01'),
                "country" => "Indonesia"
            ],
        ];

        \DB::table('users') -> insert($posts);
    }
}
