@extends('layouts.app')

@section('content')
    <section class="w-full max-w-2xl mx-auto px-6 py-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4 drop-shadow-md">You're done!</h2>
        <p class="mb-6 text-white/80">Great job completing this category. 🎉</p>

        <a href="{{ route('dashboard') }}"
           class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
            Return to Dashboard
        </a>
    </section>
@endsection
