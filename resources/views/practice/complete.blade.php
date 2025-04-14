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
                <ul class="list-disc list-inside space-y-2">
                    @foreach ($incorrectCounts as $entry)
                        <li>
                            <strong>{{ $entry['item']->prompt }}</strong> — Incorrect <strong>{{ $entry['count'] }}</strong> time{{ $entry['count'] > 1 ? 's' : '' }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(count($skippedItems))
            <div class="mt-6 bg-white rounded-lg shadow p-6 text-[#111827] text-left">
                <h3 class="text-xl font-semibold mb-4">Skipped Items</h3>
                <ul class="list-disc list-inside space-y-2">
                    @foreach($skippedItems as $item)
                        <li>
                            <strong>{{ $item->prompt }}</strong>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-8">
            <a href="{{ route('dashboard') }}"
               class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium rounded-md shadow hover:brightness-110 transition">
                Return to Dashboard
            </a>
        </div>
    </section>
@endsection
