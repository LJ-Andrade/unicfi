<button class="MainMenuBtn main-menu-btn hamburger hamburger--collapse" type="button" aria-label="Abrir menú" aria-controls="MainMenu">
    <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>

<div id="MainMenu" class="main-menu" role="dialog" aria-label="Menú principal">
    <div class="main-menu-wrap">
        <div class="main-menu-top">
            <a href="{{ url('/') }}" class="main-menu-logo">
                <img src="{{ asset('webimages/logos/logomenu.png') }}" alt="UnicFi">
            </a>
        </div>

        <nav class="main-menu-nav" aria-label="Principal">
            <ul>
                <li style="--i:0"><a class="MainMenuA" href="{{ url('/') }}"><span class="num">01</span><span class="label">Inicio</span>@include('layouts.web.partials.icon', ['name' => 'arrow-right'])</a></li>
                <li style="--i:1"><a class="MainMenuA" href="{{ url('/?#Servicios') }}"><span class="num">02</span><span class="label">Servicios</span>@include('layouts.web.partials.icon', ['name' => 'arrow-right'])</a></li>
                <li style="--i:2"><a class="MainMenuA" href="{{ url('noticias') }}"><span class="num">03</span><span class="label">Noticias</span>@include('layouts.web.partials.icon', ['name' => 'arrow-right'])</a></li>
                <li style="--i:3"><a class="MainMenuA" href="{{ url('galeria') }}"><span class="num">04</span><span class="label">Galería</span>@include('layouts.web.partials.icon', ['name' => 'arrow-right'])</a></li>
                <li style="--i:4"><a class="MainMenuA" href="{{ url('director') }}"><span class="num">05</span><span class="label">Director</span>@include('layouts.web.partials.icon', ['name' => 'arrow-right'])</a></li>
                <li style="--i:5"><a class="MainMenuA" href="{{ url('/?#contact') }}" id="ContactNavBtn"><span class="num">06</span><span class="label">Contacto</span>@include('layouts.web.partials.icon', ['name' => 'arrow-right'])</a></li>
            </ul>
        </nav>

        <aside class="main-menu-aside">
            <p class="main-menu-tagline">Trabajamos para que te sientas bien.</p>

            <div class="main-menu-block">
                <span class="main-menu-title">Contacto</span>
                <ul class="main-menu-contact">
                    <li><a href="https://wa.me/5491127206422" target="_blank" rel="noopener">@include('layouts.web.partials.icon', ['name' => 'whatsapp']) +54 9 11 2720 6422</a></li>
                    <li><a href="tel:+541145557672">@include('layouts.web.partials.icon', ['name' => 'phone']) +54 11 4555 7672</a></li>
                    <li><a href="mailto:holaunicfi@gmail.com">@include('layouts.web.partials.icon', ['name' => 'mail']) holaunicfi@gmail.com</a></li>
                </ul>
            </div>

            <div class="main-menu-block">
                <span class="main-menu-title">Seguinos</span>
                <div class="main-menu-social">
                    <a href="https://www.facebook.com/Únic-Fi-204735563635331/" target="_blank" rel="noopener" aria-label="Facebook">@include('layouts.web.partials.icon', ['name' => 'facebook'])</a>
                    <a href="https://www.instagram.com/unicfi/" target="_blank" rel="noopener" aria-label="Instagram">@include('layouts.web.partials.icon', ['name' => 'instagram'])</a>
                    <a href="https://www.youtube.com/channel/UCt-BkbOs5IEo4TPaXcjdY2A" target="_blank" rel="noopener" aria-label="YouTube">@include('layouts.web.partials.icon', ['name' => 'youtube'])</a>
                    <a href="https://www.linkedin.com/in/matías-agustín-arla-088320149/" target="_blank" rel="noopener" aria-label="LinkedIn">@include('layouts.web.partials.icon', ['name' => 'linkedin'])</a>
                </div>
            </div>
        </aside>
    </div>
</div>
