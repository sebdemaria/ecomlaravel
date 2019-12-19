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

    <form class="formulario" method="POST" action="/upload" enctype="multipart/form-data">
      @csrf
      
      <!-- Imagenes -->
      <div id="av" class="datos">
        <p class="parrafoAvatar">
          <label for="avatar">Elige tu avatar</label>
        </p>
        <p>
          <input class="avatar" type="file" id="avatar" name="avatar" value="">
        </p>
      </div>

      <!-- Nombre -->
      <div id="nombre" class="datos">
        <p>
          <input id="nom" type="text" name="nombre" value="{{old('nombre')}}" placeholder ="Nombre del producto">
        </p>
      </div>

      <!-- Marca -->
      <div id="marca" class="datos">
        <p>
          <input id="marc" type="text" name="marca" value="{{old('marca')}}" placeholder="Marca">
        </p>
      </div>

      <!-- Precio -->
      <div id="precio" class="datos">
        <p>
          <input id="pre" type="text" name="precio" value="{{old('precio')}}" placeholder="Precio">
        </p>
      </div>

      <!-- Color -->
      <div id="color" class="datos">
        <p>
          <input id="col" type="text" name="color" value="{{old('color')}}" placeholder="Color">
        </p>
      </div>

      <!-- Stock -->
      <div id="stock" class="datos">
        <p>
          <input id="sto" type="text" name="stock" value="{{old('stock')}}" placeholder="Stock">
        </p>
      </div>

      <!-- Descripcion -->
      <div id="descripcion" class="datos">
        <p>
          <textarea id= "descrip" name="descripcion" rows="20" cols="100"> </textarea>
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
