<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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
                "order_id" => "1",
                "product_id" => "1",
                "quantity" => "1"
            ],
            [
                "user_id" => "2",
                "order_id" => "1",
                "product_id" => "2",
                "quantity" => "2"
            ],
            [
                "user_id" => "2",
                "order_id" => "1",
                "product_id" => "3",
                "quantity" => "3"
            ],
        ];
        \DB::table('transactions') -> insert($posts);
    }
}
