"use strict";

console.log('ok'); //folder admin.php

var formCrearUsuario = document.getElementById('crearUsuario');
var formCrearGrupo = document.getElementById('agregarGrupo');
var formAsignarGrupoUsuario = document.getElementById('asignarGrupoUsuario');
var formEliminarUsuario = document.getElementById('eliminarUsuario'); //Event folder admin.php

formCrearUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formCrearUsuario.user.value;
  var pass = formCrearUsuario.password.value;
  var rol = formCrearUsuario.rol.value;
  ajaxForm('test.php', "user=" + user + "&rol=" + rol + "&pass=" + pass + "&btnCrearUSuario=btnCrearUSuario", 'resultadoCrearUsuario');
});
formCrearGrupo.addEventListener('submit', function (e) {
  e.preventDefault();
  var group = formCrearGrupo.group.value;
  ajaxForm('test.php', 'group=' + group + "&btnCrearGroup=btnCrearGroup", 'resultadoCrearGrupo');
});
formAsignarGrupoUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formAsignarGrupoUsuario.usuarioSelect.value;
  var group = formAsignarGrupoUsuario.groupSelect.value;
  ajaxForm('test.php', 'group=' + group + "&user=" + user + "&btnAsignarUsuario=btnAsignarUsuario", 'resultadoAsignarGrupo');
});
formEliminarUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formEliminarUsuario.eliminarusuario.value;
  ajaxForm('test.php', 'user=' + user + "&btnEliminarUsuario=btnEliminarUsuario", 'resultadoEliminarUsuario');
}); //------------------------//

function ajaxForm(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result);
      $(msg).fadeIn();

      if (response == -1) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Complete los Campos</div>";
      }

      if (response == 1) {
        msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Operacion Exitosa</div>";
      }

      if (response == -2) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Error al guardar en base de datos</div>";
      }

      if (response == -3) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Grupo ya fue asignado</div>";
      }

      $(msg).fadeOut(1500); //setTimeout(function(){}, 1000);
      //$(formulario).fadeOut(800, function(){
      //});
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}