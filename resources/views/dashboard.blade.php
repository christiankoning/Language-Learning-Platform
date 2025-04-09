@extends('layouts.app')

@section('content')
    <!-- Welcome Section (with gradient background) -->
    <section class="w-full px-6 py-12 text-white max-w-screen-xl mx-auto">
        <h2 class="text-3xl font-bold drop-shadow-md">
            Welcome back, {{ Auth::user()->name }}!
        </h2>
    </section>

    <!-- Started Languages Section -->
    <section class="bg-white py-16">
        <div class="max-w-screen-xl mx-auto">
        @if ($startedLanguages->isEmpty())
            <!-- No languages -->
                <div class="rounded-lg shadow p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">No Languages Started Yet</h3>
                    <p class="text-gray-600 mb-4">Choose a language to begin your learning journey!</p>
                    <a href="{{ route('language.select') }}"
                       class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                        Select a Language
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach ($startedLanguages as $language)
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-semibold">
                                    {{ $language->name }}
                                </h3>
                                @if($language->icon)
                                    <img src="{{ $language->icon }}" alt="{{ $language->name }} icon" class="w-6 h-6">
                                @endif
                            </div>

                            <div class="mb-4">
                                <h4 class="text-sm font-medium text-gray-600 mb-2">Started Categories:</h4>
                                <ul class="space-y-1 text-sm">
                                    @foreach ($language->categories as $category)
                                        <li class="flex items-center justify-between">
                                            <span>{{ $category->name }}</span>
                                            <a href="{{ route('category.continue', [$language->slug, $category->slug]) }}"
                                               class="text-blue-600 hover:underline text-xs">
                                                Continue
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <a href="{{ route('language.overview', $language->slug) }}"
                               class="inline-block mt-4 px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md text-sm font-medium shadow hover:brightness-110 transition">
                                Go to {{ $language->name }}
                            </a>
                        </div>
                @endforeach

                <!-- Stats Placeholder -->
                    <div class="rounded-lg shadow p-6 flex items-center justify-center text-center">
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Stats Overview</h3>
                            <p class="text-sm text-gray-600">Coming soon — track your accuracy, speed, and progress over time.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
