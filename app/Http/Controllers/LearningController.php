<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('learn.index', compact('languages'));
    }
}
