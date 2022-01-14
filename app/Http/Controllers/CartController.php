<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index() {
        $categorysLimit = Category::where('parent_id', 0)->take(3)->get();
        return view('cart.cart', compact('categorysLimit'));
    }
}
