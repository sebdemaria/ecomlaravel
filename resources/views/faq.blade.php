@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Preguntas Frecuentes</title>
  <link rel="stylesheet" href="/css/faq.css">
@endsection

<!-- MAIN -->
@section('main')
  <h1>
    ¿Con qué podemos ayudarte?
  </h1>

  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Cómo realizar mi compra?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>
          <ol class="pasos">
            <li>
              Encontrá tu producto utilizando las múltiples opciones de búsqueda.
            </li>
            <li>
              Hacé clic en el botón “Añadir al carrito” para agregar el producto a tu carrito de compras  y seguir navegando en la página y agregar más productos a tu carrito, o en en el botón "Comprar" si querés finalizar tu compra.
            </li>
            <li>
              Para finalizar la compra, hacé clic en el botón “Confirmar compra”. Si aún no te has registrado en nuestra página, deberás llenar algunos campos con datos personales, asimismo, deberás ingresar la dirección donde será entregado tu pedido o elegir la sucursal en la que deseas retirarlo. Si ya estás registrado, únicamente ingresá tu correo electrónico y contraseña para iniciar sesión; al hacerlo, tus datos se llenarán automáticamente.
            </li>
            <li>
              Elegí la forma de pago que más te convenga: tarjeta de crédito, pago en efectivo (Pago Fácil, Rapipago, Bapro, Cobro Express, Ripsa) o pago contra entrega.
            </li>
            <li>
              ¡Felicidades! Has terminado exitosamente tu compra en Biser Argentina. Tu orden ha sido registrada en el sistema. Una vez que tu pedido sea validado, recibirás un correo electrónico con la confirmación de tu compra.
            </li>
          </ol>
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Cómo me registro?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p>
          <ol class="pasos">
            <li>
              Hacé clic en el botón “Registrate” ubicado en la esquina superior derecha de nuestra página.
            </li>
            <li>
              Llená los campos obligatorios y hacé clic en el botón “Crear cuenta”.
            </li>
            <li>
              ¡Listo! Tu cuenta ha sido creada, pronto recibirás un correo electrónico con el cual confirmaremos tu registro. ¡Bienvenido a Biser!
            </li>
          </ol>
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Qué formas de pago tenemos disponibles?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p>
          <ol>
            Para tu comodidad, contamos con diversas formas de pago confiables, rápidas y seguras:
            <br>
            <li>
              Tarjeta de crédito: Visa, MasterCard, American Express, Tarjeta Naranja, Tarjeta Shopping, Cabal, Argencard y Tarjeta Cencosud.
            </li>
            <li>
              Tarjeta de débito: Visa y MasterCard.
            </li>
            <li>
              Pago en efectivo: utilizando PagoFácil, RapiPago, BaPro Pagos, Ripsa y CobroExpress.
            </li>
            <li>
              Pago contra entrega: Pagá en efectivo al recibir el producto en tu casa.
            </li>
          </ol>
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          ¿Es seguro comprar en Biser?
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <p>
          Sí, respetamos 100% tu derecho a la protección de datos, por esta razón, utilizamos los más altos niveles de seguridad para proteger tanto tus datos personales como los de tus pagos.

          Toda tu información es cifrada mediante el mejor sistema de protección. Este sistema almacena los datos encriptados de forma segura, brindándote la oportunidad, si así lo deseas, de ingresar los datos de tu tarjeta únicamente durante tu primera compra.

          Por favor, no compartas tu usuario ni la contraseña que te identifican en nuestro sitio web, pues son el acceso a tu cuenta y a toda tu información personal.
        </p>
      </div>
    </div>
  </div>
</div>

  <section class="util">
    <h3>
      ¿Fue útil esta información?
    </h3>
    <a href="#"><button type="button" id="conf" class="btn btn-primary">Si </button></a>
    <a href="#"><button type="button"
      id="conf" class="btn btn-primary">No</button></a>
  </section>

  <br>

  <section class="contacto">
    <h3>
      ¿No encontrás lo que buscabas?
      <br>
      ¡Contactanos por mail y te ayudaremos personalmente!
    </h3>
    <a href="contacto" class="btn btn-primary">Contacto</a>
  </section>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
