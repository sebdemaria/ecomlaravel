window.onload = function() {
  //Expresiones regulares
  var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
  var regexPass = /^\w{8,10}$/;
  //Creo parrafos
  var mensajeEmail = document.createElement('p');
  var mensajePassword = document.createElement('p');
  //Creo variables
  var errorEmail = null;
  var errorPassword = null;
  //Selecciono campos
  var email = document.querySelector('#mail');
  var password = document.querySelector('#pass');
  //Capturo el formulario
  var formulario = document.querySelector('.formulario');

  formulario.onsubmit = function(event) {
    for(var elemento of formulario.elements) {
      //Email
      if (elemento.name == 'email') {
        if (elemento.value.trim() == '' || !regexEmail.test(elemento.value.trim())) {
          mensajeEmail.innerHTML = '';
          errorEmail = document.createTextNode("Ingresa tu e-mail.");
          mensajeEmail.append(errorEmail);
          email.append(mensajeEmail);
          event.preventDefault();
        } else {
          mensajeEmail.innerHTML = '';
        }
      }
      //Password
      if (elemento.name == 'password') {
        if (elemento.value.trim() == '' || !regexPass.test(elemento.value.trim())) {
          mensajePassword.innerHTML = '';
          errorPassword = document.createTextNode("Ingresa una contraseña valida.");
          mensajePassword.append(errorPassword);
          password.append(mensajePassword);
          event.preventDefault();
        } else {
          mensajePassword.innerHTML = '';
        }
      }
    }
  }
}
