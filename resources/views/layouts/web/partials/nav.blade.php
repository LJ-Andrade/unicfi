<button class="MainMenuBtn main-menu-btn hamburger hamburger--collapse" type="button">
    <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>

<div id="MainMenu" class="main-menu">
    <div class="inner-menu">
        <ul class="vertical-list">
            <a href="{{ url('/') }}"><li class="MainMenuA wow slideInLeft" data-wow-duration="0.2s" data-wow-delay="0.2s">Inicio</li></a>
            <a href="{{ url('noticias') }}"><li class="MainMenuA wow slideInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">Noticias</li></a>
            <a href="{{ url('galeria') }}"><li class="MainMenuA wow slideInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">Galería</li></a>
            <a href="{{ url('director') }}"><li class="MainMenuA wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="0.6s">Director</li></a>
            <a href="#contact" id="ContactNavBtn"><li class="MainMenuA wow slideInLeft" data-wow-duration="0.6" data-wow-delay="0.8s">Contacto</li></a>
        </ul>
    </div>
    
    <div class="inner-text">
        <img class="logo" src="{{ asset('webimages/logos/logomenu.png') }}" alt=""> <br>
        <div class="text">Quienes Somos</div>
        <div class="short-divisor-right"></div>
        <div class="clearfix"></div>
        <div class="text">Contactanos</div>
        <br>
        <div class="social-icons">
            <div class="row horizontal-list">
                <ul>
                    <a href="https://www.facebook.com/Únic-Fi-204735563635331/?modal=admin_todo_tour"><li><i class="ion-social-facebook"></i></li></a> 
                    <a href="https://plus.google.com/u/1/116910659861858842386"><li><i class="ion-social-googleplus"></i></li></a> 
                    <a href="https://twitter.com/unicfi"><li><i class="ion-social-twitter"></i></li></a> 
                    <a href="https://www.instagram.com/unicfi/"><li><i class="ion-social-instagram-outline"></i></li></a> 
                    <a href="https://www.youtube.com/channel/UCt-BkbOs5IEo4TPaXcjdY2A?view_as=subscriber"><li><i class="ion-social-youtube"></i></li></a> 
                </ul>
            </div>
        </div>
    </div>
</div>
