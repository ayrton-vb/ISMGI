
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#table').DataTable({
          "lengthMenu":[[25,75,-1],[25,75,150,"All"]],
            responsive: "true",
            dom: 'Bfrtilp',
              buttons:[
                        {
                          extend:    'excelHtml5',
                          text:      '<i class="fas fa-file-excel"></i> ',
                          titleAttr: 'Exportar a Excel',
                          className: 'btn btn-success'
                        },
                        {
                          extend:    'pdfHtml5',
                          text:      '<i class="fas fa-file-pdf"></i> ',
                          titleAttr: 'Exportar a PDF',
                          className: 'btn btn-danger'
                        },
                        {
                          extend:    'print',
                          text:      '<i class="fa fa-print"></i> ',
                          titleAttr: 'Imprimir',
                          className: 'btn btn-info'
                        },
                      ]
          });

        } );
    </script>
@stop

