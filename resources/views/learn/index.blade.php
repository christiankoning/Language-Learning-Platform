@extends('layouts.app')

@section('content')
    <section class="w-full max-w-7xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold drop-shadow-md mb-8">Learn a Language</h2>

        @if ($languages->isEmpty())
            <p class="text-white/80">No languages available yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($languages as $language)
                    <div class="bg-white text-[#111827] p-6 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center gap-3 mb-4">
                                @if ($language->icon)
                                    <div class="bg-gray-100 p-2 rounded w-30 h-30 flex items-center justify-center">
                                        <img src="{{ $language->icon }}" alt="{{ $language->name }} icon" class="w-10 h-10 object-contain">
                                    </div>
                                @endif
                                <h3 class="text-xl font-semibold">{{ $language->name }}</h3>
                            </div>

                            <p class="text-sm text-gray-600 mb-4">
                                {{ $language->description ?? 'Get started with learning ' . $language->name . '!' }}
                            </p>
                        </div>

                        <a href="{{ route('learn.show', $language->slug) }}"
                           class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md text-sm font-medium shadow hover:brightness-110 transition text-center">
                            Start Learning
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
