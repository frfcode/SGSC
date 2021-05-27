"use strict";

console.log('solicitud b'); //FORMULARIOS DE ADMIN.PHP

var formTelefonoSB = document.getElementById('telefonoSB');
var formNombreSB = document.getElementById('nombreSB');
var formPaisesSB = document.getElementById('paisesSB');
var formGenerarSolicitudBTelefonos = document.getElementById('solicitud_b_telefonos');
var formGenerarSolicitudBNombres = document.getElementById('solicitud_b_nombres');
var formGenerarSolicitudBPaises = document.getElementById('solicitud_b_paises'); //ACCIONDES DE CADA FORMALACION

/****************************************************************/

/*  SOLICITUD B FUNCIONES O ACCIONES CONJUNTAS                  */

/****************************************************************/

formTelefonoSB.addEventListener('submit', function (e) {
  e.preventDefault();
  var telefonoNoClean = formTelefonoSB.telefonoSB.value;
  var opcion = document.getElementById('opcionesb').value;
  var telefono = telefonoNoClean.replace(/[-.*+?^${}()|[\]\\]/g, '');
  var msg = document.getElementById('resultadoCargarRegistroB');

  if (telefono.length < 10) {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Numero de Telefono no Valido</div>";
    $(msg).fadeOut(2500);
  } else {
    ajaxForm('modulos/test.php', "telefono=" + telefono + "&solicitud=SB&opcion=" + opcion + "&btnSolicitudBTelefono=btnSolicitudBTelefono", 'resultadoCargarRegistroB');
    setTimeout(function () {
      formTelefonoSB.telefonoSB.value = '';

      if (opcion == 1) {
        ListGET('modulos/lista_tabla_solicitud_b_telefono_op1.php', 'tablaSB');
      }

      if (opcion == 2) {
        ListGET('modulos/lista_tabla_solicitud_b_telefono_op2.php', 'tablaSB');
      }

      if (opcion == 4) {
        ListGET('modulos/lista_tabla_solicitud_b_telefono_op4.php', 'tablaSB');
      }
    }, 1000);
  }
});
formNombreSB.addEventListener('submit', function (e) {
  e.preventDefault();
  var nombre = formNombreSB.nombreSB.value;
  var opcion = document.getElementById('opcionesb').value;
  var msg = document.getElementById('resultadoCargarRegistroB');

  if (nombre == '') {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Numero de Telefono no Valido</div>";
    $(msg).fadeOut(2500);
  } else {
    ajaxForm('modulos/test.php', "nombre=" + nombre + "&opcion=" + opcion + "&solicitud=SB&btnSolicitudBNombre=btnSolicitudBNombre", 'resultadoCargarRegistroB');
    setTimeout(function () {
      formNombreSB.nombreSB.value = '';

      if (opcion == 3) {
        ListGET('modulos/lista_tabla_solicitud_b_nombre_op3.php', 'tablaSB');
      }

      if (opcion == 6) {
        ListGET('modulos/lista_tabla_solicitud_b_nombre_op6.php', 'tablaSB');
      }
    }, 1000);
  }
});
formPaisesSB.addEventListener('submit', function (e) {
  e.preventDefault();
  var contMeses = 0,
      contPais = 0;
  var meses = formPaisesSB.checkmes;
  var empresa = formPaisesSB.selectempresa;
  var pais = formPaisesSB.checkpais;
  var opcion = document.getElementById('opcionesb').value;
  var msg = document.getElementById('resultadoCargarRegistroB');

  if (meses.length != undefined || pais.length != undefined) {
    for (var x = 0; x < pais.length; x++) {
      if (pais[x].checked) {
        for (var j = 0; j < meses.length; j++) {
          if (meses[j].checked) {
            ajaxForm('modulos/test.php', 'meses=' + meses[j].value + '&pais=' + pais[x].value + '&opcion=' + opcion + '&empresa=' + empresa.value + '&solicitud=SB&pais=' + pais[x].value + '&btnSolicitudBPais=btnSolicitudBPais', 'resultadoCargarRegistroB');
            setTimeout(function () {
              if (empresa.value == 'CLARO') {
                ListGET('modulos/lista_tabla_solicitud_b_claro.php', 'tablaSB');
              }

              if (empresa.value == 'VIVA') {
                ListGET('modulos/lista_tabla_solicitud_b_viva.php', 'tablaSB');
              }

              if (empresa.value == 'ALTICE') {
                ListGET('modulos/lista_tabla_solicitud_b_altice.php', 'tablaSB');
              }
            }, 1000);
          }
        }
      }
    }
  } else {
    if (contMeses == meses.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar los Meses para aprobar</div>";
      $(msg).fadeOut(2500);
    }

    if (contPais == pais.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar los Paises para aprobar</div>";
      $(msg).fadeOut(2500);
    }
  }
});
/****************************************************************/

