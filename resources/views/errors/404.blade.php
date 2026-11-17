@extends('layouts.web.main')
@section('title', 'Página no encontrada | UnicFi')
@section('description', 'La página que buscás no existe o fue movida. Volvé al inicio de UnicFi o mirá nuestras noticias.')
@section('robots', 'noindex, follow')

@section('content')
    <section class="error-page">
        <a href="{{ url('/') }}" class="error-logo"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48"></a>
        <div class="error-inner">
            <span class="error-code">404</span>
            <h1>No encontramos esta página</h1>
            <p>Puede que el enlace esté roto o que la página se haya movido. Te dejamos algunos caminos para seguir.</p>
            <div class="error-actions">
                <a href="{{ url('/') }}" class="btn btnMain">Volver al inicio</a>
                <a href="{{ url('noticias') }}" class="btn btnHollowWhite">Ver las noticias</a>
            </div>
        </div>
    </section>
@endsection
