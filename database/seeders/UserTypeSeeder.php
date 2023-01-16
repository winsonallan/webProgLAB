<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTypeSeeder extends Seeder
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
                "name" => "Admin",
            ],
            [
                "name" => "User",
            ]
        ];

        \DB::table('user_types') -> insert($posts);
    }
}
