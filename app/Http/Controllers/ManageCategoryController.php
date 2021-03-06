<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        $category = new ProductCategory;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->route('admin.manager.category');
    }

    public function edit(Request $request, $id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->name = $request->input('name') ?? $category->name;
        $category->description = $request->input('description') ?? $category->description;
        $category->save();

        return redirect()->route('admin.manager.category');
    }

    public function delete($id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.manager.category');
    }
}