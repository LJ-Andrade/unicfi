<div class="site-footer-top">
	<div class="footer-wrap">
		<div class="footer-brand">
			<img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" class="footer-logo">
			<p>
				Trabajamos para que te sientas bien. Actividad física y bienestar
				para personas, empresas y consorcios.
			</p>
			<div class="footer-social">
				<a href="https://www.facebook.com/Únic-Fi-204735563635331/" target="_blank" rel="noopener" aria-label="Facebook">@include('layouts.web.partials.icon', ['name' => 'facebook'])</a>
				<a href="https://www.instagram.com/unicfi/" target="_blank" rel="noopener" aria-label="Instagram">@include('layouts.web.partials.icon', ['name' => 'instagram'])</a>
				<a href="https://www.youtube.com/channel/UCt-BkbOs5IEo4TPaXcjdY2A" target="_blank" rel="noopener" aria-label="YouTube">@include('layouts.web.partials.icon', ['name' => 'youtube'])</a>
				<a href="https://www.linkedin.com/in/matías-agustín-arla-088320149/" target="_blank" rel="noopener" aria-label="LinkedIn">@include('layouts.web.partials.icon', ['name' => 'linkedin'])</a>
			</div>
		</div>

		<nav class="footer-col" aria-label="Navegación del pie">
			<h4>Navegación</h4>
			<ul>
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li><a href="{{ url('noticias') }}">Noticias</a></li>
				<li><a href="{{ url('galeria') }}">Galería</a></li>
				<li><a href="{{ url('director') }}">Director</a></li>
				<li><a href="{{ url('/?#contact') }}">Contacto</a></li>
			</ul>
		</nav>

		<div class="footer-col">
			<h4>Contacto</h4>
			<ul class="footer-contact">
				<li><a href="https://wa.me/5491127206422" target="_blank" rel="noopener">@include('layouts.web.partials.icon', ['name' => 'whatsapp']) +54 9 11 2720 6422</a></li>
				<li><a href="tel:+541145557672">@include('layouts.web.partials.icon', ['name' => 'phone']) +54 11 4555 7672</a></li>
				<li><a href="mailto:holaunicfi@gmail.com">@include('layouts.web.partials.icon', ['name' => 'mail']) holaunicfi@gmail.com</a></li>
			</ul>
		</div>
	</div>
</div>
