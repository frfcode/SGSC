"use strict";

var formCrearUsuario = document.getElementById('crearUsuario');
var formCrearGrupo = document.getElementById('agregarGrupo');
var formAsignarGrupoUsuario = document.getElementById('asignarGrupoUsuario');
var formEliminarUsuario = document.getElementById('eliminarUsuario');
var formEliminarAsignacion = document.getElementById('eliminarAsignacion');
var formEliminarGrupo = document.getElementById('eliminarGrupo');
var formAprobarSolicitud1 = document.getElementById('aprobarSolicitudPaso1');
var formAprobarSolicitud2 = document.getElementById('aprobarSolicitudPaso2');
var formAprobarSolicitud3 = document.getElementById('aprobarSolicitudPaso3');
var formAprobarSolicitud4 = document.getElementById('aprobarSolicitudPaso4');
var formAprobarSolicitud5 = document.getElementById('aprobarSolicitudPaso5');
var formTiempo = document.getElementById('tiempoform'); //const formVigencia = document.getElementById('vigenciaform');

var formDirigido = document.getElementById('dirigidoform');
var formEliminarTiempo = document.getElementById('tiempoEliminarForm');
var formEliminarVigencia = document.getElementById('vigenciaEliminarForm');
var formEliminarDirigido = document.getElementById('dirigidoEliminarForm');
var formBuscarModel = document.getElementById('BuscarModal');
var formModificarRegistroBuscador = document.getElementById('modificar-registro-buscador');
var formAgregarPlantilla = document.getElementById('agregarPlantilla');
var formConfigurarPlantilla = document.getElementById('configurarPlantilla'); //ACCIONDES DE CADA FORMALACION

/****************************************************************/

/*  USUARIOS                                                    */

/****************************************************************/

formCrearUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formCrearUsuario.user.value;
  var pass = formCrearUsuario.password.value;
  var rol = formCrearUsuario.rol.value;
  ajaxForm('modulos/test.php', "user=" + user + "&rol=" + rol + "&pass=" + pass + "&btnCrearUSuario=btnCrearUSuario", 'resultadoCrearUsuario');
  setTimeout(function () {
    formCrearUsuario.user.value = '';
    formCrearUsuario.password.value = '';
    ListGET('modulos/lista_usuarios_creados.php', 'listacreados');
    ListGET('modulos/lista_usuarios.php', 'usuarioSelect');
    ListGET('modulos/lista_usuarios.php', 'eliminarusuario');
  }, 1000);
});
formEliminarUsuario.addEventListener('submit', function (e) {
  e.preventDefault();
  var user = formEliminarUsuario.eliminarusuario.value;
  ajaxForm('modulos/test.php', 'user=' + user + "&btnEliminarUsuario=btnEliminarUsuario", 'resultadoEliminarUsuario');
  setTimeout(function () {
    ListGET('modulos/lista_usuarios.php', 'eliminarusuario');
    ListGET('modulos/lista_usuarios_creados.php', 'listacreados');
  }, 1000);
});
/****************************************************************/

/*  GRUPOS                                                      */

/****************************************************************/

