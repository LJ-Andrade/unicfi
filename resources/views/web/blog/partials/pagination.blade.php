@if ($paginator->hasPages())
    <nav class="news-pagination" role="navigation" aria-label="Paginación de noticias">
        <p class="news-pagination-info">
            Mostrando <strong>{{ $paginator->firstItem() }}</strong>–<strong>{{ $paginator->lastItem() }}</strong>
            de <strong>{{ $paginator->total() }}</strong> noticias
        </p>

        <ul class="news-pagination-list">
            {{-- Anterior --}}
            @if ($paginator->onFirstPage())
                <li><span class="page-btn page-prev is-disabled" aria-disabled="true">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
                    <span class="page-btn-label">Anterior</span>
                </span></li>
            @else
                <li><a class="page-btn page-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
                    <span class="page-btn-label">Anterior</span>
                </a></li>
            @endif

            {{-- Números --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span class="page-num is-dots">{{ $element }}</span></li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="page-num is-active" aria-current="page">{{ $page }}</span></li>
                        @else
                            <li><a class="page-num" href="{{ $url }}" aria-label="Ir a la página {{ $page }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Siguiente --}}
            @if ($paginator->hasMorePages())
                <li><a class="page-btn page-next" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <span class="page-btn-label">Siguiente</span>
                    @include('layouts.web.partials.icon', ['name' => 'arrow-right'])
                </a></li>
            @else
                <li><span class="page-btn page-next is-disabled" aria-disabled="true">
                    <span class="page-btn-label">Siguiente</span>
                    @include('layouts.web.partials.icon', ['name' => 'arrow-right'])
                </span></li>
            @endif
        </ul>
    </nav>
@endif