/*  Generar Solicitud B                                         */

/****************************************************************/

formGenerarSolicitudBTelefonos.addEventListener('submit', function (e) {
  e.preventDefault();
  var prioridad = formGenerarSolicitudBTelefonos.prioridadSB.value;
  var dirigido = formGenerarSolicitudBTelefonos.dirigidoListaSB.value;
  var tiempo = formGenerarSolicitudBTelefonos.tiempoListaSB.value;
  var detalle = formGenerarSolicitudBTelefonos.detallesListSB.value;
  var nota = formGenerarSolicitudBTelefonos.notaSB.value;
  var msg = document.getElementById('resultadoCargarRegistroB');
  var opcion = document.getElementById('opcionesb').value;

  if (dirigido == -1 || tiempo == -1 || nota == '' || detalle == '') {
    $('#ModalGenerarSolicitudTelefonosB').modal('hide');
    $(msg).fadeIn();
    msg.innerHTML = "\n        <div class=\"alert alert-danger\" role=\"alert\">Complete los Campos</div>";
    $(msg).fadeOut(1000);
  } else {
    $('#ModalGenerarSolicitudTelefonosB').modal('hide');
    console.log('telefonos');
    ajaxFormTelefono('modulos/test.php', 'prioridad=' + prioridad + '&opcion=' + opcion + '&dirigido=' + dirigido + '&tiempo=' + tiempo + '&detalle=' + detalle + '&nota=' + nota + '&btnGenerarTelefonoB=btnGenerarTelefonoB', 'resultadoCargarRegistroB');
    setTimeout(function () {
      formGenerarSolicitudBTelefonos.detallesListSB.value = '';
      formGenerarSolicitudBTelefonos.notaSB.value = '';

      if (opcion == 1) {
        ListGET('modulos/lista_tabla_solicitud_b_telefono_op1.php', 'tablaSB');
      }

      if (opcion == 2) {
        ListGET('modulos/lista_tabla_solicitud_b_telefono_op2.php', 'tablaSB');
      }

      if (opcion == 4) {
        ListGET('modulos/lista_tabla_solicitud_b_telefono_op4.php', 'tablaSB');
      }
    }, 1000);
  }
});
formGenerarSolicitudBNombres.addEventListener('submit', function (e) {
  e.preventDefault();
  var prioridad = formGenerarSolicitudBNombres.prioridadNombreSB.value;
  var dirigido = formGenerarSolicitudBNombres.dirigidoNombreListaSB.value;
  var tiempo = formGenerarSolicitudBNombres.tiempoNombreListaSB.value;
  var detalle = formGenerarSolicitudBNombres.detallesNombreListSB.value;
  var nota = formGenerarSolicitudBNombres.notaNombreSB.value;
  var msg = document.getElementById('resultadoCargarRegistroB');
  var opcion = document.getElementById('opcionesb').value;

  if (dirigido == -1 || tiempo == -1 || nota == '' || detalle == '') {
    $('#ModalGenerarSolicitudNombresB').modal('hide');
    $(msg).fadeIn();
    msg.innerHTML = "\n        <div class=\"alert alert-danger\" role=\"alert\">Complete los Campos</div>";
    $(msg).fadeOut(1000);
  } else {
    $('#ModalGenerarSolicitudNombresB').modal('hide');
    ajaxFormNombre('modulos/test.php', 'prioridad=' + prioridad + '&dirigido=' + dirigido + '&opcion=' + opcion + '&tiempo=' + tiempo + '&detalle=' + detalle + '&nota=' + nota + '&btnGenerarNombresB=btnGenerarNombresB', 'resultadoCargarRegistroB');
    setTimeout(function () {
      formGenerarSolicitudBNombres.detallesNombreListSB.value = '';
      formGenerarSolicitudBNombres.notaNombreSB.value = '';

      if (opcion == 3) {
        ListGET('modulos/lista_tabla_solicitud_b_nombre_op3.php', 'tablaSB');
      }

      if (opcion == 6) {
        ListGET('modulos/lista_tabla_solicitud_b_nombre_op6.php', 'tablaSB');
      }
    }, 1000);
  }
});
formGenerarSolicitudBPaises.addEventListener('submit', function (e) {
  e.preventDefault();
  var prioridad = formGenerarSolicitudBPaises.prioridadPaisSB.value;
  var dirigido = formGenerarSolicitudBPaises.dirigidoPaisListaSB.value;
  var detalle = formGenerarSolicitudBPaises.detallesPaisListSB.value;
  var nota = formGenerarSolicitudBPaises.notaPaisSB.value;
  var empresa = document.getElementById('selectempresa').value;
  var opcion = document.getElementById('opcionesb').value;
  var msg = document.getElementById('resultadoCargarRegistroB');

  if (dirigido == -1 || tiempo == -1 || nota == '' || detalle == '') {
    $('#ModalGenerarSolicitudPaisesB').modal('hide');
    $(msg).fadeIn();
    msg.innerHTML = "\n        <div class=\"alert alert-danger\" role=\"alert\">Complete los Campos</div>";
    $(msg).fadeOut(1000);
  } else {
    $('#ModalGenerarSolicitudPaisesB').modal('hide');
    ajaxFormPaises('modulos/test.php', 'prioridad=' + prioridad + '&dirigido=' + dirigido + '&opcion=' + opcion + '&empresa=' + empresa + '&detalle=' + detalle + '&nota=' + nota + '&btnGenerarPaisesB=btnGenerarPaisesB', 'resultadoCargarRegistroB');
    setTimeout(function () {
      formGenerarSolicitudBPaises.detallesPaisListSB.value = '';
      formGenerarSolicitudBPaises.notaPaisSB.value = '';

      if (empresa == 'CLARO') {
        ListGET('modulos/lista_tabla_solicitud_b_claro.php', 'tablaSB');
      }

      if (empresa == 'VIVA') {
        ListGET('modulos/lista_tabla_solicitud_b_viva.php', 'tablaSB');
      }

      if (empresa == 'ALTICE') {
        ListGET('modulos/lista_tabla_solicitud_b_altice.php', 'tablaSB');
      }
    }, 1000);
  }
});
/****************************************************************/

