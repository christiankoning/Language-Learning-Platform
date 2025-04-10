@extends('layouts.app')

@section('content')
    <section class="w-full max-w-4xl mx-auto px-6 py-12 text-white">
        <h2 class="text-3xl font-bold mb-6 drop-shadow-md">
            {{ $language->name }} — {{ $category->name }}
        </h2>

        <div class="bg-white rounded-lg shadow p-6 text-[#111827]">
            <h3 class="text-xl font-semibold mb-2">Coming Soon</h3>
            <p class="text-gray-600">
                You’ve selected the category <strong>{{ $category->name }}</strong> in <strong>{{ $language->name }}</strong>. We're still working on this feature — stay tuned!
            </p>
        </div>
    </section>
@endsection
