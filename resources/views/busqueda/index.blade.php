
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')




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
          console.log(data[2]);
          console.log(data[3]);

    for (var i=0; i<data[0].length; i++){
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
        imgM.setAttribute("width","80");

        const imgF = document.createElement("img");
        imgF.setAttribute("src", "/imagenes/persona2.png");

        const p1 = document.createElement("p");
        p1.classList.add("card-text", "m-0");
        p1.innerText = data[0][i].nombre;

        const div = document.createElement("div");

        const titulo = document.createElement("p");
        titulo.classList.add("fw-bold");
        titulo.classList.add("d-inline");
        titulo.innerText = "Celular : ";

        const p2 = document.createElement("p");
        p2.classList.add("card-text", "m-0");
        p2.classList.add("d-inline");
        p2.innerText = ""+data[0][i].celular+"";

        const div2 = document.createElement("div");

        const titulo2 = document.createElement("p");
        titulo2.classList.add("fw-bold");
        titulo2.classList.add("d-inline");
        titulo2.innerText = "C.I.: ";

        const p3 = document.createElement("p");
        p3.classList.add("card-text", "m-0");
        p3.classList.add("d-inline");
        p3.innerText = ""+data[0][i].carnet+"";

        const div3 = document.createElement("div");

        const titulo3 = document.createElement("p");
        titulo3.classList.add("fw-bold");
        titulo3.classList.add("d-inline");
        titulo3.innerText = "Relacion: ";

        const p4 = document.createElement("p");
        p4.classList.add("card-text", "m-0");
        p4.classList.add("d-inline");
        p4.innerText = ""+data[1][i][0].relacion+"";

        const div4 = document.createElement("div");

        const titulo4 = document.createElement("p");
        titulo4.classList.add("fw-bold");
        titulo4.classList.add("d-inline");
        titulo4.innerText = "Cargo: ";

        const p5 = document.createElement("p");
        p5.classList.add("d-inline");
        p5.classList.add("card-text", "m-0");
        p5.innerText = ""+data[2][i][0].nombre+"";

        const div5 = document.createElement("div");

        const titulo5 = document.createElement("p");
        titulo5.classList.add("fw-bold");
        titulo5.classList.add("d-inline");
        titulo5.innerText = "Organizacion: ";

        const p6 = document.createElement("p");
        p6.classList.add("card-text", "m-0");
        p6.classList.add("d-inline");
        p6.innerText = ""+data[3][i][0].nombre+"";

        const enlace = document.createElement("a");
        enlace.classList.add("btn", "btn-success");
        enlace.innerText = "WhatsApp";
        enlace.setAttribute("href","http://wa.me/591"+data[0][i].celular+"?text=Buenas%20Sr(a).%20"+data[0][i].nombre+" "+data[2][i][0].nombre+" de la "+data[3][i][0].nombre+"");

        const enlace2 = document.createElement("a");
        enlace2.classList.add("btn", "btn-danger");
        enlace2.innerText = "Llamar";
        enlace2.setAttribute("href","tel:"+data[1][i].celular+"");
 
        col.appendChild(card);
        card.appendChild(cardBody);
        cardBody.appendChild(imgM);

        cardBody.appendChild(p1);

        cardBody.appendChild(div);
        div.appendChild(titulo);
        div.appendChild(p2);

        cardBody.appendChild(div2);
        div2.appendChild(titulo2);
        div2.appendChild(p3);
        
        cardBody.appendChild(div3);
        div3.appendChild(titulo3);
        div3.appendChild(p4);

        cardBody.appendChild(div4);
        div4.appendChild(titulo4);
        div4.appendChild(p5);

        cardBody.appendChild(div5);
        div5.appendChild(titulo5);
        div5.appendChild(p6);

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

