<div id="contact" class="container-fluid contact-section wow animated fadeIn">
	<div class="row inner">
		<div class=" col-lg-6 col-md-12 col-xs-12 contact-image">
			<h1>Contactanos</h1>
			<hr class="shortBoldHr">
		</div>
		<div class="col-lg-6 col-md-12 col-xs-12 contact-form">
			<div class="row contact-data">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="{{ asset('webimages/icons/contact1.png') }}" alt="">
					<div class="text1">Celular</div>
					<div class="text2">11-0058-2258</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="{{ asset('webimages/icons/contact3.png') }}" alt="">
					<div class="text1">Teléfono</div>
					<div class="text2">(011) 4545-4545 / 4545-4545</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="{{ asset('webimages/icons/contact2.png') }}" alt="">
					<div class="text1">Encontranos</div>
					<div class="text2">Calle 234 - C.A.B.A </div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="{{ asset('webimages/icons/contact4.png') }}" alt="">
					<div class="text1">Mail</div>
					<div class="text2">hola@unicfi.com</div>
				</div>
			</div>
			<div class="row">
				{!! Form::open(['id' => 'MainContactForm', 'method' => 'POST']) !!}
					<div class="col-md-6 col1">
						<div class="form-group">
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
						</div>
					</div>
					<div class="col-md-6 col2">
						<div class="form-group">
							{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail', 'required']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Dejanos tu pedido o consulta. Te responderemos cuanto antes']) !!}
						</div>
					</div>
					{{ csrf_field() }}
					<div class="col-md-12">
						{!! Form::submit('Enviar', ['class' => 'contactBtn']) !!}
					</div>
				{!! Form::close() !!}
			</div>
			<div id="FormResponse"></div>
			<div id="FormSuccess" class="row form-responses animated fadeIn wow slideInUp Hidden">
				<i class="success ion-checkmark-round"></i>
				<h2>Mensaje Enviado !</h2> 
				<p>Gracias por contactarse con nosotros. <br>
				Nos estaremos comunicando a la brevedad.</p>
			</div>
			<div id="FormError" class="row form-responses animated fadeIn  fadeIn wow slideInUp Hidden">
				<i class="error ion-close-round"></i>
				<h2>Ha ocurrido un error !</h2> 
				<p>Intente comunicarse directamente por mail o teléfono <br>
				Gracias.</p>
			</div>
		</div>

	</div> {{-- /.row .inner--}}
</div>{{-- /.container-fluid --}}
<div class="container-fluid social-networks">
	<div class="container social-icons">
		<div class="row horizontal-list">
			<ul>
				<a href="https://www.facebook.com/Únic-Fi-204735563635331/?modal=admin_todo_tour"><li><i class="ion-social-facebook"></i></li></a>
				<a href="https://plus.google.com/u/1/116910659861858842386"><li><i class="ion-social-googleplus"></i></li></a>
				<a href=""><li><i class="ion-social-twitter"></i></li></a>
				<a href="https://www.instagram.com/unicfi/"><li><i class="ion-social-instagram-outline"></i></li></a>
				<a href="https://www.youtube.com/channel/UCt-BkbOs5IEo4TPaXcjdY2A?view_as=subscriber"><li><i class="ion-social-youtube"></i></li></a>
			</ul>
		</div>
	</div>
</div>