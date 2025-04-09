@extends('layouts.app')

@section('content')
    <div class="flex-1 flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-6">Reset Your Password</h2>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email -->
                <div class="mb-4 text-left">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" />
                    @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4 text-left">
                    <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" />
                    @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6 text-left">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" />
                    @error('password_confirmation')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full px-5 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md shadow hover:brightness-110 transition text-sm font-semibold">
                    Reset Password
                </button>
            </form>
        </div>
    </div>
@endsection
