<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $parameters = $request->query('query', "");
        $products = Product::where('name', 'like', '%' . $parameters . '%')
            ->orWhere('detail', 'like', '%' . $parameters . '%')
            ->paginate(10);

        return view('search')->with([
            'products'=>$products,
            'search'=>true
        ]);
    }
}
