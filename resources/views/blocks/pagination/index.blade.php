@if ($paginator->hasPages())
    <nav>
        <ul class="pagination pagination-circular" role="navigation" aria-label="Pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    « <span class="show-for-sr">Previous page</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        « <span class="show-for-sr">Previous page</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class=" current" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class=""><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        » <span class="show-for-sr">Next page</span>
                    </a>
                </li>
            @else
                <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    » <span class="show-for-sr">Next page</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
