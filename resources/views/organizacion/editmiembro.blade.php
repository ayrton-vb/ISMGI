
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<form action="/storeorganizacions/{{$actorexterno->id_actor}}/{{$actorexterno->id}}/miembros" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editar Mienbro</h1>
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
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sexo</label>
                    <select  id="sexo" name="sexo" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$actor->sexo}}">{{$actor->sexo}}</option>
                        <option  value="m">m</option>
                        <option  value="f">f</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">InclinacionPolitica</label>
                    <select  id="inclinacionPolitica" name="inclinacionPolitica" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->inclinacionPolitica}}">
                        <option  value="{{$actorexterno->inclinacionPolitica}}">{{$actorexterno->inclinacionPolitica}}</option>
                        <option  value="roja">Roja</option>
                        <option  value="azul">Azul</option>
                        <option  value="ninguna">Ninguna</option>   
                    </select>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Relacion</label>
                    <select  id="relacion" name="relacion" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->relacion}}"> 
                        <option  value="{{$actorexterno->relacion}}">{{$actorexterno->relacion}}</option>
                        <option  value="buena">Buena</option>
                        <option  value="mala">Mala</option>
                        <option  value="neutral">Neutral</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Aliado Estrategico</label>
                    <input id="aliadoEstategico" name="aliadoEstategico" type="text" class="form-control" tabindex="1" value="{{$actorexterno->aliadoEstategico}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">influencia</label>          
                    <select  id="influencia" name="influencia" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->influencia}}">
                        <option  value="{{$actorexterno->influencia}}">{{$actorexterno->influencia}}</option>
                        <option  value="alta">Alta</option>
                        <option  value="media">Media</option>
                        <option  value="baja">Baja</option>
                        <option  value="Desconociada">Desconociada</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Capacidad de Movilizacion</label>
                    <select  id="capMovilizacion" name="capMovilizacion" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->capMovilizacion}}">
                        <option  value="{{$actorexterno->capMovilizacion}}">{{$actorexterno->capMovilizacion}}</option>
                        <option  value="alta">Alta</option>
                        <option  value="media">Media</option>
                        <option  value="baja">Baja</option>
                        <option  value="Desconociada">Desconociada</option> 
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Actor</label>
                    <select  id="id_actor" name="id_actor" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->id_actor}}">
                    <option  value="{{$actorexterno->id_actor}}">{{$actorexterno->actores->nombre}}</option>
                        @foreach($actors as $actor)
                        <option  value="{{$actor->id}}">{{$actor->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Organizacion</label>
                    <select  id="id_organizacion" name="id_organizacion" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->id_organizacion}}">
                    <option  value="{{$actorexterno->id_organizacion}}">{{$actorexterno->organizacions->nombre}}</option>
                        @foreach($organizacions as $organizacion)
                        <option  value="{{$organizacion->id}}">{{$organizacion->nombre}}</option>
                        @endforeach
                    </select>
                </div>
  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cargo Externo</label>
                    <select  id="id_cargoexterno" name="id_cargoexterno" class="form-select" aria-label="Default select example" tabindex="1" value="{{$actorexterno->id_cargoexterno}}">
                    <option  value="{{$actorexterno->id_cargoexterno}}">{{$actorexterno->cargoexternos->nombre}}</option>
                        @foreach($cargoexternos as $cargoexterno)
                        <option  value="{{$cargoexterno->id}}">{{$cargoexterno->nombre}}</option>
                        @endforeach
                    </select>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





