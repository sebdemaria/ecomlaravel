@extends('plantilla')
<html lang="en" dir="ltr">
  <head>
    @section('headerConfigs')
    <title>Registrate</title>
    <link rel="stylesheet" href="/css/registro.css">
    @endsection
  </head>

  <body>
    <main>
      @section('main')
      <div class="cajaPrincipal">
        <h1>Unite a nuestra familia</h1>
        <form class="formulario" action="registro.php" method="POST" enctype="multipart/form-data">

          <!-- Nombre -->
          <div class="datos">
            <p>
              <input id= "nombre" type="text" name="nombre" value="Aca iria un value" placeholder ="Ingrese su nombre">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Apellido -->
          <div class="datos">
            <p>
              <input id="apellido" type="text" name="apellido" value="Aca iria un value" placeholder="Ingrese su apellido">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Username -->
          <div class="datos">
            <p>
              <input id="username" type="text" name="username" value="Aca iria un value" placeholder="Ingrese su usuario">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- E-mail -->
          <div class="datos">
            <p>
              <input id="email" type="text" name="email" value="Aca iria un value" placeholder="Ingrese su email">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Password -->
          <div class="datos">
            <p>
              <input id="password" type="password" name="password" value="" placeholder="Ingrese su contraseña">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Confirmar contraseña -->
          <div class="datos">
            <p>
              <input id="passwordConf" type="password" name="passwordConf" value="" placeholder="Ingrese su contraseña">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Fecha de nacimiento -->
          <div class="datos">
            <p>
              Fecha de nacimiento
            </p>
            <p>
              <input class="campos" id="fecha" type="date" name="fecha" value="Aca iria un value" placeholder="Fecha de nacimiento" >
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Avatar -->
          <div class="datos">
            <p class="parrafoAvatar">
              <label for="avatar">Elige tu avatar</label>
            </p>
            <p>
              <input class="avatar" type="file" id="avatar" name="avatar" value="">
            </p>
            <p>
              Aca iria un error de tipeo
            </p>
          </div>

          <!-- Terminos y condiciones -->
          <div class="terminos">
            <input type="checkbox" name="terminos" value="" id="terminos">
            <label class="declaro" for="terminos">
              Declaro que he leído y acepto la nueva Política de Privacidad y los Términos y Condiciones.
            </label>
          </div>

          <!-- Crear cuenta -->
          <div class="crearcuenta">
            <p>
              <div class="button">
                <button id="button-cuenta" type="submit" class="btn btn-primary">
                  Crear cuenta
                </button>
              </div>
            </p>
          </div>

        </form>
      </div>
      @endsection
    </main>
  </body>
</html>
