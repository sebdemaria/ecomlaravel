@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Contacto</title>
  <link rel="stylesheet" href="/css/contacto.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="cajaPrincipal">
    <h1>
      Contactate con nosotros
    </h1>

    <div class="contacto">
      <i id="i" class="fas fa-phone-alt"></i>
      <p class="textoContacto">
        Para realizar consultas sobre compras realizadas o envíos comunicate sin cargo a nuestros centros de atención al cliente.
      </p>

      <p class="textoContacto">
        011 5263-7400
      </p>
    </div>

    <div class="contacto">
      <i id="i" class="fas fa-map-pin"></i>
      <p class="textoContacto">
        Encontrá nuestras oficinas en CABA, donde podrás recibir atención personalizada.
      </p>

      <p class="textoContacto">
        Avenida Monroe 860
      </p>
    </div>

    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13144.745803702659!2d-58.4436762!3d-34.5488343!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1570601253693!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    <div class="contacto">
      <form class="email" action="home.php" method="post">
        @csrf
        <i id="i" class="far fa-paper-plane"></i>
        <p class="textoContacto">
          Comunicate a través de nuestros formularios de atención online.
        </p>

        <label for="email">
          Ingrese su email
        </label>

        <p class="textoContacto">
          <input id="email" type="email" name="email" value="" placeholder="E-mail">
        </p>

        <p>
          <textarea id= "comentario" name="comentario" rows="8" cols="80"> </textarea>
        </p>

        <p>
          <div class="button">
            <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </p>
      </form>
    </div>
  </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
