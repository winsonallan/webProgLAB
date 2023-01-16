<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShopCartSeeder extends Seeder
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
                "user_id" => "2",
                "date" => Carbon::create('2022', '02', '01'),
            ]
        ];

        \DB::table('shop_carts') -> insert($posts);
    }
}
