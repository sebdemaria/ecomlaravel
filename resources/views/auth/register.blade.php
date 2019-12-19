@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Registrate</title>
  <link rel="stylesheet" href="/css/registro.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="cajaPrincipal">
    <h1>Unite a nuestra familia</h1>
    <form class="formulario" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf

      <!-- Nombre -->
      <div id="nom" class="datos">
        <p>
          <input id= "nombre" type="text" name="nombre" value="{{old('nombre')}}" placeholder ="Nombre">
        </p>
      </div>

      <!-- Apellido -->
      <div id="ap" class="datos">
        <p>
          <input id="apellido" type="text" name="apellido" value="{{old('apellido')}}" placeholder="Apellido">
        </p>
      </div>

      <!-- Username -->
      <div id="user" class="datos">
        <p>
          <input id="username" type="text" name="username" value="{{old('username')}}" placeholder="Usuario">
        </p>
        <p>
          @if ($errors->get('username'))
            El usuario ya esta registrado.
          @endif
        </p>
      </div>

      <!-- E-mail -->
      <div id="mail" class="datos">
        <p>
          <input id="email" type="text" name="email" value="{{old('email')}}" placeholder="Email">
        </p>
        <p>
          @if ($errors->get('email'))
            El email ya esta registrado.
          @endif
        </p>
      </div>

      <!-- Password -->
      <div id="pass" class="datos">
        <p>
          <input id="password" type="password" name="password" value="" placeholder="Contraseña">
        </p>
      </div>

      <!-- Confirmar contraseña -->
      <div id="passConf" class="datos">
        <p>
          <input id="password_confirmation" type="password" name="password_confirmation" value="" placeholder="Repita su contraseña">
        </p>
      </div>

      <!-- Fecha de nacimiento -->
      <div id="nac" class="datos">
        <p>
          Fecha de nacimiento
        </p>
        <p>
          <input class="campos" id="fecha" type="date" name="fecha" value="{{old('fecha')}}" placeholder="Fecha de nacimiento" >
        </p>
      </div>

      <!-- Avatar -->
      <div id="av" class="datos">
        <p class="parrafoAvatar">
          <label for="avatar">Elige tu avatar</label>
        </p>
        <p>
          <input class="avatar" type="file" id="avatar" name="avatar" value="">
        </p>
      </div>

      <!-- Terminos y condiciones -->
      <div class="terminos">
        <input type="checkbox" name="terminos" value="" id="terminos">
        <label class="declaro" for="terminos">
          Declaro que he leído y acepto la nueva <a href='https://www.mercadolibre.com/org-img/eventuales/MEC/safe/mainpqpriva.html'>Política de Privacidad y los Términos y Condiciones.</a>
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

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!--<script src="/js/register_scripts.js"></script>-->
    <script src="/js/register_scripts.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="/js/register_scripts.js"></script>
@endsection
