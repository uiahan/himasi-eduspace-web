@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">

        {{-- MOBILE --}}
        <div class="flex gap-2 items-center justify-between sm:hidden">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span
                    class="inline-flex items-center px-4 py-2 text-sm font-medium
                    text-green-300 bg-green-50 border border-green-200
                    cursor-not-allowed rounded-full">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium
                   text-green-700 bg-white border border-green-300
                   rounded-full hover:bg-green-50 hover:text-green-800
                   transition">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium
                   text-green-700 bg-white border border-green-300
                   rounded-full hover:bg-green-50 hover:text-green-800
                   transition">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="inline-flex items-center px-4 py-2 text-sm font-medium
                    text-green-300 bg-green-50 border border-green-200
                    cursor-not-allowed rounded-full">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        {{-- DESKTOP --}}
        <div class="hidden sm:flex sm:items-center sm:justify-center gap-2 mt-2">

            {{-- Previous Arrow --}}
            @if ($paginator->onFirstPage())
                <span
                    class="inline-flex items-center px-3 py-2
                    text-green-300 bg-green-50 border border-green-200
                    rounded-full cursor-not-allowed">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="inline-flex items-center px-3 py-2
                   text-green-700 bg-white border border-green-300
                   rounded-full hover:bg-green-50 hover:text-green-800
                   transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            @endif

            {{-- Pages --}}
            @foreach ($elements as $element)
                {{-- Dots --}}
                @if (is_string($element))
                    <span
                        class="inline-flex items-center px-4 py-2
                        text-green-400 bg-green-50 border border-green-200
                        rounded-full cursor-default">
                        {{ $element }}
                    </span>
                @endif

                {{-- Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="inline-flex items-center px-4 py-2
                                text-sm font-semibold text-white
                                bg-green-600 border border-green-600
                                rounded-full shadow cursor-default">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                class="inline-flex items-center px-4 py-2
                               text-sm font-medium text-green-700
                               bg-white border border-green-300
                               rounded-full hover:bg-green-50 hover:text-green-800
                               transition">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Arrow --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="inline-flex items-center px-3 py-2
                   text-green-700 bg-white border border-green-300
                   rounded-full hover:bg-green-50 hover:text-green-800
                   transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            @else
                <span
                    class="inline-flex items-center px-3 py-2
                    text-green-300 bg-green-50 border border-green-200
                    rounded-full cursor-not-allowed">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            @endif

        </div>
    </nav>
@endif
