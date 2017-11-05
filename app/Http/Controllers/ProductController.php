<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\BillItem;
use App\Models\Notification;


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
                        ->selectRaw('*, sum(quantity) as sum')->limit(9)
                        ->get();
                    
         return view('product.popular', [
            'title' => 'Home Page',
            'billitems' => $BillItems
        ]);
    }

    public function viewFollow($id)
    {   
        $notification = Notification::findOrFail($id);
        $products = $notification->products;

        return view('product.follow', [
            'title' => 'subscriber ',
            'products' => $products,
        ]);
    }

    public function viewDetailProducts($productId)
    {
        $products = Product::findOrFail($productId);

        return view('product.detailProduct', [
             'title' => 'Products - $products',
             'product' => $products,
        ]);
    }
}
