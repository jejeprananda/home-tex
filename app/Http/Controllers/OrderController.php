<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
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

    public function my_order($user_email){
        $orders= Order::where('user_email', $user_email)->get();
        $products = Product::get();

        return view('web.user.order', [
            'orders' => $orders,
            'products' => $products
        ]);
    }

    public function checkout($user_id){
        $carts= Cart::where('user_id', $user_id)->get();
        $products = Product::get();

        return view('web.order.checkout', [
            'carts' => $carts,
            'products' => $products
        ]);
    }

    public function store(Request $request){
        $products_id = trim($request->product_id, '"');

        $order = Order::create([
            'product_id' => $products_id,
            'user_email' => $request->input('user_email'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'final_price' => $request->input('final_price'),
            'status' => $request->input('status'),
            'courier' => $request->input('courier'),
            'order_resi' => '0',
        ]);



        return redirect('/')->with('success', 'Order item added successfully.');
    }

    public function cancel(Request $request, Order $order){
        $order->update($request->all());

        return redirect()->back()->with('success', 'Order berhasil dirubah');
    }

    public function detail($order_id){
        $orders= Order::where('id', $order_id)->get();
        return view('web.order.detail', [
            'orders' => $orders
        ]);
    }

    public function store_cart(Request $request){

            $cart = Cart::create([
                'user_id' => $request->input('user_id'),
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity'),
            ]);

            return redirect()->back()->with('success', 'Cart item added successfully.');
        }

        public function destroy_cart(Cart $cart){
            $cart->delete();

            return redirect()->back()->with('success', 'Cart item deleted successfully.');
        }
}
