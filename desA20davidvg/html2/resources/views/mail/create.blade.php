@extends('plantillas.master')



@section('central')

<center><h2>CREACIÓN DE USUARIO</h2></center>

<div class="container">
    <form action="{{route('registro.store')}}" method="post"> 
        @csrf
        @include('users.form')

    
    </form>
@stop
