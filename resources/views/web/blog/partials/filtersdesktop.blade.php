<div class="blog-filters-desktop">
	<div class="search-input">
		{!! Form::open(['route' => 'web.portfolio', 'method' => 'GET', 'class' => '']) !!}
			<div class="form-group search-bar">
				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar...', 'aria-describedby' => 'search']) !!}
				<button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
			</div>
		{!! Form::close() !!}
	</div>
	<b>Categorías: </b><br>
	@foreach($categories as $category)
	<a href="{{ route('web.search.category', $category->name ) }}">
		{{-- With Badge --}}
		{{-- {{ $category->name }} <span class="badge maincolor-back">{{ $category->article->count() }}</span> <br> --}}
		{{ $category->name }} <span> ({{ $category->article->count() }})</span> <br>
	</a>
	@endforeach
	<hr class="softhr">
	<b>Etiquetas: </b><br>
	@foreach($tags as $tag)
	<a href="{{ route('web.search.tag', $tag->name ) }}"> 
		{{ $tag->name }}
	</a>
	@endforeach
</div>
