@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Registro</title>
  <link rel="stylesheet" href="/css/registro.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="cajaPrincipal">
    <h1>Unite a nuestra familia</h1>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf

      <!-- Nombre -->
      <div class="datos">
        <p>
          <input id= "nombre" type="text" name="nombre" value="{{old('nombre')}}" placeholder ="Ingrese su nombre">
        </p>
        <p>
          Aca iria un error
        </p>
      </div>

      <!-- Apellido -->
      <div class="datos">
        <p>
          <input id="apellido" type="text" name="apellido" value="{{old('apellido')}}" placeholder="Ingrese su apellido">
        </p>
        <p>
          Aca iria un error
        </p>
      </div>

      <!-- Username -->
      <div>
        <p>
          <input id="username" type="text" name="username" value="{{old('username')}}" placeholder="Ingrese su usuario">
        </p>
        <p>
          Aca iria un error
        </p>
      </div>

      <!-- E-mail -->
      <div class="datos">
        <p>
          <input id="email" type="text" name="email" value="{{old('email')}}" placeholder="Ingrese su email">
        </p>
        <p>
          Aca iria un error
        </p>
      </div>

      <!-- Password -->
      <div class="datos">
        <p>
          <input id="password" type="password" name="password" value="" placeholder="Ingrese su contraseña">
        </p>
        <p>
          Aca iria un error
        </p>
      </div>

      <!-- Confirmar contraseña -->
      <div class="datos">
        <p>
          <input id="password_confirmation" type="password" name="password_confirmation" value="" placeholder="Ingrese su contraseña">
        </p>
        <p>
          Aca iria un error
        </p>
      </div>

      <!-- Fecha de nacimiento -->
      <div class="datos">
        <p>
          Fecha de nacimiento
        </p>
        <p>
          <input class="campos" id="fecha" type="date" name="fecha" value="{{old('fecha')}}" placeholder="Fecha de nacimiento" >
        </p>
        <p>
          Aca iria un error
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
          Aca iria un error
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
