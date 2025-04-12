@extends('layouts.app')

@section('content')
    <section class="w-full max-w-4xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-6 drop-shadow-md">
            {{ $language->name }} — {{ $category->name }}
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <a href="{{ route('category.start', [$language->slug, $category->slug, 'recognition']) }}"
               class="block bg-white rounded-lg shadow p-6 text-[#111827] hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Recognition</h3>
                <p class="text-sm text-gray-600">See Japanese, type the meaning.</p>
            </a>

            <a href="{{ route('category.start', [$language->slug, $category->slug, 'recall']) }}"
               class="block bg-white rounded-lg shadow p-6 text-[#111827] hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Recall</h3>
                <p class="text-sm text-gray-600">See meaning, type the Japanese (or romaji).</p>
            </a>
        </div>
    </section>
@endsection