formCrearGrupo.addEventListener('submit', function (e) {
  e.preventDefault();
  var group = formCrearGrupo.group.value;
  ajaxForm('modulos/test.php', 'group=' + group + "&btnCrearGroup=btnCrearGroup", 'resultadoCrearGrupo');
  setTimeout(function () {
    formCrearGrupo.group.value = '';
    ListGET('modulos/lista_asignacion.php', 'asignacion');
    ListGET('modulos/lista_grupos.php', 'groupSelect');
    ListGET('modulos/lista_grupos.php', 'grupoeliminar');
    ListGET('modulos/lista_grupos.php', 'groupSelectSA');
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
    ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuarioSA');
  }, 1000);
});
formEliminarAsignacion.addEventListener('submit', function (e) {
  e.preventDefault();
  var asignacion = formEliminarAsignacion.asignacion.value;
  ajaxForm('modulos/test.php', 'asignacion=' + asignacion + "&btnEliminarAsignacion=btnEliminarAsignacion", 'resultadoEliminarAsignacion');
  setTimeout(function () {
    ListGET('modulos/lista_asignacion.php', 'asignacion');
    ListGET('modulos/lista_grupos_asignados.php', 'grupohistorial');
    ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuarioSA');
  }, 1000);
});
formEliminarGrupo.addEventListener('submit', function (e) {
  e.preventDefault();
  var grupo = formEliminarGrupo.grupoeliminar.value;
  ajaxForm('modulos/test.php', 'grupo=' + grupo + "&btnEliminarGrupo=btnEliminarGrupo", 'resultadoEliminarGrupo');
  setTimeout(function () {
    ListGET('modulos/lista_grupos.php', 'grupoeliminar');
    ListGET('modulos/lista_grupos.php', 'groupSelect');
    ListGET('modulos/lista_grupos.php', 'groupSelectSA');
    ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuarioSA');
    ListGET('modulos/lista_grupos_asignados.php', 'grupohistorial');
  }, 1000);
});
/****************************************************************/

/*  APROBACIONES                                                */

/****************************************************************/
//SOLICITUD 1

formAprobarSolicitud1.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var len;
  var msg = document.getElementById('resultadoAprobarEstado1');
  var aprobacionlist = formAprobarSolicitud1.aprobacionsolicitud1;
  var tipoSolicitud = formAprobarSolicitud1.tiposolicitud;

  if (aprobacionlist.length == undefined) {
    if (tipoSolicitud.value == 'SA') {
      ajaxFormAprobacionS1SA('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + "&btnAprobarEstado1=btnAprobarEstado1", 'resultadoAprobarEstado1');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_1.php', 'aprobarSoliciudEstado1');
        ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }

    if (tipoSolicitud.value == 'SB') {
      ajaxFormAprobacionS1SB('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + "&btnAprobarEstado1=btnAprobarEstado1", 'resultadoAprobarEstado1');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_1.php', 'aprobarSoliciudEstado1');
        ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }
  } else {
    len = aprobacionlist.length;

    for (var x = 0; x < len; x++) {
      if (aprobacionlist[x].checked) {
        if (tipoSolicitud[x].value == 'SA') {
          ajaxFormAprobacionS1SA('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + "&btnAprobarEstado1=btnAprobarEstado1", 'resultadoAprobarEstado1');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_1.php', 'aprobarSoliciudEstado1');
            ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }

        if (tipoSolicitud[x].value == 'SB') {
          ajaxFormAprobacionS1SB('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + "&btnAprobarEstado1=btnAprobarEstado1", 'resultadoAprobarEstado1');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_1.php', 'aprobarSoliciudEstado1');
            ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }
      } else {
        cont++;
      }
    }

    if (cont == aprobacionlist.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
      $(msg).fadeOut(2500);
    }
  }
}); //SOLICITUD 2

formAprobarSolicitud2.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var len;
  var msg = document.getElementById('resultadoAprobarEstado2');
  var aprobacionlist = formAprobarSolicitud2.aprobacionsolicitud2;
  var tipoSolicitud = formAprobarSolicitud2.tiposolicitud2;
  var fecha = formAprobarSolicitud2.fechasolicitud2;

  if (aprobacionlist.length == undefined) {
    if (tipoSolicitud.value == 'SA') {
      var reset = fecha.value.split('-');
      var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
      ajaxFormAprobacionS2SA('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado2=btnAprobarEstado2', 'resultadoAprobarEstado2');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
        ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }

    if (tipoSolicitud.value == 'SB') {
      var reset = fecha[0].value.split('-');
      var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
      ajaxFormAprobacionS2SB('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado2=btnAprobarEstado2', 'resultadoAprobarEstado2');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
        ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }
  } else {
    len = aprobacionlist.length;

    for (var x = 0; x < len; x++) {
      if (aprobacionlist[x].checked) {
        if (tipoSolicitud[x].value == 'SA') {
          var reset = fecha[x].value.split('-');
          var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
          ajaxFormAprobacionS2SA('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado2=btnAprobarEstado2', 'resultadoAprobarEstado2');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
            ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }

        if (tipoSolicitud[x].value == 'SB') {
          var reset = fecha[x].value.split('-');
          var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
          ajaxFormAprobacionS2SB('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado2=btnAprobarEstado2', 'resultadoAprobarEstado2');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
            ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }
      } else {
        cont++;
      }
    }

    if (cont == aprobacionlist.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
      $(msg).fadeOut(2500);
    }
  }
}); //SOLICITUD 3

