@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Login</title>
  <link rel="stylesheet" href="/css/login.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="container">
    <h1>¡Hola! <br> Por favor ingresá tu usuario y contraseña</h1>
    <form class="formulario" action="login" method="POST" >
      @csrf

      <!-- E-mail -->
      <div id="mail" class="datos">
        <input class="campos" id="formSup" placeholder="E-mail" name="email" type="text" value="{{old('email')}}">
        <p>
          @if ($errors->get('email'))
            Los datos ingresados no son validos.
          @endif
        </p>
      </div>

      <!-- Password -->
      <div id="pass" class="datos">
        <input class="campos" placeholder="Password" name="password" type="password" value="">
        <p>
          @if ($errors->get('password'))
            Ingrese una contraseña.
          @endif
        </p>
      </div>

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
  <script src="/js/login_scripts.js"></script>
@endsection
