@extends('layouts.web.main')

@section('title', 'Cimhe | Noticias')

@section('styles')
@endsection

@section('content')
    <div class="top-space-big"></div>
    <div class="container-fluid top-banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="container">
        @include('web.blog.partials.filtersmobile')
    </div>
    <div class="container blog-article">
        <div class="row">
            <h1>NOTICIAS</h1>
            <hr class="softhr">            
            <div class="col-md-9 inner">
				<div class="date">
					<span><i class="ion-ios-clock-outline"></i> {{ $article->created_at->diffForHumans() }}</span>
				</div>
				<h2>{{ $article->title }}</h2>
				<div class="image">
					@if (count($article->images) >= 1)
						<img src="{{ asset('webimages/portfolio/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
					@else
						<img src="{{ asset('webimages/main/default.jpg') }}" class="img-responsive" alt="">
					@endif
				</div>
				<p>
					{{ strip_tags($article->content) }}
				</p>
				<div class="search pull-right">
					<span>Categoría: 
					<a href="{{ route('web.search.category', $article->category->name ) }}">
						<span>{{ $article->category->name }}</span>
					</a> | 
					</span>Etiquetas: 
					@foreach($article->tags as $tag)
						<a href="{{ route('web.search.tag', $tag->name ) }}">
							<span>{!! $tag->name !!}</span>
						</a>
					@endforeach
				</div>
            </div>
            <div class="col-md-3">
                @include('web.blog.partials.filtersdesktop')
            </div>
        </div>
        <hr class="softhr">
    </div>
    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')

@endsection


@section('scripts')
@endsection

@section('custom_js')
@endsection




   
