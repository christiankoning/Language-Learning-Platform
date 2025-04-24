@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold drop-shadow-md mb-4">{{ $category->name }}</h2>

        @if ($category->parent)
            <p class="text-white/80 mb-6 text-sm">Subcategory of: {{ $category->parent->name }}</p>
        @endif

        <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
            <div class="flex gap-2">
                <a href="{{ route('leaderboard.global', [$language->slug, $category->slug, 'recognition']) }}"
                   class="px-4 py-2 rounded-md {{ $direction === 'recognition' ? 'bg-white text-[#111827]' : 'bg-white/10 text-white hover:bg-white/20' }}">
                    Recognition
                </a>
                <a href="{{ route('leaderboard.global', [$language->slug, $category->slug, 'recall']) }}"
                   class="px-4 py-2 rounded-md {{ $direction === 'recall' ? 'bg-white text-[#111827]' : 'bg-white/10 text-white hover:bg-white/20' }}">
                    Recall
                </a>
            </div>

            <div class="flex gap-2">
                <a href="{{ route('leaderboard.personal', [$language->slug, $category->slug, $direction]) }}"
                   class="px-4 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('leaderboard.personal') ? 'bg-white text-[#111827]' : 'bg-white/10 text-white hover:bg-white/20' }}">
                    Personal
                </a>
                <a href="{{ route('leaderboard.global', [$language->slug, $category->slug, $direction]) }}"
                   class="px-4 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('leaderboard.global') ? 'bg-white text-[#111827]' : 'bg-white/10 text-white hover:bg-white/20' }}">
                    Global
                </a>
            </div>
        </div>

        @if ($userRank && $userRank > 20 && $userEntry)
            <div class="mb-6 p-4 bg-white/10 rounded text-white text-sm">
                Your Rank: <strong>#{{ $userRank }}</strong> —
                Accuracy: {{ round($userEntry->accuracy_ratio * 100) }}%,
                Time:
                {{ sprintf('%02d:%02d:%02d.%02d',
                    floor($userEntry->best_time / 3600000),
                    floor(($userEntry->best_time % 3600000) / 60000),
                    floor(($userEntry->best_time % 60000) / 1000),
                    floor(($userEntry->best_time % 1000) / 10)
                ) }}
            </div>
        @endif

        @if ($attempts->isEmpty())
            <p class="text-white/80">No scores yet for this category and direction.</p>
        @else
            <div class="mb-6">
                {{ $attempts->links('components.pagination_white') }}
            </div>

            <div class="overflow-x-auto">
                <table class="w-full table-auto border-separate border-spacing-y-2">
                    <thead class="text-left text-sm uppercase tracking-wide text-white/70">
                    <tr>
                        <th>Rank</th>
                        <th>Username</th>
                        <th>Accuracy %</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($attempts as $attempt)
                        <tr class="{{ $attempt->row_class }}">
                            <td class="px-4 py-2">#{{ $attempt->rank }}</td>
                            <td class="px-4 py-2">{{ $attempt->user->name }}</td>
                            <td class="px-4 py-2">{{ $attempt->accuracy_percent }}%</td>
                            <td class="px-4 py-2">{{ $attempt->formatted_time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $attempts->links('components.pagination_white') }}
            </div>
        @endif
    </section>
@endsection
