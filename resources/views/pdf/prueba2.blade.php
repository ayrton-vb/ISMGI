<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style>
    .page-break {
        page-break-after: always;
    }
</style>



@foreach($actoresByOrganizacion as $actoreByOrganizacion)
<div style="margin-top: 280px;">


            @if($actoreByOrganizacion->actores->sexo=="m")
            <h4 class="text-center">Al Señor:</h4>
            @endif
            @if($actoreByOrganizacion->actores->sexo=="f")
            <h4 class="text-center">Ala Señora:</h4>
            @endif


<h1 class="text-center">{{$actoreByOrganizacion->actores->nombre}}</h1>
<h1 class="text-center">{{$actoreByOrganizacion->cargoexternos->nombre}} {{$organizacion->nombre}}</h1>
<p  class="text-center">Por la destacada labor que cumple de manera responsable e </br> inconsicional, contribuyendo a la economia y comercio de nuestra </br>
valerosa Ciudad de El Alto, Extendemos el presente reconocimiento </br> en conmemoracion el XI aniversario de la <strong>{{$organizacion->nombre}}</strong>
</br> de la ciudad de El Alto,</p>

<p  class="text-center">El Gobierno Autonomo Municipal de El Alto a travez de la Secretaria </br> Municipal de Gestion Institucional, expresa sus felicitaciones y se 
</br> adhiere a tan significado acto</p>

<h5 class="text-end">El Alto, abril de 2023</h5>

</div>

<div class="page-break"></div>
@endforeach








</html>
