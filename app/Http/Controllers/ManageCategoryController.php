<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;

class ManageCategoryController extends Controller
{
    public function all()
    {
        $categories = ProductCategory::all();

        return view('admin.manager.category.view', [
            'categories' => $categories
        ]);
    }

    public function view($id)
    {
        $category = ProductCategory::findOrFail($id);
        $categories = ProductCategory::all();

        return view('admin.manager.category.view', [
            'category' => $category,
            'categories' => $categories
        ]);
    }
}