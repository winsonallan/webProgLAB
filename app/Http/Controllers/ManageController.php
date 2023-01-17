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

    public function updateView($id)
    {
        $product = Product::where('id', $id)
                ->take(1)
                ->get();

        $category = Category::all();

        return view('update')->with([
            'product' => $product,
            'category' => $category
        ]);
    }

    public function update($id, Request $request)
    {
        // print_r($request['name']);
        $product = Product::find($id);
        $product->name = $request['name'];
        $product->category_id = $request['category'];
        $product->detail = $request->input('detail');
        $product->price = $request['price'];

        if($request->hasFile('photo'))
        {
            // $file = $request->file('photo');
            // $extension = $file->getClientOriginalExtension();
            // $fileName = $file->getClientOriginalName();
            // $file->move('images/', $fileName.'.'.$extension);
            // print_r($fileName.'.'.$extension);
            // $product->image = $fileName.'.'.$extension;

            $fileName = $request['photo']->getClientOriginalName();
            // echo(");
            print_r($fileName);
            $path = $request['photo']->move('images/', $fileName);
            $product->image ="/"."images/".$fileName;
        }
        $product->save();

        // return redirect('/manage')->with([
        //     'products' => Product::all(),
        // ]);
    }
}
