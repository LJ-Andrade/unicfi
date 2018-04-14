@extends('layouts.vadmin.main')
@section('title', 'Vadmin | Perfil de Usuario')

@section('header')
	@component('vadmin.components.header')
		@slot('breadcrums')
			<li class="breadcrumb-item"><a href="{{ url('vadmin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index')}}">Usuarios</a></li>
            <li class="breadcrumb-item active">Perfil de <b>{{ $user->username }}</b></li>
		@endslot
		@slot('actions')
		@endslot
	@endcomponent
@endsection

@section('content')
    <div class="row">
        @component('vadmin.components.container')
            @slot('title')
                 <span style="color: #977fe1">Perfil | </span>{{ $user->username }}
            @endslot
            @slot('content')
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="round-image-card">
                        <div class="inner">
                            <div class="{{ (Auth::guard('user')->user()->id == $user->id) ? "update-image" : "image"}}">
                                @if($user->avatar == '')
                                    <img id="Avatar" class="Image-Container CheckImg" src="{{ asset('images/users/default.jpg') }}" alt="Imágen de Usuario">
                                @else	
                                    <img id="Avatar" class="Image-Container CheckImg" src="{{ asset('images/users/'.$user->avatar) }}" alt="Imágen de Usuario">
                                @endif
                                <span class="over-text">Cambiar imágen</span>
                                <div class="ActionContainer Hidden">
                                    <hr class="softhr">
                                    {!! Form::open(['url' => 'vadmin/updateAvatar', 'method' => 'POST', 'class' => 'UpdateAvatarForm Hidden', 'files' => true]) !!}
                                        {{ csrf_field() }}
                                        <input type="file" name="avatar" class="Hidden" id="ImageInput">
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <input type="submit" class="btn btnGreen" id="ConfirmChange" value="Confirmar">
                                    {!! Form::close() !!}    
                                </div>
                            </div>
                            <div class="card-content">
                                <span><b>Nombre de Usuario:</b> {{ $user->username }} </span><br>
                                <span><b>Nombre:</b> {{ $user->name }} </span><br>
                                <span><b>E-Mail:</b> {{ $user->email }}  </span><br><br>
                                <span class="tag tag-pill btnBlue"><b>Rol:</b> {{ roleTrd($user->role) }}  </span> 
                                <span class="tag tag-pill btnGreen"><b>Grupo:</b> {{ groupTrd($user->group) }}  </span>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    Miembro desde {{ $user->created_at->diffForHumans() }} <br>
                    {{ transDateT($user->created_at) }} <br><br>
                    @if(Auth::guard('user')->user()->id == $user->id)
                        <a href="{{ url('vadmin/users/'.$user->id.'/edit') }}" class="btn btnGreen" id="ConfirmChange" value="Confirmar">Editar Usuario</a>
                    @endif
                </div>
            @endslot
        @endcomponent
    </div>
@endsection

@section('scripts')
	@include('vadmin.components.bladejs')
@endsection
