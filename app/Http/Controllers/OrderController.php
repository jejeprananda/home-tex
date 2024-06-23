<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart(){
        return view('web.order.cart');
    }

    public function checkout(){
        return view('web.order.checkout');
    }
}
