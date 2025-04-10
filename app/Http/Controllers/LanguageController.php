<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;use function Symfony\Component\String\u;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('languages.index', compact('languages'));
    }

    public function categories(Language $language)
    {
        $language->load('categories');

        return view('languages.categories', compact('language'));
    }

}
