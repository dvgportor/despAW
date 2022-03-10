@extends('plantillas.master')



@section('central')
<h2>LISTADO DE ARCHIVOS</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">UserID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Enlace</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha Creación</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($archivos as $archivo)
        <tr>
            <th scope="row">{{ $archivo->id }}</th>
            <th scope="row">{{ $archivo->cliente_id }}</th>
            <th scope="row">{{ $archivo->titulo}}</th>
            <th scope="row">{{ $archivo->enlace }}</th>
            <th scope="row">{{ $archivo->descripcion }}</th>
            <th scope="row">{{ $archivo->created_at }}</th>
            <th scope="row"> <form action="{{route('archivos.download', $archivo->enlace)}}" method="post">@csrf @method('POST') <button type="submit" class="btn btn-outline-primary" value="{{ $archivo->enlace }}"><i class="fa fa-download"></i></button></form>
            </th>
        </tr>

        @endforeach
    </tbody>

</table>





@stop
