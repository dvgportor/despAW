@extends('plantillas.master')



@section('central')
<h2>Usuario:</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
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
            
            <th scope="row">{{ $user->nombre}}</th>
            <th scope="row">{{ $user->apellidos }}</th>
            <th scope="row">{{ $user->email }}</th>
            <th scope="row">{{ $user->telefono }}</th>
        </tr>
        @endforeach
    </tbody>
</table>



@stop
