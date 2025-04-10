<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function start(Language $language, Category $category)
    {
        return view('categories.start', compact('language', 'category'));
    }
}
