
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1 class="text-center">Cargos Externos</h1>
    <a href="cargoexternos/create" class="btn btn-dark mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cargoexternos as $cargoexterno)
            <tr>
                <td>{{$cargoexterno->id}}</td>
                <td>{{$cargoexterno->nombre}}</td>
                <td>
                   <form action="{{ route ('cargoexternos.destroy',$cargoexterno->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/cargoexternos/{{$cargoexterno->id}}/edit" class="btn btn-info">Editar</a>
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

