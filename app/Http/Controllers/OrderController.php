<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class OrderController extends Controller
{
    public function cart($user_id){
        $carts= Cart::where('user_id', $user_id)->get();
        $products = Product::get();

        return view('web.order.cart', [
            'carts' => $carts,
            'products' => $products
        ]);
    }

    public function checkout(){
        return view('web.order.checkout');
    }

    public function store_cart(Request $request){

            $Cart = Cart::create([
                'user_id' => $request->input('user_id'),
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity'),
            ]);

            return redirect()->back();
        }

        public function destroy_cart(Cart $cart){
            $cart->delete();

            return redirect()->back();
        }
}
