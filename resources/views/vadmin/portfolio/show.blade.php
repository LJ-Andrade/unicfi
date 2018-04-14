@extends('layouts.vadmin.main')

@section('title', 'Vadmin | Previsualización de Artículo')

@section('header')
	@component('vadmin.components.header')
		@slot('breadcrums')
		    <li class="breadcrumb-item"><a href="{{ url('vadmin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('portfolio.index')}}">Artículos</a></li>
            <li class="breadcrumb-item active">Previsualización del artículo <b></b></li>
		@endslot
		@slot('actions')
		@endslot
	@endcomponent
@endsection

@section('content')
    <div class="row">
        @component('vadmin.components.container')
            @slot('title')
				Previsualización
            @endslot
            @slot('content')
				<span>Título:</span>
                <h2>{!! $article->title !!}</h2>
				<hr class="softhr">
				<div class="show-item">
					<div class="actual-images horizontal-list">
						Imágen: <br>
						<ul>
						@if(!$article->images->isEmpty())
							@foreach($article->images as $image)
								<li id="Img{{ $image->id }}">
									<img src="{{ asset('webimages/portfolio/'.$image->name ) }}" class="img-responsive img-article" style="max-width: 200px">
									<div class="overlayItemCenter">
										<i class="Delete-Porfolio-Img icon-ios-trash-outline delete-img" data-imgid="{{ $image->id }}"></i>
									</div>
								</li>
							@endforeach
						@else
							<li>
								<img src="{{ asset('webimages/main/gen/catalog-gen.jpg') }}" class="img-responsive img-article" style="max-width: 200px">
							</li>
						@endif
						</ul>
					</div>
					<hr class="softhr">
					Descripción: <br>
					<p>{{strip_tags($article->content) }}</p>
					<hr class="softhr">
					Slug - Url Visible en el explorador: <br>
					<span class="muted"> Debe estár separado por guiones, no debe contener espacios ni caracteres especiales: </span><br>
					<span class="custom-badge blue-back">{!! $article->slug !!}</span><br>
					<hr class="softhr">
					Categoría: <br>
					<span class="custom-badge blue-back">{!! $article->category->name !!}</span>
					<hr class="softhr">
					Tags: <br>
					@foreach($article->tags as $tag)
						<span class="custom-badge blue-back">{!! $tag->name !!}</span>
					@endforeach
					<br><br>
					<hr class="softhr">
					<a href="{{ url('vadmin/portfolio/'.$article->id.'/edit') }}" class="btn btnGreen"><i class="icon-pencil2"></i> Editar Artículo</a> 
				</div>
				@endslot
		@endcomponent
    </div>
@endsection

@section('scripts')
	@include('vadmin.components.bladejs')
@endsection

@section('custom_js')
@endsection

