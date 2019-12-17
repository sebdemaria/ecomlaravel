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
        console.log('Validamos Elementos del formulario');
        console.log(elemento.name);
        console.log('Trim/Regex : ' + regexNombre.test(elemento.value.trim()));

      //Nombre
      if (elemento.name == 'nombre') {
        if (elemento.value.trim() == '' ||  !regexNombre.test(elemento.value.trim())) {
          event.preventDefault();
          errorNombre = document.createTextNode("Ingresa un nombre valido");
          //mensajeNombre.innerText = '';
          mensajeNombre.append(errorNombre);
          nombre.append(mensajeNombre);
        }
      }
      //Apellido
      if (elemento.name == 'apellido') {
        if (elemento.value.trim() == '' || !regexNombre.test(elemento.value.trim())) {
          event.preventDefault();
          errorApellido = document.createTextNode("Ingresa un apellido valido.");
          //mensajeApellido.innerText = '';
          mensajeApellido.append(errorApellido);
          apellido.append(mensajeApellido);
        }
      }
      //Username
      if (elemento.name == 'username') {
        if (elemento.value.trim() == '') {
          event.preventDefault();
          errorUsername = document.createTextNode("Ingresa tu nombre de usuario.");
          //mensajeUsername.innerText = '';
          mensajeUsername.append(errorUsername);
          username.append(mensajeUsername);
        }
      }
      //Email
      if (elemento.name == 'email') {
        if (elemento.value.trim() == '' || !regexEmail.test(elemento.value.trim())) {
          event.preventDefault();
          errorEmail = document.createTextNode("Ingresa tu e-mail.");
          //mensajeEmail.innerText = '';
          mensajeEmail.append(errorEmail);
          email.append(mensajeEmail);
        }
      }
      //Password
      if (elemento.name == 'password') {
        if (elemento.value.trim() == '' || !regexPass.test(elemento.value.trim())) {
          event.preventDefault();
          errorPassword = document.createTextNode("Ingresa una contraseña valida.");
          //mensajePassword.innerText = '';
          mensajePassword.append(errorPassword);
          password.append(mensajePassword);
        }
      }
      //Password Confirmation
      if (elemento.name == 'password_confirmation') {
        if (elemento.value.trim() == '') {
          event.preventDefault();
          errorPasswordConf = document.createTextNode("Ingresa una contraseña valida.");
          //mensajePasswordConf.innerText = '';
          mensajePasswordConf.append(errorPasswordConf);
          passwordConf.append(mensajePasswordConf);
        }
      }
      //Fecha
      if (elemento.name == 'fecha') {
        if (elemento.value.trim() == '') {
          event.preventDefault();
          errorFecha = document.createTextNode("Ingresa tu fecha de nacimiento.");
          //mensajeFecha.innerText = '';
          mensajeFecha.append(errorFecha);
          fecha.append(mensajeFecha);
        }
      }
    }
  }
}
