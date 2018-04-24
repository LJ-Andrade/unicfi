@extends('layouts.web.main')
@section('title', config('app.name')." | Noticias")

@section('styles')
@endsection

@section('content')

    <div class="container-fluid top-banner banner-galeria">
        <div class="main-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi Logo"></a>
        </div>
    </div>
    @include('web.blog.partials.filters')
    {{-- Content --}}
    <div class="container blog-article">
        <div class="row inner">
            <div class="row">
                <div class="col-md-3 col-xs-12 image">
                    @if (count($article->images) >= 1)
                        <img src="{{ asset('webimages/portfolio/'. $article->images->first()->name ) }}" class="img-responsive" alt="{{ $article->title }}" data-toggle="modal" data-target="#ModalImage">
                    @else
                        <img src="{{ asset('webimages/main/default.jpg') }}" class="img-responsive" alt="">
                    @endif
                    <div class="date">
                        <span><i class="ion-ios-clock-outline"></i> {{ $article->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="search">
                        <div class="category">Categoría:
                            <a href="{{ route('web.search.category', $article->category->name ) }}">
                                <span>{{ $article->category->name }}</span>
                            </a>
                        </div>
                        {{-- <div class="tags">
                            Etiquetas <br>
                            @foreach($article->tags as $tag)
                                <a href="{{ route('web.search.tag', $tag->name ) }}">
                                    <span class="badge grey-tag">{!! $tag->name !!}</span>
                                </a>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-9 col-xs-12 content">
                    <h2>{{ $article->title }}</h2>
                    <p>
                        {!! $article->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade modal-image-view" id="ModalImage">
        <div class="modal-dialog">
            <div class="modal-content">
                <div  data-dismiss="modal" class="close-modal">X</div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="image">
                        @if (count($article->images) >= 1)
                            <img src="{{ asset('webimages/portfolio/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                        @else
                            <img src="{{ asset('webimages/main/default.jpg') }}" class="img-responsive" alt="">
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>


    @include('layouts.web.partials.social')
    @include('layouts.web.partials.foot')
@endsection



   
