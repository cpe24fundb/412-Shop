<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

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
    
    public function viewProductsByCategory($categoryId)
    {
        // DB::table('products')->leftJoin('product_categories', 'products.product_category_id', '=', 'product_categories.id')->get();
        $category = ProductCategory::findOrFail($categoryId);
        $products = $category->product;

        return view('product.byCategory', [
            'title' => 'Products By Categories - $category',
            'products' => $products,
            'category' => $category
        ]);
    }

    public function viewAllCategories()
    {
        $categories = ProductCategory::all();

        return view('product.allCategory', [
            'title' => 'All Categories',
            'categories' => $categories
        ]);
    }
}
