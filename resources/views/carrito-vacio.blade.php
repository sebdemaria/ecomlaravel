@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Mi Carrito</title>
  <link rel="stylesheet" href="/css/carrito-vacio.css">
@endsection

<!-- MAIN -->
@section('main')
  <h1>
    Mi carrito
  </h1>

  <div class="caja-principal">
      <p>¡Agrega un producto!<p>
      <img src="/img/carrito.jpg" alt="">
    <p>
      <a href="productos">
        <button id="button" type="button" class="btn btn-outline-primary">Ver más productos</button>
      </a>
    </p>
    <p>
      <a href="home">
        <button id="button" type="button" class="btn btn-outline-primary">Volver al sitio</button>
      </a>
    </p>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
