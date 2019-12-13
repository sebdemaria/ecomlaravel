@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Mi cuenta</title>
  <link rel="stylesheet" href="/css/productos.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="caja-principal">
    @foreach ($productos as $producto)
      <div class="productos">
        <p>
          Nombre: {{$producto->nombre}}
        </p>
        <p>
          <img src="/storage/samsung-a50.png" alt="foto-producto">
        </p>
        <p>
          Aca va a una descripción
        </p>
        <p>
          Marca: {{$producto->marca}}
        </p>
        <p>
          Precio: {{$producto->precio}}
        </p>
      </div>
    @endforeach
  </div>
    <div class="paginacion">
      {{$productos->links()}}
    </div>
@endsection
