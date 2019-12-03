@extends('plantilla')
<html lang="en" dir="ltr">
  <head>
    @section('headerConfigs')
    <title>Mi Perfil </title>
    <link rel="stylesheet" href="/css/perfil.css">
    @endsection
  </head>

  <body>
    <main>
      @section('main')
      <div class="cajaPrincipal">
        <div>
          <p class="perfil">
            Hola {{$usuarioAutenticado->name}}
          </p>
          <p>
            <img class="fotoPerfil" src="/storage/{{$usuarioAutenticado->avatar}}" alt="Avatar">
          </p>
        </div>

        <form class="datos" action="" method="POST">

          <!--Username-->
          <div class="datos">
            <p>
              Aca iria el nombre de usuario pero todavia no lo hicimos
            </p>
          </div>

          <!--Email-->
          <div class="datos">
            <p>
              {{$usuarioAutenticado->email}}
            </p>
          </div>

          <!--Teléfono-->
          <div class="datos">
            <p>
              <input id="telefono" type="text" name="telefono" value="Aca iria un value" placeholder="Teléfono" >
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!--Dirección-->
          <div class="datos">
            <p>
              <input id="direccion" type="text" name="direccion" value="Aca iria un value" placeholder="Ingrese su direccion" >
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!--Localidad-->
          <div class="datos">
            <p>
              <input id="localidad" type="text" name="localidad" value="Aca iria un value" placeholder="Ingrese la localidad" >
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!--Provincia-->
          <div class="datos">
            <p>
              <label for="provincias">
                Provincia: Aca iria un value
              </label>
              <select class="" name="provincia" id="provincias">
                <!-- ACA VAN LAS PROVINCIAS -->
              </select>
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!--Actualizar-->
          <div class="actualizar">
            <p>
              <div class="button">
                <button id="button-cuenta" type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </p>
          </div>

        </form>
      </div>
    @endsection
    </main>
  </body>
</html>

<script type="text/javascript">
/**
* Se pide un json a una API, lo convertimos y luego lo adaptamos al sitio.
**/
  function getProvincias(){
    fetch('https://apis.datos.gob.ar/georef/api/provincias')
    .then(function(response) {
      return response.json();
    })
    .then(function(myJson) {
      for(let i = 0; i<myJson['provincias'].length;i++){
        let provincias = document.querySelector("#provincias");
        let option = document.createElement('option');
        option.text = myJson['provincias'][i].nombre;
        option.value = option.text;
        provincias.appendChild(option);
      }
      
    });
  }

  window.onload = function() {
    getProvincias()
  }
</script>
