<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($detailId) {
        $categorys = Category::where('parent_id', 0)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        $categoriesLimit= Category::where('parent_id', 0)->take(3)->get();
        $product = Product::find($detailId);
        $category_details = \DB::table('products')->join('categories', 'category_id', '=', 'categories.id')->where('products.id',$detailId)->first();
        $tags_id = \DB::table('product_tags')->join('tags','tag_id', '=','tags.id')->where('product_tags.product_id',$detailId)->get();

        return view('product.productdetail.productdetail', compact('categorys','productsRecommend','categorysLimit','product','category_details','tags_id'));
    }
}
