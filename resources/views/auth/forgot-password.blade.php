@extends('layouts.app')

@section('content')
    <div class="flex-1 flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Forgot Password?</h2>

            <p class="text-gray-700 text-sm mb-6">
                No problem. Enter your email and we’ll send you a link to reset your password.
            </p>

            @if (session('status'))
                <p class="text-green-600 text-sm mb-4">{{ session('status') }}</p>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" />
                    @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="px-5 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md shadow hover:brightness-110 transition text-sm font-semibold">
                    Send Reset Link
                </button>
            </form>
        </div>
    </div>
@endsection
