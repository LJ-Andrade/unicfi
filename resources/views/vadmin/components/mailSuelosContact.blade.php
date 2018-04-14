@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Solicitud de presupuesto de suelos
        @endcomponent
    @endslot

    Nombre: {{ $data['name'] }} <br />
    Teléfono: {{ $data['phone'] }} <br />
    E-Mail: {{ $data['email'] }} <br />
    Tipo de servicio: {{ $data['data4'] }} <br />
    Empresa (CUIT): {{ $data['data5'] }} <br />
    Dirección de obra: {{ $data['data6'] }} <br />
    Responsable de obra: {{ $data['data7'] }} <br />
    Requerimiento particular: {{ $data['data8'] }}
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
