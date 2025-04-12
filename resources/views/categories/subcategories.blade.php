@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-8 drop-shadow-md">
            {{ $language->name }} — {{ $category->name }} Subcategories
        </h2>

        @if ($subcategories->isEmpty())
            <p class="text-white/80">No subcategories found.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($subcategories as $subcategory)
                    <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-[#111827]">
                        <h3 class="text-xl font-semibold mb-2">{{ $subcategory->name }}</h3>
                        <p class="text-sm text-gray-600 mb-4">{{ $subcategory->description ?? 'Start practicing now.' }}</p>
                        <a href="{{ route('category.show', [$language->slug, $subcategory->slug]) }}"
                           class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md text-sm font-medium shadow hover:brightness-110 transition">
                            Select
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
