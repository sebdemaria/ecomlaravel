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
        <form class="formulario" action="/registro" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

          <!-- Nombre -->
          <div class="datos">
            <p>
              <input id= "nombre" type="text" name="nombre" value="{{old('nombre')}}" placeholder ="Ingrese su nombre">
            </p>
              {{ $errors->first('nombre') }}
            </p>
          </div>

          <!-- Apellido -->
          <div class="datos">
            <p>
              <input id="apellido" type="text" name="apellido" value="{{old('apellido')}}" placeholder="Ingrese su apellido">
            </p>
            <p>
              {{ $errors->first('apellido') }}
            </p>
          </div>

          <!-- Username -->
          <div class="datos">
            <p>
              <input id="username" type="text" name="username" value="{{old('username')}}" placeholder="Ingrese su usuario">
            </p>
            <p>
              {{ $errors->first('username') }}
            </p>
          </div>

          <!-- E-mail -->
          <div class="datos">
            <p>
              <input id="email" type="text" name="email" value="{{old('email')}}" placeholder="Ingrese su email">
            </p>
            <p>
              {{ $errors->first('email') }}
            </p>
          </div>

          <!-- Password -->
          <div class="datos">
            <p>
              <input id="password" type="password" name="password" value="" placeholder="Ingrese su contraseña">
            </p>
            <p>
              <p>{{ $errors->first('password') }}</p>
            </p>
          </div>

          <!-- Confirmar contraseña -->
          <div class="datos">
            <p>
              <input id="password_confirmation" type="password" name="password_confirmation" value="" placeholder="Ingrese su contraseña">
            </p>
            <p>
              <p>{{ $errors->first('password_confirmation') }}</p>
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
              {{ $errors->first('fecha') }}
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
              {{ $errors->first('avatar') }}
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
