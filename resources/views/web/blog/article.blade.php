@extends('layouts.web.main')

@php
    $articleTitle = trim(strip_tags($article->title));
    $articleText = trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($article->content), ENT_QUOTES, 'UTF-8')));
    $articleDescription = \Illuminate\Support\Str::limit($articleText ?: $articleTitle, 155);
    $articleImage = count($article->images) >= 1
        ? asset('webimages/portfolio/'. $article->images->first()->name)
        : asset('webimages/home/slider/banner1.jpg');
@endphp

@section('title', $articleTitle . ' | Noticias UnicFi')
@section('description', $articleDescription)
@section('og_type', 'article')
@section('og_image', $articleImage)

@section('jsonld')
    @php
        $posting = array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => \Illuminate\Support\Str::limit($articleTitle, 110),
            'description' => $articleDescription,
            'image' => [$articleImage],
            'datePublished' => $article->created_at->toAtomString(),
            'dateModified' => ($article->updated_at ?: $article->created_at)->toAtomString(),
            'inLanguage' => 'es-AR',
            'mainEntityOfPage' => route('web.portfolio.article', $article->slug),
            'author' => ['@id' => url('/') . '#organization'],
            'publisher' => ['@id' => url('/') . '#organization'],
            'articleSection' => $article->category ? $article->category->name : null,
            'keywords' => $article->tags->pluck('name')->implode(', '),
        ]);
        $breadcrumb = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => url('/')],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Noticias', 'item' => route('web.portfolio')],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $articleTitle],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($posting, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
    <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endsection

@section('content')

    <div class="container-fluid top-banner banner-galeria">
        <div class="main-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48"></a>
        </div>
    </div>
    @include('web.blog.partials.filters')
    {{-- Content --}}
    <article class="container blog-article">
        <div class="row inner">
            <div class="row">
                <div class="col-md-3 col-xs-12 image">
                    <img src="{{ $articleImage }}" class="img-responsive" alt="{{ $articleTitle }}" data-toggle="modal" data-target="#ModalImage">
                    <div class="date">
                        <span>@include('layouts.web.partials.icon', ['name' => 'clock']) <time datetime="{{ $article->created_at->toDateString() }}">{{ $article->created_at->diffForHumans() }}</time></span>
                    </div>
                    @if($article->category)
                    <div class="search">
                        <div class="category">Categoría:
                            <a href="{{ route('web.search.category', $article->category->name ) }}">
                                <span>{{ $article->category->name }}</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-9 col-xs-12 content">
                    <h1 class="article-title">{{ $articleTitle }}</h1>
                    <div class="article-body">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </article>


    <!-- The Modal -->
    <div class="modal fade modal-image-view" id="ModalImage">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" data-dismiss="modal" class="close-modal" aria-label="Cerrar imagen">X</button>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="image">
                        <img src="{{ $articleImage }}" class="img-responsive" alt="{{ $articleTitle }}">
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.web.partials.social')
    @include('layouts.web.partials.foot')
@endsection
