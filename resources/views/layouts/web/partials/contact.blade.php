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
					<div class="text2">011-2720-6422</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="{{ asset('webimages/icons/contact3.png') }}" alt="">
					<div class="text1">Teléfono</div>
					<div class="text2">(011) 4555-6379</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="{{ asset('webimages/icons/contact2.png') }}" alt="">
					<div class="text1">Encontranos</div>
					<div class="text2">Av. de Los Incas 3295 1° 11</div>
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
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'autocomplete' => 'nombre', 'required']) !!}
						</div>
					</div>
					<div class="col-md-6 col2">
						<div class="form-group">
							{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'autocomplete' => 'teléfono', 'required']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail', 'autocomplete' => 'email', 'required']) !!}
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Dejanos tu pedido o consulta. Te responderemos cuanto antes']) !!}
						</div>
					</div>
					{{ csrf_field() }}
					<div class="col-md-12">
						<button type"submit" class="contactBtn">ENVIAR</button>
					</div>
				{!! Form::close() !!}
			</div>
			<div id="FormResponse"></div>
			<div id="FormSuccess" class="row form-responses animated fadeIn Hidden">
				<i class="success ion-checkmark-round"></i>
				<h2>¡Mensaje enviado!</h2> 
				<p>Gracias por contactarse con nosotros. <br>
				Nos estaremos comunicando a la brevedad.</p>
			</div>
			<div id="FormError" class="row form-responses animated fadeIn Hidden">
				<i class="error ion-close-round"></i>
				<h2>¡ Ha ocurrido un error !</h2> 
				<p>Intente comunicarse directamente por mail o teléfono <br>
				Gracias.</p>
			</div>
		</div>

	</div> {{-- /.row .inner--}}
</div>{{-- /.container-fluid --}}
