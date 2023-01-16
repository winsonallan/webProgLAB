<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =
        [
            [
                "name" => "DanDan Brush",
                "category_id" => "1",
                "detail" => "lorem ipsum",
                "price" => "5000",
                "image" => "/sampleImage.jpg",
                // "quantity" => "100"
            ],
            [
                "name" => "Samsung Charger",
                "category_id" => "2",
                "detail" => "lorem ipsum",
                "price" => "105000",
                "image" => "/sampleImage.jpg",
                // "quantity" => "100"
            ],
            [
                "name" => "Heri Poter",
                "category_id" => "3",
                "detail" => "lorem ipsum",
                "price" => "51000",
                "image" => "/sampleImage.jpg",
                // "quantity" => "100"
            ],
        ];
        \DB::table('products') -> insert($posts);
    }
}
