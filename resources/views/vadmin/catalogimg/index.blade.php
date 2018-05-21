@extends('layouts.vadmin.main')
@section('title', 'VADmin | Catálogo de Imágenes')

{{-- STYLE INCLUDES --}}
@section('styles')
@endsection

{{-- HEADER --}}
@section('header')
	@component('vadmin.components.headerfixed')
		@slot('breadcrums')
		    <li class="breadcrumb-item"><a href="{{ url('vadmin')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado de Imágenes</li>
		@endslot
		@slot('actions')
			{{-- Actions --}}
			<div class="list-actions">
				<a href="{{ route('catalogoimg.create') }}" class="btn btnBlue"><i class="icon-plus-round"></i>  Nuevo Item</a>
				<button id="SearchFiltersBtn" class="btn btnBlue"><i class="icon-ios-search-strong"></i></button>
				{{-- Edit --}}
				<a href="#" id="EditBtn" class="btn btnGreen Hidden"><i class="icon-pencil2"></i> Editar</a>
				<input id="EditId" type="hidden">
				{{-- Delete --}}
				{{--  THIS VALUE MUST BE THE NAME OF THE SECTION CONTROLLER  --}}
				<input id="ModelName" type="hidden" value="catalogoimg">
				<button id="DeleteBtn" class="btn btnRed Hidden"><i class="icon-bin2"></i> Eliminar</button>
				<input id="RowsToDeletion" type="hidden" name="rowstodeletion[]" value="">
				{{-- If Search --}}
				@if(isset($_GET['title']) || isset($_GET['category']))
				<a href="{{ url('vadmin/catalogoimg') }}"><button type="button" class="btn btnGrey">Mostrar Todos</button></a>
				@endif
			</div>
		@endslot
		@slot('searcher')
			@include('vadmin.catalog.searcher')
		@endslot
	@endcomponent
@endsection

@if(isset($_GET['title']) || isset($_GET['category']))
	{{--  If section has fixed actions  --}}
	@section('top-space')
		<div class="top-space"></div>
	@endsection
@else
	@section('top-space')
		<div class="top-space-small"></div>
	@endsection
@endif

{{-- CONTENT --}}
@section('content')
	<div class="list-wrapper">
		{{-- Search --}}
		<div class="row">
			@component('vadmin.components.list')
			
				@slot('actions')
					{{-- @if(isset($_GET['code']) || isset($_GET['title']) || isset($_GET['category']))
						<a href="{{ route('vadmin.exportCatalogListPdf', ['params' => http_build_query($_GET)]) }}" data-toggle="tooltip" title="Exportar a PDF"><i class="icon-file-pdf"></i></a>
						<a href="{{ route('vadmin.exportCatalogListXls', ['params' => http_build_query($_GET)]) }}" data-toggle="tooltip" title="Exportar a XLS"><i class="icon-file-excel"></i></a>
					@else
						<a href="{{ route('vadmin.exportCatalogListPdf', ['params' => 'all']) }}" data-toggle="tooltip" title="Exportar a PDF"><i class="icon-file-pdf"></i></a>
						<a href="{{ route('vadmin.exportCatalogListXls', ['params' => 'all']) }}" data-toggle="tooltip" title="Exportar a XLS"><i class="icon-file-excel"></i></a>
					@endif --}}
				@endslot

				@slot('title', 'Listado de Items')
					@if(!$articles->count() == '0')
					@slot('tableTitles')
						<th class="w-50"></th>
						<th></th>
						<th>Título</th>
						<th>Categoría</th>
						<th>Etiquetas</th>
						<th>Estado</th>
					@endslot
					@slot('tableContent')
						@foreach($articles as $item)
							<tr>
								<td class="w-50">
									<label class="CheckBoxes custom-control custom-checkbox list-checkbox">
										<input type="checkbox" class="List-Checkbox custom-control-input row-checkbox" data-id="{{ $item->id }}">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description"></span>
									</label>
								</td>
								<td class="thumb">
									@if($item->thumb != '' || $item->thumb != null)
										<img class="CheckImg" src="{{ asset('webimages/catalogoimg/'. $item->thumb ) }}">
									@else
										<img class="CheckImg" src="{{ asset('webimages/main/gen/catalog-gen.jpg') }}">
									@endif
								</td>
								<td class="show-link max-text"><a href="{{ url('vadmin/catalogoimg/'.$item->id) }}">{{ $item->name }}</a></td>
								{{--  DATE   --}}
								<td class="w-200">{{ $item->category->name }}</td>
								<td class="w-200">
									@foreach($item->tags as $tag)
										{{ $tag->name }}
									@endforeach	
								</td>
								<td class="w-50 pad0 centered">
									@if($item->status == '1')
										<label class="switch">
											<input class="PauseArticle switch-checkbox" data-id="{{ $item->id }}" type="checkbox" checked>
											<span class="slider round"></span>
										</label>
									@elseif($item->status == '0')
										<label class="switch">
											<input class="ActivateArticle" data-id="{{ $item->id }}" type="checkbox">
											<span class="slider round"></span>
										</label>
									@else 
										Sin estado
									@endif
								</td>
							</tr>					
						@endforeach
						@else 
							@slot('tableTitles')
								<th></th>
							@endslot
							@slot('tableContent')
								<tr>
									<td class="w-200">No se han encontrado items</td>
								</tr>
							@endslot
						@endif
				@endslot
			@endcomponent
			{{--  Pagination  --}}
			@if(isset($_GET['title']))
				{!! $articles->appends(['title' => $_GET['title']])->render() !!}
			@elseif(isset($_GET['category']))
				{!! $articles->appends(['category' => $_GET['category']])->render() !!}
			@else
				{!! $articles->render() !!}
			@endif
		</div>
		<div id="Error"></div>	
	</div>
@endsection

{{-- SCRIPT INCLUDES --}}
@section('scripts')
	@include('vadmin.components.bladejs')
@endsection

{{-- CUSTOM JS SCRIPTS--}}
@section('custom_js')
	<script>
	$(document).ready(function(e) {

		// Article Status
		$('.PauseArticle').click(function() {
			var cbx = $(this);
			if (cbx[0].checked) {
				// console.log("Error en checkbox");
			} else {
				console.log("Pausar");
				var id     = cbx.data('id');
				var route = "{{ url('/vadmin/catimg_article_status') }}/"+id+"";
				updateStatus(id, route, '0');
			}
		});

		$('.ActivateArticle').click(function() {
			var cbx = $(this);
			if (cbx[0].checked) {
				var id = cbx.data('id');
				console.log("Activar");
				var route = "{{ url('/vadmin/catimg_article_status') }}/"+id+"";
				updateStatus(id, route, '1');
			} else {
				//console.log("Error en checkbox");
			}
		});
	});

	</script>
@endsection