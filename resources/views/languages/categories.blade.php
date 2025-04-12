@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-8 drop-shadow-md">
            {{ $language->name }} — Categories
        </h2>

        @if ($categories->isEmpty())
            <div class="bg-white rounded-lg shadow p-6 text-center text-[#111827]">
                <h3 class="text-xl font-semibold mb-2">No categories available</h3>
                <p class="text-gray-600">We’re still building out this language. Check back soon!</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($categories as $category)
                    <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between h-full text-[#111827]">
                        <div>
                            <h3 class="text-xl font-semibold mb-2">{{ $category->name }}</h3>
                            <p class="text-sm text-gray-600 mb-4">{{ $category->description ?? 'Start practicing now.' }}</p>
                        </div>
                        <a href="{{ route('category.show', [$language->slug, $category->slug]) }}"
                           class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md text-sm font-medium shadow hover:brightness-110 transition">
                            Start
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
