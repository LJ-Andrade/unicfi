@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Contacto desde la Web
        @endcomponent
    @endslot

    Nombre: {{ $data['name'] }} <br />
    Teléfono: {{ $data['phone'] }} <br />
    E-Mail: {{ $data['email'] }} <br />
    Mensaje: {{ $data['message'] }} <br />
    
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Mensaje enviado desde el sistema Vadmin | Cimhe - <?php echo date('Y') ?>
        @endcomponent
    @endslot
@endcomponent
