@if ($paginator->hasPages())
    <nav>
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                </a>
            @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></a>
            @endif


            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
            @else
                <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                </a>
            @endif
        </div>
    </nav>
@endif
