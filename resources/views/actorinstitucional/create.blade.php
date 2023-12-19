
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/actorinstitucionals" method="POST">
        @csrf

        <h1 class="text-center">Crear Actor Institucional</h1>

    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Actor</label>
                    <select  id="id_actor" name="id_actor" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($actors as $actor)
                            <option  value="{{$actor->id}}">{{$actor->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo</label>
                    <select  id="id_cargoinstitucional" name="id_cargoinstitucional" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($cargoinstitucionals as $cargoinstitucional)
                            <option  value="{{$cargoinstitucional->id}}">{{$cargoinstitucional->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Institucion</label>
                    <select  id="id_institucion" name="id_institucion" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($institucions as $institucion)
                            <option  value="{{$institucion->id}}">{{$institucion->nombre}}</option>
                        @endforeach
                    </select>
                </div>

            </div>       
        </div>
    </div>

        <a href="/actorinstitucionals" class="btn btn-secondary">Cancelar</a>
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



