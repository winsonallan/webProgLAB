<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart()
    {
        return view('cart');
    }
}
