
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1 class="text-center">Actores</h1>
    <a href="actors/create" class="btn btn-dark mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Celular</th>
            <th>Carnet</th>
            <th>Sexo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actors as $actor)
            <tr>
                <td>{{$actor->id}}</td>
                <td>{{$actor->nombre}}</td>
                <td>{{$actor->celular}}</td>
                <td>{{$actor->carnet}}</td>
                <td>{{$actor->sexo}}</td>
                <td>
                   <form action="{{ route ('actors.destroy',$actor->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/actors/{{$actor->id}}/edit" class="btn btn-info">Editar</a>
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

