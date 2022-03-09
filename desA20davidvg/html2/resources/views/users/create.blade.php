@extends('plantillas.master')




<h2>CREACIÓN DE USUARIO</h2>

<div class="container">
    <form action="{{route('users.store')}}" method="post"> 
        @csrf
        @include('users.form')

    </form>
</div>
@stop
