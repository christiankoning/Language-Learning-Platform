@extends('layouts.app')

@section('content')
    <div class="flex-1 flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Email Verification</h2>

            <p class="text-gray-700 text-sm mb-4">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
                If you didn't receive the email, we’ll gladly send you another.
            </p>

            @if (session('status') == 'verification-link-sent')
                <p class="text-green-600 font-medium text-sm mb-4">
                    A new verification link has been sent to the email address you provided.
                </p>
            @endif

            <div class="mt-6 flex justify-between items-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-md shadow hover:brightness-110 transition">
                        Resend Verification Email
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-indigo-600 hover:underline">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
