@extends('plantilla')
<html lang="en" dir="ltr">
  <head>
    @section('headerConfigs')
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
    @endsection
  </head>

  <body>
    <main>
      @section('main')
      <div class="container">
        <h1>¡Hola! <br> por favor ingresá tu usuario y contraseña</h1>
        <form action="login.php" method="POST">
          <!-- E-mail -->
          <div class="datos">
            <input class="campos" id="formSup" placeholder="E-mail" name="email" type="text" value="aca iria el value del mail">
          </div>

          <!-- Password -->
          <div class="datos">
            <input class="campos" placeholder="Password" name="password" type="password" value="">
          </div>

          <p>
            Aca iria un error de logueo
          </p>

          <!-- Recuperar contraseña -->
          <a class="olviPass" href="recuperarContrasenia.php">¿Olvidaste tu contraseña?</a>

          <!-- Recordarme -->
          <div class="checkbox">
            <input id="recordarme" name="recordarme" type="checkbox" value="recordarme">
            <label for="recordarme">Recordarme</label>
          </div>

          <!-- Botón -->
          <div class="boton">
            <input id="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
          </div>
        </form>
      </div>
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      @endsection
    </main>
  </body>
</html>
