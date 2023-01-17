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
        $cart=Transaction::where('id', $id)->get();
        $new_Trans = new ShopCart;
        $new_Trans->user_id = $id;
        $new_Trans->date = Carbon::now()->toDate();
        $new_Trans->save();
        foreach ($cart as $items) {
            $new_transaction_plus = new Transaction();
            $new_transaction_plus->transactionid = $new_transaction_plus->id;
            $new_transaction_plus->productid = $items->product->id;
            $new_transaction_plus->quantity = $items->quantity;
            $new_transaction_plus->save();
        }
        return view('cart');
        return redirect('/home');
    }
}
