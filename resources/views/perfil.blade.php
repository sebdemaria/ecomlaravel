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
            Hola nombredeusuario!
          </p>
          <p>
            <img class="fotoPerfil" src="/storage/{{$usuarioNuevo->avatar}}" alt="Avatar">
          </p>
        </div>

        <form class="datos" action="" method="POST">

          <!--Username-->
          <div class="datos">
            <p>
              usernamedelusuario
            </p>
          </div>

          <!--Email-->
          <div class="datos">
            <p>
              emaildelusuario
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
              <select class="" selected="chaco" name="provincia" id="provincias">
                <option value="buenosaires">
                  Buenos Aires
                </option>
                <option value="catamarca">
                  Catamarca
                </option>
                <option value="chaco">
                  Chaco
                </option>
                <option value="chubut">
                  Chubut
                </option>
                <option value="cordoba">
                  Córdoba
                </option>
                <option value="corrientes">
                  Corrientes
                </option>
                <option value="entrerios">
                  Entre Ríos
                </option>
                <option value="formosa">
                  Formosa
                </option>
                <option value="jujuy">
                  Jujuy
                </option>
                <option value="lapampa">
                  La Pampa
                </option>
                <option value="larioja">
                  La Rioja
                </option>
                <option value="mendoza">
                  Mendoza
                </option>
                <option value="misiones">
                  Misiones
                </option>
                <option value="neuquen">
                  Neuquen
                </option>
                <option value="rionegro">
                  Rio Negro
                </option>
                <option value="salta">
                  Salta
                </option>
                <option value="sanjuan">
                  San Juan
                </option>
                <option value="santacruz">
                  Santa Cruz
                </option>
                <option value="santafe">
                  Santa Fé
                </option>
                <option value="santiagodelestero">
                  Santiago del Estero
                </option>
                <option value="tierradelfuego">
                  Tierra del Fuego
                </option>
                <option value="tucuman">
                  Tucumán
                </option>
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
