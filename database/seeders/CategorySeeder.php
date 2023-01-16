<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                "name" => "Beauty"
            ],
            [
                "name" => "Electronics"
            ],
            [
                "name" => "Books"
            ],
        ];

        \DB::table('categories') -> insert($posts);
    }
}
