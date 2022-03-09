@extends('plantillas.master')

@section('title')

@stop

@section('central')
<h2>LISTADO DE USUARIOS</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <th scope="row">{{ $cliente->id }}</th>
            <th scope="row">{{ $cliente->usuario }}</th>
            <th scope="row">{{ $cliente->nombre}}</th>
            <th scope="row">{{ $cliente->apellidos }}</th>
            <th scope="row">{{ $cliente->email }}</th>
            <th scope="row">{{ $cliente->telefono }}</th>
            <th scope="row"> <a href="{{ route('invitados.show', $cliente ) }}" class="btn btn-outline-primary">Archivos</a></th>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $clientes->links() !!}

@stop

