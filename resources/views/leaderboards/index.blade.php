@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-8 drop-shadow-md">Your Leaderboards</h2>

        @if ($categories->isEmpty())
            <p class="text-white/80">You haven't started any categories yet in Timed Mode.</p>
            <a href="{{ route('dashboard') }}"
               class="inline-block mt-6 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                Go to Dashboard
            </a>
        @else
            <div class="space-y-10">
                @foreach ($categories->groupBy('language.name') as $languageName => $groupedCategories)
                    <div>
                        <h3 class="text-2xl font-semibold text-white mb-4 drop-shadow">{{ $languageName }}</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($groupedCategories as $category)
                                <div class="bg-white p-6 rounded-lg shadow-sm text-[#111827] flex flex-col justify-between h-full">
                                    <div>
                                        <div class="text-lg font-bold mb-2">{{ $category->name }}</div>

                                        <div class="text-sm text-gray-500 mb-4 min-h-[1.25rem]">
                                            @if ($category->parent)
                                                Subcategory of: {{ $category->parent->name }}
                                            @endif
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <a href="{{ route('leaderboard.personal', [$category->language->slug, $category->slug, 'recognition']) }}"
                                               class="block w-full px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-sm font-medium rounded-md shadow hover:brightness-110 text-center">
                                                Recognition Leaderboard
                                            </a>
                                            <a href="{{ route('leaderboard.personal', [$category->language->slug, $category->slug, 'recall']) }}"
                                               class="block w-full px-4 py-2 bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-sm font-medium rounded-md shadow hover:brightness-110 text-center">
                                                Recall Leaderboard
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
