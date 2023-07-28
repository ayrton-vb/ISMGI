
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dependencia</label>
                        <input id="dependencia" name="dependencia" type="text" class="form-control" tabindex="1" value="{{$organizacion->dependencia}}">
                    </div>

                </div>
            </div>
        </div>


        <a href="/organizacions" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





