@extends('layouts.app')

@section('content')
    <section class="w-full max-w-4xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-6 drop-shadow-md">
            {{ $language->name }} — {{ $category->name }} ({{ ucfirst($direction) }})
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <a href="{{ route('practice.start', [$language->slug, $category->slug, $direction]) }}"
               class="block bg-white rounded-lg shadow p-6 text-[#111827] hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Practice Mode</h3>
                <p class="text-sm text-gray-600">Answer at your own pace. Great for learning and repetition.</p>
            </a>

            <a href="{{ route('timed.start', [$language->slug, $category->slug, $direction]) }}"
               class="block bg-white rounded-lg shadow p-6 text-[#111827] hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Timed Mode</h3>
                <p class="text-sm text-gray-600">Answer quickly and accurately. Great for testing your knowledge under pressure.</p>
            </a>
        </div>
    </section>
@endsection
