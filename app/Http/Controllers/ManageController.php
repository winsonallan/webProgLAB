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
        return view('manage')->with([
            'products' => Product::all(),
        ]);
    }

    public function addView()
    {
        return view('add');
    }

    public function add(Request $request)
    {
        $fileName = $request['photo']->getClientOriginalName();
        $path = $request['photo']->move('images', $fileName);
        Product::create([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'detail' => $request->input('detail'),
            'price' => $request ['price'],
            'image' => "/images"."/".$fileName
        ]);

        return redirect('/manage/add');
    }

    public function update()
    {
        return view('update');
    }
}
