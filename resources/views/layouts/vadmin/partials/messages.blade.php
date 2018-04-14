{{-- Errors --}}
@if(count($errors) > 0)
	<div class="alert alert-error"> 
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach		
		</ul>
	</div>
@endif

{{-- Messages --}}
@if(Session::has('message'))
	<div class="alert alert-success"> 
		<i class="fa fa-star"></i> @if(Session::get('message') != []) {{ Session::get('message') }} @endif 
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
	</div> 
@endif

{{-- Missing Tags or Categories --}}
@if(Session::has('tagscategoriesmissing'))
	<div class="alert alert-error text-center"> 
		<i class="fa fa-star"></i> @if(Session::get('tagscategoriesmissing') != []) {{ Session::get('tagscategoriesmissing') }} <br><br>
		<a class="btnSm btnWhite" href="{{ route('categories.create') }}">Crear Categorías</a> 
		<a class="btnSm btnWhite" href="{{ route('tags.create') }}">Crear Etiquetas</a> @endif 
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
	</div> 
@endif