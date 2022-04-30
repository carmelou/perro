@extends('layout')


@section('principal')

    <h1>Creando un nuevo perro en el sistema</h1>

    <form method="POST" action="{{ route('nuevoPerro') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="name" value="{{ old('nombre') }}">

            @if ($errors->has('nombre'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('nombre') }}
                </div>
            @endif

        </div>
        <div class="mb-3">
            <label for="imgurl" class="form-label">Imagen</label>
            <input type="text" name="imagen" class="form-control" id="imgurl" value="{{ old('imagen') }}">

            @if ($errors->has('imagen'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('imagen') }}
                </div>
            @endif

        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="descripcion" class="form-control" id="descripcion"  name="descripcion">
            @if ($errors->has('descripcion'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('descripcion') }}
                </div>
            @endif
        </div>


        <button type="submit" class="btn btn-primary">Nuevo</button>
        <a href=" {{ route('todos') }} ">    Regresar</a>   
    </form>


@endsection
