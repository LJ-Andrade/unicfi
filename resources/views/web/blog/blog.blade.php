@extends('layouts.web.main')
@section('title', 'Cimhe | Noticias')

@section('styles')
@endsection

@section('content')
    <div class="top-space-big"></div>
    <div class="container-fluid top-banner banner-news">
    </div>
    <div class="container">
        @include('web.blog.partials.filtersmobile')
    </div>
    <div class="container blog-list">
        <div class="row ">
            <h1>NOTICIAS</h1>
            <hr class="softhr">
            @if(! count($articles))
                <div class="container">
                    <h2>No se encontraron artículos</h2>
                    <hr>
                    <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.portfolio') }}"></i> ver todas las noticias</a></h4>
                </div>
            @endif
            
            <div class="col-md-9">
                @foreach($articles as $article)
                    <div class="row blog-item">
                        <a href="{{ route('web.portfolio.article',$article->slug ) }}">
                            <div class="col-md-3 col-sm-4 col-xs-12 image pad0">
                                @if (count($article->images) >= 1)
                                    <img src="{{ asset('webimages/portfolio/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                                @else
                                    <img src="{{ asset('webimages/main/default.jpg') }}" class="img-responsive" alt="">
                                @endif
                            </div>
                        </a>
                        <div class="col-md-9 col-sm-8 col-xs-12 inner">
                            <a href="{{ route('web.portfolio.article',$article->slug ) }}">
                                @if(strlen(strip_tags($article->title)) > 140)
                                    <h3 class="title"> {{ substr(strip_tags($article->title), 0 , 140) }} ...</h3>
                                @else
                                    <h3 class="title"> {{ $article->title }} </h3>
                                @endif
                            <p>
                                @if(strlen(strip_tags($article->content)) > 450)
                                    {{ substr(strip_tags($article->content), 0 , 450) }} ...<b> Ver más...</b>
                                    {{-- {{ strip_tags(substr($article->content, 0, 300)) }} --}}
                                @else
                                    {{ strip_tags($article->content) }}
                                @endif
                            </p>
                            </a>
                            <div class="search">
                                @if(!$categories->isEmpty())
                                <span>Categoría: 
                                <a href="{{ route('web.search.category', $article->category->name ) }}">
                                    <span>{{ $article->category->name }}</span>
                                </a> | 
                                @endif
                                @if(!$tags->isEmpty())
                                </span>Etiquetas: 
                                @foreach($article->tags as $tag)
                                    <a href="{{ route('web.search.tag', $tag->name ) }}">
                                        <span>{!! $tag->name !!}</span>
                                    </a>
                                @endforeach
                                @endif
                            </div>
                            <div class="date">
                                <span><i class="ion-ios-clock-outline"></i> {{ $article->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">
                @include('web.blog.partials.filtersdesktop')
            </div>
        </div>
        {!! $articles->render(); !!}
        <hr class="softhr">
    </div>
    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')

@endsection


@section('scripts')
@endsection

@section('custom_js')
@endsection




   
