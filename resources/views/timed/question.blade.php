@extends('layouts.app')

@section('content')
    <section class="min-h-[80vh] flex items-center justify-center px-6 text-white">
        <div class="w-full max-w-3xl">

            <!-- Timer Display -->
            <div class="mb-4 text-left">
                <h2 class="text-3xl font-bold mb-6 drop-shadow-md text-white">
                    ⏱ Time: <span id="timer">00:00:00.00</span>
                </h2>
            </div>

            <!-- Question Card -->
            <div class="bg-white p-8 rounded-lg shadow text-[#111827]">
                <h2 class="text-2xl font-semibold mb-6">Timed Mode</h2>

                <div class="text-4xl font-bold mb-8 text-center">
                    {{ $item->prompt }}
                </div>

                @if(session('feedback'))
                    <div class="mb-4 text-center">
                        @if(session('feedback') === 'correct')
                            <span class="text-green-600 font-medium">✅ Correct!</span>
                        @elseif(session('feedback') === 'incorrect')
                            <span class="text-red-600 font-medium">❌ Incorrect.</span>
                        @endif
                    </div>
                @endif

                <form method="POST" action="{{ route('timed.submit') }}" id="answer-form">
                    @csrf
                    <input type="text" name="answer" id="answer"
                           class="w-full p-3 border rounded mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="Type your answer..." autocomplete="off" autofocus>

                    <div class="flex justify-between gap-4">
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded hover:brightness-110 transition">
                            Submit
                        </button>

                        <button type="submit" formaction="{{ route('timed.skip') }}" formmethod="POST"
                                class="px-6 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
                            Skip
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('answer');
            const form = document.getElementById('answer-form');
            const timer = document.getElementById('timer');
            const serverStartTime = Date.parse("{{ $startTime }}");

            input.focus();

            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    form.submit();
                }
            });

            function formatTime(ms) {
                const hours = Math.floor(ms / 3600000);
                const minutes = Math.floor((ms % 3600000) / 60000);
                const seconds = Math.floor((ms % 60000) / 1000);
                const milliseconds = Math.floor((ms % 1000) / 10);

                return (
                    String(hours).padStart(2, '0') + ':' +
                    String(minutes).padStart(2, '0') + ':' +
                    String(seconds).padStart(2, '0') + '.' +
                    String(milliseconds).padStart(2, '0')
                );
            }

            // Start ticking immediately
            const updateTimer = () => {
                const elapsedMs = Date.now() - serverStartTime;
                timer.innerText = formatTime(elapsedMs);
            };

            updateTimer();
            setInterval(updateTimer, 100);
        });
    </script>
@endsection
