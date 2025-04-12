<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function start(Language $language, Category $category, $direction)
    {
        if (!in_array($direction, ['recognition', 'recall'])) {
            abort(404);
        }

        return view('categories.start', compact('language', 'category', 'direction'));
    }


    public function show(Language $language, Category $category)
    {
        // If it has children, show the subcategories
        if ($category->children()->exists()) {
            $subcategories = $category->children;

            return view('categories.subcategories', compact('language', 'category', 'subcategories'));
        }

        // If no children, show direction selection
        return view('categories.directions', compact('language', 'category'));
    }
}
