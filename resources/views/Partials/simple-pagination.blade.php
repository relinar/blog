@if ($paginator->hasPages())
    <nav class="my-2 text-center" aria-label="Pagination">
        <div class="join inline-flex items-center justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button disabled class="btn join-item btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">«</button>
            @else
                <a class="btn join-item" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">«</a>
            @endif

            @php
                $hasCurrent = is_object($paginator) && method_exists($paginator, 'currentPage');
                $hasLast = is_object($paginator) && method_exists($paginator, 'lastPage');
            @endphp

            <span class="btn join-item btn-ghost cursor-default">
                @if($hasCurrent && $hasLast)
                    {{ __('Page') }} {{ $paginator->currentPage() }} / {{ $paginator->lastPage() }}
                @elseif($hasCurrent)
                    {{ __('Page') }} {{ $paginator->currentPage() }}
                @endif
            </span>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="btn join-item" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">»</a>
            @else
                <button disabled class="btn join-item btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">»</button>
            @endif
        </div>
    </nav>
@endif
