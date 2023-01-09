<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
