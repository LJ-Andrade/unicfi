{{-- Title --}}
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Título del artículo', 'id' => 'TitleInput', 
            'required' => '', 'maxlength' => '120', 'minlength' => '4']) !!}
        </div>
    </div>
    {{-- Slug --}}
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('slug', 'Url Amigable - Dirección web') !!}
            {!! Form::text('slug', null, ['class' => 'SlugInput form-control', 'placeholder' => 'Dirección visible (en explorador)', 'id' => 'SlugInput', 'required' => '']) !!}
            <div class="slug2"></div>
        </div>
    </div>
</div>
<div class="row">
    {{-- Category --}}
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control Select-Category-', 'placeholder' => 'Seleccione una opcion',
            'required' => '']) !!}
        </div>
    </div>
    {{-- Tags--}}
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">
            {!! Form::label('tags', 'Etiquetas') !!}
            {!! Form::select('tags[]', $tags, null, ['class' => 'Select-Tags form-control', 'multiple', 'required' => '']) !!}
        </div>
    </div>
    {{-- Status--}}
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">
            {!! Form::label('status', 'Estado') !!}
            {!! Form::select('status', ['1' => 'Activo','0' => 'Pausado'], null, ['class' => 'form-control']) !!}
        </div>
    </div>	
</div>
{{-- Images--}}
<div class="row">
    <div class="col-md-3">
        @component('vadmin.components.catalogthumbnail')
            @slot('thumbnail')
                @if(isset($article) && $article->thumb != '')
                    <img class="Featured-Image-Container CheckImg" src="{{ asset('webimages/catalogoimg/'.$article->thumb) }}">
                @else
                    <img class="Featured-Image-Container CheckImg" src="{{ asset('webimages/main/gen/catalog-gen.jpg') }}">
                @endif
            @endslot
        @endcomponent
    </div>
    @if(isset($article) && count($article->images) != 0 )
        <div class="col-md-9 actual-images horizontal-list">
            <h2>Imágenes Publicadas</h2>
            <ul>
                @foreach($article->images->reverse() as $image)
                <li id="Img{{ $image->id }}">	
                    <img src="{{ asset('webimages/catalogoimg/'.$image->name) }}" class="CheckImg">
                    <div class="overlayItemCenter">
                        <i class="Delete-Catalogimg-Img icon-ios-trash-outline delete-img" data-imgid="{{ $image->id }}"></i>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <br>
    @include('vadmin.components.addimgsform')
    @else
    <div class="col-md-9">
        @include('vadmin.components.addimgsform')
    </div>
</div> {{--  /Row  --}}
@endif
