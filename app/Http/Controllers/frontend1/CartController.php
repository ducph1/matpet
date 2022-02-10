<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $categoriesLimit= Category::where('parent_id', 0)->take(3)->get();
        $carts = session()->get('cart');
        return view('cart.cart', compact('categorysLimit','carts'));
    }
    public function addToCart($id) {
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }
        else{
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->feature_image_path,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ],200);
    }
    public function updateCart(Request $request){
        if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('cart.cart_component',compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent,'code' =>200],200);
        }
    }
    public function deleteCart(Request $request) {
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('cart.cart_component',compact('carts'))->render();
            return response()->json(['cart_component' => $cartComponent,'code' =>200],200);
        }
    }
}
