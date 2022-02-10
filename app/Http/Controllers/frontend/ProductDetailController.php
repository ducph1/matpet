<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function index($detailId)
    {
        $categories = Category::where('parent_id', 0)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        $product = Product::find($detailId);
        $category_details = DB::table('products')->join('categories', 'category_id', '=', 'categories.id')->where('products.id', $detailId)->first();
        $tags_id = DB::table('product_tags')->join('tags', 'tag_id', '=', 'tags.id')->where('product_tags.product_id', $detailId)->get();

        return view('frontend.product.productdetail.productdetail', compact('categories', 'productsRecommend', 'categoriesLimit', 'product', 'category_details', 'tags_id'));
    }
}
