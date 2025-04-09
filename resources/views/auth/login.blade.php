@extends('layouts.app')

@section('content')
    <div class="flex-1 flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Login to Your Account</h2>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" type="email" name="email" value="{{ old('email') }}" required autofocus />
                    @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" type="password" name="password" required />
                    @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" name="remember">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif

                    <button type="submit" class="ml-3 px-5 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md shadow hover:brightness-110 transition text-sm font-semibold">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
