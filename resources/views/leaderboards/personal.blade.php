@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold drop-shadow-md mb-4">{{ $category->name }}</h2>

        @if ($category->parent)
            <p class="text-white/80 mb-6 text-sm">Subcategory of: {{ $category->parent->name }}</p>
        @endif

    <!-- Toggles -->
        <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
            <div class="flex gap-2">
                <a href="{{ route('leaderboard.personal', [$language->slug, $category->slug, 'recognition']) }}"
                   class="px-4 py-2 rounded-md {{ $direction === 'recognition' ? 'bg-white text-[#111827]' : 'bg-white/10 text-white hover:bg-white/20' }}">
                    Recognition
                </a>
                <a href="{{ route('leaderboard.personal', [$language->slug, $category->slug, 'recall']) }}"
                   class="px-4 py-2 rounded-md {{ $direction === 'recall' ? 'bg-white text-[#111827]' : 'bg-white/10 text-white hover:bg-white/20' }}">
                    Recall
                </a>
            </div>

            <div class="flex gap-2">
                <span class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Personal
                </span>
                <a href="#" class="bg-white/10 hover:bg-white/20 text-white px-4 py-2 rounded-md text-sm font-medium transition">
                    Global
                </a>
            </div>
        </div>

        @if ($attempts->isEmpty())
            <p class="text-white/80">You have no personal attempts for this category and direction yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-separate border-spacing-y-2">
                    <thead class="text-left text-sm uppercase tracking-wide text-white/70">
                    <tr>
                        <th>Rank</th>
                        <th>Accuracy %</th>
                        <th>Time</th>
                        <th>Attempt #</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($attempts as $attempt)
                        <tr class="{{ $attempt->row_class }} rounded-md">
                            <td class="px-4 py-2 font-semibold">{{ $attempt->rank }}</td>
                            <td class="px-4 py-2">{{ $attempt->accuracy_percent }}%</td>
                            <td class="px-4 py-2">{{ $attempt->formatted_time }}</td>
                            <td class="px-4 py-2">{{ $attempt->attempt_number ?? '-' }}</td>
                            <td class="px-4 py-2">{{ $attempt->formatted_date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $attempts->links() }}
            </div>
        @endif
    </section>
@endsection
