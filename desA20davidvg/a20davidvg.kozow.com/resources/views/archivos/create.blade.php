@extends('plantillas.master')



@section('central')

<center><h2>CREACIÓN DE ARCHIVO</h2></center>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CREACIÓN</div>



    <form action="{{route('archivos.store')}}"  method="post" id="myForm" enctype="multipart/form-data"> 
        @csrf
        <div class="row mb-3">
        
            <center><label for="cliente_id">ID Usuario:</label></center>
            <div class="row mb-6">
            <select class= "form-select" name="cliente_id" id="cliente_id">
                <option value="{{$user_id}}" selected="true">{{$user_id}}</option>
            </select>
        </div>
        </div>
        
@include('archivos.form')

    </form>

            </div>
        </div>
    </div>
</div>
@stop
