<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;

class ManageCategoryController extends Controller
{
    public function view()
    {
        $categories = ProductCategory::all();

        return view('admin.manager.category.view', [
            'categories' => $categories
        ]);
    }
}