<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopCart;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;

class HistoryController extends Controller
{
    //
    public function history()
    {
        $sc = [];
        $tr = [];
        $user = Auth::user();
        $i = 0;
        $j = 0;

        // $test = ShopCart::all();
        // print($test[0]->user_id);
        // echo('<br>');

        // print($user->id);

        foreach (ShopCart::all() as $carts)
        {
            // print($carts);
            if($user->id == $carts->user_id)
            {
                $sc[$i] = $carts;
                // print($sc[$i]);
                $i++;
            }
            $j++;
        }

        $i = 0;
        $j = 0;
        // echo('<br>');
        // print(Transaction::all());
        foreach(Transaction::all() as $transactions)
        {
            if($transactions->user_id == $user->id)
            {
                $tr[$i] = $transactions;
                // echo("<br>");
                // print($t[$i]);
                $i++;
            }
            $j++;
        }

        // print($tr[1]);

        $i = 0;
        $j = 0;
        $k = 0;

        $products = Product::all();
        $selectedProducts = [];

        // print($products);
        // echo('<br>');
        // print($t[0]);

        for ($i=0; $i<count($tr); $i++)
        {
            for ($j=0; $j<count($products); $j++)
            {
                if ($tr[$i]->product_id == $products[$j]->id)
                {
                    $selectedProducts[$k] = $products[$j];
                    $k ++;
                }
            }
        }

        $costsPP = [];
        $i = 0;
        $j = 0;
        $k = 0;
        $totalQTY = 0;
        $totalCost = 0;
        for($i=0; $i<count($tr); $i++)
        {
            for ($j=0; $j<count($products); $j++)
            {
                if ($tr[$i]->product_id == $products[$j]->id)
                {
                    $x = $products[$j]->price * $tr[$i]->quantity;
                    $costsPP[$k] = $x;
                    $k++;
                }
            }
        }
        // foreach ($t as $t)
        // {
        //     print ($t);
        //     echo("<br>");
        // }

        // foreach ($selectedProducts as $sP)
        // {
        //     print ($sP);
        //     echo("<br>");
        // }

        return view('history')->with([
            'orders'=> $sc,
            'transactions' => $tr,
            'products' => $selectedProducts,
            'costsPP' => $costsPP,
            'tCost' =>$totalCost,
            'tQTY' => $totalQTY
        ]);
    }
}
