@if ($paginator->hasPages())
    <nav role="navigation" class="flex justify-center mt-6">
        <ul class="inline-flex items-center gap-1 text-sm">

            {{-- Prev --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="px-4 py-2 bg-white/20 text-white/60 border border-white/30 rounded-md cursor-not-allowed">
                        Prev
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="px-4 py-2 bg-white text-[#111827] border border-white rounded-md hover:bg-white/90 transition">
                        Prev
                    </a>
                </li>
            @endif

            {{-- Show max 3 pages --}}
            @php
                $current = $paginator->currentPage();
                $last = $paginator->lastPage();
                $perPage = $paginator->perPage();
                $total = $paginator->total();

                $start = max(1, $current - 1);
                $end = min($last, $start + 2);

                if ($end - $start < 2) {
                    $start = max(1, $end - 2);
                }
            @endphp

            @for ($page = $start; $page <= $end; $page++)
                @php
                    $rankStart = ($page - 1) * $perPage + 1;
                    $rankEnd = min($page * $perPage, $total);
                    $label = "Rank {$rankStart}-{$rankEnd}";
                @endphp

                @if ($page == $current)
                    <li>
                        <span class="px-4 py-2 bg-white text-[#111827] font-semibold border border-white rounded-md">
                            {{ $label }}
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->url($page) }}"
                           class="px-4 py-2 bg-white/10 text-white border border-white/20 rounded-md hover:bg-white/20 transition">
                            {{ $label }}
                        </a>
                    </li>
                @endif
            @endfor

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                       class="px-4 py-2 bg-white text-[#111827] border border-white rounded-md hover:bg-white/90 transition">
                        Next
                    </a>
                </li>
            @else
                <li>
                    <span class="px-4 py-2 bg-white/20 text-white/60 border border-white/30 rounded-md cursor-not-allowed">
                        Next
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
