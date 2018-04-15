@extends('layouts.web.main')
@section('title', 'UnicFi | Inicio')

@section('styles')
	{{-- Slider --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
    <section class="main-head-section">
        <div class="main-logo">
		    <a href="{{ url('/') }}"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi Logo"></a>
        </div>
        <div class="container-fluid director-head">
            <div class="row">
                <div class="col-md-6 pad0 director-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider1.jpg') }}" alt="UnicFi Slider"></div>
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider2.jpg') }}" alt="UnicFi Slider"></div>
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider3.jpg') }}" alt="UnicFi Slider"></div>
                            <div class="swiper-slide"><img src="{{ asset('webimages/home/director/slider4.jpg') }}" alt="UnicFi Slider"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row right-head-image"></div>
                    <div class="row right-head-text">
                        <h4>Director y Fundador Unic Fi</h4>
                        <hr>
                        <div class="clearfix"></div>
                        <h1>Lic. Matías A. Arla</h1>
                        <p>
                            Con más de 20 años de experiencia en el mercado de la educación y el deporte, sus
                            comienzos fueron en su ciudad natal, Luján, en donde se formó como profesor de
                            Educación Física. <br>
                            Luego llegó a la ciudad de Buenos Aires para realizar su Licenciatura en Rendimiento
                            Deportivo y un posgrado en Gestión de Recursos Humanos. Durante estos años trabajó
                            en instituciones educativas y deportivas, públicas y privadas en Brasil, España y a nivel
                            local. Su personalidad creativa y desafiante lo llevaron a desarrollar este emprendimiento
                            cuyo único fin (únic fi) es que las personas se sientan bien.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid director-valores-section pad0">
        <div class="col-md-6 col-xs-12 valores-text pad0 valores-mobile">
            <h1>Valores</h1>
            <hr>
        </div>
        <div class="col-md-6 col-xs-12 items-with-icons pad0">
            <div class="col-md-6 col">
                <div class="item">
                    <img src="{{ asset('webimages/home/director/icon1.png') }}" alt="">
                    <span class="text">Flexibilidad</span>
                </div>
                <div class="item">
                    <img src="{{ asset('webimages/home/director/icon3.png') }}" alt="">
                    <span class="text">Orientación al cliente</span>
                </div>
                <div class="item">
                    <img src="{{ asset('webimages/home/director/icon2.png') }}" alt="">
                    <span class="text">Conocimiento del negocio</span>
                </div>
            </div>
            <div class="col-md-6 col">
                <div class="item">
                    <img src="{{ asset('webimages/home/director/icon4.png') }}" alt="">
                    <span class="text">Profesionalismo</span>
                </div>
                <div class="item">
                    <img src="{{ asset('webimages/home/director/icon5.png') }}" alt="">
                    <span class="text">Foco en resultados</span>
                </div>
                <div class="item">
                    <img src="{{ asset('webimages/home/director/icon6.png') }}" alt="">
                    <span class="text">Mejora continua</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 valores-text pad0 valores-desktop">
            <h1>Valores</h1>
            <hr>
        </div>
    </section>
    <section class="container-fluid director-last-section pad0">
        <div class="col-md-6 col-xs-12 pad0">
            <img src="{{ asset('webimages/home/director/icon7.png') }}" alt="">
            <h1>MISIÓN</h1>
            <p>
                Cuidar el bienestar y la salud en el ámbito <br>
                corporativo y en el individual, haciendo foco en la <br>
                satisfacción y motivación de las personas a través <br>
                de la estimulación psicofísica.
            </p>
            <hr class="shortBoldHr">
        </div>
        <div class="col-md-6 col-xs-12 pad0">
            <img src="{{ asset('webimages/home/director/icon8.png') }}" alt="">
            <h1>VISIÓN</h1>
            <p>
                Ser líderes en el mercado de servicios de <br>
                bienestar y salud, estando a la vanguardia de <br>
                las actividades y mejores prácticas
                profesionales
            </p>
            <hr class="shortBoldHr">
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