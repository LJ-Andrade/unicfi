@extends('layouts.web.main')
@section('title', 'UnicFi | Inicio')

@section('styles')
	{{-- Slider --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
	{{-- HOME DESKTOP --}}
	<section class="home-desktop">
		<div class="swiper-container">
			<div class="inner-content">
				<img src="{{ asset('webimages/logos/logo.png') }}" alt="">
				<div class="text">
					<h1>Trabajamos para que te sientas bien</h1>
					<hr>
					<p>
						En UnicFi creemos que el mayor capital de las personas es la salud.
						Por eso te proponemos que te sumes a nuestro proyecto para
						juntos poder lograrlo.
					</p>
					<div class="buttons">
						<button class="btn btnMain">CONTACTO</button>
						<button class="btn btnMain">NOTICIAS</button>
					</div>
				</div>
			</div>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner1.jpg') }}" alt=""></div>
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner2.jpg') }}" alt=""></div>
				<div class="swiper-slide"><img src="{{ asset('webimages/home/slider/banner3.jpg') }}" alt=""></div>
			</div>
		</div>
	</section>
	{{-- HOME MOBILE --}}
	<section class="home-mobile">
		<div class="container inner-content">
			<div class="logo">
				<img src="{{ asset('webimages/logos/logo.png') }}" alt="">
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
					<button class="btn btnMain">CONTACTO</button>
					<button class="btn btnMain">NOTICIAS</button>
				</div>
			</div>
		</div>
	</section>
	
	<section id="Empresas" class="container-fluid home-big-menu">
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-1">
				<div class="inner">
					<h2>
						Entrenamientos personales, grupales y a distancia
					</h2>
					<a class="HomeItemBtn btn btnHollow">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay btnClose">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h2>Beneficios</h2>
						<hr>
						<p>
							Contamos con profesionales especialistas en entrenamientos
							personalizados, grupales y a distancia que
							podrán ayudarte a obtener tus metas más desafiantes.
							Estas propuestas están integradas por un equipo multidisciplinario
							de médicos, nutricionistas, psicólogos y kinesiólogos,
							brindándote apoyo permanente.
						</p>
					</div>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-2">
				<div class="inner">
					<h2>
						Beneficios
					</h2>
					<a class="HomeItemBtn btn btnMain">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay btnClose">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h2>Beneficios</h2>	
						<hr>
						<p>
							Proponemos actividades deportivas y recreativas para edificios durante todo el año
							aprovechando los espacios comunes y promoviendo el relacionamiento entre
							vecinos.
							Están basadas en diferentes actividades del fitness. tales como yoga, entrenamiento
							funcional, relajación, GAP, abdominales, localizada, natación y gimnasia en el agua.
							Además organizamos colonias de vacaciones y acciones lúdicas para niños.
						</p>
					</div>
				</div>
			</div>
		</div> {{-- /Row 1 --}}
	</section>
	{{-- Home Big Menu --}}
	<section id="Main-Big-Menu" class="container-fluid home-big-menu">

		{{-- ROW 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-1">
				<div class="inner">
					<h2>
						Entrenamientos personales, grupales y a distancia
					</h2>
					<a class="HomeItemBtn btn btnHollow">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay btnClose">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h2>Entrenamientos personales, grupales y a distancia</h2>
						<hr>
						<p>
							Contamos con profesionales especialistas en entrenamientos
							personalizados, grupales y a distancia que
							podrán ayudarte a obtener tus metas más desafiantes.
							Estas propuestas están integradas por un equipo multidisciplinario
							de médicos, nutricionistas, psicólogos y kinesiólogos,
							brindándote apoyo permanente.
						</p>
					</div>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-2">
				<div class="inner">
					<h2>
						Propuestas para <br> empresas
					</h2>
					<a class="HomeItemBtn btn btnMain">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay btnClose">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h2>Propuestas para consorcios</h2>	
						<hr>
						<p>
							Proponemos actividades deportivas y recreativas para edificios durante todo el año
							aprovechando los espacios comunes y promoviendo el relacionamiento entre
							vecinos.
							Están basadas en diferentes actividades del fitness. tales como yoga, entrenamiento
							funcional, relajación, GAP, abdominales, localizada, natación y gimnasia en el agua.
							Además organizamos colonias de vacaciones y acciones lúdicas para niños.
						</p>
					</div>
				</div>
			</div>
		</div> {{-- /Row 1 --}}

		{{-- Row 2 --}}
		<div class="row row1">
			{{-- Col 1 --}}
			<div class="col-md-6 pad0">
				<div class="item item-1" style="height: 600px">
					<div class="inner">
						<h2>
							Entrenamientos personales, grupales y a distancia
						</h2>
						<h2>
							Entrenamientos personales, grupales y a distancia
						</h2>
						<h2>
							Entrenamientos personales, grupales y a distancia
						</h2>
						
						
					
						<a class="HomeItemBtn btn btnHollow">Ver Más...</a>
					</div>
					<div class="Overlay overlay Hidden">
						<div class="Overlay-Color overlay-color">
							<a class="CloseOverlay btnClose">X</a>
						</div>
						<div class="Overlay-Text overlay-text Hidden">
							<h2>Entrenamientos personales, grupales y a distancia</h2>	
							<hr>
							<p>
								Contamos con profesionales especialistas en entrenamientos personalizados, grupales y a distancia que
								podrán ayudarte a obtener tus metas más desafiantes. Estas propuestas están integradas por un equipo multidisciplinario de médicos, 
								nutricionistas, psicólogos y kinesiólogos, brindándote apoyo permanente.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 pad0">
				
				<div class="col-md-12 item HomeItem item-1" style="height: 300px">
					<div class="inner">
						<h2>
							Entrenamientos personales, grupales y a distancia
						</h2>
						<a class="HomeItemBtn btn btnHollow">Ver Más...</a>
					</div>
					<div class="Overlay overlay Hidden">
						<div class="Overlay-Color overlay-color">
							<a class="CloseOverlay btnClose">X</a>
						</div>
						<div class="Overlay-Text overlay-text Hidden">
							<h2>Entrenamientos personales, grupales y a distancia</h2>
							<hr>
							<p>
								Contamos con profesionales especialistas en entrenamientos
								personalizados, grupales y a distancia que
								podrán ayudarte a obtener tus metas más desafiantes.
								Estas propuestas están integradas por un equipo multidisciplinario
								de médicos, nutricionistas, psicólogos y kinesiólogos,
								brindándote apoyo permanente.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 item HomeItem item-1" style="height: 300px">
					<div class="inner">
						<h2>
							Entrenamientos personales, grupales y a distancia
						</h2>
						<a class="HomeItemBtn btn btnHollow">Ver Más...</a>
					</div>
					<div class="Overlay overlay Hidden">
						<div class="Overlay-Color overlay-color">
							<a class="CloseOverlay btnClose">X</a>
						</div>
						<div class="Overlay-Text overlay-text Hidden">
							<h2>Entrenamientos personales, grupales y a distancia</h2>
							<hr>
							<p>
								Contamos con profesionales especialistas en entrenamientos
								personalizados, grupales y a distancia que
								podrán ayudarte a obtener tus metas más desafiantes.
								Estas propuestas están integradas por un equipo multidisciplinario
								de médicos, nutricionistas, psicólogos y kinesiólogos,
								brindándote apoyo permanente.
							</p>
						</div>
					</div>
				</div>
				
			</div>
			{{-- Col --}}
		</div>  {{-- /Row2 --}}
			

			

			

	</section>
	<div class="clearfix"></div>

	
	{{-- @include('layouts.web.partials.contact') --}}
	@include('layouts.web.partials.foot')
@endsection

@section('scripts')
	{{-- <script type="text/javascript" src="{{ asset('plugins/parallax/parallax.min.js') }}"></script> --}}
	{{-- Slider --}}
	<script type="text/javascript" src="{{ asset('plugins/swiper-slider/swiper.jquery.min.js') }}"></script>
@endsection

@section('custom_js')
	<script>    

		var mySwiper2 = new Swiper('.swiper-container-services', {
			grabCursor: true,
			autoplay: true,
			autoHeight: true,
			spaceBetween: 150,
			autoplay: {
				delay: 4000,
			},
			loop: true,
			speed: 2000
		});
		
		// var swiper = new Swiper('.swiper-container');
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

		$(document).on('submit','#MainContactForm',function(e){
			e.preventDefault();
			var data   = $(this).serialize();
			var route  = "{{ url('mail_sender') }}";
			// var route  = "{{ url('test_sender') }}";
			var loader = '<img src="{{ asset("images/loaders/loader-sm.svg") }}"/>' + '<div style="color: #fff; margin-left: 15px">Enviando...</div>';

			$.ajax({
				type: "POST",
				url: route,
				dataType: 'json',
				data: data,
				beforeSend: function(){
					var loader = "<img src='{{ asset('images/loaders/loader-sm.svg') }}'>";
					$('#ContactBtn').html('Enviando ' + loader);
				},
				success: function(data) {
					$('#MainContactForm').hide();
					$('#FormSuccess').removeClass('Hidden');
					$('#FormResponse').hide();
					console.log(data);
				},
				error: function(data) {
					$('#FormResponse').hide();
					$('#MainContactForm').hide();
					$('#ContactBtn').html('ENVIAR');
					$('#FormError').removeClass('Hidden');
					console.log(data);
				}
			});
		});
	</script>
@endsection