formAprobarSolicitud3.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var len;
  var msg = document.getElementById('resultadoAprobarEstado3');
  var aprobacionlist = formAprobarSolicitud3.aprobacionsolicitud3;
  var tipoSolicitud = formAprobarSolicitud3.tiposolicitud3;
  var fecha = formAprobarSolicitud3.fechasolicitud3;

  if (aprobacionlist.length == undefined) {
    if (tipoSolicitud.value == 'SA') {
      var reset = fecha.value.split('-');
      var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
      ajaxFormAprobacionS3SA('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado3=btnAprobarEstado3', 'resultadoAprobarEstado3');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
        ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }

    if (tipoSolicitud.value == 'SB') {
      var reset = fecha[0].value.split('-');
      var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
      ajaxFormAprobacionS3SB('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado3=btnAprobarEstado3', 'resultadoAprobarEstado3');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
        ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }
  } else {
    len = aprobacionlist.length;

    for (var x = 0; x < len; x++) {
      if (aprobacionlist[x].checked) {
        if (tipoSolicitud[x].value == 'SA') {
          var reset = fecha[x].value.split('-');
          var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
          ajaxFormAprobacionS3SA('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado3=btnAprobarEstado3', 'resultadoAprobarEstado3');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
            ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }

        if (tipoSolicitud[x].value == 'SB') {
          var reset = fecha[x].value.split('-');
          var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
          ajaxFormAprobacionS3SB('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado2=btnAprobarEstado3', 'resultadoAprobarEstado3');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
            ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }
      } else {
        cont++;
      }
    }

    if (cont == aprobacionlist.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
      $(msg).fadeOut(2500);
    }
  }
}); //SOLICITUD 3

