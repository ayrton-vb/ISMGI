
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 
@stop

@section('content')
<h1 class="text-center">Organizaciones</h1>

    <a href="/organizacions/create" class="btn btn-dark mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Sigla</th>
            <th>Fundacion</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Dependencia</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($organizaciones as $organizacion)
            <tr>
                <td>{{$organizacion->id}}</td>
                <td>{{$organizacion->nombre}}</td>
                <td>{{$organizacion->sigla}}</td>
                <td>{{$organizacion->fundacion}}</td>
                <td>{{$organizacion->direccion}}</td>
                <td>{{$organizacion->telefono}}</td>
                @if($organizacion->id_dependencia == null)
                <td></td>
                @else
                <td>{{$organizacion->organizacionDependiente->sigla}}</td>
                @endif
                <td>{{$organizacion->tipos->nombre}}</td>
                <td>
                   <form action="{{ route ('organizacions.destroy',$organizacion->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/organizacions/{{$organizacion->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                        <a href="/organizacions/{{$organizacion->id}}/miembros" class="btn btn-primary">Miembros</a>
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

