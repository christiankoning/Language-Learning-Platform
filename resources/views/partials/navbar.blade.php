<!-- Header -->
<header class="w-full max-w-7xl mx-auto px-6 py-4 flex justify-between items-center gap-12">
    <h1 class="text-2xl text-white/95 drop-shadow-md font-bold tracking-tight">Language Learning Platform</h1>
    <nav class="flex gap-3 text-sm">
        @auth
            <a href="{{ url('/dashboard') }}"
               class="px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md font-medium shadow hover:brightness-110 transition">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
               class="px-4 py-2 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-md font-medium shadow hover:brightness-110 transition">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="px-4 py-2 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-md font-medium shadow hover:brightness-110 transition">
                    Register
                </a>
            @endif
        @endauth
    </nav>
</header>
