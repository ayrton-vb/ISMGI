
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1 class="text-center">Registro Asistencia</h1>
<a href="/acta/{{$id}}/registrosCrear" class="btn btn-dark mb-2">Crear</a>

<table id="table" class="table table-light table-striped mt-4">
    <thead class="bg-dark">
    <tr>
        <th>Id</th>
        <th>Acta</th>
        <th>Actor Externo</th>
        <th>Historial Externo</th>
        <th>Actor Interno</th>
        <th>Actor Institucional</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($registros as $registro)
    <tr>
            <td>{{$registro->id}}</td>
            <td>{{$registro->actas->tema}}</td>

            @if($registro->id_actorexterno)
            <td>{{$registro->actorexternos->actores->nombre}}</td>
            @else
            <td>{{$registro->id_actorexterno}}</td>
            @endif

            @if($registro->id_historialactorexterno)
                <td>{{$registro->historialactorexternos->actors->nombre}}</td>
                @else
                <td>{{$registro->id_historialactorexterno}}</td>
            @endif

            @if($registro->id_actorinterno)
            <td>{{$registro->actorinternos->actors->nombre}}</td>
            @else
            <td>{{$registro->id_actorinterno}}</td>
            @endif

            @if($registro->id_actorinstitucional)
            <td>{{$registro->actorinstitucionals->actors->nombre}}</td>
            @else
            <td>{{$registro->id_actorinstitucional}}</td>
            @endif

            <td>
               <form action="{{ route ('registros.destroy',$registro->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/registros/{{$registro->id}}/edit" class="btn btn-info">Editar</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>




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

