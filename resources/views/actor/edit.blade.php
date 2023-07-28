
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/actors/{{$actor->id}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editar Actor</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$actor->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Celular</label>
                        <input id="celular" name="celular" type="text" class="form-control" tabindex="1" value="{{$actor->celular}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Carnet</label>
                        <input id="carnet" name="carnet" type="text" class="form-control" tabindex="1" value="{{$actor->carnet}}">
                    </div>

                </div>
            </div>
        </div>


        <a href="/actors" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





