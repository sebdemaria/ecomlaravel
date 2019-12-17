@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Carrito</title>
  <link rel="stylesheet" href="/css/carrito.css">
@endsection

<!-- MAIN -->
@section('main')
  <h1>
    Mi carrito
  </h1>

  <div class="lista-prod">
    <ul>
        @foreach( $carritos as $producto):
      <li>
        <div class="imagen">
          <img src="img/samsung-a50.png" alt="samsung a50">
        </div>

        <div class="descrip-prod">
          <h3><strong>{{$producto->nombre}}</strong></h3>

            <form action="/borrarProducto" method="post">
                @csrf
                <input type="hidden" name="idProducto" value="{{$producto->id}}">
                <div class="button">
                <button id="button-quitar" type="submit" class="btn btn-primary">Quitar</button>
              </div>
            </form>
            <form action="/modificarCantidad" method="post">
                @csrf
                <input type="hidden" name="idProducto" value="{{$producto->id}}">
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" value="{{$producto->pivot->cantidad}}" class="form-control">
              <div class="button">
                <button id="agregar" type="submit" class="btn btn-success">Actualizar Cantidad</button>
              </div>
            </form>
        </div>

      </li>
@endforeach
    </ul>

    <p class="total">
      Subtotal $10.500
      <br>
      <br>
      Total $10.500
    </p>

    <a href="checkout">
      <button id="button-confirmar" type="button" class="btn btn-outline-primary">Confirmar compra</button>
    </a>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
