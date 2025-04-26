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

    public function show(Language $language, $topic = 'getting-started', $subtopic = null)
    {
        $topics = config("learn.{$language->slug}.topics");

        $view = "learn.content.{$language->slug}.{$topic}" . ($subtopic ? ".{$subtopic}" : '.intro');

        if (!view()->exists($view)) {
            abort(404);
        }

        return view('learn.topic', [
            'language' => $language,
            'topics' => $topics,
            'topic' => $topic,
            'subtopic' => $subtopic ?? 'intro',
            'contentView' => $view,
        ]);
    }
}
