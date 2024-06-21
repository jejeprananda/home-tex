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

    public function category(Product $product) {
        $products = Product::get();

        return view('web/product/category', [
            'products' => $products
        ]);
    }

    public function show(Product $product) {
        return view('web/product/detail', [
            'product' => $product,
        ]);
    }

    public function listProductsAdmin(){
        return view('admin.product.list');
    }

    public function add(){
        return view('admin.product.add');
    }

    public function store(ProductsRequest $request){
        $request->validated();

            $productName = $request->input('name');
            $files = $request->file('img');

            foreach ($files as $index => $file) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $productName . '_' . $index . '.' . $extension;
                $filePath = 'images/products/' . $fileName;

                $file->move(public_path('images/products'), $fileName);
                $filePaths[] = $filePath;
            }

            Product::create([
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'price' => $request->input('price'),
                'discount' => $request->input('discount'),
                'stock' => $request->input('stock'),
                'img' => $filePaths, // Store file paths as a JSON string
                'description' => $request->input('description'),
            ]);

            return redirect('/products');
        }
}
