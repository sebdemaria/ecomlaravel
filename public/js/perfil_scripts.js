window.onload = function() {
  //Expresiones regulares
  var regexTel = /^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/;
  //Creo parrafos
  var mensajeTelefono = document.createElement('p');
  var mensajeDireccion = document.createElement('p');
  var mensajeLocalidad = document.createElement('p');
  //Creo variables
  var errorTelefono= null;
  var errorDireccion= null;
  var errorLocalidad= null;
  //Selecciono campos
  var telefono = document.querySelector('#tel');
  var direccion = document.querySelector('#dir');
  var localidad = document.querySelector('#loc');
  //Capturo el formulario
  var formulario = document.querySelector('.formulario');

  formulario.onsubmit = function(event) {
    for(var elemento of formulario.elements) {
      //Telefono
      if (elemento.name == 'telefono') {
        if (elemento.value.trim() == '' || !regexTel.test(elemento.value.trim())) {
          mensajeTelefono.innerHTML = '';
          errorTelefono = document.createTextNode("Ingresa un numero de telefono valido.");
          mensajeTelefono.append(errorTelefono);
          telefono.append(mensajeTelefono);
          event.preventDefault();
        } else {
          mensajeTelefono.innerHTML = '';
        }
      }
      //Direccion
      if (elemento.name == 'direccion') {
        if (elemento.value.trim() == '') {
          mensajeDireccion.innerHTML = '';
          errorDireccion = document.createTextNode("Ingresa una dirección valida.");
          mensajeDireccion.append(errorDireccion);
          direccion.append(mensajeDireccion);
          event.preventDefault();
        } else {
          mensajeDireccion.innerHTML = '';
        }
      }
      //Localidad
      if (elemento.name == 'localidad') {
        if (elemento.value.trim() == '') {
          mensajeLocalidad.innerHTML = '';
          errorLocalidad = document.createTextNode("Ingresa una localidad valida.");
          mensajeLocalidad.append(errorLocalidad);
          password.append(mensajeLocalidad);
          event.preventDefault();
        } else {
          mensajeLocalidad.innerHTML = '';
        }
      }
    }
  }
}
