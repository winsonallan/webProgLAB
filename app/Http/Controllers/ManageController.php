<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class ManageController extends Controller
{
    //
    public function manage()
    {
        return view('manage');
    }

    public function add()
    {
        return view('add');
    }

    public function update()
    {
        return view('update');
    }
}
