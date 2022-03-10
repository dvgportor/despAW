@extends('plantillas.master')



@section('central')

<h2>CREACIÓN DE CLIENTE</h2>

<div class="container md-3">
    <form action="{{route('clientes.store')}}" method="post"> 
        @csrf
@include('clientes.form')

    </form>
@stop
