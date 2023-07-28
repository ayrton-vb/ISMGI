
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1 class="text-center">Actores Externos</h1>
    <a href="actorexternos/create" class="btn btn-dark mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-dark">
        <tr>
            <th>Id</th>
            <th>inclinacionPolitica</th>
            <th>relacion</th>
            <th>aliadoEstategico</th>
            <th>influencia</th>
            <th>capMovilizacion</th>
            <th>id_actor</th>
            <th>id_organizacion</th>
            <th>id_cargo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actorexternos as $actorexterno)
            <tr>
                <td>{{$actorexterno->id}}</td>
                <td>{{$actorexterno->inclinacionPolitica}}</td>
                <td>{{$actorexterno->relacion}}</td>
                <td>{{$actorexterno->aliadoEstategico}}</td>
                <td>{{$actorexterno->influencia}}</td>
                <td>{{$actorexterno->capMovilizacion}}</td>
                <td>{{$actorexterno->actores->nombre}}</td>
                <td>{{$actorexterno->organizacions->nombre}}</td>
                <td>{{$actorexterno->cargoexternos->nombre}}</td>
                <td>
                   <form action="{{ route ('actorexternos.destroy',$actorexterno->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/actorexternos/{{$actorexterno->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

