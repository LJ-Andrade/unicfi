@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'cimhe.com'])
            Vadmin | Consulta de Soporte técnico desde cimhe.com
        @endcomponent
    @endslot

    Nombre: {{ $data['name'] }} <br />
    Teléfono: {{ $data['phone'] }} <br />
    E-Mail: {{ $data['email'] }} <br />
    Mensaje: {{ $data['message'] }}
    
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->
        @endcomponent
    @endslot

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Mensaje enviado desde el sistema Vadmin
        @endcomponent
    @endslot
@endcomponent
