<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Attribute;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        Category::create(attribute: [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
