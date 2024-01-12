
@extends('adminlte::page')

@section('title', 'ACTAS')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1 class="text-center">Actas</h1>
    <a href="actas/create" class="btn btn-dark mb-2">Crear</a>

    <table id="table" class="table table-light table-striped mt-4">
        <thead class="bg-dark">
        <tr>
            <th>Id</th>
            <th>Tema</th>
            <th>Lugar</th>
            <th>Hora</th>
            <th>Fecha</th>
            <th>Relevancia</th>
            <th>Scaneado</th>
            <th>Foto</th>
            <th>Tipo Acta</th>
            <th>Numero</th>
            <th>Antecedente</th>
            <th>Problematica</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($actas as $acta)
            <tr>
                <td>{{$acta->id}}</td>
                <td>{{$acta->tema}}</td>
                <td>{{$acta->lugar}}</td>
                <td>{{$acta->hora}}</td>
                <td>{{$acta->fecha}}</td>
                <td>{{$acta->relevancia}}</td>
                <td> <a class="btn btn-success" href="Archivos/{{$acta->scan}}" target="blank_">documeto</a></td>
                <td><a class="btn btn-warning" href="Archivos/{{$acta->foto}}" target="blank_">foto</a></td>
                <td>{{$acta->tipoactas->nombre}}</td>

                @if($acta->tiponumero)
                <td>{{$acta->tiponumero}}</td>
                @else
                <td></td>
                @endif
    
                @if($acta->antecedente)
                <td>{{$acta->antecedente}}</td>
                @else
                <td></td>
                @endif

                @if($acta->id_problematica)
                <td>{{$acta->problematicas->nombre}}</td>
                @else
                <td></td>
                @endif
                <td>
                   <form action="{{ route ('actas.destroy',$acta->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/actas/{{$acta->id}}/edit" class="btn btn-info">Editar</a>
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

