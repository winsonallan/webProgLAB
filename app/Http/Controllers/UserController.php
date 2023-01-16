<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class UserController extends Controller
{
    //
    public function profile()
    {
        return view('profile');
    }

}
