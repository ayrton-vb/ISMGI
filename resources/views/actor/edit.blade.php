
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
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sexo</label>
                    <select  id="sexo" name="sexo" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$actor->sexo}}">{{$actor->sexo}}</option>
                        <option  value="m">m</option>
                        <option  value="f">f</option>
                    </select>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





