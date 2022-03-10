@extends('plantillas.master')



@section('central')

<center><h2>EDICIÓN DE CLIENTE</h2></center>

<div class="container ">
    <form action="{{route('clientes.update',$cliente->id)}}" method="post"> 
        @csrf
        @method('PUT')
@include('clientes.form')

    </form>
</div>
@stop
