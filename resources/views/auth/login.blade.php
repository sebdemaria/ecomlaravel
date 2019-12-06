@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Login</title>
  <link rel="stylesheet" href="/css/login.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="container">
    <h1>¡Hola! <br> por favor ingresá tu usuario y contraseña</h1>
    <form action="login" method="POST">
      @csrf

      <!-- E-mail -->
      <div class="datos">
        <input class="campos" id="formSup" placeholder="E-mail" name="email" type="text" value="">
      </div>

      <!-- Password -->
      <div class="datos">
        <input class="campos" placeholder="Password" name="password" type="password" value="">
      </div>

      <p>
      </p>

      <!-- Recuperar contraseña -->
      @if (Route::has('password.request'))
        <a class=olviPass href="{{ route('password.request') }}">
          ¿Olvidaste tu contraseña?
        </a>
      @endif

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
