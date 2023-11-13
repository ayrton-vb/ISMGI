
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/direccions/{{$direccion->id}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editar Direccion</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$direccion->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sigla</label>
                        <input id="sigla" name="sigla" type="text" class="form-control" tabindex="1" value="{{$direccion->sigla}}">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Secretaria</label>
                    <select  id="id_secretaria" name="id_secretaria" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$direccion->id_secretaria}}">{{$direccion->secretaria->nombre}}</option>
                        @foreach($secretarias as $secretaria)
                            <option  value="{{$secretaria->id}}">{{$secretaria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                </div>
            </div>
        </div>


        <a href="/direccions" class="btn btn-secondary">Cancelar</a>
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





