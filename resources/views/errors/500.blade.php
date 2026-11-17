@extends('layouts.web.main')
@section('title', 'Error del servidor | UnicFi')
@section('description', 'Tuvimos un problema al cargar esta página. Probá de nuevo en unos minutos.')
@section('robots', 'noindex, follow')

@section('content')
    <section class="error-page">
        <a href="{{ url('/') }}" class="error-logo"><img src="{{ asset('webimages/logos/logo.png') }}" alt="UnicFi" width="166" height="48"></a>
        <div class="error-inner">
            <span class="error-code">500</span>
            <h1>Algo salió mal</h1>
            <p>Tuvimos un problema al cargar esta página. Probá de nuevo en unos minutos o escribinos si el problema sigue.</p>
            <div class="error-actions">
                <a href="{{ url('/') }}" class="btn btnMain">Volver al inicio</a>
                <a href="https://wa.me/5491127206422" class="btn btnHollowWhite" target="_blank" rel="noopener">Escribinos por WhatsApp</a>
            </div>
        </div>
    </section>
@endsection
