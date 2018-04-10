@extends('layouts.web.main')
@section('title', 'UnicFi | Inicio')

@section('styles')
	{{-- Slider --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
	{{-- HOME DESKTOP --}}
	<section class="Home-Desktop home-desktop">
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
	<section class="Home-Mobile home-mobile">
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
	
	{{-- Home Big Menu --}}
	<section id="Main-Big-Menu" class="container-fluid home-big-menu">

		{{-- ROW 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-1">
				<div class="inner">
					<h2>
						Entrenamientos <br> personales, <br> grupales y a distancia
					</h2>
					<a class="HomeItemBtn btn btnHollow">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay close-section-small">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h3>Entrenamientos personales, grupales y a distancia</h3>
						<hr>
						<div class="clearfix"></div>
						<p>
							Contamos con profesionales especialistas en entrenamientos personalizados, grupales y a distancia que
							podrán ayudarte a obtener tus metas más desafiantes. Estas propuestas están integradas por un equipo multi 
							disciplinario de médicos, nutricionistas, psicólogos y kinesiólogos, brindándote apoyo permanente.
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
					<a class="BtnEmpresas btn btnMain">Ver Más...</a>
				</div>
			</div>
		</div> {{-- /Row 1 --}}

		{{-- Row 2 --}}
		<div class="row row1">
			{{-- Col 1 --}}
			<div class="col-md-6 pad0">
				<div class="item item-3">
					<div class="inner">
						<h2>
							Diseño y gestión <br>de espacios<br> deportivos y recreativos
						</h2>
						<a class="HomeItemBtn btn btnMain">Ver Más...</a>
					</div>
					<div class="Overlay overlay Hidden">
						<div class="Overlay-Color overlay-color">
							<a class="CloseOverlay close-section-small">X</a>
						</div>
						<div class="Overlay-Text overlay-text Hidden">
							<h2>Diseño y gestión de espacios deportivos y recreativos</h2>	
							<hr>
							<div class="clearfix"></div>
							<p>
								Asesoramos en el diseño de espacios deportivos y
								recreativos de alta calidad. <br> <br>
								Nos encargamos de gestionar eficientemente los <br>
								espacios obteniendo el mejor rendimiento. <br><br>
								Contamos con las mejores marcas del mercado en <br>
								equipamientos deportivos y recreativos.
							</p>
							<a class="HomeItemBtn btn btnHollow">Consultanos</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 pad0">
				<div class="col-md-12 item HomeItem item-4">
					<div class="inner">
						<h2>
							Propuestas <br> para consorcios
						</h2>
						<a class="HomeItemBtn btn btnMain">Ver Más...</a>
					</div>
					<div class="Overlay overlay Hidden">
						<div class="Overlay-Color overlay-color">
							<a class="CloseOverlay close-section-small">X</a>
						</div>
						<div class="Overlay-Text overlay-text Hidden">
							<h2>Propuestas para consorcios</h2>
							<hr>
							<div class="clearfix"></div>
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
				<div class="col-md-12 item item-5">
					<div class="inner">
						<h2>
							Cursos, charlas y seminarios
						</h2>
						<p>
							Ofrecemos capacitaciones para instituciones educativas públicas y
							privadas relacionadas con el deporte y la salud. <br>
							Tenemos un staff de profesionales altamente calificados y
							preparados para los diferentes niveles
						</p>
						<a class="btn btnMain">Noticias</a>
					</div>
				</div>
				
			</div>
			{{-- Col --}}
		</div>  {{-- /Row2 --}}
			
	</section>
	<div class="clearfix"></div>

	<div class="anchor" id="EmpresasAnchor"></div>
	<section id="Empresas" class="container-fluid home-big-menu">
		<div class="Close-Empresas close-section">X</div>
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-1">
				<div class="inner">
					<h2>
						Clases grupales
					</h2>
					<p>
						Proponemos diferentes clases adaptadas a los espacios de cada
						compañía, como ciclismo de interior, GAP, baile, pilates sobre
						colchonetas, entrenamiento funcional, yoga, abdominales,
						estiramientos y muchas más en función de los requerimientos.
					</p>
					<a class="btn btnMain">Noticias</a>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-2">
				<div class="inner">
					<h2>
						Charlas Saludables
					</h2>
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
			
		</div> {{-- /Row 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-3">
				<div class="inner">
					<h2>
						Planificación deportiva <br>
					</h2>
					<p>
						Para aquellos que tengan objetivos específicos, planificamos
						rutinas adaptadas a cada uno según sus necesidades
					</p>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-4">
				<div class="inner">
					<h2>
						Pausas de trabajo
					</h2>
					<p>
						Organizamos pequeños espacios de relajación y <br>
						estiramientos dentro del horario laboral.
					</p>
					<a class="btn btnMain">Noticias</a>
				</div>
			</div>
			
		</div> {{-- /Row 1 --}}
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-xs-12 item item-empresas-5">
				<div class="inner">
					<h2>
						Equipos de running
					</h2>
					<p>
						Contamos con profesionales que orientarán a los colaboradores <br>
						para alcanzar los objetivos deseados en las diferentes distancias <br>
						del running realizando un seguimiento planificado de la <br>
						evolución de cada uno.
					</p>
					<a class="btn btnMain">Noticias</a>
				</div>
			</div>
		</div> {{-- /Row 1 --}}
		
		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item item-empresas-6">
				<div class="inner">
					<h2>
						Planes alimentarios
					</h2>
					<p>
						Brindamos asesoramientos nutricionales a medida <br>
						con seguimientos continuos realizados por <br>
						profesionales del área.
					</p>
					<a class="btn btnHollowOrange">Noticias</a>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item item-empresas-7">
				<div class="inner">
					<h2>
						Organización <br>de torneos
					</h2>
					<p>
						Promovemos eventos deportivos internos <br>
						y entre empresas.
					</p>
					<a class="btn btnWhite">Noticias</a>
				</div>
			</div>	
		</div> {{-- /Row 1 --}}


		<div class="row row1 row-flex">
			{{-- COL 1 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-8">
				<div class="inner" data-height="">
					<h2>
						Beneficios para <br> la empresa
					</h2>
					<a class="HomeItemBtn btn btnHollowWhite">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay close-section-small">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h3>Beneficios para la empresa</h3>
						<hr>
						<div class="clearfix"></div>
						<p>
							&bull; Mejora del estado de salud y de la calidad de vida de los trabajadores <br>
							&bull; Reducción del ausentismo laboral <br>
							&bull; Mejoras en el rendimiento y en la productividad <br>
							&bull; Mejoras en las relaciones de los grupos humanos <br>
							&bull; Ahorro para las empresas <br>
							&bull; Aumento de la satisfacción de los trabajadores <br>
							&bull; Visibilidad de la compañía en ámbitos vinculados a la Responsabilidad Social Corporativa (RSE)

						</p>
					</div>
				</div>
			</div>
			{{-- COL 2 --}}
			<div class="col-md-6 col-xs-12 item HomeItem item-empresas-9">
				<div class="inner">
					<h2>
						Beneficios para <br>los empleados
					</h2>
					<a class="HomeItemBtn btn btnMain">Ver Más...</a>
				</div>
				<div class="Overlay overlay Hidden">
					<div class="Overlay-Color overlay-color">
						<a class="CloseOverlay close-section-small">X</a>
					</div>
					<div class="Overlay-Text overlay-text Hidden">
						<h3>Beneficios para los empleados </h3>	
						<hr>
						<div class="clearfix"></div>
						<p>
							Mejora de la calidad de vida <br>
							Mejora de la satisfacción en el trabajo <br>
							Bajar nivel de stress <br>
							Disminución de lesiones <br>
							Disminuye el riesgo de padecer enfermedades <br>
							Mejora en las relaciones con los pares
						</p>
					</div>
				</div>
			</div>
			
		</div> {{-- /Row 1 --}}
	</section>

	
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