<!-- Header -->
<header class="w-full px-6 py-4">
    @auth
        <div class="flex items-center w-full max-w-7xl mx-auto justify-between">
            <!-- Title: Aligned to the left (not corner) -->
            <div class="flex-shrink-0 mr-12">
                <a href="{{ route('dashboard') }}" class="text-3xl text-white font-extrabold tracking-tight whitespace-nowrap">
                    Language Learning Platform
                </a>
            </div>

            <!-- All buttons grouped and centered-ish -->
            <nav class="flex flex-wrap gap-4 justify-center items-center">
                <a href="{{ route('dashboard') }}"
                   class="px-6 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-md font-medium transition text-base">
                    Dashboard
                </a>
                <a href="{{ route('languages.index') }}"
                   class="px-6 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-md font-medium transition text-base">
                    Languages
                </a>
                <a href="{{ route('leaderboard.index') }}"
                   class="px-6 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-md font-medium transition text-base">
                    Leaderboards
                </a>
                <a href="{{ route('dashboard') }}"
                   class="px-6 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-md font-medium transition text-base">
                    Profile
                </a>
                <form id="language-form" class="inline-block" method="POST" action="{{ route('language-preference.update') }}">
                    @csrf
                    @method('PATCH')
                    <select name="preferred_language" id="preferred_language"
                            class="px-4 py-2 rounded-md bg-white/10 text-white text-sm font-medium border border-white/20 hover:bg-white/20 transition"
                            onchange="document.getElementById('language-form').submit();">
                        <option value="en" {{ auth()->user()->preferred_language === 'en' ? 'selected' : '' }}>EN</option>
                        <option value="nl" {{ auth()->user()->preferred_language === 'nl' ? 'selected' : '' }}>NL</option>
                    </select>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="px-6 py-2.5 bg-gradient-to-r from-red-500 to-pink-500 text-white rounded-md font-medium shadow hover:brightness-110 transition text-base">
                        Log out
                    </button>
                </form>
            </nav>
        </div>

    @else
        <div class="flex items-center justify-between w-full max-w-7xl mx-auto">
            <!-- Title -->
            <a href="{{ url('/') }}" class="text-3xl text-white font-extrabold tracking-tight whitespace-nowrap">
                Language Learning Platform
            </a>

            <!-- Login/Register -->
            <nav class="flex gap-4 text-sm">
                <a href="{{ route('login') }}"
                   class="px-6 py-2.5 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-md font-medium shadow hover:brightness-110 transition text-base">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-6 py-2.5 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-md font-medium shadow hover:brightness-110 transition text-base">
                        Register
                    </a>
                @endif
            </nav>
        </div>
    @endauth
</header>
