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
    public function cart()
    {
        $id=1;
        $my_cart=Transaction::where('id')->get();
        $new_Trans = new ShopCart;
        $new_Trans->user_id = $id;
        $new_Trans->date = Carbon::now()->toDate();
        $new_Trans->save();

        foreach ($my_cart as $items)
        {
            $new_Trans2 = new Transaction();
            if($my_cart->order_id == $new_Trans->id)
            {
                $my_cart->id = $new_Trans2->id;
            }
        }

        return view('cart');
        // return redirect('/home');
    }
}
