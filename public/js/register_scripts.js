window.onload = function() {
  //Expresiones regulares
  var regexNombre =  /^[a-zA-Z ]+$/;
    //var regexNombre = /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{3}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{3}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{3}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/;
  var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
  var regexPass = /^\w{8,10}$/;
  //Creo parrafos
  var mensajeNombre = document.createElement('p');
  var mensajeApellido = document.createElement('p');
  var mensajeUsername = document.createElement('p');
  var mensajeEmail = document.createElement('p');
  var mensajePassword = document.createElement('p');
  var mensajePasswordConf = document.createElement('p');
  var mensajeFecha = document.createElement('p');
  var mensajeAvatar = document.createElement('p');
  //Creo variables
  var errorNombre = null;
  var errorApellido = null;
  var errorUsername = null;
  var errorEmail = null;
  var errorPassword = null;
  var errorPasswordConf = null;
  var errorFecha = null;
  var errorAvatar = null;
  //Selecciono campos
  var nombre = document.querySelector('#nom');
  var apellido = document.querySelector('#ap');
  var username = document.querySelector('#user');
  var email = document.querySelector('#mail');
  var password = document.querySelector('#pass');
  var passwordConf = document.querySelector('#passConf');
  var fecha = document.querySelector('#nac');
  var nacimiento = document.querySelector('#av');

  //Capturo el formulario
  var formulario = document.querySelector('.formulario');

  formulario.onsubmit = function(event) {
    for(var elemento of formulario.elements) {

      //Nombre
      if (elemento.name == 'nombre') {
        if (elemento.value.trim() == '' ||  !regexNombre.test(elemento.value.trim())) {
          mensajeNombre.innerHTML = '';
          errorNombre = document.createTextNode("Ingresa un nombre valido.");
          mensajeNombre.append(errorNombre);
          nombre.append(mensajeNombre);
          event.preventDefault();
        } else {
          mensajeNombre.innerHTML = '';
        }
      }
      console.log(nombre);
      //Apellido
      if (elemento.name == 'apellido') {
        if (elemento.value.trim() == '' || !regexNombre.test(elemento.value.trim())) {
          mensajeApellido.innerHTML = '';
          errorApellido = document.createTextNode("Ingresa un apellido valido.");
          mensajeApellido.append(errorApellido);
          apellido.append(mensajeApellido);
          event.preventDefault();
        } else {
          mensajeApellido.innerHTML = '';
        }
      }
      //Username
      if (elemento.name == 'username') {
        if (elemento.value.trim() == '') {
          mensajeUsername.innerHTML = '';
          errorUsername = document.createTextNode("Ingresa tu nombre de usuario.");
          mensajeUsername.append(errorUsername);
          username.append(mensajeUsername);
          event.preventDefault();
        } else {
          mensajeUsername.innerHTML = '';
        }
      }
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
      //Password Confirmation
      if (elemento.name == 'password_confirmation') {
        if (elemento.value.trim() == '') {
          mensajePasswordConf.innerHTML = '';
          errorPasswordConf = document.createTextNode("Ingresa una contraseña valida.");
          mensajePasswordConf.append(errorPasswordConf);
          passwordConf.append(mensajePasswordConf);
          event.preventDefault();
        } else {
          mensajePasswordConf.innerHTML = '';
        }
      }
      //Fecha
      if (elemento.name == 'fecha') {
        if (elemento.value.trim() == '') {
          mensajeFecha.innerHTML = '';
          errorFecha = document.createTextNode("Ingresa tu fecha de nacimiento.");
          mensajeFecha.append(errorFecha);
          fecha.append(mensajeFecha);
          event.preventDefault();
        } else {
          mensajeFecha.innerHTML = '';
        }
      }
    }
  }
}
