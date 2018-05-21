@extends('layouts.vadmin.invoice-excel')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>Cód.</th>
            <th>Nombre</th>
            <th>Nombre de Usuario</th>
            <th>E-Mail</th>
            <th>Miembro Desde</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
    <tr>
        <td class="w-50">#{{ $item->id }}</td>
        <td class="max-text">{{ $item->name }}</td>
        <td class="max-text">{{ $item->username }}</td>
        <td class="">{{ $item->email }}</td>    
        <td class="">{{ transDateT($item->created_at) }}</td>      
    </tr>
    @endforeach			
    </tbody>
</table>
@endsection