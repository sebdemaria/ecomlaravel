@extends('plantilla')
<html lang="en" dir="ltr">
  <head>
    @section('headerConfigs')
    <title>Registrate</title>
    <link rel="stylesheet" href="/css/registro.css">
    @endsection
  </head>

  <body>
    <div class="container-fluid">

      <main>
        <div class="cajaPrincipal">
          <h1>Unite a nuestra familia</h1>
          <form class="formulario" action="registro.php" method="POST" enctype="multipart/form-data">

            <!-- Nombre -->
            <div class="datos">
              <p>
                <input id= "nombre" type="text" name="nombre" value="<?= $nombre ?>" placeholder ="Ingrese su nombre">
              </p>
              <p>
                <?= (isset($erroresData['nombre']) ? $erroresData['nombre'] : '') ?>
              </p>
            </div>

            <!-- Apellido -->
            <div class="datos">
              <p>
                <input id="apellido" type="text" name="apellido" value="<?= $apellido ?>" placeholder="Ingrese su apellido">
              </p>
              <p>
                <?= (isset($erroresData['apellido']) ? $erroresData['apellido'] : '') ?>
              </p>
            </div>

            <!-- Username -->
            <div class="datos">
              <p>
                <input id="username" type="text" name="username" value="<?= $username ?>" placeholder="Ingrese su usuario">
              </p>
              <p>
                <?= (isset($erroresData['username']) ? $erroresData['username'] : '') ?>
              </p>
            </div>

            <!-- E-mail -->
            <div class="datos">
              <p>
                <input id="email" type="text" name="email" value="<?= $email ?>" placeholder="Ingrese su email">
              </p>
              <p>
                <?= (isset($erroresData['email']) ? $erroresData['email'] : '') ?>
              </p>
            </div>

            <!-- Password -->
            <div class="datos">
              <p>
                <input id="password" type="password" name="password" value="" placeholder="Ingrese su contraseña">
              </p>
              <p>
                <?= (isset($erroresData['password']) ? $erroresData['password'] : '') ?>
              </p>
            </div>

            <!-- Confirmar contraseña -->
            <div class="datos">
              <p>
                <input id="passwordConf" type="password" name="passwordConf" value="" placeholder="Ingrese su contraseña">
              </p>
              <p>
                <?= (isset($erroresData['passwordConf']) ? $erroresData['passwordConf'] : '') ?>
              </p>
            </div>

            <!-- Fecha de nacimiento -->
            <div class="datos">
              <p>
                Fecha de nacimiento
              </p>
              <p>
                <input class="campos" id="fecha" type="date" name="fecha" value="<?= $fecha ?>" placeholder="Fecha de nacimiento" >
                <?= (isset($erroresData['fecha']) ? $erroresData['fecha'] : '') ?>
              </p>
            </div>

            <!-- Avatar -->
            <div class="datos">
              <p class="parrafoAvatar">
                <label for="avatar">Elige tu avatar</label>
              </p>
              <input class="avatar" type="file" id="avatar" name="avatar" value="">
              <?= (isset($erroresAvatar['avatar']) ? $erroresAvatar['avatar'] : '') ?>
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
      </main>
      <?php
        require_once('footer.php');
      ?>
    </div>
  </body>
</html>
