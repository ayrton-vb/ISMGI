
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<form action="/organizacions/{{$organizacion->id}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editar Organizacion</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$organizacion->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sigla</label>
                        <input id="sigla" name="sigla" type="text" class="form-control" tabindex="1" value="{{$organizacion->sigla}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fundacion</label>
                        <input id="fundacion" name="fundacion" type="text" class="form-control" tabindex="1" value="{{$organizacion->fundacion}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Direccion</label>
                        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="1" value="{{$organizacion->direccion}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefono</label>
                        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="1" value="{{$organizacion->telefono}}">
                    </div>

                    @if($organizacion->id_cabeza == null)
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cabeza</label>
                        <select  id="id_cabeza" name="id_cabeza" class="form-select" aria-label="Default select example" tabindex="1">
                            <option  value="">-Seleccionar-</option>
                            @foreach($actores as $actor)
                            <option  value="{{$actor->id}}">{{$actor->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cabeza</label>
                        <select  id="id_cabeza" name="id_cabeza" class="form-select" aria-label="Default select example" tabindex="1">
                            <option  value="{{$organizacion->id_cabeza}}">{{$organizacion->actores->nombre}}</option>
                            @foreach($actores as $actor)
                            <option  value="{{$actor->id}}">{{$actor->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipo de Organizacion</label>
                    <select  id="id_tipoorganizacion" name="id_tipoorganizacion" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$organizacion->tipos->id}}">{{$organizacion->tipos->nombre}}</option>
                        @foreach($tipos as $tipo)
                        <option  value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                        @endforeach
                    </select>
                    </div>

                    @if($organizacion->id_dependencia == null)
                    <label for="exampleInputEmail1" class="form-label">Dependencia</label>
                    <select  id="id_dependencia" name="id_dependencia" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Seleccionar-</option>
                        @foreach($organizacions as $organizacion)
                        <option  value="{{$organizacion->id}}">{{$organizacion->sigla}}</option>
                        @endforeach
                    </select>

                    @else
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dependencia</label>
                    <select  id="id_dependencia" name="id_dependencia" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$organizacion->organizacionDependiente->id}}">{{$organizacion->organizacionDependiente->sigla}}</option>
                        <option  value="">-Ninguno-</option>
                        @foreach($organizacions as $organizacion)
                        <option  value="{{$organizacion->id}}">{{$organizacion->sigla}}</option>
                        @endforeach
                    </select>
                    </div>
                    @endif

                </div>
            </div>
        </div>


        <a href="/organizacions" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





