@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<!-- seccion organizaciones matrizes -->
<seccion id="osMatrizes">
<h1 class="text-center">Organizaciones Sociales Matrizes</h1>
  <div class="text-center">
    <a id="botonVer" href="#ver" type="button" onclick="funcionVer()" class="btn btn-primary mb-2">Ver Tarjetas</a>
    <a id="botonOcultar" style="display: none;" href="#ver" type="button" onclick="funcionOcultar()" class="btn btn-danger mb-2">Ocultar Tarjetas</a>
    <a id="botonVerLista" href="#verLista" type="button" onclick="funcionVerLista()" class="btn btn-primary mb-2">Ver Lista</a>
    <a id="botonOcultarLista" style="display: none;" href="#ver" type="button" onclick="funcionOcultarLista()" class="btn btn-danger mb-2">Ocultar Lista</a>
    <a href="#osDependientes" type="button" class="btn btn-danger mb-2">Org. Sociales Dependientes</a>
    <a href="#osIndependientes" type="button" class="btn btn-info mb-2">Org. Sociales Independientes</a>
  </div>

<div id="lista1" class="container">
<h1 class="text-center">Lista</h1>
<div class="text-center">            
</div>      
            <table id="table5" class="table table-light table-striped mt-4">
                <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Sigla</th>
                    <th>Org. Social</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Celular</th>
                </tr>
                </thead>
                <tbody>
                @foreach($organizacionsMatrizes as $organizacionsMatrize)
                    <tr>
                        <td>{{$organizacionsMatrize->id}}</td>
                        <td>{{$organizacionsMatrize->sigla}}</td>
                        <td>{{$organizacionsMatrize->nombre}}</td>

                        @if($organizacionsMatrize->id_cabeza == null)
                        @else
                          @foreach($actorExterno as $actorExtern)
                            @if($organizacionsMatrize->id_cabeza == $actorExtern->id_actor)
                            <td>{{$organizacionsMatrize->actores->nombre}}</td>
                            @endif
                          @endforeach
                        @endif

                        @if($organizacionsMatrize->id_cabeza == null)
                        @else
                        @foreach($actorExterno as $actorExtern)
                          @if($organizacionsMatrize->id_cabeza == $actorExtern->id_actor)
                          <td>{{$actorExtern->cargoexternos->nombre}}</td>
                          @endif
                        @endforeach
                        @endif

                        @if($organizacionsMatrize->id_cabeza == null)
                        @else
                          @foreach($actorExterno as $actorExtern)
                            @if($organizacionsMatrize->id_cabeza == $actorExtern->id_actor)
                            <td>{{$organizacionsMatrize->actores->celular}}</td>
                            @endif
                          @endforeach
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
</div>
</div>

</div>


  <div id="contenido1" class="container">
  <div class="row" >
    @foreach($organizacionsMatrizes as $organizacionsMatrize)
    <div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-text m-0">{{$organizacionsMatrize->sigla}}</h4>
                <p class="card-text m-0">{{$organizacionsMatrize->nombre}}</p>
                @if($organizacionsMatrize->id_cabeza == null)
                @else
                  @foreach($actorExterno as $actorExtern)
                    @if($organizacionsMatrize->id_cabeza == $actorExtern->id_actor)
                    <p class="card-text m-0"><strong>Cabeza: </strong>{{$organizacionsMatrize->actores->nombre}}
                    ({{$actorExtern->cargoexternos->nombre}})</p>
                    @endif
                  @endforeach
                @endif
                <p class="card-text m-0"><strong>Fundacion: </strong>{{$organizacionsMatrize->fundacion}}</p>
                @if($organizacionsMatrize->id_dependencia == null)
                <p class="card-text m-0"><strong>Depedencia: </strong> ninguna</p>
                @else
                <p class="card-text m-0"><strong>Depedencia: </strong>{{$organizacionsMatrize->organizacionDependiente->sigla}}</p>
                @endif
                <p class="card-text m-0"><strong>Direccion: </strong>{{$organizacionsMatrize->direccion}}</p>
                <p class="card-text m-0"><strong>Telefono:  </strong>{{$organizacionsMatrize->telefono}}</p>  
                @if($organizacionsMatrize->id == 8 or $organizacionsMatrize->id == 11)
                <a href="/bds/{{$organizacionsMatrize->id}}/actorByOrganizacionFejuve" class="btn btn-primary">Miembros Fejueve</a>
                @else
                <a href="/bds/{{$organizacionsMatrize->id}}/actorByOrganizacion" class="btn btn-primary">Miembros</a>
                @endif
                <a href="/dependientesorganizacions/{{$organizacionsMatrize->id}}/miembros" class="btn btn-secondary">Orgs. Dependientes</a>
                <a href="tel:2{{$organizacionsMatrize->telefono}}" class="btn btn-danger">Llamar</a>
            </div>
        </div>
      </div>          
    @endforeach
  </div>
</div>

</seccion>


<!-- seccion organizaciones dependientes -->
<seccion id="osDependientes">
<h1 class="text-center">Organizaciones Sociales Dependientes</h1>
<div class="text-center">
            <a href="#osMatrizes" type="button" class="btn btn-danger mb-2">Org. Sociales Matrizes</a>
            <a href="#osIndependientes" type="button" class="btn btn-info mb-2">Org. Sociales Independientes</a>
</div>     
<div class="container" >
  <div class="row" >

    @foreach($organizacionsDependientes as $organizacionsDependiente)
    @if($organizacionsDependiente->id_dependencia != 11)
    @if($organizacionsDependiente->id_dependencia != 8)  
    <div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-text m-0">{{$organizacionsDependiente->sigla}}</h4>
                <p class="card-text m-0">{{$organizacionsDependiente->nombre}}</p>
                <p class="card-text m-0"><strong>Fundacion: </strong>{{$organizacionsDependiente->fundacion}}</p>

                @if($organizacionsDependiente->id_dependencia == null)
                <p class="card-text m-0"><strong>Depedencia: </strong> ninguna</p>
                @else
                <p class="card-text m-0"><strong>Depedencia: </strong>{{$organizacionsDependiente->organizacionDependiente->sigla}}</p>
                @endif

                <p class="card-text m-0"><strong>Direccion: </strong>{{$organizacionsDependiente->direccion}}</p>
                <p class="card-text m-0"><strong>Telefono:  </strong>   {{$organizacionsDependiente->telefono}}</p>
                <a href="/bds/{{$organizacionsDependiente->id}}/actorByOrganizacion" class="btn btn-primary">Miembros</a>
                <a href="tel:2{{$organizacionsDependiente->telefono}}" class="btn btn-danger">Llamar</a>
            </div>
        </div>
      </div>
      @endif 
      @endif
    @endforeach
  </div>

</div>
</seccion>

<!-- seccion organizaciones independientes -->
<seccion id="osIndependientes">
<h1 class="text-center">Organizaciones Sociales Independientes</h1>
<div class="text-center">
            <a href="#osMatrizes" type="button" class="btn btn-danger mb-2">Org. Sociales Matrizes</a>
            <a href="#osDependientes" type="button" class="btn btn-info mb-2">Org. Sociales Dependientes</a>
</div>  
<div class="container" >
  <div class="row" >

    @foreach($organizacionsIndependientes as $organizacionsIndependiente)
    <div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-text m-0">{{$organizacionsIndependiente->sigla}}</h4>
                <p class="card-text m-0">{{$organizacionsIndependiente->nombre}}</p>
                <p class="card-text m-0"><strong>Fundacion: </strong>{{$organizacionsIndependiente->fundacion}}</p>

                @if($organizacionsIndependiente->id_dependencia == null)
                <p class="card-text m-0"><strong>Depedencia: </strong> ninguna</p>
                @else
                <p class="card-text m-0"><strong>Depedencia: </strong>{{$organizacionsIndependiente->organizacionDependiente->sigla}}</p>
                @endif

                <p class="card-text m-0"><strong>Direccion: </strong>{{$organizacionsIndependiente->direccion}}</p>
                <p class="card-text m-0"><strong>Telefono:  </strong>   {{$organizacionsIndependiente->telefono}}</p>
                <a href="/bds/{{$organizacionsIndependiente->id}}/actorByOrganizacion" class="btn btn-primary">Miembros</a>
                <a href="tel:2{{$organizacionsIndependiente->telefono}}" class="btn btn-danger">Llamar</a>
            </div>
        </div>
      </div>          
    @endforeach
  </div>

</div>

</seccion>

  
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
        #contenido1{
          display: none;
        }
        #lista1{
          display: none;
        }
        .image-container {
            display: inline-block;
            overflow: hidden;
            position: relative;
        }
        .zoom {
            transition: transform 0.3s ease-in-out;
        }
        .image-container:hover .zoom {
            transform: scale(1.2);
        }
</style>
@stop

@section('js')

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
        $('#table5').DataTable({
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
    
    <script> console.log('Hi!'); </script>
    
    <script>
          window.onload = function() {
        }
        function funcionOcultarLista(){
          document.getElementById("lista1").style.display="none";
          document.getElementById("botonVerLista").style.display="inline-block";
          document.getElementById("botonOcultarLista").style.display="none";
        }

        function funcionVerLista(){
          document.getElementById("lista1").style.display="inline-block";
          document.getElementById("botonVerLista").style.display="none";
          document.getElementById("botonOcultarLista").style.display="inline-block";
        }
        
        function funcionOcultar(){
          document.getElementById("contenido1").style.display="none";
          document.getElementById("botonOcultar").style.display="none";
          document.getElementById("botonVer").style.display="inline-block";
        }
        
        function funcionVer(){
          document.getElementById("contenido1").style.display="inline-block";
          document.getElementById("botonOcultar").style.display="inline-block";
          document.getElementById("botonVer").style.display="none";
        }

        function onBusqueda2($value){
        let cupcakes = Array.prototype.slice.call(document.getElementsByClassName("cupcake"), 0);

        for(element of cupcakes){

            element.remove();
        }  
        var html_select = '';
        $('#area').html(html_select);

        }

      function onBusqueda($value){

      var palabra = $value;
      var contenidoCategorias = document.getElementById('contenidoBusqueda');
      const fracment = document.createDocumentFragment();

      let data;
      let data2;

      $.get('/api/tramites/'+palabra+'/palabra', function (data){
          console.log(data[0]);
          console.log(data[1]);

    for (var i=0; i<data.length; i++){
        var html_select = '<h3  value="">Actores:</h3></br>';

        const col = document.createElement("div");
        col.setAttribute("id","");
        col.classList.add("col-lg-4", "col-md-4", "col-sm-6", "cupcake");

        const card = document.createElement("div");
        card.classList.add("card","text-center");
        card.setAttribute("width","100%");
        
        const cardBody = document.createElement("div");
        cardBody.classList.add("card-body");

        const imgM = document.createElement("img");
        imgM.setAttribute("src", "/imagenes/persona.png");
        imgM.setAttribute("width","40");

        const imgF = document.createElement("img");
        imgF.setAttribute("src", "/imagenes/persona2.png");

        const p1 = document.createElement("p");
        p1.classList.add("card-text", "m-0");
        p1.innerText = data[0][i].nombre;

        const p2 = document.createElement("p");
        p2.classList.add("card-text", "m-0");
        p2.innerText = "Celular: "+data[0][i].celular+"";

        const p3 = document.createElement("p");
        p3.classList.add("card-text", "m-0");
        p3.innerText = "C.I.: "+data[0][i].carnet+"";

        const p4 = document.createElement("p");
        for (var j=0; j<data[1].length; j++){
          
          p4.classList.add("card-text", "m-0");
          p4.innerText = "Relacion: "+data[1][j].relacion+"";

        };
        const enlace = document.createElement("a");
        enlace.classList.add("btn", "btn-success");
        enlace.innerText = "WhatsApp";
        enlace.setAttribute("href","http://wa.me/591"+data[0][i].celular+"?text=Buenas%20Sr(a).%20"+data[0][i].nombre+"");

        const enlace2 = document.createElement("a");
        enlace2.classList.add("btn", "btn-danger");
        enlace2.innerText = "Llamar";
        enlace2.setAttribute("href","tel:"+data[0][i].celular+"");
 
        col.appendChild(card);
        card.appendChild(cardBody);
        cardBody.appendChild(imgM);

        cardBody.appendChild(p1);
        cardBody.appendChild(p2);
        cardBody.appendChild(p3);
        cardBody.appendChild(p4);
        cardBody.appendChild(enlace);
        cardBody.appendChild(enlace2);

        fracment.appendChild(col);

        contenidoCategorias.appendChild(fracment);


            
      $('#area').html(html_select);



    }});
    console.log("si");

}
             
</script>

@stop

