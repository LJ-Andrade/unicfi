@extends('layouts.vadmin.main')
@section('title', 'VADmin | Editar Item')

@section('styles')
	{{ Html::style('plugins/texteditor/trumbowyg.min.css') }}
	{{ Html::style('plugins/jqueryFileUploader/jquery.fileuploader.css') }}
	{{ Html::style('plugins/jqueryfiler/themes/jquery.filer-dragdropbox-theme.css') }} 
	{{ Html::style('plugins/jqueryfiler/jquery.filer.css') }}
	{{ Html::style('plugins/chosen/chosen.min.css') }}
@endsection

@section('header')
	@component('vadmin.components.header')
		@slot('breadcrums')
			<li class="breadcrumb-item"><a href="{{ url('vadmin')}}">Inicio</a></li>
			<li class="breadcrumb-item"><a href="{{ route('catalogoimg.index')}}">Listado de Items</a></li>
			<li class="breadcrumb-item active">Edición de Item</li>
		@endslot
		@slot('actions')
			<div class="list-actions">
				<h1>Edición de Artículo</h1>
				{{-- Edit --}}
				<a href="#" id="EditBtn" class="btn btnGreen Hidden"><i class="icon-pencil2"></i> Editar</a>
			</div>
		@endslot
	@endcomponent
@endsection

@section('content')

	<div class="inner-wrapper">
		{!! Form::model($article, [
				'method' => 'PATCH',
				'url' => ['vadmin/catalogoimg', $article->id],
				'files' => true,
				'class' => 'row big-form', 
				'data-parsley-validate' => ''
			]) !!}
			@include('vadmin.catalogimg.form')
			<div class="row centered">
				{!! Form::submit('Actualizar item', ['class' => 'btn btnGreen']) !!}
			</div>
		{!! Form::close() !!}
		<div id="Error"></div>
	</div>  

@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/texteditor/trumbowyg.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/jqueryfiler/jquery.filer.min.js')}} "></script> 
	<script type="text/javascript" src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}" ></script> 
	<script type="text/javascript" src="{{ asset('plugins/validation/parsley.min.js') }}" ></script> 
	<script type="text/javascript" src="{{ asset('plugins/validation/es/parsley-es.min.js') }}" ></script> 
	<script type="text/javascript" src="{{ asset('plugins/jqueryFileUploader/jquery.fileuploader.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('js/vadmin-forms.js') }}" ></script>
	@include('vadmin.components.bladejs')
@endsection

@section('custom_js')
	
	<script>
		// ---- Textarea Text Editor ----- //
		// Path to icons
		$.trumbowyg.svgPath = '{{ asset('plugins/texteditor/icons.svg') }}';
		// Init
		$('.Textarea-Editor').trumbowyg();
	</script>

@endsection


