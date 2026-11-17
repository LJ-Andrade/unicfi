@extends('layouts.web.main')
@section('title', 'Noticias | UnicFi')
@section('description', 'Novedades de UnicFi: clases grupales, running team, clases online, bienestar corporativo y consejos de salud y actividad física en Buenos Aires.')

@section('styles')
    <style>body{ background-color: #f5f5f5 !important }</style>
@endsection

@section('content')

    <div class="container-fluid top-banner banner-noticias">
        <div class="main-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48"></a>
        </div>
    </div>
    @include('web.blog.partials.filters')

    {{-- Listado de noticias --}}
    <section class="news-list">
        <h1 class="sr-only">Noticias de UnicFi</h1>
        @if(isset($searchInfo))
            <div class="news-search-info">
                <span>{{ $searchInfo }}</span>
                <a href="{{ route('web.portfolio') }}">Ver todas</a>
            </div>
        @endif

        @if(!count($articles))
            <div class="news-empty">
                <h3>No se encontraron noticias</h3>
                <p>Probá con otra búsqueda o <a href="{{ route('web.portfolio') }}">mirá todas las noticias</a>.</p>
            </div>
        @else
            <div class="news-grid">
                @foreach($articles as $article)
                    @php
                        $url = route('web.portfolio.article', $article->slug);
                        $excerpt = \Illuminate\Support\Str::limit(trim(html_entity_decode(strip_tags($article->content), ENT_QUOTES, 'UTF-8')), 160);
                        $image = count($article->images) >= 1
                            ? asset('webimages/portfolio/'. $article->images->first()->name)
                            : asset('webimages/gen/default.jpg');
                    @endphp
                    <article class="news-card">
                        <div class="news-card-media">
                            <img src="{{ $image }}" alt="{{ strip_tags($article->title) }}" loading="lazy" decoding="async">
                        </div>
                        <div class="news-card-body">
                            <div class="news-card-meta">
                                @if($article->category)
                                    <a class="news-card-category" href="{{ route('web.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
                                @endif
                                <time datetime="{{ $article->created_at->toDateString() }}">{{ $article->created_at->diffForHumans() }}</time>
                            </div>
                            <h3 class="news-card-title">
                                <a href="{{ $url }}">{{ strip_tags($article->title) }}</a>
                            </h3>
                            @if($excerpt)
                                <p class="news-card-excerpt">{{ $excerpt }}</p>
                            @endif
                            <div class="news-card-footer">
                                <span class="news-card-more">
                                    Leer nota
                                    @include('layouts.web.partials.icon', ['name' => 'arrow-right'])
                                </span>
                                @if(count($article->tags))
                                    <div class="news-card-tags">
                                        @foreach($article->tags->take(2) as $tag)
                                            <a href="{{ route('web.search.tag', $tag->name) }}">#{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{ $articles->links('web.blog.partials.pagination') }}
        @endif
    </section>

    @include('layouts.web.partials.social')
    @include('layouts.web.partials.foot')
@endsection
