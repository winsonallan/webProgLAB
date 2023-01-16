<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class CategoryController extends Controller
{
    //
    public function category($id)
    {
        $pIDs = [];
        $cIDs = [];
        $i = 0;

        foreach(Product::all() as $products)
        {
            $pIDs[$i] = $products->id;
            $cIDs[$i] = $products->category_id;
            $i++;
        }

        $selectedpIDs = [];
        $j = 0;
        for($i = 0; $i<count($cIDs); $i++)
        {
            if ($cIDs[$i] == $id)
            {
                $selectedpIDs[$j] = $pIDs[$i];
                $j++;
            }
        }

        $products = Product::all();
        $selectedProducts = [];
        $k = 0;

        for($i=0; $i<count($products); $i++)
        {
            for ($j=0; $j<count($selectedpIDs); $j++)
            {
                if ($selectedpIDs[$j] == $products[$i]->id)
                {
                    $selectedProducts[$k] = $products[$i];
                    $k++;
                }
            }
        }

        $categories = Category::all();
        $selectedCategoryName = $categories[$id-1]->name;

        return view('category')->with([
            'categoryName' => $selectedCategoryName,
            'products'=> $selectedProducts,
            'categories' =>$categories
        ]);
    }
}
