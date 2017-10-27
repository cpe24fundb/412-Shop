<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function viewAllProducts()
    {
        $products = Product::all();

        return view('product.all', [
            'title' => 'All Products',
            'products' => $products
        ]);
    }
}
