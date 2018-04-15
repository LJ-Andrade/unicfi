@extends('layouts.web.main')
@section('title', 'Cimhe | Foto')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owlcarousel2/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owlcarousel2/owl.theme.default.min.css') }}">
@endsection

@section('content')
    <div class="container-fluid top-banner banner-galeria">
        <div class="main-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi Logo"></a>
        </div>
    </div>
    @include('web.galeria.partials.filters')
    <div class="container gallery-item">
        <div class="row ">
            <div class="col-md-12 text-center">
                <h2>{{ $article->name }}</h2>
                <div class="gallery-slider">
                    <div class="owl-carousel owl-theme">
                        @if(count($article->images) == 0)
                            <div class="swiper-slide"><img src="{{ asset('webimages/gen/article-gen.jpg') }}" class="slider-image"></div>
                        @else 
                            @foreach($article->images as $image)
                                <div class="item" style="width:100%">
                                    <div class="swiper-slide"><img src="{{ asset('webimages/catalogoimg/'.$image->name) }}"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
				
    @include('layouts.web.partials.social')
    @include('layouts.web.partials.foot')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/owlcarousel2/owl.carousel.min.js') }}"></script>
@endsection

@section('custom_js')
<script>
    $('.owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        autoWidth: false,
        items: 1,
        center: true,
        touchDrag: true,
        mergeFit: true,
        nav: true
    })
</script>
@endsection

   
