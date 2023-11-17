
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/acta/registrosGuardar" method="POST">
        @csrf

        <h1 class="text-center">Crear Registro</h1>

    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Acta</label>
                <input id="id_acta" name="id_acta" type="text" class="form-control" value="{{$acta->id}}">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Actor Externo</label>
                    <select  id="id_actorexterno" name="id_actorexterno" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($actorexternos as $actorexterno)
                            <option  value="{{$actorexterno->id}}">{{$actorexterno->actores->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Actor Interno</label>
                    <select  id="id_actorinterno" name="id_actorinterno" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($actorinternos as $actorinterno)
                            <option  value="{{$actorinterno->id}}">{{$actorinterno->actors->nombre}}</option>
                        @endforeach
                    </select>
                </div>

            </div>       
        </div>
    </div>

        <a href="/direccions" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
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