formAprobarSolicitud4.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var len;
  var msg = document.getElementById('resultadoAprobarEstado4');
  var aprobacionlist = formAprobarSolicitud4.aprobacionsolicitud4;
  var tipoSolicitud = formAprobarSolicitud4.tiposolicitud4;
  var fecha = formAprobarSolicitud4.fechasolicitud4;
  var vigencia = formAprobarSolicitud4.vigencia4.value;
  console.log(vigencia);

  if (aprobacionlist.length == undefined) {
    if (tipoSolicitud.value == 'SA') {
      var codigo = formAprobarSolicitud4.codigo4;

      if (codigo == '') {
        $(msg).fadeIn();
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">INGRESE EL CODIGO</div>";
        $(msg).fadeOut(2500);
      } else {
        var reset = fecha.value.split('-');
        var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
        ajaxFormAprobacionS4SA('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&vigencia=' + vigencia + '&solicitud=' + aprobacionlist.value + '&codigo=' + codigo.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado4=btnAprobarEstado4', 'resultadoAprobarEstado4');
        setTimeout(function () {
          ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
          ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5');
          ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
        }, 1000);
      }
    }
  } else {
    len = aprobacionlist.length;

    for (var x = 0; x < len; x++) {
      if (aprobacionlist[x].checked) {
        if (tipoSolicitud[x].value == 'SA') {
          var codigo = formAprobarSolicitud4.codigo4;

          if (codigo == '') {
            $(msg).fadeIn();
            msg.innerHTML = "\n                        <div class=\"alert alert-danger\" role=\"alert\">INGRESE EL CODIGO</div>";
            $(msg).fadeOut(2500);
          } else {
            var reset = fecha[x].value.split('-');
            var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
            ajaxFormAprobacionS4SA('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&vigencia=' + vigencia + '&solicitud=' + aprobacionlist[x].value + '&codigo=' + codigo[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado4=btnAprobarEstado4', 'resultadoAprobarEstado4');
            setTimeout(function () {
              ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
              ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5');
              ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
            }, 1000);
          }
        }
      } else {
        cont++;
      }
    }

    if (cont == aprobacionlist.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
      $(msg).fadeOut(2500);
    }
  }
}); //SOLICITUD 5

formAprobarSolicitud5.addEventListener('submit', function (e) {
  e.preventDefault();
  var cont = 0;
  var len;
  var msg = document.getElementById('resultadoAprobarEstado5');
  var aprobacionlist = formAprobarSolicitud5.aprobacionsolicitud5;
  var tipoSolicitud = formAprobarSolicitud5.tiposolicitud5;
  var fecha = formAprobarSolicitud5.fechasolicitud5;

  if (aprobacionlist.length == undefined) {
    if (tipoSolicitud.value == 'SA') {
      var reset = fecha.value.split('-');
      var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
      ajaxFormAprobacionS5SA('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado5=btnAprobarEstado5', 'resultadoAprobarEstado5');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }

    if (tipoSolicitud.value == 'SB') {
      var reset = fecha[0].value.split('-');
      var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
      ajaxFormAprobacionS5SB('modulos/test.php', 'tipo=' + tipoSolicitud.value + '&solicitud=' + aprobacionlist.value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado5=btnAprobarEstado5', 'resultadoAprobarEstado5');
      setTimeout(function () {
        ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5');
        ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
      }, 1000);
    }
  } else {
    len = aprobacionlist.length;

    for (var x = 0; x < len; x++) {
      if (aprobacionlist[x].checked) {
        if (tipoSolicitud[x].value == 'SA') {
          var reset = fecha[x].value.split('-');
          var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
          ajaxFormAprobacionS5SA('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado5=btnAprobarEstado5', 'resultadoAprobarEstado5');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }

        if (tipoSolicitud[x].value == 'SB') {
          var reset = fecha[x].value.split('-');
          var nuevafecha = reset[2] + '-' + reset[1] + '-' + reset[0];
          ajaxFormAprobacionS5SB('modulos/test.php', 'tipo=' + tipoSolicitud[x].value + '&solicitud=' + aprobacionlist[x].value + '&fechasolicitud=' + nuevafecha + '&btnAprobarEstado5=btnAprobarEstado5', 'resultadoAprobarEstado5');
          setTimeout(function () {
            ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5');
            ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
          }, 1000);
        }
      } else {
        cont++;
      }
    }

    if (cont == aprobacionlist.length) {
      $(msg).fadeIn();
      msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Debe Seleccionar Solicitud para aprobar</div>";
      $(msg).fadeOut(2500);
    }
  }
});
/****************************************************************/

/*  Tiempo - Dirigido  - Vigencia                               */

/****************************************************************/

formTiempo.addEventListener('submit', function (e) {
  e.preventDefault();
  var tiempo = formTiempo.tiempo.value;
  console.log('tiempo');
  ajaxForm('modulos/test.php', 'tiempo=' + tiempo + "&btnTiempo=btnTiempo", 'resultadoTiempo');
  setTimeout(function () {
    formTiempo.tiempo.value = '';
    ListGET('modulos/lista_tiempo.php', 'tiempoListaSA');
    ListGET('modulos/lista_tiempo.php', 'tiempoSA');
  }, 1000);
});
formDirigido.addEventListener('submit', function (e) {
  e.preventDefault();
  var dirigido = formDirigido.dirigido.value;
  ajaxForm('modulos/test.php', 'dirigido=' + dirigido + "&btnDirigido=btnDirigido", 'resultadoDirigido');
  setTimeout(function () {
    //MODOFICIAR
    formDirigido.dirigido.value = '';
    ListGET('modulos/lista_dirigido.php', 'dirigidoSA');
    ListGET('modulos/lista_dirigido.php', 'dirigidoListaSA');
  }, 1000);
});
/*
formVigencia.addEventListener('submit',function(e){
    e.preventDefault();
    var vigencia = formVigencia.vigencia.value;
    ajaxForm('modulos/test.php','vigencia='+vigencia+"&btnVigencia=btnVigencia",'resultadoVigencia');
    setTimeout(function(){
        formVigencia.vigencia.value = '';
        //MODOFICIAR
        ListGET('modulos/lista_vigencia.php','vigenciaSA');
        ListGET('modulos/lista_vigencia.php','vigenciaListaSA');
        }, 1000);
})*/

formEliminarTiempo.addEventListener('submit', function (e) {
  e.preventDefault();
  var tiempo = formEliminarTiempo.tiempoSA.value;
  console.log('tiempo');
  ajaxForm('modulos/test.php', 'tiempo=' + tiempo + "&btnEliminarTiempo=btnEliminarTiempo", 'resultadoTiempo');
  setTimeout(function () {
    formEliminarTiempo.tiempoSA.value = '';
    ListGET('modulos/lista_tiempo.php', 'tiempoListaSA');
    ListGET('modulos/lista_tiempo.php', 'tiempoSA');
  }, 1000);
});
/*
formEliminarVigencia.addEventListener('submit',function(e){
    e.preventDefault();
    var vigencia = formEliminarVigencia.vigenciaSA.value;
    ajaxForm('modulos/test.php','vigencia='+vigencia+"&btnEliminarVigencia=btnEliminarVigencia",'resultadoVigencia');
    setTimeout(function(){
        formEliminarVigencia.vigenciaSA.value = '';
        //MODOFICIAR
        ListGET('modulos/lista_vigencia.php','vigenciaSA');
        ListGET('modulos/lista_vigencia.php','vigenciaListaSA');
        }, 1000);
})*/

formEliminarDirigido.addEventListener('submit', function (e) {
  e.preventDefault();
  var dirigido = formEliminarDirigido.dirigidoSA.value;
  ajaxForm('modulos/test.php', 'dirigido=' + dirigido + "&btnEliminarDirigido=btnEliminarDirigido", 'resultadoDirigido');
  setTimeout(function () {
    //MODOFICIAR
    formEliminarDirigido.dirigidoSA.value = '';
    ListGET('modulos/lista_dirigido.php', 'dirigidoSA');
    ListGET('modulos/lista_dirigido.php', 'dirigidoListaSA');
  }, 1000);
});
/****************************************************************/

/*  AGREGAR PLANTLLAS                                                    */

/****************************************************************/
//PLANTILLAS TIPO DE ARCHIVO

var archivo = document.getElementById('archivoplantilla');
var contenido = document.getElementById('plantillaContenido');
archivo.addEventListener('change', function () {
  var imageExt = archivo.value.split('.');

  if (imageExt[imageExt.length - 1] == 'docx') {
    archivoResult = archivo.value.replace(/^.*[\\\/]/, '');
    contenido.innerHTML = 'ARCHIVO: ' + archivoResult;
  } else {
    archivo.value = '';
    contenido.innerHTML = "FORMATO NO VALIDO";
  }
});
formAgregarPlantilla.addEventListener('submit', function (e) {
  e.preventDefault(); //let archivoEnvio = formAgregarPlantilla.archivoplantilla.value.replace(/^.*[\\\/]/, '');

  var archivo = formAgregarPlantilla.archivoplantilla;
  var msg = document.getElementById('resultadoPlantilla');
  var contenido = document.getElementById('plantillaContenido'); //console.log(archivoEnvio)

  var file = archivo.files[0];
  console.log(file);
  var formData = new FormData();
  formData.append('file', file); //console.log(formData)
  //ajaxForm('modulos/test.php','file='+formData+"&btnAgregarPlantilla=btnAgregarPlantilla",'resultadoPlantilla');

  if (file === '' || file === undefined || file === null) {
    $(msg).fadeIn();
    msg.innerHTML = "\n        <div class=\"alert alert-danger\" role=\"alert\">Inserte Documento</div>";
    $(msg).fadeOut(2500);
  } else {
    ajaxDocument('modulos/test.php', formData, 'resultadoPlantilla');
    setTimeout(function () {
      //MODOFICIAR
      formAgregarPlantilla.archivoplantilla.value = '';
      contenido.innerHTML = "CLICK PARA CARGAR PLANTILLA";
      ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud1');
      ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud2');
      ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud3');
      ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud4');
      ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud5');
    }, 1000);
  }
});
/****************************************************************/

/*  CONFIGURACION PLANTLLAS                                                    */

/****************************************************************/

formConfigurarPlantilla.addEventListener('submit', function (e) {
  e.preventDefault();
  var plantillaS1 = formConfigurarPlantilla.plantillaSolicitud1.value;
  var plantillaS2 = formConfigurarPlantilla.plantillaSolicitud2.value;
  var plantillaS3 = formConfigurarPlantilla.plantillaSolicitud3.value;
  var plantillaS4 = formConfigurarPlantilla.plantillaSolicitud4.value;
  var plantillaS5 = formConfigurarPlantilla.plantillaSolicitud5.value;
  ajaxForm('modulos/test.php', 's1=' + plantillaS1 + '&s2=' + plantillaS2 + '&s3=' + plantillaS3 + '&s4=' + plantillaS4 + '&s5=' + plantillaS5 + '&btnConfiguracion=btnConfiguracion', 'resultadoConfiguracion');
});
/****************************************************************/

/*  PANEL BUSCAR                                                      */

/****************************************************************/

Busar('');
$('#buscarSolicitd').keydown(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarUsuario').keydown(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarGrupo').change(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarFecha').change(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarEstado').change(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarEstatus').change(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarEmpresa').change(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
$('#buscarGrupo').change(function () {
  var valor = $(this).val();

  if (valor != '') {
    Busar(valor);
  } else {
    Busar('');
  }
});
/****************************************************************/

/*  MODIFICAR REGISTRO BUSCADOR                                 */

/****************************************************************/

$(document).on('click', 'a[data-role=updateRegistros]', function () {
  var idRegistro = $(this).data('id');
  var nombreRegistro = $('#' + idRegistro).children('td[data-target=nombreRegistro]').text();
  var empresaRegistro = $('#' + idRegistro).children('td[data-target=empresaRegistro]').text();
  var nacionalidadRegistro = $('#' + idRegistro).children('td[data-target=nacionalidadRegistro]').text();
  var estautsRegistro = $('#' + idRegistro).children('td[data-target=estatusRegistro]').text();
  $('#nombremodificarRegistro').val(nombreRegistro);
  $('#empresamodificarRegistro').val(empresaRegistro);
  $('#nacionalidadmodificarRegistro').val(nacionalidadRegistro);
  $('#updateRegistros').val(idRegistro);
  $('#estatusModificarRegistro').val(estautsRegistro);
  $('#ModalModificarRegistro').modal('toggle');
});
formModificarRegistroBuscador.addEventListener('submit', function (e) {
  e.preventDefault();
  var idRegistro = formModificarRegistroBuscador.updateRegistros.value;
  console.log(idRegistro);
  var nameegistro = formModificarRegistroBuscador.nombremodificarRegistro.value;
  var empresaegistro = formModificarRegistroBuscador.empresamodificarRegistro.value;
  var estatusegistro = formModificarRegistroBuscador.estatusModificarRegistro.value;
  var nacionalidadegistro = formModificarRegistroBuscador.nacionalidadmodificarRegistro.value;
  var msg = document.getElementById('resultadoModificarRegistro');
  $('#ModalModificarRegistro').modal('hide');

  if (nameegistro == '') {
    $(msg).fadeIn();
    msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Escriba un Nombre</div>";
    $(msg).fadeOut(2500);
  } else {
    ajaxGenerarSolicitudA('modulos/test.php', 'iduser=' + idRegistro + '&nombre=' + nameegistro + '&estatus=' + estatusegistro + '&empresa=' + empresaegistro + '&nacionalidad=' + nacionalidadegistro + '&btnModificarRegistroBuscador=btnModificarRegistroBuscador', 'resultadoModificarRegistro');
    setTimeout(function () {
      Busar('');
      ListGET('modulos/solicitud_aprobar_estado_1.php', 'aprobarSoliciudEstado1');
    }, 1000);
  }
});
/****************************************************************/

/*  FUNCIONES AJAX CONSULTA, VALIDAR TABLE, USUARIOS, GRUPOS ETC.*/

/****************************************************************/

function Busar(consulta) {
  ajaxForm('modulos/test.php', 'consulta=' + consulta + '&btnBuscarTodo=btnBuscarTodo', 'datos');

  function ajaxForm(url, send, result) {
    var sendForm = send;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var response = this.responseText;
        var msg = document.getElementById(result);
        msg.innerHTML = response;
      }
    };

    xhttp.open('POST', url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(sendForm);
  }
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
    return true;
  } else {
    return false;
  }
}

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
      } else if (response === -7) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">No Hay Registros Cargados</div>";
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
/****************************************************************/

