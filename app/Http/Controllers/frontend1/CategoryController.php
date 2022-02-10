<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($slug, $categoryId)
    {
        $categories = Category::where('parent_id', 0)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        $min_price = Product::min('price');
        $max_price = Product::max('price');

        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'tang_dan') {
                $products = Product::where('category_id', $categoryId)->orderBy('price', 'ASC')->paginate(12)->appends(request()->query());
            } else if ($sort_by == 'giam_dan') {
                $products = Product::where('category_id', $categoryId)->orderBy('price', 'DESC')->paginate(12)->appends(request()->query());
            } else if ($sort_by == 'a_z') {
                $products = Product::where('category_id', $categoryId)->orderBy('name', 'ASC')->paginate(12)->appends(request()->query());
            } else if ($sort_by == 'z_a') {
                $products = Product::where('category_id', $categoryId)->orderBy('name', 'DESC')->paginate(12)->appends(request()->query());
            }
        } else if (isset($_GET['start_price']) && $_GET['end_price']) {
            $min_price = $_GET['start_price'];
            $max_price = $_GET['end_price'];

            $products = Product::where('category_id', $categoryId)->whereBetween('price', [$min_price, $max_price])->orderBy('price', 'ASC')->paginate(12)->appends(request()->query());
        } else {
            $products = Product::where('category_id', $categoryId)->paginate(12);
        }
        return view('frontend.product.category.list', compact('categories', 'categoriesLimit', 'products', 'min_price', 'max_price'));
    }
}
