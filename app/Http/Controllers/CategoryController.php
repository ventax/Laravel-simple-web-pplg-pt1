<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Attribute;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect('admin/categories')
            ->with('success', 'Category created successfully');
    }
}
