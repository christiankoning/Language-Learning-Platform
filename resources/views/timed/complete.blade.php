@extends('layouts.app')

@section('content')
    <section class="w-full max-w-3xl mx-auto px-6 py-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4 drop-shadow-md">You're done!</h2>
        <p class="mb-6 text-white/80">Here’s how you did during this timed session:</p>

        <div class="bg-white rounded-lg shadow p-6 text-[#111827] text-left">
            <p class="text-lg mb-2">✅ Correct: <strong>{{ $correct }}</strong></p>
            <p class="text-lg mb-2">❌ Missed: <strong>{{ $missed }}</strong></p>

            <p class="text-lg mb-2">
                📊 Accuracy:
                <strong>{{ $accuracy }}%</strong>
                @if (!is_null($previousAccuracy))
                    <span class="text-sm text-gray-500 ml-2">(Previous: {{ $previousAccuracy }}%)</span>
                @endif
            </p>

            <p class="text-lg">
                ⏱️ Time:
                <strong>{{ $formattedTime }}</strong>
                @if (!is_null($previousFormattedTime))
                    <span class="text-sm text-gray-500 ml-2">(Previous: {{ $previousFormattedTime }})</span>
                @endif
            </p>

            @if ($newBestAccuracy && $newBestTime)
                <div class="mt-6 p-4 bg-green-100 border border-green-300 text-green-800 rounded font-semibold text-center">
                    🎉 New Best Accuracy & Fastest Time!
                </div>
            @elseif ($newBestAccuracy)
                <div class="mt-6 p-4 bg-blue-100 border border-blue-300 text-blue-800 rounded font-semibold text-center">
                    ✅ New Best Accuracy!
                </div>
            @elseif ($newBestTime)
                <div class="mt-6 p-4 bg-yellow-100 border border-yellow-300 text-yellow-800 rounded font-semibold text-center">
                    ⏱️ New Fastest Time!
                </div>
            @endif
            @if ($newBestAccuracy || $newBestTime)
                <a href="{{ route('leaderboard.personal', [$language->slug, $category->slug, $direction]) }}"
                   class="mt-6 inline-block px-6 py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-medium rounded-md shadow hover:brightness-110 transition animate-pulse">
                    🌟 You ranked higher! Check Leaderboard
                </a>
            @else
                <a href="{{ route('leaderboard.personal', [$language->slug, $category->slug, $direction]) }}"
                   class="mt-6 inline-block px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                    🏆 View Leaderboard for This Category
                </a>
            @endif
        </div>

        <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('timed.start', [$language->slug, $category->slug, $direction]) }}"
               class="px-6 py-3 bg-green-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                🔁 Retry This Category
            </a>

            <a href="{{ route('languages.categories', $language->slug) }}"
               class="px-6 py-3 bg-gray-100 text-gray-800 font-medium rounded-md shadow hover:bg-gray-200 transition">
                🔙 Back to Categories
            </a>

            <a href="{{ route('dashboard') }}"
               class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                🏠 Return to Dashboard
            </a>
        </div>
    </section>
@endsection
