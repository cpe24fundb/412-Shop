<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ManageProductController extends Controller
{
    public function all()
    {
        $categories = ProductCategory::all();
        $products = Product::all();

        return view('admin.manager.product.view', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function view($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        $products = Product::all();

        return view('admin.manager.product.view', [
            'product' => $product,
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->ian = $request->input('ian');
        $product->name = $request->input('name');
        $product->productCategory()->associate($request->input('category'));
        $product->retail_price = $request->input('retail_price');
        $product->image = $request->input('image', '');
        $product->save();

        return redirect()->route('admin.manager.product');
    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->ian = $request->input('ian') ?? $product->ian;
        $product->name = $request->input('name') ?? $product->name;
        $product->productCategory()->associate($request->input('category'));
        $product->retail_price = $request->input('retail_price') ?? $product->retail_price;
        $product->image = $request->input('image', '') ?? $product->image;
        $product->save();

        return redirect()->route('admin.manager.product');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.manager.product');
    }
}