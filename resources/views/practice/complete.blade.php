@extends('layouts.app')

@section('content')
    <section class="w-full max-w-3xl mx-auto px-6 py-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4 drop-shadow-md">You're done!</h2>
        <p class="mb-6 text-white/80">Here’s how you did during this practice session:</p>

        <div class="bg-white rounded-lg shadow p-6 text-[#111827] text-left">
            <p class="text-lg mb-2">✅ Correct: <strong>{{ $correct }}</strong></p>
            <p class="text-lg mb-2">❌ Missed: <strong>{{ $missed }}</strong></p>
            <p class="text-lg">📊 Accuracy: <strong>{{ $accuracy }}%</strong></p>
        </div>

        @if (!empty($incorrectCounts))
            <div class="mt-6 bg-white rounded-lg shadow p-6 text-[#111827] text-left">
                <h3 class="text-xl font-semibold mb-4">Incorrect Items</h3>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach ($incorrectCounts as $entry)
                        <li class="bg-red-50 p-4 rounded border border-red-200">
                            <div><strong>{{ $entry['item']->prompt }}</strong></div>
                            <div class="text-sm text-red-700">
                                Incorrect <strong>{{ $entry['count'] }}</strong> time{{ $entry['count'] > 1 ? 's' : '' }}
                            </div>
                            <div class="text-sm mt-1 text-gray-600">
                                → Correct answer: <strong>{{ $entry['correct_display'] }}</strong>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(count($skippedItems))
            <div class="mt-6 bg-white rounded-lg shadow p-6 text-[#111827] text-left">
                <h3 class="text-xl font-semibold mb-4">Skipped Items</h3>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($skippedItems as $item)
                        <li class="bg-yellow-50 p-4 rounded border border-yellow-200">
                            <div><strong>{{ $item->prompt }}</strong></div>
                            <div class="text-sm mt-1 text-gray-600">
                                → Correct answer: <strong>{{ $item->correct_display }}</strong>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('practice.start', [$languageSlug, $categorySlug, $direction]) }}"
               class="px-6 py-3 bg-green-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                🔁 Retry This Category
            </a>

            <a href="{{ route('languages.categories', $languageSlug) }}"
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
