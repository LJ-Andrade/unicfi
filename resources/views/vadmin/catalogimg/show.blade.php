@extends('layouts.vadmin.main')

@section('title', 'Vadmin | Previsualización de Item')

@section('header')
	@component('vadmin.components.header')
		@slot('breadcrums')
		    <li class="breadcrumb-item"><a href="{{ url('vadmin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('catalogoimg.index')}}">Listado de Items</a></li>
            <li class="breadcrumb-item active">Previsualización del Item <b></b></li>
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
                <h2>{!! $article->name !!}</h2>
				<hr class="softhr">
				<div class="show-item">
					<div class="row">
						<div class="col-md-3">
							<h2><i class="icon-star-full"></i> Imágen Destacada</h2>
							@if($article->thumb != '')
								<img class="Featured-Image-Container CheckImg" src="{{ asset('webimages/catalogoimg/'.$article->thumb) }}">
							@else
								<img class="Featured-Image-Container CheckImg" src="{{ asset('webimages/main/gen/catalog-gen.jpg') }}">
							@endif
						</div>
						<div class="col-md-9">
						@if(count($article->images) != 0 )
						<div class="actual-images horizontal-list">
							<h2>Imágenes Adicionales</h2>
							<ul>
								@foreach($article->images->reverse() as $image)
								<li id="Img{{ $image->id }}">	
									<img src="{{ asset('webimages/catalogoimg/'.$image->name) }}">
									<div class="overlayItemCenter">
										<i class="Delete-Product-Img CheckImg icon-ios-trash-outline delete-img" data-imgid="{{ $image->id }}"></i>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						@endif
						</div>
					</div>
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
					<hr class="softhr">
					<a href="{{ url('vadmin/catalogoimg/'.$article->id.'/edit') }}" class="btn btnGreen"><i class="icon-pencil2"></i> Editar Artículo</a> 
				</div>
        	@endslot
        @endcomponent
    </div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('plugins/validation/parsley.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('plugins/validation/es/parsley-es.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('plugins/jqueryFileUploader/jquery.fileuploader.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/vadmin-forms.js') }}" ></script>
	@include('vadmin.components.bladejs')
@endsection

@section('custom_js')
@endsection

