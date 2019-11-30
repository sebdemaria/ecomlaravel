@extends('plantilla')
<html lang="en" dir="ltr">
    <head>
      @section('headerConfigs')
      <title>Detalle</title>
      <link rel="stylesheet" href="css/detalle-prod.css">
      @endsection
    </head>

    <body>

        <div class="container-fluid">

        @section('main')

            <main>

              <div class="container">

                <div class="imagen">

                  <img src="./img/samsung-a50.png" alt="samsung a50">
                </div>

                <div class="descrip-prod">

                  <h3><strong>Samsung A50 64GB 2019</strong></h3>
                  <p class="precio">
                  $10.500
                  </p>
                  <p>
                  3 cuotas sin interés de $3.499,99
                  </p>
                  <p class="caracts">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

                  <div class="botones">

                    <div class="button">
                      <button id="button-compra" type="button-compra" class="btn btn-primary">Comprar</button>
                    </div>

                    <div class="button">
                      <button id="button-agregar" type="button" class="btn btn-outline-primary">Agregar al carrito</button>

                    </div>
                  </div>
                </div>



            </div>


          </main>

        </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        @endsection
    </body>
</html>
