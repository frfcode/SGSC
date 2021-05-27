"use strict";

//MenuSub
ShowHide('#solicitud', '#registro');
ShowHide('#solicitud', '#table');
ShowHide('#usuariocrear', '#crear');
ShowHide('#usuarioeliminar', '#eliminar');
ShowHide('#usuariolista', '#creados');
ShowHide('#grupo', '#creargrupo');
ShowHide('#grupo', '#asingargrupo');
ShowHide('#grupo', '#eliminarasignacion');
ShowHide('#grupo', '#eliminargrupo');
ShowHide('#grupo', '#HistorialAsignarGrupo');
ShowHide('#aprobar', '#AprobarSolicitudEstado1');
ShowHide('#aprobar', '#AprobarSolicitudEstado2');
ShowHide('#aprobar', '#AprobarSolicitudEstado3');
ShowHide('#estadosolicitud', '#EstadoSolicitud'); //GET INFORMACION

ListGET('modulos/lista_tabla.php', 'table');
ListGET('modulos/lista_usuarios_creados.php', 'listacreados');
ListGET('modulos/lista_usuarios.php', 'eliminarusuario');
ListGET('modulos/lista_usuarios.php', 'usuarioSelect');
ListGET('modulos/lista_grupos.php', 'groupSelect');
ListGET('modulos/lista_asignacion.php', 'asignacion');
ListGET('modulos/lista_grupos.php', 'grupoeliminar');
ListGET('modulos/lista_grupos_asignados.php', 'grupohistorial');
ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuario');
ListGET('modulos/solicitud_aprobar_estado_2_3.php', 'aprobarSoliciudEstado1');
ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado2');
ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado3');
ListGET('modulos/lista_estado_solicitud.php', 'listaestado'); //folder admin.php 

var formCargarRegistro = document.getElementById("cargarRegistro");
var formEliminarRegistro = document.getElementById("registrosEliminar");
var formCrearUsuario = document.getElementById('crearUsuario');
var formCrearGrupo = document.getElementById('agregarGrupo');
var formAsignarGrupoUsuario = document.getElementById('asignarGrupoUsuario');
var formEliminarUsuario = document.getElementById('eliminarUsuario');
var formEliminarAsignacion = document.getElementById('eliminarAsignacion');
var formEliminarGrupo = document.getElementById('eliminarGrupo');
var formConfirmarSolicitud = document.getElementById('confirmarsolicitud');
var formAprobarSolicitudPaso1 = document.getElementById('aprobarSolicitudPaso1');
var formAprobarSolicitudPaso2 = document.getElementById('aprobarSolicitudPaso2');
var formAprobarSolicitudPaso3 = document.getElementById('aprobarSolicitudPaso3');
var formModificarRegistro = document.getElementById('modificar-registro'); //Event folder admin.php

