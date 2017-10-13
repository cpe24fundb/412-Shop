<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        
    }

    public function list()
    {
        $categories = Category::all();

        return view('admin.category.crud', [
            'categories' => $categories
        ]);
    }

    public function editForm($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.update_form', [
            'category' => $category
        ]);
    }

    public function create(Request $request)
    {
        $category = new Category;

        $category->name = $request->input('name');
        $category->description = $request->input('description', 'no description');

        $category->save();

        return redirect('admin/category');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description', ' ');

        $category->save();

        return redirect('admin/category');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('admin/category');
    }

}
