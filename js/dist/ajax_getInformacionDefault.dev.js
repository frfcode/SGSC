"use strict";

//GET INFORMACION
//SOLICITUDES A Y B
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
ListGET('modulos/lista_tabla_solicitud_b_telefono_op4.php', 'tablaSB'); //GRUPOS

ListGET('modulos/lista_grupos.php', 'buscar');
ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuarioSA');
ListGET('modulos/lista_grupos_asignados_usuarios.php', 'groupUsuario');
ListGET('modulos/lista_grupos_asignados_usuario_tabla.php', 'grupohistorial'); // TIEMPO - VIGENCIA - DIRIGIDO

ListGET('modulos/lista_tiempo.php', 'tiempoSA');
ListGET('modulos/lista_tiempo.php', 'tiempoListaSA');
ListGET('modulos/lista_tiempo.php', 'tiempoListaSB');
ListGET('modulos/lista_tiempo.php', 'tiempoNombreListaSB');
ListGET('modulos/lista_dirigido.php', 'dirigidoSA');
ListGET('modulos/lista_dirigido.php', 'dirigidoListaSA');
ListGET('modulos/lista_dirigido.php', 'dirigidoListaSB');
ListGET('modulos/lista_dirigido.php', 'dirigidoPaisListaSB');
ListGET('modulos/lista_dirigido.php', 'dirigidoNombreListaSB');

function ListGET(url, idresult) {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
      console.log(response); //console.log(response);
      //console.log('-------------------------');

      document.getElementById(idresult).innerHTML = '';
      document.getElementById(idresult).innerHTML += response;
    }
  };

  xhttp.open('GET', url, true);
  xhttp.send();
}