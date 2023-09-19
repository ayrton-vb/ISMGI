
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1 class="text-center">Mienbros de {{$organizacion->nombre}}</h1>
    <a href="/createorganizacions/{{$organizacion->id}}/miembros" class="btn btn-dark mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-dark">
        <tr>
            <th>Nombre</th>
            <th>Celular</th>
            <th>Carnet</th>
            <th>Sexo</th>
            <th>inclinacionPolitica</th>
            <th>relacion</th>
            <th>aliadoEstategico</th>
            <th>influencia</th>
            <th>capMovilizacion</th>
            <th>cargo</th>

            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($miembros as $miembro)
            <tr>
                <td>{{$miembro->actores->nombre}}</td>
                <td>{{$miembro->actores->celular}}</td>
                <td>{{$miembro->actores->carnet}}</td>
                <td>{{$miembro->actores->sexo}}</td>
                <td>{{$miembro->inclinacionPolitica}}</td>
                <td>{{$miembro->relacion}}</td>
                <td>{{$miembro->aliadoEstategico}}</td>
                <td>{{$miembro->influencia}}</td>
                <td>{{$miembro->capMovilizacion}}</td>
                <td>{{$miembro->cargoexternos->nombre}}</td>
                <td>
                   <form action="/deleteorganizacions/{{$miembro->actores->id}}/{{$miembro->id}}/miembros" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/editorganizacions/{{$miembro->id}}/miembros" class="btn btn-info">Editar</a>
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

