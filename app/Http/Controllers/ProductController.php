<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class ProductController extends Controller
{
    //
    public function pDetails($id)
    {
        $products = Product::where('id', $id)
                    ->take(1)
                    ->get();

        return view('productDetail')->with([
            'products' => $products
        ]);
    }
}

