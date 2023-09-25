
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h1 class="text-center">{{$organizacion->nombre}} 2</h1>

        <div class="text-center">
            <a href="/pdf/{{$organizacion->id}}/pdfActoresbyOrganizacion" type="button" class="btn btn-dark mb-2">Lista</a>
            <a href="/pdf/{{$organizacion->id}}/pdfActoresbyOrganizacionReconocimiento" type="button" class="btn btn-secondary mb-2">Reconocimiento</a>
        </div>




<div class="container" >
  <div class="row" >

  @foreach($organizacionesDependientes as $organizacionDependientes)
    @foreach($actoresExterno as $actorExterno)
        @if($actorExterno->id_organizacion == $organizacionDependientes->id)
            @if($actorExterno->cabeza == 1)

                    <div class="col-lg-4 col-md-4 col-sm-6" >
                    <div class="card text-center" style="width: 90%;">
                        <div class="card-body">

                            @if($actorExterno->actores->sexo=="m")
                            <img src="/imagenes/persona.png" class="card-img-top" alt="..." style="width: 40%">
                            @endif
                            @if($actorExterno->actores->sexo=="f")
                            <img src="/imagenes/persona2.png" class="card-img-top" alt="..." style="width: 30%">
                            @endif

                            <p class="card-text m-0">{{$actorExterno->actores->nombre}}</p>
                            <p class="card-text m-0"><strong>Cargo: </strong>{{$actorExterno->cargoexternos->nombre}}</p>
                            <p class="card-text m-0"><strong>Org: </strong>{{$actorExterno->organizacions->sigla}}</p>
                            <p class="card-text m-0"><strong>C.I.: </strong>{{$actorExterno->actores->carnet}}</p>
                            <p class="card-text m-0"><strong>Celular: </strong>{{$actorExterno->actores->celular}}</p>
                            <p class="card-text m-0"><strong>InclinacionPolitica: </strong>{{$actorExterno->inclinacionPolitica}}</p>
                            <p class="card-text m-0"><strong>Relacion: </strong>{{$actorExterno->relacion}}</p>
                            <p class="card-text m-0"><strong>Influencia:  </strong>   {{$actorExterno->influencia}}</p>
                            <p class="card-text m-0"><strong>CapMovilizacion:  </strong>   {{$actorExterno->capMovilizacion}}</p>

                            @if($actorExterno->actores->sexo=="m")
                            <a href="http://wa.me/591{{$actorExterno->actores->celular}}?text=Buenas%20Sr.%20{{$actorExterno->actores->nombre}}
                            %20{{$actorExterno->cargoexternos->nombre}}%20de%20{{$actorExterno->organizacions->sigla}}" class="btn btn-success">WhatsApp</a>
                            @endif
                            @if($actorExterno->actores->sexo=="f")
                            <a href="http://wa.me/591{{$actorExterno->actores->celular}}?text=Buenas%20Sra.%20{{$actorExterno->actores->nombre}}
                            %20{{$actorExterno->cargoexternos->nombre}}%20de%20{{$actorExterno->organizacions->sigla}}" class="btn btn-success">WhatsApp</a>
                            @endif

                            <a href="tel:{{$actorExterno->actores->celular}}" class="btn btn-danger">Llamar</a>
                        
                        </div>
                       </div>
                    </div>      


            @endif
        @endif
    @endforeach
  @endforeach

</div>
</div>

   

<h1 class="text-center">Lista</h1>
            
            <table id="table" class="table table-dark table-striped mt-4">
                <thead class="bg-primary">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Organizacion</th>
                    <th>Carnet</th>
                    <th>Celular</th>
                </tr>
                </thead>

                <tbody>
                @foreach($organizacionesDependientes as $organizacionDependientes)
                @foreach($actoresExterno as $actorExterno)
                    @if($actorExterno->id_organizacion == $organizacionDependientes->id)
                        @if($actorExterno->cabeza == 1)

                    <tr>
                        <td>{{$actorExterno->id}}</td>
                        <td>{{$actorExterno->actores->nombre}}</td>
                        <td>{{$actorExterno->cargoexternos->nombre}}</td>
                        <td>{{$actorExterno->organizacions->sigla}}</td>
                        <td>{{$actorExterno->actores->carnet}}</td>
                        <td>{{$actorExterno->actores->celular}}</td>
                    </tr>
                    @endif
                    @endif
                @endforeach
                @endforeach
                </tbody>
            </table>
</div>
</div>



@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
             "lengthMenu":[[50,150,-1],[50,150,300,"All"]],
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

