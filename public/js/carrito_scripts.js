window.onload = function() {
  //Expresiones regulares
  var regexNumero = /^([1-9]|[1-9][0-9]|[1-9][0-9][0-9])$/;
  console.log(regexNumero);
  //Creo parrafos
  var mensajeCantidad = document.createElement('p');
  //Creo variables
  var errorCantidad = null;
  //Selecciono campos
  var cantidad = document.querySelector('#cantidad');
  //Capturo el formulario
  var formulario = document.querySelector('.cantidad');

  formulario.onsubmit = function(event) {
    for(var elemento of formulario.elements) {
      //Cantidad
      if (elemento.name == 'cantidad') {
        if (elemento.value.trim() == '' || !regexNumero.test(elemento.value.trim())) {
          mensajeCantidad.innerHTML = '';
          errorCantidad = document.createTextNode("Ingresa una cantidad mayor a 0");
          mensajeCantidad.append(errorCantidad);
          cantidad.append(mensajeCantidad);
          event.preventDefault();
        } else {
          mensajeCantidad.innerHTML = '';
        }
      }
    }
  }
}