/*  AJAX APROBACIONES                                           */

/****************************************************************/
//SOLICITUD A SOLICITUDES
//SOLICITUD 1


function ajaxFormAprobacionS1SA(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result);
      msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Codigo de Solicitud - ".concat(response, "</div>");
      window.open("http://localhost/job/php/modulos/exports/exportAprobacionS1SA.php?code=" + response, "_blank");
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
} //SOLICITUD 2


function ajaxFormAprobacionS2SA(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result);
      msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Codigo de Solicitud - ".concat(response, "</div>");
      $(msg).fadeOut(1000);
      window.open("http://localhost/job/php/modulos/exports/exportAprobacionS2SA.php?code=" + response, "_blank");
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
} //SOLICITUD 3


function ajaxFormAprobacionS3SA(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result);
      msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Codigo de Aprobacion - ".concat(response, "</div>");
      $(msg).fadeOut(1000);
      window.open("http://localhost/job/php/modulos/exports/exportAprobacionS3SA.php?code=" + response, "_blank");
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
} //SOLICITUD 4


function ajaxFormAprobacionS4SA(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result);
      $(msg).fadeIn();

      if (response == -1) {
        msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Complete los Campos</div>";
        $(msg).fadeOut(2000);
      } else if (response == -2) {
        msg.innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">Error al guardar en base de datos</div>";
        $(msg).fadeOut(2000);
      } else {
        msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Codigo de Aprobacion - ".concat(response, "</div>");
        $(msg).fadeOut(2000);
        window.open("http://localhost/job/php/modulos/exports/exportAprobacionS4SA.php?code=" + response, "_blank");
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
} //SOLICITUD 5


function ajaxFormAprobacionS5SA(url, send, result) {
  var sendForm = send;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result); //console.log(response);

      msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Codigo de Aprobacion - ".concat(response, "</div>");
      $(msg).fadeOut(1000);
      window.open("http://localhost/job/php/modulos/exports/exportAprobacionS5SA.php?code=" + response, "_blank");
    }
  };

  xhttp.open('POST', url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(sendForm);
}

function ajaxDocument(url, send, result) {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      var msg = document.getElementById(result);
      $(msg).fadeIn();

      if (response == 1) {
        msg.innerHTML = "\n                <div class=\"alert alert-info\" role=\"alert\">Operacion Exitosa</div>";
        $(msg).fadeOut(1000);
      } else if (response == -2) {
        msg.innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">Error al guardar en base de datos</div>";
        $(msg).fadeOut(2000);
      }
    }
  };

  xhttp.open('POST', url, true);
  xhttp.send(send);
}