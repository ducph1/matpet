<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        return view('frontend.home.home', compact('sliders', 'categories', 'products', 'productsRecommend', 'categoriesLimit'));
    }

    public function search(Request $request)
    {
        $categories = Category::where('parent_id', 0)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        $keywords = $request->keywords_submit;
        $search_products = Product::where('name', 'like', '%' . $keywords . '%')->paginate(12);
        return view('frontend.product.search.search', compact('categories', 'categoriesLimit', 'search_products'));
    }

    public function loginUser() {
        if (auth()->check()) {
            return redirect()->to('home');
        }
        return view('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            return redirect()->to('home');
        }
    }
}
