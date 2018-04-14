<div class="blog-filters-mobile">
	<div class="inner-main">
		<span class="title">Noticias</span>
		<button class="Show-Mobile-Filter btn filterMobileBtn"> <b><i class="ion-android-search"></i></b></button>
	</div>
	<div class="row Fiter-Inner filter-inner animated fadeIn Hidden">
		<h2>Buscar</h2>
		<div class="search-input">
			{!! Form::open(['route' => 'web.portfolio', 'method' => 'GET', 'class' => '']) !!}
				<div class="form-group search-bar">
					{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar por título', 'aria-describedby' => 'search']) !!}
					<button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
				</div>
			{!! Form::close() !!}
		</div>
		<div class="search-buttons">
			<hr>
			<div class="title">Categorías</div>
			
			@foreach($categories as $category)
				<a href="{{ route('web.search.category', $category->name ) }}"> 
					<button class="btn filter-button"> 
					{{ $category->name }} <span class="badge">{{ $category->article->count() }}</span></button>
				</a>
			@endforeach
		</div>
		<div class="search-buttons">
		<hr>
			<div class="title">Etiquetas</div>
			@foreach($tags as $tag)
				<a href="{{ route('web.search.tag', $tag->name ) }}"> 
					<button class="btn filter-button"> 
					{{ $tag->name }}</button>
				</a>
			@endforeach
		</div>
	</div>
</div>