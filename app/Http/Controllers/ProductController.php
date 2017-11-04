<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\BillItem;

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
        $category = ProductCategory::findOrFail($categoryId);
        $products = $category->products;

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

    public function viewPopularProduct()
    {   
        $BillItems = BillItem::with('product')->orderBy('product_id', 'desc')
                        ->groupBy('product_id')
                        ->selectRaw('*, sum(quality) as sum')->limit(4)
                        ->get();
                    
         return view('product.popular', [
            'title' => 'Home Page',
            'billitems' => $BillItems
        ]);
    }
}
