<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    //
    public function category($id)
    {
        $products = Product::with('categories')->where('category_id', $id)->paginate(10);
        $categories = Category::all();
        $selectedCategoryName = $categories[$id-1]->name;

        // $categories = Category::all();
        // $selectedCategoryName = $categories[$id-1]->name;

        return view('category')->with([
            'categoryName' => $selectedCategoryName,
            'products'=> $products,
            'categories' =>$categories
        ]);
    }
}
