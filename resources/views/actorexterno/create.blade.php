
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/actorexternos" method="POST">
        @csrf

        <h1 class="text-center">Crear Actor Externo</h1>

    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">InclinacionPolitica</label>
                    <select id="inclinacionPolitica" name="inclinacionPolitica" class="form-select" aria-label="Default select example" tabindex="1">
                        <option   value="ninguna">Ninguna</option>
                        <option  value="roja">Roja</option>
                        <option  value="azul">Azul</option>
                        <option  value="ninguna">Ninguna</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Relacion</label>
                    <select id="relacion" name="relacion" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="neutral">Neutral</option>
                        <option  value="buena">Buena</option>
                        <option  value="mala">Mala</option>
                        <option  value="neutral">Neutral</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Aliado Estrategico</label>
                    <input id="aliadoEstategico" name="aliadoEstategico" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">influencia</label>          
                    <select id="influencia" name="influencia" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="media">Media</option>
                        <option  value="alta">Alta</option>
                        <option  value="media">Media</option>
                        <option  value="baja">Baja</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Capacidad de Movilizacion</label>
                    <select id="capMovilizacion" name="capMovilizacion" class="form-select" aria-label="Default select example" tabindex="1">
                        <option value="media">Media</option>
                        <option  value="alta">Alta</option>
                        <option  value="media">Media</option>
                        <option  value="baja">Baja</option>
                    </select>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cabeza</label>
                    <select  id="cabeza" name="cabeza" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="0">no</option>
                        <option  value="1">Si</option>

                    </select>
                </div>

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
                    <label for="exampleInputEmail1" class="form-label">Organizacion</label>
                    <select  id="id_organizacion" name="id_organizacion" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($organizacions as $organizacion)
                        <option  value="{{$organizacion->id}}">{{$organizacion->nombre}}</option>
                        @endforeach
                    </select>
                </div>
  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cargo Externo</label>
                    <select  id="id_cargoexterno" name="id_cargoexterno" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="">-Selecciona-</option>
                        @foreach($cargoexternos as $cargoexterno)
                        <option  value="{{$cargoexterno->id}}">{{$cargoexterno->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>       
        </div>
    </div>

        <a href="/actorexternos" class="btn btn-secondary">Cancelar</a>
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



