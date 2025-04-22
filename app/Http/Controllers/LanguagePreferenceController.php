<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagePreferenceController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'preferred_language' => 'required|in:en,nl'
        ]);

        $user = auth()->user();
        $user->preferred_language = $request->preferred_language;
        $user->save();

        return redirect()->back();
    }
}
