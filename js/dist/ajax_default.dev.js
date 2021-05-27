"use strict";

//GET INFORMACION
ListGET('modulos/lista_tabla_solicitud_a.php', 'tablaSA');
ListGET('modulos/lista_tabla_solicitud_b.php', 'tablaSB');
ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuario');
ListGET('modulos/lista_grupos_asignados_usuario.php', 'grupohistorial');
ListGET('modulos/solicitud_aprobar.php', 'solicitudpdf');
ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
ListGET('modulos/lista_tiempo.php', 'tiempoListSA');
ListGET('modulos/lista_detalle.php', 'detallesListSA');
ListGET('modulos/lista_tiempo.php', 'tiempoListSB');
ListGET('modulos/lista_detalle.php', 'detallesListSB');
ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuarioSA'); //FORMULARIOS DE DEFAULT.PHP

var formCrearGrupo = document.getElementById('agregarGrupo'); //ACCIONDES DE CADA FORMALACION

/****************************************************************/

/*  GRUPOS                                                      */

/****************************************************************/

formCrearGrupo.addEventListener('submit', function (e) {
  e.preventDefault();
  var group = formCrearGrupo.group.value;
  ajaxForm('modulos/test.php', 'group=' + group + "&btnCrearGroupUsuario=btnCrearGroupUsuario", 'resultadoCrearGrupo');
  setTimeout(function () {
    formCrearGrupo.group.value = '';
    ListGET('modulos/lista_grupos_asignados_usuario.php', 'grupohistorial');
    ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuario');
  }, 1000);
});
/****************************************************************/

/*  Buscar                                                      */

/****************************************************************/

Busar('');
$('#buscar').keyup(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
/****************************************************************/

/*  FUNCIONES AJAX O LLAMADOS                                   */

/****************************************************************/

function Busar(consulta) {
  ajaxForm('modulos/test.php', 'consulta=' + consulta + '&btnBuscar=btnBuscar', 'datos');

  function ajaxForm(url, send, result) {
    var sendForm = send;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var response = this.responseText;
        console.log(response);
        var msg = document.getElementById(result);
        msg.innerHTML = response;
      }
    };

    xhttp.open('POST', url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(sendForm);
  }
}

function ListGET(url, idresult) {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText; //console.log(response);
      //console.log('-------------------------');

      document.getElementById(idresult).innerHTML = '';
      document.getElementById(idresult).innerHTML += response;
    }
  };

  xhttp.open('GET', url, true);
  xhttp.send();
}

function ajaxForm(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      console.log(response);
      var msg = document.getElementById(result);
      $(msg).fadeIn();

      if (response == -1) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Complete los Campos</div>";
        $(msg).fadeOut(1000);
      } else if (response == 1) {
        msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Operacion Exitosa</div>";
        $(msg).fadeOut(1000);
      } else if (response == -2) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Error al guardar en base de datos</div>";
        $(msg).fadeOut(1000);
      } else if (response == -3) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Grupo ya fue asignado</div>";
        $(msg).fadeOut(1000);
      } else if (response == -6) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Nombre de usuario ya existe</div>";
        $(msg).fadeOut(1000);
      } else if (response == -5) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Grupo ya existe</div>";
        $(msg).fadeOut(1000);
      } else {
        msg.innerHTML = response;
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}