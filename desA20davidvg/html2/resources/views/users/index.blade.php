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
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <th scope="row">{{ $user->usuario }}</th>
            <th scope="row">{{ $user->nombre}}</th>
            <th scope="row">{{ $user->apellidos }}</th>
            <th scope="row">{{ $user->email }}</th>
            <th scope="row">{{ $user->telefono }}</th>
            <th scope="row"><a href="{{ route('users.edit',$user) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('users.destroy',$user) }}" method="post">@csrf @method('DELETE') <input type="submit" class="btn btn-danger" value="Borrar" /></form> <a href="{{ route('archivos.show', $user ) }}" class="btn btn-secondary">Archivos</a>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $users->links() !!}

@stop

