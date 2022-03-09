@extends('plantillas.master')



@section('central')

<h2>EDICIÓN DE USUARIO</h2>

<div class="container">
    <form action="{{route('users.update',$user->id)}}" method="post"> 
        @csrf
        @method('PUT')
@include('users.form')

    </form>
</div>
@stop
