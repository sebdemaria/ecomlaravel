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

        <!-- Nombre del producto -->
        <p>
          Nombre: {{$producto->nombre}}
        </p>

        <!-- Imagen del producto -->
        <p>
          <img src="/storage/samsuang-a50.png" alt="foto-producto">
        </p>

        <!-- Botones -->
        <div class="botones">

          <!-- Compra -->
          <div class="button">
            <a href="checkout"><button id="button-compra" type="button-compra" class="btn btn-primary">Comprar</button><a>
          </div>

          <!--Agregar al carrito-->
          <div class="button">
            <a href="carrito"><button id="button-agregar" type="button" class="btn btn-outline-primary">Agregar al carrito</button>
          </div>

          <!--Ver más -->
          <div class="button">
            <a href="detalle-prod"><button id="button-agregar" type="button" class="btn btn-outline-primary">Ver más</button></a>
          </div>
        </div>

        <!-- Marca del producto -->
        <p>
          Marca: {{$producto->marca}}
        </p>

        <!-- Precio del producto -->
        <p>
          Precio: ${{$producto->precio}}
        </p>
      </div>
    @endforeach
  </div>
  <div class="paginacion">
    {{$productos->links()}}
  </div>
@endsection
