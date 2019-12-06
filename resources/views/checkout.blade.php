@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>¡Gracias por tu compra!</title>
  <link rel="stylesheet" href="/css/checkout.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="container-fluid">
    <div class="caja-principal">
      <h1>
        ¡Muchas gracias por confiar en nosotros!
      </h1>
      <p><a href="home">Volver al sitio</a></p>
    </div>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
