<section id="contact" class="contact-section">
	<div class="contact-card">
		{{-- Panel de información --}}
		<div class="contact-aside">
			<span class="eyebrow">Estamos para ayudarte</span>
			<h2>Contactanos</h2>
			<p class="contact-aside-lead">
				¿Tenés una consulta o querés sumar a tu empresa o consorcio?
				Escribinos y te respondemos a la brevedad.
			</p>
			<ul class="contact-list">
				<li>
					<a href="https://wa.me/5491127206422" target="_blank" rel="noopener">
						<span class="contact-icon">@include('layouts.web.partials.icon', ['name' => 'whatsapp'])</span>
						<span>
							<span class="contact-label">WhatsApp</span>
							<span class="contact-value">+54 9 11 2720 6422</span>
						</span>
					</a>
				</li>
				<li>
					<a href="tel:+541145557672">
						<span class="contact-icon">@include('layouts.web.partials.icon', ['name' => 'phone'])</span>
						<span>
							<span class="contact-label">Teléfono</span>
							<span class="contact-value">+54 11 4555 7672</span>
						</span>
					</a>
				</li>
				<li>
					<a href="mailto:holaunicfi@gmail.com">
						<span class="contact-icon">@include('layouts.web.partials.icon', ['name' => 'mail'])</span>
						<span>
							<span class="contact-label">Mail</span>
							<span class="contact-value">holaunicfi@gmail.com</span>
						</span>
					</a>
				</li>
			</ul>
		</div>

		{{-- Formulario --}}
		<div class="contact-form">
			{!! Form::open(['id' => 'MainContactForm', 'method' => 'POST', 'class' => 'contact-form-grid']) !!}
				<div class="field">
					<label for="contact-name">Nombre</label>
					{!! Form::text('name', null, ['id' => 'contact-name', 'class' => 'form-control', 'placeholder' => 'Tu nombre', 'autocomplete' => 'name', 'required']) !!}
				</div>
				<div class="field">
					<label for="contact-phone">Teléfono</label>
					{!! Form::text('phone', null, ['id' => 'contact-phone', 'class' => 'form-control', 'placeholder' => '11 1234 5678', 'autocomplete' => 'tel', 'inputmode' => 'tel', 'required']) !!}
				</div>
				<div class="field field-full">
					<label for="contact-email">E-mail</label>
					{!! Form::email('email', null, ['id' => 'contact-email', 'class' => 'form-control', 'placeholder' => 'nombre@email.com', 'autocomplete' => 'email', 'required']) !!}
				</div>
				<div class="field field-full">
					<label for="contact-message">Mensaje</label>
					{!! Form::textarea('message', null, ['id' => 'contact-message', 'rows' => 5, 'class' => 'form-control', 'placeholder' => 'Dejanos tu pedido o consulta. Te responderemos cuanto antes.']) !!}
				</div>
				{{ csrf_field() }}
				<div class="field field-full">
					<button type="submit" class="contactBtn">
						Enviar mensaje
						@include('layouts.web.partials.icon', ['name' => 'send'])
					</button>
				</div>
			{!! Form::close() !!}
			<div id="FormResponse"></div>
			<div id="FormSuccess" class="form-responses is-success Hidden">
				<span class="form-response-icon">@include('layouts.web.partials.icon', ['name' => 'check'])</span>
				<h3>¡Mensaje enviado!</h3>
				<p>Gracias por contactarte con nosotros. Nos estaremos comunicando a la brevedad.</p>
			</div>
			<div id="FormError" class="form-responses is-error Hidden">
				<span class="form-response-icon">@include('layouts.web.partials.icon', ['name' => 'alert'])</span>
				<h3>Ha ocurrido un error</h3>
				<p>Intentá comunicarte directamente por mail o teléfono. Gracias.</p>
			</div>
		</div>
	</div>
</section>
