@extends('layouts.app')

@section('content')
    <div class="flex-1 flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Create an Account</h2>

            <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" type="text" name="name" value="{{ old('name') }}" required autofocus />
                    @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" type="email" name="email" value="{{ old('email') }}" required />
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

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500" type="password" name="password_confirmation" required />
                    @error('password_confirmation')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a class="text-sm text-indigo-600 hover:underline" href="{{ route('login') }}">
                        Already registered?
                    </a>

                    <button type="submit" class="ml-3 px-5 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md shadow hover:brightness-110 transition text-sm font-semibold">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
