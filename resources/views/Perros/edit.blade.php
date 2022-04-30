@extends('layout')


@section('principal')

    <h1>Actualizando un perro en el sistema</h1>

    <form method="POST" action="{{ route('actualizarPerro') }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <input type="hidden" value=" {{ $perro->id}}"  name="id">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input value=" {{ $perro->name  }} " type="text" name="nombre" class="form-control" id="name">

            @if ($errors->has('nombre'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('nombre') }}
                </div>
            @endif

        </div>
        <div class="mb-3">
            <label for="imgurl" class="form-label">Imagen</label>
            <input value=" {{ $perro->imgurl  }} " type="text" name="imagen" class="form-control" id="imgurl">

            @if ($errors->has('imagen'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('imagen') }}
                </div>
            @endif

        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input value=" {{ $perro->descripcion  }} "  type="descripcion" class="form-control" id="descripcion"  name="descripcion">
            @if ($errors->has('descripcion'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('descripcion') }}
                </div>
            @endif
        </div>
        

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href=" {{ route('todos') }} ">    Regresar</a>  
    </form>


@endsection
