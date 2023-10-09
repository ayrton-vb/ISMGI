
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<h1 class="text-center">Organizaciones Sociales Dependientes</h1>
    
<div class="container" >
  <div class="row" >

    @foreach($OrganizacionDependientes as $OrganizacionDependiente)
    <div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-text m-0">{{$OrganizacionDependiente->sigla}}</h4>
                <p class="card-text m-0">{{$OrganizacionDependiente->nombre}}</p>
                <p class="card-text m-0"><strong>Fundacion: </strong>{{$OrganizacionDependiente->fundacion}}</p>

                @if($OrganizacionDependiente->id_dependencia == null)
                <p class="card-text m-0"><strong>Depedencia: </strong> ninguna</p>
                @else
                <p class="card-text m-0"><strong>Depedencia: </strong>{{$OrganizacionDependiente->organizacionDependiente->sigla}}</p>
                @endif

                <p class="card-text m-0"><strong>Direccion: </strong>{{$OrganizacionDependiente->direccion}}</p>
                <p class="card-text m-0"><strong>Telefono:  </strong>   {{$OrganizacionDependiente->telefono}}</p>
                <a href="/bds/{{$OrganizacionDependiente->id}}/actorByOrganizacion" class="btn btn-primary">Miembros</a>
                <a href="tel:2{{$OrganizacionDependiente->telefono}}" class="btn btn-danger">Llamar</a>
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

