@extends('layouts.web.main')
@section('title', 'UnicFi | Entrenamiento, bienestar corporativo y espacios deportivos')
@section('description', 'Entrenamientos personales, grupales y online, bienestar corporativo para empresas, actividades para consorcios y diseño de espacios deportivos en Buenos Aires.')

@section('preload')
	<link rel="preload" as="image" type="image/webp" href="{{ asset('webimages/home/slider/banner1.webp') }}" media="(min-width: 801px)" fetchpriority="high">
	<link rel="preload" as="image" type="image/webp" href="{{ asset('webimages/home/background-mobile.webp') }}" media="(max-width: 800px)" fetchpriority="high">
@endsection

@section('jsonld')
	@php
		$services = [
			['Entrenamientos personales, grupales y a distancia', 'Entrenamiento personalizado, grupal y online con un equipo multidisciplinario de médicos, nutricionistas, psicólogos y kinesiólogos.'],
			['Bienestar corporativo para empresas', 'Clases grupales, charlas saludables, pausas activas, planificación deportiva, equipos de running, planes alimentarios y torneos para empresas.'],
			['Propuestas para consorcios', 'Actividades deportivas y recreativas en los espacios comunes de edificios, colonias de vacaciones y acciones lúdicas para niños.'],
			['Diseño y gestión de espacios deportivos', 'Asesoramiento en el diseño y gestión eficiente de espacios deportivos y recreativos, con equipamiento de primeras marcas.'],
			['Cursos, charlas y seminarios', 'Charlas sobre salud y bienestar: Primeros Auxilios y RCP, Ergonomía, Nutrición y Adicciones.'],
		];
		$catalog = [
			'@context' => 'https://schema.org',
			'@type' => 'OfferCatalog',
			'name' => 'Servicios de UnicFi',
			'itemListElement' => array_map(function($s){ return ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $s[0], 'description' => $s[1], 'provider' => ['@id' => url('/') . '#organization'], 'areaServed' => 'Ciudad Autónoma de Buenos Aires']]; }, $services),
		];
		// Preguntas frecuentes: se usan en la sección visible y en el JSON-LD (FAQPage)
		$faqs = [
			['¿Qué servicios ofrece UnicFi?', 'Entrenamientos personales, grupales y online; programas de bienestar corporativo para empresas; actividades deportivas y recreativas para consorcios; diseño y gestión de espacios deportivos; y cursos y charlas de Primeros Auxilios y RCP, Ergonomía, Nutrición y Adicciones.'],
			['¿Dónde se realizan los entrenamientos?', 'Entrenamos principalmente en Palermo y Belgrano, en la Ciudad Autónoma de Buenos Aires: clases al aire libre, natación para adultos y entrenamiento personalizado. También damos clases online en vivo, y para empresas y consorcios vamos a sus propios espacios.'],
			['¿Tienen clases online?', 'Sí. Hay clases online en vivo de funcional, localizada y stretching, de lunes a viernes, guiadas por profesores para que puedas entrenar desde tu casa.'],
			['¿Cómo funciona el programa de bienestar para empresas?', 'Armamos una propuesta a medida que puede incluir clases grupales en la empresa, pausas activas, charlas saludables, planificación deportiva, equipos de running, planes alimentarios y organización de torneos. También funciona para equipos que trabajan en home office.'],
			['¿Qué actividades ofrecen para consorcios y edificios?', 'Organizamos actividades en los espacios comunes del edificio, como yoga, funcional, natación y gimnasia en el agua, además de colonias de vacaciones y actividades recreativas para chicos.'],
			['¿Quiénes dan las clases?', 'Profesionales especialistas en entrenamiento, acompañados por un equipo multidisciplinario de médicos, nutricionistas, psicólogos y kinesiólogos.'],
			['¿Cómo me inscribo o pido una propuesta?', 'Escribinos por WhatsApp al +54 9 11 2720 6422, llamanos al +54 11 4555 7672, mandanos un mail a holaunicfi@gmail.com o completá el formulario de contacto de esta página.'],
		];
		$faqPage = [
			'@context' => 'https://schema.org',
			'@type' => 'FAQPage',
			'mainEntity' => array_map(function($f){ return ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]]; }, $faqs),
		];
	@endphp
	<script type="application/ld+json">{!! json_encode($catalog, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
	<script type="application/ld+json">{!! json_encode($faqPage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endsection

@section('styles')
	{{-- Slider --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
	{{-- HOME DESKTOP --}}
	<section class="Home-Desktop home-desktop">
		<div class="swiper-container">
			<div class="inner-content">
				<img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48">
				<div class="text">
					<h1>Trabajamos para que te sientas bien</h1>
					<hr>
					<p>
						En UnicFi creemos que el mayor capital de las personas es la salud.
						Por eso te proponemos que te sumes a nuestro proyecto para
						juntos poder lograrlo.
					</p>
					<div class="buttons">
						<a href="#contact" class="btn btnMain">Contacto</a>
						<a href="{{ url('noticias') }}" class="btn btnHollowWhite">Noticias</a>
					</div>
				</div>
			</div>
			<div class="scroll-animation">
				<div class="icon-scroll"></div>
			</div>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner1.webp') }}" alt="Entrenamiento al aire libre con UnicFi" width="1920" height="1080" fetchpriority="high"></div>
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner2.webp') }}" alt="Clase grupal de entrenamiento funcional" width="1920" height="1080" loading="lazy"></div>
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner3.webp') }}" alt="Entrenamiento personalizado" width="1920" height="1080" loading="lazy"></div>
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner4.webp') }}" alt="Actividad física y bienestar" width="1920" height="1080" loading="lazy"></div>
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner5.webp') }}" alt="Equipo de entrenamiento UnicFi" width="1920" height="1080" loading="lazy"></div>
			</div>
		</div>
	</section>
	{{-- HOME MOBILE --}}
	<section class="Home-Mobile home-mobile">
		<div class="container inner-content">
			<div class="logo">
				<img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48">
			</div>
			<div class="text">
				<h1>Trabajamos para que te sientas bien</h1>
				<hr>
				<p>
					En UnicFi creemos que el mayor capital de las personas es la salud.
					Por eso te proponemos que te sumes a nuestro proyecto para
					juntos poder lograrlo.
				</p>
				<div class="buttons">
					<a href="#contact" class="btn btnMain">Contacto</a>
					<a href="{{ url('noticias') }}" class="btn btnHollowWhite">Noticias</a>
				</div>
			</div>
		</div>
	</section>

	{{-- SERVICIOS DE VALOR --}}
	<section id="Servicios" class="value-services">
		<div class="value-services-head">
			<span class="eyebrow">Servicios de valor</span>
			<h2>Salud y movimiento para cada etapa</h2>
			<p>
				Acompañamos a personas, empresas y consorcios con propuestas de actividad física
				pensadas a medida y guiadas por profesionales.
			</p>
		</div>
		<div class="value-services-grid">
			<article class="value-card">
				<span class="value-card-icon">@include('layouts.web.partials.icon', ['name' => 'users'])</span>
				<h3>Entrenamiento al aire libre</h3>
				<p>Funcional, running team y preparación física para fútbol en Palermo, además de natación para adultos en Belgrano.</p>
			</article>
			<article class="value-card">
				<span class="value-card-icon">@include('layouts.web.partials.icon', ['name' => 'video'])</span>
				<h3>Clases online en vivo</h3>
				<p>Funcional, localizada y stretching de lunes a viernes, con profes en vivo para entrenar desde tu casa.</p>
			</article>
			<article class="value-card">
				<span class="value-card-icon">@include('layouts.web.partials.icon', ['name' => 'briefcase'])</span>
				<h3>Bienestar corporativo</h3>
				<p>Pausas activas, clases y charlas de salud para equipos de trabajo, también en modalidad home office.</p>
			</article>
			<article class="value-card">
				<span class="value-card-icon">@include('layouts.web.partials.icon', ['name' => 'ball'])</span>
				<h3>Espacios deportivos</h3>
				<p>Diseñamos y gestionamos instalaciones deportivas y recreativas para obtener el mejor rendimiento.</p>
			</article>
		</div>
	</section>

	{{-- Home Big Menu --}}
	<section id="Main-Big-Menu" class="container-fluid home-big-menu">
		<div class="anchor" id="PrupuestaParaEmpresas"></div>
		{{-- ROW 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-1 has-light-shade">
				<div class="inner">
					<h2>Entrenamientos personales, grupales y a distancia</h2>
					<p class="item-subtitle">Un equipo multidisciplinario a tu lado</p>
					<p>
						Contamos con profesionales especialistas en entrenamientos personalizados, grupales y a distancia que
						podrán ayudarte a obtener tus metas más desafiantes. Estas propuestas están integradas por un equipo
						de médicos, nutricionistas, psicólogos y kinesiólogos, brindándote apoyo permanente.
					</p>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-2 has-shade">
				<div class="inner">
					<h2>Propuestas para empresas</h2>
					<p class="item-subtitle">Bienestar corporativo para tu equipo</p>
					<p>
						Clases grupales, charlas saludables, pausas de trabajo, running y torneos
						para mejorar la salud y el clima laboral.
					</p>
					<button type="button" class="BtnEmpresas btn btnMain" aria-controls="Empresas">Ver propuestas</button>
				</div>
			</div>
		</div> {{-- /Row 1 --}}

		{{-- Row 2 --}}
		<div class="anchor" id="DeportivosRecreativos"></div>
		<div class="row row1 row-flex">
			{{-- Col 1 --}}
			<div class="col-md-6 pad0 col-stack">
				<div class="item item-3 has-shade">
					<div class="inner">
						<h2>Diseño y gestión de espacios deportivos y recreativos</h2>
						<p class="item-subtitle">Espacios de alta calidad, bien gestionados</p>
						<p>
							Asesoramos en el diseño de espacios deportivos y recreativos de alta calidad
							y nos encargamos de gestionarlos eficientemente para obtener el mejor rendimiento.
							Contamos con las mejores marcas del mercado en equipamiento deportivo y recreativo.
						</p>
						<a href="{{ url('categories/Espacios Deportivos') }}" class="btn btnHollowWhite">Noticias</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 pad0 col-stack">
				<div class="item HomeItem item-4 has-light-shade">
					<div class="inner">
						<h2>Propuestas para consorcios</h2>
						<p class="item-subtitle">Actividades todo el año en los espacios comunes</p>
						<p>
							Proponemos actividades deportivas y recreativas para edificios que promueven el
							relacionamiento entre vecinos: yoga, entrenamiento funcional, relajación, GAP,
							abdominales, localizada, natación y gimnasia en el agua. Además organizamos
							colonias de vacaciones y acciones lúdicas para niños.
						</p>
						<a href="{{ url('categories/Consorcios') }}" class="btn btnMain">Noticias</a>
					</div>
				</div>
				<div class="item item-5 has-light-shade">
					<div class="inner">
						<h2>Cursos, charlas y seminarios</h2>
						<p class="item-subtitle">Formación en salud y bienestar</p>
						<p>
							Ofrecemos charlas en diferentes temáticas relacionadas con la salud y el bienestar,
							como Primeros Auxilios y RCP, Ergonomía, Nutrición, Adicciones, etc.
						</p>
						<a href="{{ url('categories/Cursos y Seminarios') }}" class="btn btnMain">Noticias</a>
					</div>
				</div>
			</div>
		</div>  {{-- /Row2 --}}

	</section>
	<div class="clearfix"></div>


	{{-- SECTION EMPRESAS --}}
	<div class="anchor" id="EmpresasAnchor"></div>
	<section id="Empresas" class="container-fluid home-big-menu">
		<button type="button" id="CerrarPropuestaParaEmpresas" class="Close-Empresas close-section" aria-label="Cerrar propuestas para empresas">X</button>
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-1">
				<div class="inner">
					<h2>Clases grupales</h2>
					<p>
						Proponemos diferentes clases adaptadas a los espacios de cada
						compañía, como ciclismo de interior, GAP, baile, pilates sobre
						colchonetas, entrenamiento funcional, yoga, abdominales,
						estiramientos y muchas más en función de los requerimientos.
					</p>
					<a href="{{ url('categories/Clases grupales') }}" class="btn btnMain">Noticias</a>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-2">
				<div class="inner">
					<h2>Charlas saludables</h2>
					<p>
						Ofrecemos charlas en diferentes temáticas relacionadas con la salud y el bienestar,
						como Primeros Auxilios y RCP, Ergonomía, Nutrición, Adicciones, etc.
					</p>
				</div>
			</div>
		</div> {{-- /Row 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-3">
				<div class="inner">
					<h2>Planificación deportiva</h2>
					<p>
						Para aquellos que tengan objetivos específicos, planificamos
						rutinas adaptadas a cada uno según sus necesidades.
					</p>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-4">
				<div class="inner">
					<h2>Pausas de trabajo</h2>
					<p>
						Organizamos pequeños espacios de relajación y
						estiramientos dentro del horario laboral.
					</p>
					<a href="{{ url('categories/Pausas de trabajo') }}" class="btn btnMain">Noticias</a>
				</div>
			</div>
		</div> {{-- /Row 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-xs-12 item item-empresas-5 has-shade">
				<div class="inner">
					<h2>Equipos de running</h2>
					<p>
						Contamos con profesionales que orientarán a los colaboradores
						para alcanzar los objetivos deseados en las diferentes distancias
						del running, realizando un seguimiento planificado de la
						evolución de cada uno.
					</p>
					<a href="{{ url('categories/Running') }}" class="btn btnMain">Noticias</a>
				</div>
			</div>
		</div> {{-- /Row 1 --}}

		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item item-empresas-6">
				<div class="inner">
					<h2>Planes alimentarios</h2>
					<p>
						Brindamos asesoramientos nutricionales a medida
						con seguimientos continuos realizados por
						profesionales del área.
					</p>
					<a href="{{ url('categories/Planes alimentarios') }}" class="btn btnHollowOrange">Noticias</a>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item item-empresas-7 has-shade">
				<div class="inner">
					<h2>Organización de torneos</h2>
					<p>
						Promovemos eventos deportivos internos
						y entre empresas.
					</p>
					<a href="{{ url('categories/Torneos') }}" class="btn btnWhite">Noticias</a>
				</div>
			</div>
		</div> {{-- /Row 1 --}}


		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-8">
				<div class="inner">
					<h2>Beneficios para las empresas</h2>
					<p class="item-subtitle">Lo que gana tu organización</p>
					<ul class="item-list">
						<li>Mejora del estado de salud y de la calidad de vida de los trabajadores</li>
						<li>Reducción del ausentismo laboral</li>
						<li>Mejoras en el rendimiento y en la productividad</li>
						<li>Mejoras en las relaciones de los grupos humanos</li>
						<li>Ahorro para las empresas</li>
						<li>Aumento de la satisfacción de los trabajadores</li>
						<li>Visibilidad de la compañía en ámbitos vinculados a la Responsabilidad Social Empresaria (RSE)</li>
					</ul>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-9">
				<div class="inner">
					<h2>Beneficios para los empleados</h2>
					<p class="item-subtitle">Lo que gana tu equipo</p>
					<ul class="item-list">
						<li>Mejora de la calidad de vida</li>
						<li>Mejora de la satisfacción en el trabajo</li>
						<li>Baja el nivel de estrés</li>
						<li>Disminuye la probabilidad de lesiones</li>
						<li>Disminuye el riesgo de padecer enfermedades</li>
						<li>Mejora las relaciones con los pares</li>
					</ul>
				</div>
			</div>
		</div> {{-- /Row 1 --}}
	</section>

	{{-- PREGUNTAS FRECUENTES --}}
	<section id="Preguntas" class="faq-section" aria-labelledby="FaqTitle">
		<div class="faq-wrap">
			<div class="faq-head">
				<span class="eyebrow">Preguntas frecuentes</span>
				<h2 id="FaqTitle">Lo que más nos preguntan</h2>
				<p>¿Tenés otra duda? <a href="#contact">Escribinos</a> y te respondemos a la brevedad.</p>
			</div>
			<div class="faq-list">
				@foreach($faqs as $i => $faq)
					<details class="faq-item" @if($i === 0) open @endif>
						<summary>
							<h3>{{ $faq[0] }}</h3>
							<span class="faq-toggle" aria-hidden="true"></span>
						</summary>
						<p>{{ $faq[1] }}</p>
					</details>
				@endforeach
			</div>
		</div>
	</section>

	@include('layouts.web.partials.contact')
	@include('layouts.web.partials.social')
	@include('layouts.web.partials.foot')
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/swiper-slider/swiper.jquery.min.js') }}"></script>
@endsection

@section('custom_js')
	<script>

		var mySwiper = new Swiper('.swiper-container', {
			pagination: true,
			spaceBetween: 0,
			autoplay: {
				delay: 2500,
			},
			delay: 0,
			loop: true,
			speed: 1500,
		});

		var mySwiper2 = new Swiper('.swiper-container-services', {
			grabCursor: true,
			autoHeight: true,
			spaceBetween: 150,
			autoplay: {
				delay: 4000,
			},
			loop: true,
			speed: 2000
		});

	</script>
@endsection
