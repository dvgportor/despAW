@extends('plantillas.master')

@section('central')

<center><h2>EDICIÓN DE ARCHIVO</h2></center>

<div class="container">
    <form action="{{route('archivos.update', $id)}}" method="post" id = "myForm" enctype="multipart/form-data"> 
        
        @csrf
        @method('PATCH')
      
        
@include('archivos.form')

    </form>
</div>
@stop
