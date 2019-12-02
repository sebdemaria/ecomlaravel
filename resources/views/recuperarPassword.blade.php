@extends('plantilla')
<html lang="en" dir="ltr">
  <head>
    @section('headerConfigs')
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="/css/recuperarContrasenia.css">
    @endsection
  </head>

  <body>
    <main>
      @section('main')
      <h1>Por favor, rellena los siguientes campos para poder reestablecer tu contraseña: </h1>
      <form class="datos" action="home.php" method="post">
        <div class="datos">
          <p>
            <input id="username" type="text" name="username" value="" placeholder="Usuario" required>
          </p>
        </div>

        <div class="datos">
          <p>
            <input id="email" type="email" name="email" value="" placeholder="E-mail" required>
          </p>
        </div>

        <div class="generarContrasenia">
          <!--esto me genera una contraseña nueva y la envia al mail-->
        </div>
        <input type="submit" name="" value="Enviar">
      </form>
      @endsection
    </main>
  </body>
</html>
