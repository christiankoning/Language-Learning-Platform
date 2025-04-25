@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold drop-shadow-md mb-8">Learn a Language</h2>

        @if ($languages->isEmpty())
            <p class="text-white/80">No languages available yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($languages as $language)
                    <a href="{{ route('learn.language', $language->slug) }}"
                       class="block bg-white text-[#111827] p-6 rounded-lg shadow hover:shadow-lg transition hover:brightness-105">
                        <h3 class="text-xl font-semibold mb-2">{{ $language->name }}</h3>
                        <p class="text-sm text-gray-600">Get started with learning {{ $language->name }}!</p>
                    </a>
                @endforeach
            </div>
        @endif
    </section>
@endsection
