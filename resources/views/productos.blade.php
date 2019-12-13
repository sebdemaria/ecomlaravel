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
        {{$producto->nombre}}
      </div>
    @endforeach
  </div>
  <div class="paginacion">
    {{$productos->links()}}
  </div>
@endsection
