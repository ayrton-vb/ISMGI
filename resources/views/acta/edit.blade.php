
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/actas/{{$acta->id}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editar Acta</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tema</label>
                    <input id="tema" name="tema" type="text" class="form-control" tabindex="1" value="{{$acta->tema}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lugar</label>
                    <input id="lugar" name="lugar" type="text" class="form-control" tabindex="1" value="{{$acta->lugar}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hora</label>
                    <input id="hora" name="hora" type="text" class="form-control" tabindex="1" value="{{$acta->hora}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha</label>
                    <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1" value="{{$acta->fecha}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Relevancia</label>
                    <input id="relevancia" name="relevancia" type="text" class="form-control" tabindex="1" value="{{$acta->relevancia}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Scaneado</label>
                    <input id="scan" name="scan" type="text" class="form-control" tabindex="1" value="{{$acta->scan}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">foto</label>
                    <input id="foto" name="foto" type="text" class="form-control" tabindex="1" value="{{$acta->foto}}">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de Acta</label>
                    <select  id="id_tipoacta" name="id_tipoacta" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$acta->id_tipoacta}}">{{$acta->tipoactas->nombre}}</option>
                        @foreach($tipoactas as $tipoacta)
                            <option  value="{{$tipoacta->id}}">{{$tipoacta->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Problematica</label>
                    <select  id="id_problematica" name="id_problematica" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="{{$acta->id_problematica}}">{{$acta->problematicas->nombre}}</option>
                        @foreach($problematicas as $problematica)
                            <option  value="{{$problematica->id}}">{{$problematica->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
            </div>
        </div>


        <a href="/actas" class="btn btn-secondary">Cancelar</a>
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





