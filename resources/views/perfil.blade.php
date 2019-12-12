@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Mi cuenta</title>
  <link rel="stylesheet" href="/css/perfil.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="cajaPrincipal">
    <div>
      <p class="perfil">
        Hola, {{$usuario->nombre}}!
      </p>
      <p>
        <img class="fotoPerfil" src="storage/{{$usuario->avatar}}" alt="Avatar">
      </p>
    </div>

    <form class="datos" action="" method="POST">
      @csrf

      <!--Username-->
      <div class="datos">
        <p>
          {{$usuario->username}}
        </p>
      </div>

      <!--Email-->
      <div class="datos">
        <p>
          {{$usuario->email}}
        </p>
      </div>

      <!--Teléfono-->
      <div class="datos">
        <p>
          <input id="telefono" type="text" name="telefono" value="{{$usuario->telefono}}" placeholder="Teléfono" >
        </p>
        <p>
          Aca iria un error de tipeo
        </p>
      </div>

      <!--Dirección-->
      <div class="datos">
        <p>
          <input id="direccion" type="text" name="direccion" value="{{$usuario->direccion}}" placeholder="Ingrese su direccion" >
        </p>
        <p>
          Aca iria un error de tipeo
        </p>
      </div>

      <!--Localidad-->
      <div class="datos">
        <p>
          <input id="localidad" type="text" name="localidad" value="{{$usuario->localidad}}" placeholder="Ingrese la localidad" >
        </p>
        <p>
          Aca iria un error de tipeo
        </p>
      </div>

      <!--Provincia-->
      <div class="datos">
        <p id="parrafo-prov">
          <label for="provincias">
            Provincia: Aca iria un value
          </label>
          <select class="" name="provincia" id="provincias">
            <script type="text/javascript">
              /*Se pide un Json a una API, se lo convierte y adapta al sitio*/
              function getProvincias() {
                fetch('https://apis.datos.gob.ar/georef/api/provincias')
                .then(function(response) {
                  return response.json();
                })
                .then(function(myJson) {
                  for(let i = 0; i<myJson['provincias'].length;i++) {
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
          </select>
        </p>
        <p>
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
