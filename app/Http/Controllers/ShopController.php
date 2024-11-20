<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = [
            "iPhone 14", "Samsung Galaxy S24", "Samsung A30", "iPhone 15 Pro"
        ];



        return view("shop", compact("products"));
    }
}
