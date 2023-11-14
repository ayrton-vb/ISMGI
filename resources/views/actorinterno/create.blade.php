
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/actorinternos" method="POST">
        @csrf

        <h1 class="text-center">Crear Actor Interno</h1>

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
                    <select  id="id_cargo" name="id_cargo" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($cargos as $cargo)
                            <option  value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Secretaria</label>
                    <select  id="id_secretaria" name="id_secretaria" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($secretarias as $secretaria)
                            <option  value="{{$secretaria->id}}">{{$secretaria->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                    <select  id="id_direccion" name="id_direccion" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($direccions as $direccion)
                            <option  value="{{$direccion->id}}">{{$direccion->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Unidad</label>
                    <select  id="id_unidad" name="id_unidad" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($unidads as $unidad)
                            <option  value="{{$unidad->id}}">{{$unidad->nombre}}</option>
                        @endforeach
                    </select>
                </div>

            </div>       
        </div>
    </div>

        <a href="/secretarias" class="btn btn-secondary">Cancelar</a>
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



