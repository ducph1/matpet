<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::latest()->get();
        $categorys = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        $categoriesLimit= Category::where('parent_id', 0)->take(3)->get();
        return view('home.home', compact('sliders', 'categorys', 'products', 'productsRecommend', 'categorysLimit'));
    }

    public function test()
    {
        return view('test');
    }
    public function search(Request $request)
    {
        $categorys = Category::where('parent_id', 0)->get();
        $categoriesLimit= Category::where('parent_id', 0)->take(3)->get();
        $keywords = $request->keywords_submit;
        $search_products = Product::where('name', 'like', '%' . $keywords . '%')->paginate(12);
        return view('product.search.search', compact('categorys', 'categorysLimit', 'search_products'));
    }
}
