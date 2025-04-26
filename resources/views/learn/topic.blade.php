@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 py-12 text-white flex flex-col md:flex-row gap-8">
        {{-- Sidebar --}}
        <aside class="w-full md:w-64 bg-white/5 p-4 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Topics</h2>

            @foreach ($topics as $mainTopic)
                <div x-data="{ open: '{{ $topic }}' === '{{ $mainTopic['slug'] }}' }" class="mb-4">
                    {{-- Main Topic Button --}}
                    <button @click="open = !open" class="w-full flex items-center justify-between px-2 py-2 bg-white/10 text-left text-white hover:bg-white/20 rounded">
                        <span>{{ $mainTopic['name'] }}</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Subtopics --}}
                    <div x-show="open" class="mt-2 ml-2 space-y-2 text-sm">
                        @foreach ($mainTopic['subtopics'] as $sub)
                            <a href="{{ route('learn.subtopic', [$language->slug, $mainTopic['slug'], $sub['slug']]) }}"
                               class="block px-2 py-1 rounded hover:bg-white/10 transition {{ ($topic === $mainTopic['slug'] && $subtopic === $sub['slug']) ? 'bg-white/10 font-semibold' : '' }}">
                                {{ $sub['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 bg-white/5 p-6 rounded-lg">
            @include($contentView)
        </div>
    </section>
@endsection