/*  FUNCIONES AJAX O LLAMADOS                                   */

/****************************************************************/

function countRecords(table) {
  var registros = 0;

  for (var index = 0; index < table.length; index++) {
    registros++;
  }

  if (registros == 0) {
    return true;
  } else {
    return false;
  }
}

function tableValidar(table) {
  var registros = 0;

  for (var index = 0; index < table.length; index++) {
    registros++;
  }

  if (registros >= 70) {
    return true;
  } else {
    return false;
  }
}

function ListGET(url, idresult) {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      document.getElementById(idresult).innerHTML = '';
      document.getElementById(idresult).innerHTML += response;
    }
  };

  xhttp.open('GET', url, true);
  xhttp.send();
}

function ajaxFormTelefono(url, send, result) {
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
      } else if (response == -7) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">No Hay Registros Cargados</div>";
        $(msg).fadeOut(1000);
      } else {
        msg.innerHTML = "\n                    <div class=\"alert alert-info\" role=\"alert\">Solicitud N\xB0- ".concat(response, "</div>");
        window.open("http://localhost/job/php/modulos/exports/exportSB_Telefono.php?" + send + "&code=" + response, "_blank");
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}

function ajaxFormNombre(url, send, result) {
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
      } else if (response == -7) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">No Hay Registros Cargados</div>";
        $(msg).fadeOut(1000);
      } else {
        msg.innerHTML = "\n                    <div class=\"alert alert-info\" role=\"alert\">Solicitud N\xB0- ".concat(response, "</div>");
        window.open("http://localhost/job/php/modulos/exports/exportSB_Nombre.php?" + send + "&code=" + response, "_blank");
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}

function ajaxFormPaises(url, send, result) {
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
      } else if (response == -7) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">No Hay Registros Cargados</div>";
        $(msg).fadeOut(1000);
      } else {
        msg.innerHTML = "\n                    <div class=\"alert alert-info\" role=\"alert\">Solicitud N\xB0- ".concat(response, "</div>");
        window.open("http://localhost/job/php/modulos/exports/exportSB_Paises.php?" + send + "&code=" + response, "_blank");
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}