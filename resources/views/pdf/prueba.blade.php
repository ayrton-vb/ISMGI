<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Lista</title>
</head>
<body style="margin: 0; padding: 0;">


<h2 class="text-center">Lista {{$organizacion->nombre}}</h2>
    <table id="table" class="table mt-4" style="border: 1px solid black;">
        <thead class="bg-Secondary" style="border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">Nombre</th>
            <th style="border: 1px solid black;">Cargo</th>
            <th style="border: 1px solid black;">C.I.</th>
            <th style="border: 1px solid black;">Celular</th>

        </tr>
        </thead>
        <tbody>
        @foreach($actoresByOrganizacion as $actoreByOrganizacion)
            <tr style="border: 1px solid black;">
                <td style="border: 1px solid black;">{{$actoreByOrganizacion->actores->nombre}}</td>
                <td style="border: 1px solid black;">{{$actoreByOrganizacion->cargoexternos->nombre}}</td>
                <td style="border: 1px solid black;">{{$actoreByOrganizacion->actores->carnet}}</td>
                <td style="border: 1px solid black;">{{$actoreByOrganizacion->actores->celular}}</td>


            </tr>
        @endforeach
        </tbody>
    </table>



</body>

</html>
