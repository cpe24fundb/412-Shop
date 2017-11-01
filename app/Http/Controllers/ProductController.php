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

    public function viewProductsByCategory($category)
    {
        $products = DB::table('products')->leftJoin('product_categories', 'products.product_category_id', '=', 'product_categories.id')->get();

        return view('product.byCategory', [
            'title' => 'Products By Categories - $category',
            'products' => $products,
            'category' => $category
        ]);
    }
}
