<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ProductController extends Controller
{
    public function viewAllProducts()
    {
        return view('product.all_product', [
            'title' => 'All Products',
        ]);
    }
}
