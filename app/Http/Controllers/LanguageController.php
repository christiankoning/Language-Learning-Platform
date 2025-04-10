<?php

namespace App\Http\Controllers;

use App\Models\Language;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('languages.index', compact('languages'));
    }

    public function categories(Language $language)
    {
        $categories = $language->categories()->whereNull('parent_id')->get();

        return view('languages.categories', compact('language', 'categories'));
    }


}
