@extends('layout')

@section('principal')
<br>
<h6>  {{ $perro->name }} </h6>
<img src={{$perro->imgurl}} alt="" width="40%"> 
<p class="card-text"> {{ $perro->descripcion }}</p>
            <a href=" {{ route('actualizar', $perro->id ) }} ">Actualizar</a>
            <a href=" {{ route('todos') }} ">Regresar</a>   
@endsection
