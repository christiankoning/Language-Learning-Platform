<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Language Learning Platform</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-[#111827] bg-gradient-to-br from-blue-500 to-indigo-600 min-h-screen flex flex-col">

<!-- Header -->
<header class="w-full max-w-7xl mx-auto px-6 py-4 flex justify-between items-center gap-12">
    <h1 class="text-2xl text-white/95 drop-shadow-md font-bold tracking-tight">Language Learning Platform</h1>
    <nav class="flex gap-3 text-sm">
        @auth
            <a href="{{ url('/dashboard') }}"
               class="px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md font-medium shadow hover:brightness-110 transition">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
               class="px-4 py-2 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-md font-medium shadow hover:brightness-110 transition">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="px-4 py-2 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-md font-medium shadow hover:brightness-110 transition">
                    Register
                </a>
            @endif
        @endauth
    </nav>
</header>

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

<!-- Footer -->
<footer class="w-full py-6 text-center text-xs text-white/80 border-t border-white/20">
    © {{ date('Y') }} Language Learning Platform. Built for personal use.
</footer>

</body>
</html>
