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
        <div class="max-w-screen-xl mx-auto space-y-12">
            @if ($startedLanguages->isEmpty())
                <div class="rounded-lg shadow p-6 text-center">
                    <h3 class="text-xl font-semibold mb-2">No Languages Started Yet</h3>
                    <p class="text-gray-600 mb-4">Choose a language to begin your learning journey!</p>
                    <a href="{{ route('languages.index') }}"
                       class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                        Select a Language
                    </a>
                </div>
            @else
                @foreach ($startedLanguages as $language)
                    <div>
                        <!-- Language Title & Icon -->
                        <div class="flex items-center gap-x-4 mb-6">
                            @if($language->icon)
                                <div class="bg-gray-100 p-3 rounded flex items-center justify-center">
                                    <img src="{{ $language->icon }}" class="w-12 h-12 object-contain" alt="Icon">
                                </div>
                            @endif
                            <h3 class="text-3xl font-extrabold text-gray-800">{{ $language->name }}</h3>
                        </div>

                        <!-- Category Cards Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($language->categories as $category)
                                <div class="border p-5 rounded-lg shadow-sm bg-white flex flex-col justify-between h-full">
                                    <div>
                                        <span class="font-semibold text-lg text-gray-900 block mb-3">{{ $category->name }}</span>

                                        <div>
                                            <div class="font-medium text-gray-700 mb-2">Stats</div>

                                            @if($category->progress->isEmpty())
                                                <div class="text-sm text-gray-500 italic">Start Timed Mode to see your stats.</div>
                                            @else
                                                @foreach ($category->progress as $direction => $progress)
                                                    <div class="bg-gray-50 rounded p-3 border mb-2">
                                                        <div class="text-xs uppercase font-semibold text-gray-700">{{ ucfirst($direction) }}</div>
                                                        <div class="text-sm">Best Accuracy: {{ $progress->best_accuracy }}%</div>
                                                        <div class="text-sm">Best Time: {{ number_format($progress->best_time_ms / 1000, 2) }} sec</div>
                                                        <div class="text-sm">Last Practiced: {{ optional($progress->last_practiced_at)->diffForHumans() ?? 'N/A' }}</div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <a href="{{ route('category.show', [$language->slug, $category->slug]) }}"
                                           class="inline-block w-full px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 text-center transition">
                                            Continue
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
