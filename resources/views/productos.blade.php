@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Mi cuenta</title>
  <link rel="stylesheet" href="/css/productos.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="caja-principal">
    <div class="paginacion">
      {{$productos->links()}}
    </div>
    @foreach ($productos as $producto)
      <div class="productos">

        <!-- Imagen del producto -->
        <p>
          <img src="/storage/samsung-a50.png" alt="foto-producto">
        </p>

        <!-- Nombre del producto -->
        <p>
          Nombre: {{$producto->nombre}}
        </p>


        <!-- Marca del producto -->
        <p>
          Marca: {{$producto->marca}}
        </p>

        <!-- Precio del producto -->
        <p>
          Precio: ${{$producto->precio}}
        </p>
          <!--Ver más -->
          <form class="" action="{{url('detalle-prod')}}/{{$producto->id}}" method="get">


              <button id="button-agregar" type="submit" class="button btn btn-outline-primary">Ver más</button>

          </form>

      </div>
    @endforeach
  </div>
  <div class="paginacion">
    {{$productos->links()}}
  </div>
@endsection
