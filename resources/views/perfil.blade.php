@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Mi cuenta</title>
  <link rel="stylesheet" href="/css/perfil.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="cajaPrincipal">
    <div class="bienvenida">
      <p class="perfil">
        Hola, {{$usuario->nombre}}!
      </p>
      <p>
        <img class="fotoPerfil" src="storage/{{$usuario->avatar}}" alt="Avatar">
      </p>
    </div>

    <form class="formulario" action="" method="POST">
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
      <div id="tel" class="datos">
        <p>
          <input id="telefono" type="text" name="telefono" value="{{$usuario->telefono}}" placeholder="Teléfono" >
        </p>
      </div>

      <!--Dirección-->
      <div id="dir" class="datos">
        <p>
          <input id="direccion" type="text" name="direccion" value="{{$usuario->direccion}}" placeholder="Ingrese su direccion" >
        </p>
      </div>

      <!--Localidad-->
      <div id="loc" class="datos">
        <p>
          <input id="localidad" type="text" name="localidad" value="{{$usuario->localidad}}" placeholder="Ingrese la localidad" >
        </p>
      </div>

      <!--Provincia-->
      <div class="datos">
        <p id="parrafo-prov">
          <label for="provincias">
            Provincia:
          </label>
          <select class="" name="provincia" id="provincias">
            <script type="text/javascript">
              function getProvincias() {
                fetch('https://apis.datos.gob.ar/georef/api/provincias')
                //Se pide un Json a la API, lo convierte y lo adapta al sitio
                .then(function(response)
                {
                  return response.json();
                })
                .then(function(data)
                {
                  for(let i = 0; i<data['provincias'].length;i++) {
                    let provincias = document.querySelector("#provincias");
                    let option = document.createElement('option');
                    option.text = data['provincias'][i].nombre;
                    option.value = option.text;
                    provincias.appendChild(option);
                  }
                });
              }
            </script>
          </select>
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
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="/js/perfil_scripts.js"></script>
@endsection
