@php
	// --- SEO: valores por defecto (cada vista puede sobrescribirlos con @section) ---
	$seoDescription = trim($__env->yieldContent('description')) ?: 'UnicFi: entrenamientos personales, grupales y online, bienestar corporativo para empresas, propuestas para consorcios y diseño de espacios deportivos en Buenos Aires.';
	$seoTitle = trim($__env->yieldContent('title')) ?: config('app.name');
	$seoImage = trim($__env->yieldContent('og_image')) ?: asset('webimages/home/slider/banner1.jpg');
	$seoType = trim($__env->yieldContent('og_type')) ?: 'website';
	$page = (int) request('page');
	$canonical = url()->current() . ($page > 1 ? '?page=' . $page : '');
	// Búsquedas y listados filtrados (categoría / etiqueta) no se indexan: son contenido duplicado de /noticias y /galeria
	$isFilteredListing = request()->filled('title') || request()->is('categories/*', 'tag/*', 'galeria_categorias/*', 'galeria_etiqueta/*');
	$robots = trim($__env->yieldContent('robots')) ?: ($isFilteredListing ? 'noindex, follow' : 'index, follow, max-image-preview:large');

	$organization = [
		'@context' => 'https://schema.org',
		'@type' => 'SportsOrganization',
		'@id' => url('/') . '#organization',
		'name' => 'UnicFi',
		'url' => url('/'),
		'logo' => asset('webimages/logos/logo.png'),
		'image' => asset('webimages/home/slider/banner1.jpg'),
		'description' => 'Entrenamientos personales, grupales y online, bienestar corporativo, propuestas para consorcios y diseño y gestión de espacios deportivos.',
		'email' => 'holaunicfi@gmail.com',
		'telephone' => '+54 11 4555 7672',
		'areaServed' => ['@type' => 'City', 'name' => 'Ciudad Autónoma de Buenos Aires'],
		'founder' => ['@id' => url('director') . '#person'],
		'slogan' => 'Trabajamos para que te sientas bien',
		'knowsAbout' => ['Entrenamiento personalizado', 'Entrenamiento funcional', 'Bienestar corporativo', 'Pausas activas', 'Running', 'Natación', 'Preparación física', 'Gestión de espacios deportivos'],
		'contactPoint' => [[
			'@type' => 'ContactPoint',
			'contactType' => 'customer service',
			'telephone' => '+54 9 11 2720 6422',
			'email' => 'holaunicfi@gmail.com',
			'availableLanguage' => 'es',
		]],
		'sameAs' => [
			'https://www.facebook.com/Únic-Fi-204735563635331/',
			'https://www.instagram.com/unicfi/',
			'https://www.youtube.com/channel/UCt-BkbOs5IEo4TPaXcjdY2A',
		],
	];
	$website = [
		'@context' => 'https://schema.org',
		'@type' => 'WebSite',
		'@id' => url('/') . '#website',
		'name' => 'UnicFi',
		'alternateName' => ['Unic Fi', 'Únic Fi'],
		'url' => url('/'),
		'inLanguage' => 'es-AR',
		'publisher' => ['@id' => url('/') . '#organization'],
		'potentialAction' => [
			'@type' => 'SearchAction',
			'target' => url('noticias') . '?title={search_term_string}',
			'query-input' => 'required name=search_term_string',
		],
	];
	$jsonFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG;
@endphp
<!DOCTYPE html>
<html lang="es-AR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ $seoTitle }}</title>
		<meta name="description" content="{{ $seoDescription }}">
		<meta name="robots" content="{{ $robots }}">
		<link rel="canonical" href="{{ $canonical }}">
		<meta name="author" content="UnicFi">

		<meta name="theme-color" content="#000000">
		<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="48x48">
		<link rel="icon" type="image/png" href="{{ asset('webimages/logos/favicon-192.png') }}" sizes="192x192">
		<link rel="apple-touch-icon" href="{{ asset('webimages/logos/apple-touch-icon.png') }}">
		<link rel="manifest" href="{{ asset('site.webmanifest') }}">

		{{-- Open Graph / redes sociales --}}
		<meta property="og:locale" content="es_AR">
		<meta property="og:site_name" content="UnicFi">
		<meta property="og:type" content="{{ $seoType }}">
		<meta property="og:url" content="{{ $canonical }}">
		<meta property="og:title" content="{{ $seoTitle }}">
		<meta property="og:description" content="{{ $seoDescription }}">
		<meta property="og:image" content="{{ $seoImage }}">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="{{ $seoTitle }}">
		<meta name="twitter:description" content="{{ $seoDescription }}">
		<meta name="twitter:image" content="{{ $seoImage }}">

		{{-- Recursos para IA / buscadores --}}
		<link rel="alternate" type="text/plain" href="{{ url('llms.txt') }}" title="llms.txt">
		<link rel="alternate" type="text/plain" href="{{ url('llms-full.txt') }}" title="llms-full.txt">
		<link rel="sitemap" type="application/xml" href="{{ url('sitemap.xml') }}">

		{{-- Tipografías: Inter (textos) + Zilla Slab (títulos) --}}
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		@yield('preload')
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Zilla+Slab:wght@400;600;700&display=swap">

		{{-- Bootstrap 3 reducido (solo las clases que usa la web). Original completo: bootstrap.min.css --}}
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap3/bootstrap.web.min.css') }}?v={{ filemtime(public_path('plugins/bootstrap/bootstrap3/bootstrap.web.min.css')) }}">
		@yield('styles')
		<link rel="stylesheet" href="{{ asset('css/web.css') }}?v={{ filemtime(public_path('css/web.css')) }}">

		{{-- Datos estructurados (schema.org) --}}
		<script type="application/ld+json">{!! json_encode($organization, $jsonFlags) !!}</script>
		<script type="application/ld+json">{!! json_encode($website, $jsonFlags) !!}</script>
		@yield('jsonld')
	</head>
	<body>
		@include('layouts.web.partials.nav')

		<main id="contenido">
			@yield('content')
		</main>

		<button type="button" class="goToTop go-to-top" aria-label="Volver arriba">
			<span class="item">@include('layouts.web.partials.icon', ['name' => 'chevron-up'])</span>
		</button>
		@include('layouts.web.partials.scripts')
		@yield('scripts')
		@yield('custom_js')
	</body>
</html>
