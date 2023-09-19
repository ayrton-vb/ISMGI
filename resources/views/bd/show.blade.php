
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h1 class="text-center">{{$organizacion->nombre}}</h1>

        <div class="text-center">
            <a href="/pdf/{{$organizacion->id}}/pdfActoresbyOrganizacion" type="button" class="btn btn-dark mb-2">Lista</a>
            <a href="/pdf/{{$organizacion->id}}/pdfActoresbyOrganizacionReconocimiento" type="button" class="btn btn-secondary mb-2">Reconocimiento</a>
        </div>




<div class="container" >
  <div class="row" >


    @foreach($actoresByOrganizacion as $actoreByOrganizacion)
    <div class="col-lg-4 col-md-4 col-sm-6" >

        <div class="card text-center" style="width: 90%;">
            <div class="card-body">

            @if($actoreByOrganizacion->actores->sexo=="m")
            <img src="/imagenes/persona.png" class="card-img-top" alt="..." style="width: 40%">
            @endif
            @if($actoreByOrganizacion->actores->sexo=="f")
            <img src="/imagenes/persona2.png" class="card-img-top" alt="..." style="width: 30%">
            @endif


                <p class="card-text m-0">{{$actoreByOrganizacion->actores->nombre}}</p>
                <p class="card-text m-0"><strong>Cargo: </strong>{{$actoreByOrganizacion->cargoexternos->nombre}}</p>
                <p class="card-text m-0"><strong>C.I.: </strong>{{$actoreByOrganizacion->actores->carnet}}</p>
                <p class="card-text m-0"><strong>Celular: </strong>{{$actoreByOrganizacion->actores->celular}}</p>
                <p class="card-text m-0"><strong>InclinacionPolitica: </strong>{{$actoreByOrganizacion->inclinacionPolitica}}</p>
                <p class="card-text m-0"><strong>Relacion: </strong>{{$actoreByOrganizacion->relacion}}</p>
                <p class="card-text m-0"><strong>Influencia:  </strong>   {{$actoreByOrganizacion->influencia}}</p>
                <p class="card-text m-0"><strong>CapMovilizacion:  </strong>   {{$actoreByOrganizacion->capMovilizacion}}</p>

                @if($actoreByOrganizacion->actores->sexo=="m")
                <a href="http://wa.me/591{{$actoreByOrganizacion->actores->celular}}?text=Buenas%20Sr.%20{{$actoreByOrganizacion->actores->nombre}}
                %20{{$actoreByOrganizacion->cargoexternos->nombre}}%20de%20{{$actoreByOrganizacion->organizacions->sigla}}" class="btn btn-success">WhatsApp</a>
                @endif
                @if($actoreByOrganizacion->actores->sexo=="f")
                <a href="http://wa.me/591{{$actoreByOrganizacion->actores->celular}}?text=Buenas%20Sra.%20{{$actoreByOrganizacion->actores->nombre}}
                %20{{$actoreByOrganizacion->cargoexternos->nombre}}%20de%20{{$actoreByOrganizacion->organizacions->sigla}}" class="btn btn-success">WhatsApp</a>
                @endif
            
        

                <a href="tel:{{$actoreByOrganizacion->actores->celular}}" class="btn btn-danger">Llamar</a>
            </div>
        </div>
    </div>          
    @endforeach

</div>
</div>


       

@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 @stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

