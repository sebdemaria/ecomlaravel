@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Registrate</title>
  <link rel="stylesheet" href="/css/upload.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="cajaPrincipal">
    <h1>¿Listo para vender?</h1>
    <form class="formulario" method="POST" action="upload" enctype="multipart/form-data">
      @csrf

      <!-- Imagenes -->
      <div id="av" class="datos">
        <p class="parrafoAvatar">
          <label for="avatar">Elige tu avatar</label>
        </p>
        <p>
          <input class="avatar" type="file" id="avatar" name="imagenes" value="">
        </p>
      </div>

      <!-- Nombre del producto -->
      <div id="nom" class="datos">
        <p>
          <input id= "nombre" type="text" name="nombre" value="{{old('nombre')}}" placeholder ="Nombre del producto">
        </p>
      </div>

      <!-- Categoria -->
      <div id="ap" class="datos">
        <p>
          <input id="apellido" type="text" name="categoria" value="{{old('categoria')}}" placeholder="Categoria">
        </p>
      </div>

      <!-- Precio -->
      <div id="user" class="datos">
        <p>
          <input id="username" type="text" name="precio" value="{{old('precio')}}" placeholder="Precio">
        </p>
      </div>

      <!-- Descripcion de prod -->
      <div id="descrip" class="datos">
        <p>
          <textarea id= "descrip" name="descrip" rows="20" cols="100"> </textarea>
        </p>
      </div>

      <!-- Subir producto -->
      <div class="crearcuenta">
        <p>
          <div class="button">
            <button id="button-cuenta" type="submit" class="btn btn-primary">
              Subir producto
            </button>
          </div>
        </p>
      </div>
    </form>
  </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!--<script src="/js/register_scripts.js"></script>-->
    <script src="/js/register_scripts.js"></script>
@endsection
