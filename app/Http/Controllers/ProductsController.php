<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('web/product/products', [
            'products' => $products
        ]);
    }

    public function listProductsAdmin(){
        //for view list product for admin
    }

    public function add(){
        return view('admin.product.add');
    }

    public function store(ProductsRequest $request){
        $request->validated();

        $productName = $request->input('name');
        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension();
        $fileName = $productName . '.' . $extension;
        $filePath = 'images/products/' . $fileName;

        $file->move(public_path('images/products'), $fileName);

        Product::create([
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'stock' => $request->input('stock'),
            'img' => $filePath,
            'description' => $request->input('description'),

        ]);

        return redirect('/products');
    }
}
