<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;
use Carbon\Carbon;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart($id)
    {
        $cart=Transaction::where('id', $user_id)->get();
        $new_Trans = new ShopCart;
        $new_Trans->user_id = $user_id;
        $new_Trans->date = Carbon::now()->toDate();
        $new_Trans->save();
        return view('cart');
    }
}
