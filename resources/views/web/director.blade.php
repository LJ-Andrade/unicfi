@extends('layouts.web.main')
@section('title', 'Director | UnicFi')
@section('description', 'Conocé al director de UnicFi, su trayectoria y los valores que guían nuestras propuestas de entrenamiento y bienestar.')

@section('jsonld')
	@php
		$person = [
			'@context' => 'https://schema.org',
			'@type' => 'Person',
			'@id' => url('director') . '#person',
			'name' => 'Matías A. Arla',
			'honorificPrefix' => 'Lic.',
			'jobTitle' => 'Director y fundador',
			'worksFor' => ['@id' => url('/') . '#organization'],
			'url' => url('director'),
			'image' => asset('webimages/home/director/img1.jpg'),
			'description' => 'Licenciado en Rendimiento Deportivo y profesor de Educación Física, con posgrado en Gestión de Recursos Humanos y más de 20 años de experiencia en educación y deporte en Argentina, Brasil y España.',
			'birthPlace' => ['@type' => 'Place', 'name' => 'Luján, Buenos Aires'],
			'knowsAbout' => ['Rendimiento deportivo', 'Educación física', 'Gestión de recursos humanos', 'Bienestar corporativo'],
			'sameAs' => ['https://www.linkedin.com/in/matías-agustín-arla-088320149/'],
		];
		$profile = [
			'@context' => 'https://schema.org',
			'@type' => 'ProfilePage',
			'url' => url('director'),
			'mainEntity' => ['@id' => url('director') . '#person'],
		];
	@endphp
	<script type="application/ld+json">{!! json_encode($person, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
	<script type="application/ld+json">{!! json_encode($profile, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endsection

@section('styles')
	{{-- Slider --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
    <section class="main-head-section">
        <div class="main-logo">
		    <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48"></a>
        </div>
        <div class="container-fluid director-head">
            <div class="row">
                <div class="col-md-6 pad0 director-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider1.webp') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider2.webp') }}" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider3.webp') }}" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider4.webp') }}" alt="" loading="lazy"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row right-head-image"></div>
                    <div class="row right-head-text">
                        <span class="director-eyebrow">Director y fundador de UnicFi</span>
                        <h1>Lic. Matías A. Arla</h1>
                        <p>
                            Con más de 20 años de experiencia en el mercado de la educación y el deporte, sus
                            comienzos fueron en su ciudad natal, Luján, donde se formó como profesor de
                            Educación Física.
                        </p>
                        <p>
                            Luego llegó a la ciudad de Buenos Aires para realizar su Licenciatura en Rendimiento
                            Deportivo y un posgrado en Gestión de Recursos Humanos. Durante estos años trabajó
                            en instituciones educativas y deportivas, públicas y privadas, en Brasil, España y a nivel
                            local. Su personalidad creativa y desafiante lo llevó a desarrollar este emprendimiento,
                            cuyo único fin (únic fi) es que las personas se sientan bien.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="director-valores-section" aria-labelledby="ValoresTitle">
        <div class="valores-list">
            @foreach([
                ['icon1', 'Flexibilidad'],
                ['icon4', 'Profesionalismo'],
                ['icon3', 'Orientación al cliente'],
                ['icon5', 'Foco en resultados'],
                ['icon2', 'Conocimiento del negocio'],
                ['icon6', 'Mejora continua'],
            ] as $valor)
                <div class="valor-item">
                    <span class="valor-icon"><img src="{{ asset('webimages/home/director/' . $valor[0] . '.png') }}" alt="" width="34" height="32" loading="lazy"></span>
                    <span class="valor-text">{{ $valor[1] }}</span>
                </div>
            @endforeach
        </div>
        <div class="valores-text">
            <h2 id="ValoresTitle">Valores</h2>
            <span class="director-bar" aria-hidden="true"></span>
        </div>
    </section>

    <section class="director-last-section">
        <article class="director-pillar">
            <span class="pillar-icon"><img src="{{ asset('webimages/home/director/icon7.png') }}" alt="" width="40" height="43" loading="lazy"></span>
            <h2>Misión</h2>
            <span class="director-bar" aria-hidden="true"></span>
            <p>
                Cuidar el bienestar y la salud en el ámbito corporativo y en el individual,
                haciendo foco en la satisfacción y motivación de las personas a través de la
                estimulación psicofísica.
            </p>
        </article>
        <article class="director-pillar">
            <span class="pillar-icon"><img src="{{ asset('webimages/home/director/icon8.png') }}" alt="" width="40" height="43" loading="lazy"></span>
            <h2>Visión</h2>
            <span class="director-bar" aria-hidden="true"></span>
            <p>
                Ser líderes en el mercado de servicios de bienestar y salud, estando a la
                vanguardia de las actividades y mejores prácticas profesionales.
            </p>
        </article>
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

		var mySwiper2 = new Swiper('.swiper-container-director', {
			// autoplay:true,
			pagination: true,
			// speed: 10000,
			spaceBetween: 0,
			//autoplay: true,
			autoplay: {
				delay: 2500,
			},
			
			delay: 0,
			loop: true,
			speed: 1500,
		});
		
		var mySwiper = new Swiper('.swiper-container', {
			// autoplay:true,
			pagination: true,
			// speed: 10000,
			spaceBetween: 0,
			//autoplay: true,
			autoplay: {
				delay: 2500,
			},
			
			delay: 0,
			loop: true,
			speed: 1500,
		}); 

	</script>  

@endsection