formCargarRegistro.addEventListener('submit', function (e) {
  e.preventDefault();
  var name = formCargarRegistro.nombre.value;
  var phone = formCargarRegistro.telefono.value;
  var empresa = formCargarRegistro.empresa.value;
  var nacionalidad = formCargarRegistro.nacionalidad.value;
  var table = document.getElementById('table');
  var td = table.getElementsByTagName('td');
  var msg = document.getElementById('resultadoCargarRegistro');

  if (phone.length > 10) {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Numero de Telefono no Valido</div>";
    $(msg).fadeOut(2500);
  } else {
    if (tableValidar(td) == false) {
      ajaxForm('modulos/test.php', "name=" + name + "&phone=" + phone + "&business=" + empresa + "&nationality=" + nacionalidad + "&btnCargarRegistro=btnCargarRegistro", 'resultadoCargarRegistro');
      setTimeout(function () {
        formCargarRegistro.nombre.value = '';
        formCargarRegistro.telefono.value = '';
        ListGET('modulos/lista_tabla.php', 'table');
      }, 1000);
    } else {
      $(msg).fadeIn();
      msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Excedio el limite de registros, por favor genere la solicitud</div>";
      $(msg).fadeOut(2500);
    }
  }
});
formEliminarRegistro.addEventListener('submit', function (e) {
  e.preventDefault();
  $('#ModalEliminarRegistros').modal('hide');
  ajaxForm('modulos/test.php', "btnEliminarRegistro=btnEliminarRegistro", 'resultadoCargarRegistro');
  setTimeout(function () {
    ListGET('modulos/lista_tabla.php', 'table');
  }, 1000);
});
formCrearUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formCrearUsuario.user.value;
  var pass = formCrearUsuario.password.value;
  var rol = formCrearUsuario.rol.value;
  ajaxForm('modulos/test.php', "user=" + user + "&rol=" + rol + "&pass=" + pass + "&btnCrearUSuario=btnCrearUSuario", 'resultadoCrearUsuario');
  setTimeout(function () {
    formCrearUsuario.user.value = '';
    formCrearUsuario.password.value = '';
    ListGET('modulos/usuario_creado.php', 'listacreados');
    ListGET('modulos/lista_usuarios.php', 'usuarioSelect');
  }, 1000);
});
formCrearGrupo.addEventListener('submit', function (e) {
  e.preventDefault();
  var group = formCrearGrupo.group.value;
  ajaxForm('modulos/test.php', 'group=' + group + "&btnCrearGroup=btnCrearGroup", 'resultadoCrearGrupo');
  setTimeout(function () {
    formCrearGrupo.group.value = '';
    ListGET('modulos/lista_asignacion.php', 'asignacion');
    ListGET('modulos/lista_grupos.php', 'groupSelect');
    ListGET('modulos/lista_grupos.php', 'grupoeliminar');
  }, 1000);
});
formAsignarGrupoUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formAsignarGrupoUsuario.usuarioSelect.value;
  var group = formAsignarGrupoUsuario.groupSelect.value;
  ajaxForm('modulos/test.php', 'group=' + group + "&user=" + user + "&btnAsignarUsuario=btnAsignarUsuario", 'resultadoAsignarGrupo');
  setTimeout(function () {
    ListGET('modulos/lista_asignacion.php', 'asignacion');
    ListGET('modulos/lista_grupos_asignados.php', 'grupohistorial');
    ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuario');
  }, 1000);
});
formEliminarUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formEliminarUsuario.eliminarusuario.value;
  ajaxForm('modulos/test.php', 'user=' + user + "&btnEliminarUsuario=btnEliminarUsuario", 'resultadoEliminarUsuario');
  setTimeout(function () {
    ListGET('modulos/lista_usuarios.php', 'eliminarusuario');
    ListGET('modulos/usuario_creado.php', 'listacreados');
  }, 1000);
});
formEliminarAsignacion.addEventListener('submit', function (e) {
  e.preventDefault();
  var asignacion = formEliminarAsignacion.asignacion.value;
  ajaxForm('modulos/test.php', 'asignacion=' + asignacion + "&btnEliminarAsignacion=btnEliminarAsignacion", 'resultadoEliminarAsignacion');
  setTimeout(function () {
    ListGET('modulos/lista_asignacion.php', 'asignacion');
    ListGET('modulos/lista_grupos_asignados.php', 'grupohistorial');
    ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuario');
  }, 1000);
});
formEliminarGrupo.addEventListener('submit', function (e) {
  e.preventDefault();
  var grupo = formEliminarGrupo.grupoeliminar.value;
  ajaxForm('modulos/test.php', 'grupo=' + grupo + "&btnEliminarGrupo=btnEliminarGrupo", 'resultadoEliminarGrupo');
  setTimeout(function () {
    ListGET('modulos/lista_grupos.php', 'grupoeliminar');
    ListGET('modulos/lista_grupos.php', 'groupSelect');
  }, 1000);
});
formConfirmarSolicitud.addEventListener('submit', function (e) {
  e.preventDefault();
  $('#ModalGenerar').modal('hide');
  var grupo = formConfirmarSolicitud.groupUsuario.value;
  var nota = formConfirmarSolicitud.nota.value;
  var prioridad = formConfirmarSolicitud.prioridad.value;
  var solicitud = formConfirmarSolicitud.solicitud.value;
  var table = document.getElementById('table');
  var td = table.getElementsByTagName('td');
  var msg = document.getElementById('resultadoCargarRegistro'); //console.log(countRecords(td));

  if (countRecords(td) == true) {
    $(msg).fadeIn();
    msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">No hay registros para generar</div>";
    $(msg).fadeOut(2500);
  } else {
    //console.log(grupo)
    if (grupo == -1) {
      $(msg).fadeIn();
      msg.innerHTML = "\n                    <div class=\"alert alert-danger\" role=\"alert\">Debe pertenecer algun grupo</div>";
      $(msg).fadeOut(2500);
    } else {
      ajaxForm('modulos/test.php', 'prioridad=' + prioridad + '&solicitud=' + solicitud + '&grupo=' + grupo + '&nota=' + nota + '&dirigido=' + dirigido + '&btnGenerar=btnGenerar', 'resultadoCargarRegistro');
      setTimeout(function () {
        ListGET('modulos/lista_tabla.php', 'table');
        ListGET('modulos/solicitud_aprobar_estado_2_3.php', 'aprobarSoliciudEstado1');
      }, 1000);
    }
  }
});
formAprobarSolicitudPaso1.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var msg = document.getElementById('resultadoAprobarEstado1');
  var aprobacionlist = formAprobarSolicitudPaso1.aprobacionestado1;

  for (var x = 0; x < aprobacionlist.length; x++) {
    if (aprobacionlist[x].checked) {
      ajaxForm('modulos/test.php', 'solicitud=' + aprobacionlist[x].value + "&btnAprobarEstado1=btnAprobarEstado1", 'resultadoAprobarEstado1');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_2_3.php', 'aprobarSoliciudEstado1');
        ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado2');
      }, 1000);
    } else {
      cont++;
    }
  }

  if (cont == aprobacionlist.length) {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
    $(msg).fadeOut(2500);
  }
});
formAprobarSolicitudPaso2.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var msg = document.getElementById('resultadoAprobarEstado2');
  var aprobacionlist2 = formAprobarSolicitudPaso2.aprobacionestado2;

  for (var x = 0; x < aprobacionlist2.length; x++) {
    if (aprobacionlist2[x].checked) {
      ajaxForm('modulos/test.php', 'solicitud2=' + aprobacionlist2[x].value + "&btnAprobarEstado2=btnAprobarEstado2", 'resultadoAprobarEstado2');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado2');
        ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado3');
      }, 1000);
    } else {
      cont++;
    }
  }

  if (cont == aprobacionlist2.length) {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
    $(msg).fadeOut(2500);
  }
});
formAprobarSolicitudPaso3.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var msg = document.getElementById('resultadoAprobarEstado3');
  var aprobacionlist3 = formAprobarSolicitudPaso3.aprobacionestado3;

  for (var x = 0; x < aprobacionlist3.length; x++) {
    if (aprobacionlist3[x].checked) {
      ajaxForm('modulos/test.php', 'solicitud3=' + aprobacionlist3[x].value + "&btnAprobarEstado3=btnAprobarEstado3", 'resultadoAprobarEstado3');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado3');
      }, 1000);
    } else {
      cont++;
    }
  }

  if (cont == aprobacionlist3.length) {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
    $(msg).fadeOut(2500);
  }
});
$(document).on('click', '#borrar-registro', function (event) {
  event.preventDefault();
  var fila = document.getElementById('value').textContent;
  ajaxForm('modulos/test.php', 'fila=' + fila + "&btnEliminarFila=btnEliminarFila", 'resultadoCargarRegistro');
  setTimeout(function () {
    ListGET('modulos/lista_tabla.php', 'table');
  }, 1000);
});
$(document).on('click', 'a[data-role=update]', function () {
  var id = $(this).data('id');
  var telefono = $('#' + id).children('td[data-target=telefono]').text();
  var nombre = $('#' + id).children('td[data-target=nombre]').text();
  var empresa = $('#' + id).children('td[data-target=empresa]').text();
  var nacionalidad = $('#' + id).children('td[data-target=nacionalidad]').text();
  $('#telefonomodificar').val(telefono);
  $('#nombremodificar').val(nombre);
  $('#empresamodificar').val(empresa);
  $('#nacionalidadmodificar').val(nacionalidad);
  $('#userid').val(id);
  $('#ModalModificar').modal('toggle');
});
formModificarRegistro.addEventListener('submit', function (e) {
  e.preventDefault();
  var id = formModificarRegistro.userid.value;
  var name = formModificarRegistro.nombremodificar.value;
  var phone = formModificarRegistro.telefonomodificar.value;
  var empresa = formModificarRegistro.empresamodificar.value;
  var nacionalidad = formModificarRegistro.nacionalidadmodificar.value;
  var msg = document.getElementById('resultadoCargarRegistro');
  $('#ModalModificar').modal('hide');

  if (phone.length > 10) {
    $(msg).fadeIn();
    msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Numero de Telefono no Valido</div>";
    $(msg).fadeOut(2500);
  } else {
    ajaxForm('modulos/test.php', 'iduser=' + id + '&name=' + name + '&phone=' + phone + '&business=' + empresa + '&nationality=' + nacionalidad + '&btnModificarRegistro=btnModificarRegistro', 'resultadoCargarRegistro');
    setTimeout(function () {
      ListGET('modulos/lista_tabla.php', 'table');
    }, 1000);
  }
}); //---------------------------------------------------------//

function ShowHide(id, panael) {
  $(id).click(function (e) {
    e.preventDefault();
    $(panael).toggle('slow');
  });
}

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
    //console.log("true" + registros)
    return true;
  } else {
    //console.log("false" + registros)
    return false;
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
      var response = this.responseText; //console.log(response);

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
      } else {
        msg.innerHTML = response;
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}