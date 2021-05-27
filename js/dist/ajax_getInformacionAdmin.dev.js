"use strict";

ListGET('modulos/lista_grupos.php', 'groupSelect');
ListGET('modulos/lista_usuarios_creados.php', 'listacreados');
ListGET('modulos/lista_usuarios.php', 'eliminarusuario');
ListGET('modulos/lista_usuarios.php', 'usuarioSelect');
ListGET('modulos/lista_asignacion.php', 'asignacion');
ListGET('modulos/lista_grupos.php', 'grupoeliminar'); //ListGET('modulos/lista_grupos.php','grupobuscar');

ListGET('modulos/lista_grupos.php', 'buscarGrupo');
ListGET('modulos/lista_grupos_asignados.php', 'grupohistorial'); //ListGET('modulos/lista_grupos_asignados_usuarios.php','groupUsuario');

ListGET('modulos/solicitud_aprobar_estado_1.php', 'aprobarSoliciudEstado1');
ListGET('modulos/solicitud_aprobar_estado_2.php', 'aprobarSoliciudEstado2');
ListGET('modulos/solicitud_aprobar_estado_3.php', 'aprobarSoliciudEstado3');
ListGET('modulos/solicitud_aprobar_estado_4.php', 'aprobarSoliciudEstado4');
ListGET('modulos/solicitud_aprobar_estado_5.php', 'aprobarSoliciudEstado5'); //ListGET('modulos/solicitud_aprobar_estado_4.php','aprobarSoliciudEstado2')
//ListGET('modulos/solicitud_aprobar_estado_5.php','aprobarSoliciudEstado3')
//OBTENER INFORMACION POR AJAX
//SOLICITUDES A Y B

ListGET('modulos/lista_estado_solicitud.php', 'listaestado');
ListGET('modulos/lista_tabla_solicitud_a.php', 'tablaSA');
ListGET('modulos/lista_tabla_solicitud_b_altice.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_claro.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_viva.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_nombre_op3.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_nombre_op6.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_telefono_op1.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_telefono_op2.php', 'tablaSB');
ListGET('modulos/lista_tabla_solicitud_b_telefono_op4.php', 'tablaSB');
ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuarioSA'); // TIEMPO - VIGENCIA - DIRIGIDO

ListGET('modulos/lista_tiempo.php', 'tiempoSA');
ListGET('modulos/lista_tiempo.php', 'tiempoListaSA');
ListGET('modulos/lista_tiempo.php', 'tiempoListaSB');
ListGET('modulos/lista_tiempo.php', 'tiempoNombreListaSB');
ListGET('modulos/lista_dirigido.php', 'dirigidoSA');
ListGET('modulos/lista_dirigido.php', 'dirigidoListaSA');
ListGET('modulos/lista_dirigido.php', 'dirigidoListaSB');
ListGET('modulos/lista_dirigido.php', 'dirigidoPaisListaSB');
ListGET('modulos/lista_dirigido.php', 'dirigidoNombreListaSB'); //PLANTILLAS

ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud1');
ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud2');
ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud3');
ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud4');
ListGET('modulos/lista_plantillas.php', 'plantillaSolicitud5'); //ListGET('modulos/lista_vigencia.php','vigenciaSA');
//ListGET('modulos/lista_vigencia.php','vigenciaSB'); 
//ListGET('modulos/lista_tiempo.php','tiempoListaSA');
//ListGET('modulos/lista_tiempo.php','tiempoListaSB');
//ListGET('modulos/lista_dirigido.php','dirigidoListaSA');

function ListGET(url, idresult) {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText; //console.log(url + ' -- '+idresult);
      //console.log('-------------------------');
      //console.log(idresult + ' --- ' + url)

      document.getElementById(idresult).innerHTML = '';
      document.getElementById(idresult).innerHTML += response;
    }
  };

  xhttp.open('GET', url, true);
  xhttp.send();
}