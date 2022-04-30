@extends('layout')



@section('principal')

    <h1> {{$title}} </h1>

    <a href=" {{ route('crear') }} " type="button" class="btn btn-primary my-3"
    >Nuevo</a>


    @empty($perros)
        No hay registros
    @endempty

    <ul>
        @foreach ($perros as $perro)
            <li>

                <a href=" {{ route('ver', $perro->id ) }} ">
                    {{$perro->name}}
                </a>
-
                <a class="link-danger" href=" {{ route('borrarPerro', $perro->id ) }} ">
                   Eliminar
                </a>

            </li>
        @endforeach

    </ul>

@endsection
