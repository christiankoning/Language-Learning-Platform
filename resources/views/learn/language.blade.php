@extends('layouts.app')

@section('content')
    <section class="w-full max-w-5xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-6 drop-shadow-md">Getting Started with {{ $language->name }}</h2>
        <p class="text-white/80 mb-4">This will be the intro/overview for learning {{ $language->name }}. It could have links to topics like Hiragana, Katakana, Grammar, etc.</p>

        <p class="text-sm text-white/60 italic">Sidebar and subtopic pages coming soon...</p>
    </section>
@endsection
