@extends('layouts.vadmin.main')
{{-- PAGE TITLE --}}
@section('title', 'Vadmin | Soporte Técnico')

@section('header')
	@component('vadmin.components.header')
		@slot('breadcrums')
		    <li class="breadcrumb-item"><a href="{{ url('vadmin')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Soporte Técnico</li>
		@endslot
		@slot('actions')@endslot
		@slot('searcher')@endslot
	@endcomponent
@endsection

@section('content')
    <div class="documentation">
        <h1>Soporte Técnico</h1>
        <hr class="softhr">
        <div class="row col-md-12">
            <div class=" card">
                <div class="card-header">
                    <h2 class="" id="basic-layout-card-center">Estamos para atender cualquier duda o problema.</h2>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="card-text">
                            <p>
                                Detallenos el evento y nos pondremos en contacto lo antes posible.
                            </p>
                        </div>
                        {!! Form::open(['method' => 'POST', 'route' => 'vadmin.soporte']) !!}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventRegInput1">Nombre</label>
                                            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventRegInput4">Email</label>
                                            <input type="email" class="form-control"  name="email" placeholder="Ingrese su E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventRegInput5">Teléfono</label>
                                            <input type="tel" class="form-control" name="phone" placeholder="Ingrese su teléfono o celular" required>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label for="eventRegInput5">Consulta o Mensaje</label>
                                <textarea id="projectinput8" rows="5" class="form-control" name="message" placeholder="Detalle aquí su problema. Sea lo más específico posible. En caso de ver algún número de error especifíquelo y en lo posible envienos vía mail una captura de pantalla del error" required></textarea>
                            </div>
                            Por urgencias puede comunicarse al <code>15-5809-0227</code>
                            <div class="form-actions center">
                                <button type="submit" onsubmit="showLoader()" class="btn btn-primary">
                                    <i class="icon-check2"></i> Enviar
                                </button>
                            </div>
                            {{ csrf_field() }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection