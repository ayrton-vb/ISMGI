
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<h1 class="text-center">Organizaciones Sociales Matrizes</h1>
    
<div class="container" >
  <div class="row" >

    @foreach($organizacionsMatrizes as $organizacionsMatrize)
    <div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-text m-0">{{$organizacionsMatrize->sigla}}</h4>
                <p class="card-text m-0">{{$organizacionsMatrize->nombre}}</p>
                <p class="card-text m-0"><strong>Fundacion: </strong>{{$organizacionsMatrize->fundacion}}</p>

                @if($organizacionsMatrize->id_dependencia == null)
                <p class="card-text m-0"><strong>Depedencia: </strong> ninguna</p>
                @else
                <p class="card-text m-0"><strong>Depedencia: </strong>{{$organizacionsMatrize->organizacionDependiente->sigla}}</p>
                @endif

                <p class="card-text m-0"><strong>Direccion: </strong>{{$organizacionsMatrize->direccion}}</p>
                <p class="card-text m-0"><strong>Telefono:  </strong>   {{$organizacionsMatrize->telefono}}</p>
                <a href="/bds/{{$organizacionsMatrize->id}}/actorByOrganizacion" class="btn btn-primary">Miembros</a>
                <a href="/dependientesorganizacions/{{$organizacionsMatrize->id}}/miembros" class="btn btn-secondary">Orgs. Dependientes</a>
                <a href="tel:2{{$organizacionsMatrize->telefono}}" class="btn btn-danger">Llamar</a>
            </div>
        </div>
      </div>          
    @endforeach
  </div>

</div>

<h1 class="text-center">Organizaciones Sociales Independientes</h1>
    
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



<h1 class="text-center">Busqueda</h1>
    
<div class="container" >
 
  <div class="row">
              <div class="col-6">

                  <div class="mb-3">
                    <select  id="valorBusqueda" name="" class="form-select" aria-label="Default select example" tabindex="1">
                        <option  value="0">-Selecciona-</option>
                        <option  value="1">Nombre Actor</option>
                        <option  value="2">Celular Actor</option>
                        <option  value="3">Carnet Actor</option>
                        <option  value="4">Nombre Organizacion</option>
                    </select>
                  </div>
              </div>
              <div class="col-6">

              <div class="input-group mb-3">

                <input onkeyup ="onBusqueda(busqueda.value);" onkeydown ="onBusqueda2(busqueda.value);" id="busqueda" type="text" class="form-control" placeholder="Palabra Clave" aria-label="Recipient's username" aria-describedby="button-addon2" >
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>

              </div>
  </div>  
    
</div>


<section>

<div id="area">
   
</div>


<div id="">
    <div class="container">
        <div id="contenidoBusqueda" class="row">

            
        </div>
    </div>        
</div>
</section>

@stop

@section('css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script> console.log('Hi!'); </script>
    
    <script>
          window.onload = function() {
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

