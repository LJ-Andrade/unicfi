@extends('layouts.web.main')
@section('title', config('app.name'). " | Noticias")

@section('styles')
    <style>
    body{ background-color: #f9f9f9 !important}</style>
@endsection

@section('content')

    <div class="container-fluid top-banner banner-noticias">
        <div class="main-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi Logo"></a>
        </div>
    </div>
    @include('web.blog.partials.filters')
    {{-- Content --}}
    <div class="container blog-list">
        <div class="search-info">
            @if(isset($searchInfo))
                {{ $searchInfo }}
            @endif
        </div>            
            @if(!count($articles))
                <div class="container not-found">
                    <h3>No se encontraron noticias</h3>
                    <hr>
                    <h4>Puede realizar una nueva búsqueda o haga click aquí para <a href="{{ route('web.portfolio') }}"></i> <span class="all">verlas todas</span> </a></h4>
                </div>
            @endif
        
            @foreach($articles as $article)
                <div class="row blog-item">
                    <div class="top"><i class="ion-ios-clock-outline"></i> {{ $article->created_at->diffForHumans() }}</div>
                    <a href="{{ route('web.portfolio.article',$article->slug ) }}">
                        <div class="col-md-3 col-sm-4 col-xs-12 image pad0">
                            @if (count($article->images) >= 1)
                                <img src="{{ asset('webimages/portfolio/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                            @else
                                <img src="{{ asset('webimages/gen/default.jpg') }}" class="img-responsive" alt="">
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
                    </div>
                    <div class="bottom">
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
                </div>
            @endforeach

        {!! $articles->render(); !!}
    </div>
    @include('layouts.web.partials.social')
    @include('layouts.web.partials.foot')
@endsection



   
