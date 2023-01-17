<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $beautyProducts = Product::where('category_id', '1')->get();
        $electronicProducts = Product::where('category_id', '2')->get();
        $bookProducts = Product::where('category_id', '3')->get();

        return view('home')->with([
            'beautyProducts' => $beautyProducts,
            'electronicProducts' => $electronicProducts,
            'bookProducts' => $bookProducts,
        ]);
    }

    public function register()
    {
        return view('auth/register');
    }
}
