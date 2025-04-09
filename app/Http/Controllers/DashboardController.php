<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Placeholder — later this will come from DB relationships
        $startedLanguages = collect();

        return view('dashboard', compact('startedLanguages'));
    }
}
