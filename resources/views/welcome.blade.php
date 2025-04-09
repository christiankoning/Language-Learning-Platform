@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="flex-1 flex items-center justify-center text-center px-6 py-16">
    <div class="max-w-3xl">
        <h2 class="text-5xl font-extrabold leading-tight mb-4 text-white/95 drop-shadow-md">
            Learn Languages by Typing,<br>Not Just Memorizing.
        </h2>
        <p class="text-lg text-white/80 drop-shadow-sm">
            Drill grammar, verbs, vocab and sentence structure across multiple languages.
            Designed for speed, clarity, and mastery through repetition.
        </p>
    </div>
</section>

<!-- Features Section -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">What You’ll Master</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 text-center border rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2">Core Grammar</h3>
                <p class="text-gray-600">Practice particles, articles, and other essential grammar with speed and accuracy.</p>
            </div>
            <div class="bg-white p-6 text-center border rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2">Verb Conjugation</h3>
                <p class="text-gray-600">Drill verb forms across languages — polite, casual, perfect, passive and more.</p>
            </div>
            <div class="bg-white p-6 text-center border rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-2">Sentence Building</h3>
                <p class="text-gray-600">Type complete sentences and reinforce logical, native-like structure.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto text-center px-6">
        <h2 class="text-3xl font-bold mb-4">Ready to Start?</h2>
        <p class="mb-6 text-lg text-gray-700">Sign up and begin mastering a language the right way — one keystroke at a time.</p>
        <a href="{{ route('register') }}"
           class="px-8 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-lg shadow-md hover:brightness-110 transition">
            Get Started Now
        </a>
    </div>
</section>
@endsection

