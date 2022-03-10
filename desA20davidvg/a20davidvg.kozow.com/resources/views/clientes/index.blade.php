@extends('plantillas.master')

@section('title')

@stop

@section('central')
<h2>LISTADO DE CLIENTES</h2>
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
            <th scope="row"><a href="{{ route('clientes.edit',$cliente) }}" class="btn btn-outline-primary">Editar</a>
            <form action="{{ route('clientes.destroy',$cliente) }}" method="post">@csrf @method('DELETE') <input type="submit" class="btn btn-outline-danger" value="Borrar" /></form> <a href="{{ route('archivos.show', $cliente ) }}" class="btn btn-outline-secondary">Archivos</a>
        </tr>
        @endforeach
    </tbody>
</table>



@stop

