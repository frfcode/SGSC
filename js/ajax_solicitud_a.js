console.log('solicitudA');
//FORMULARIOS DE ADMIN.PHP
const formCargarRegistroSolicitudA = document.getElementById("cargarRegistro-solicitud-a");
const formEliminarRegistroSolicitudA = document.getElementById("registrosEliminar-solicitud-a");
const formModificarRegistroSolicitudA = document.getElementById('modificar-registro-solicitud-a');
const formGenerarSolicitudA = document.getElementById('generar-solicitud-a');
//ACCIONDES DE CADA FORMALACION
/****************************************************************/
/*  SOLICITUD A  FUNCIONES O ACCIONES CONJUNTAS                 */
/****************************************************************/
    formCargarRegistroSolicitudA.addEventListener('submit',function(e){
    e.preventDefault();
    var nombre = formCargarRegistroSolicitudA.nombreSA.value;
    var telefonoNoClean = formCargarRegistroSolicitudA.telefonoSA.value;
    var empresa = formCargarRegistroSolicitudA.empresaSA.value;
    var nacionalidad = formCargarRegistroSolicitudA.nacionalidadSA.value;
    var table = document.getElementById('tablaSA');
    var td = table.getElementsByTagName('td');
    var msg = document.getElementById('resultadoCargarRegistroA');
    var telefono = telefonoNoClean.replace(/[-.*+?^${}()|[\]\\]/g,'');
    if(telefono.length < 10){
        $(msg).fadeIn();
        msg.innerHTML = `
            <div class="alert alert-danger" role="alert">Numero de Telefono no Valido</div>`;
        $(msg).fadeOut(2500);
    }else{
        if(tableValidar(td) == false){
            ajaxForm('modulos/test.php',"nombre="+nombre+"&solicitud=SA&telefono="+telefono+"&empresa="+empresa+"&nacionalidad="+nacionalidad+"&btnCargarRegistro=btnCargarRegistro",'resultadoCargarRegistroA');
            setTimeout(function(){
                formCargarRegistroSolicitudA.nombre.value = '';
                formCargarRegistroSolicitudA.telefono.value = '';
                ListGET('modulos/lista_tabla_solicitud_a.php','tablaSA');
            }, 1000);
        }else{
            $(msg).fadeIn();
            msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Excedio el limite de registros, por favor genere la solicitud</div>`;
            $(msg).fadeOut(2500);
        }  
    } 
    })
    formEliminarRegistroSolicitudA.addEventListener('submit', function(e){
        e.preventDefault();
        $('#ModalEliminarRegistrosSolicitudA').modal('hide');
        ajaxForm('modulos/test.php',"solicitud=A&btnEliminarRegistro=btnEliminarRegistro",'resultadoCargarRegistroA')
        setTimeout(function(){
            ListGET('modulos/lista_tabla_solicitud_a.php','tablaSA');
        }, 1000);
    })
      formModificarRegistroSolicitudA.addEventListener('submit',function(e){
        e.preventDefault();
        var id = formModificarRegistroSolicitudA.useridSA.value;
        var nombre = formModificarRegistroSolicitudA.nombremodificarSA.value;
        var telefonoNoClean = formModificarRegistroSolicitudA.telefonomodificarSA.value;
        var empresa = formModificarRegistroSolicitudA.empresamodificarSA.value;
        var nacionalidad = formModificarRegistroSolicitudA.nacionalidadmodificarSA.value;
        var msg = document.getElementById('resultadoCargarRegistroA');
        var telefono = telefonoNoClean.replace(/[-.*+?^${}()|[\]\\]/g,'');
        $('#ModalModificarSA').modal('hide');
        if(telefono.length < 10){
            $(msg).fadeIn();
            msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Numero de Telefono no Valido</div>`;
            $(msg).fadeOut(2500);
        }else{
            ajaxForm('modulos/test.php','iduser='+id+'&nombre='+nombre+'&telefono='+telefono+'&empresa='+empresa+'&nacionalidad='+nacionalidad+'&btnModificarRegistro=btnModificarRegistro','resultadoCargarRegistroA');
            setTimeout(function(){
            ListGET('modulos/lista_tabla_solicitud_a.php','tablaSA');
            }, 1000);
        }
    })
/****************************************************************/
/*  Generar Solicitud A                                         */
/****************************************************************/
formGenerarSolicitudA.addEventListener('submit',function(e){
    e.preventDefault();
    var grupo = formGenerarSolicitudA.groupUsuarioSA.value;
    var prioridad = formGenerarSolicitudA.prioridadSA.value;
    var dirigido = formGenerarSolicitudA.dirigidoListaSA.value;
    var tiempo = formGenerarSolicitudA.tiempoListaSA.value;
    var detalle = formGenerarSolicitudA.detallesSA.value;
    var nota = formGenerarSolicitudA.notaSA.value;
    var msg = document.getElementById('resultadoCargarRegistroA');
    if(dirigido == -1 || tiempo == -1 || nota == '' || detalle == '' || grupo == 'null'){
        $('#ModalGenerarSolicitudA').modal('hide');
        $(msg).fadeIn();
        msg.innerHTML = `
        <div class="alert alert-danger" role="alert">Complete los Campos</div>`;
        $(msg).fadeOut(1000);
    }else{
        $('#ModalGenerarSolicitudA').modal('hide');
        ajaxGenerarSolicitudA('modulos/test.php','grupo='+grupo+'&prioridad='+prioridad+'&dirigido='+dirigido+'&tiempo='+tiempo+'&detalle='+detalle+'&nota='+nota+'&btnGenerarA=btnGenerarA','resultadoCargarRegistroA');
        setTimeout(function(){
        formGenerarSolicitudA.detallesSA.value = '';
        formGenerarSolicitudA.notaSA.value = '';
        ListGET('modulos/solicitud_aprobar_estado_1.php','aprobarSoliciudEstado1');
        ListGET('modulos/lista_tabla_solicitud_a.php','tablaSA');
        ListGET('modulos/lista_estado_solicitud.php','listaestado');
        }, 1000);
    }
})
/*
formTiempoSA.addEventListener('submit',function(e){
    e.preventDefault();
    var tiempo = formTiempoSA.tiempoSA.value;
    console.log('tiempo');
    ajaxForm('modulos/test.php','tiempo='+tiempo+"&btnTiempo=btnTiempo",'resultadoTiempoDetalleA');
    setTimeout(function(){
        formTiempoSA.tiempoSA.value = '';
        ListGET('modulos/lista_tiempo.php','tiempoListSA');
        }, 1000);
})

formDetalleSA.addEventListener('submit',function(e){
    e.preventDefault();
    var detalle = formDetalleSA.detalleSA.value;
    ajaxForm('modulos/test.php','detalle='+detalle+"&btnDetalle=btnDetalle",'resultadoTiempoDetalleA');
    setTimeout(function(){
        formDetalleSA.detalleSA.value = '';
        ListGET('modulos/lista_detalle.php','detallesListSA');
        }, 1000);
})*/


/****************************************************************/
/*  TABLA ELIMINAR - MODIFICAR                                  */
/****************************************************************/

$(document).on('click','a[data-role=updateSA]',function(){
    var id = $(this).data('id'); 
    var telefono = $('#'+id).children('td[data-target=telefono]').text();
    var nombre = $('#'+id).children('td[data-target=nombre]').text();
    console.log(nombre)
    var empresa = $('#'+id).children('td[data-target=empresa]').text();
    var nacionalidad = $('#'+id).children('td[data-target=nacionalidad]').text();
    $('#telefonomodificarSA').val(telefono)
    $('#nombremodificarSA').val(nombre)
    $('#empresamodificarSA').val(empresa)
    $('#nacionalidadmodificarSA').val(nacionalidad)
    $('#useridSA').val(id)
    $('#ModalModificarSA').modal('toggle');
  })
  

  $(document).on('click', '#borrar-registro-a', function (event) {
    event.preventDefault();
    var fila = document.getElementById('value').textContent;
    ajaxForm('modulos/test.php','fila='+fila+"&btnEliminarFila=btnEliminarFila",'resultadoCargarRegistroA');
    setTimeout(function(){
       ListGET('modulos/lista_tabla_solicitud_a.php','tablaSA');
    }, 1000);
});

/****************************************************************/
/*  FUNCIONES AJAX O LLAMADOS                                   */
/****************************************************************/
function Busar(consulta){
    ajaxForm('modulos/test.php','consulta='+consulta+'&btnBuscarTodo=btnBuscarTodo','datos')
  function ajaxForm(url,send,result){
      var sendForm = send;
      const xhttp = new XMLHttpRequest(); 
      xhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
              var response = this.responseText;
              console.log(response);
              var msg = document.getElementById(result);
              msg.innerHTML = response;                         
          }
      }

      xhttp.open('POST',url, true)
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(sendForm);
  }
}
    
      function countRecords(table){
        var registros = 0;
        for (let index = 0; index < table.length; index++) {
            registros++;
         }
         if(registros == 0){
            return true;
         }else{
            return false;
         }
    }
    
      function tableValidar(table){
        var registros = 0;
        for (let index = 0; index < table.length; index++) {
            registros++;
         }
         if(registros >= 70){
            //console.log("true" + registros)
            return true;
         }else{
            //console.log("false" + registros)
            return false;
         }
    }

      function ListGET(url, idresult){
        const xhttp = new XMLHttpRequest(); 
        xhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
          var response = this.responseText;
          /*
          console.log(url)
          console.log(response);
          console.log('-------------------------');*/
          document.getElementById(idresult).innerHTML = ''; 
          document.getElementById(idresult).innerHTML += response;
            }
        }
        xhttp.open('GET',url, true)
        xhttp.send();
    }
    function ajaxGenerarSolicitudA(url,send,result){
        var sendForm = send;
        const xhttp = new XMLHttpRequest(); 
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var response = this.responseText;
                console.log(response);
                var msg = document.getElementById(result);
                $(msg).fadeIn();
                if(response == -1){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Complete los Campos</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == -2){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Error al guardar en base de datos</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == -3){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Grupo ya fue asignado</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == -7){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">No Hay Registros Cargados</div>`
                $(msg).fadeOut(1000); 
                //ID GENERADO REPETIDO INTENTE NUEVAMENTE
                }if(response == -8){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Id Repetido Intente Nuevamente</div>`
                $(msg).fadeOut(1000); 
                } else{
                    msg.innerHTML = `
                    <div class="alert alert-info" role="alert">Solicitud A N°- ${response}</div>` 
                    window.open("http://localhost/job/php/modulos/exports/exportSA.php?"+send+"&code="+response, "_blank");
                }
            }
        }
        xhttp.open('POST',url, true)
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(sendForm);
    }
      function ajaxForm(url,send,result){
        //console.log(send);
        var sendForm = send;
        const xhttp = new XMLHttpRequest(); 
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var response = this.responseText;
                console.log(response);
                var msg = document.getElementById(result);
                $(msg).fadeIn();
                if(response == -1){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Complete los Campos</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == 1){
                    msg.innerHTML = `
                <div class="alert alert-info" role="alert">Operacion Exitosa</div>`    
                $(msg).fadeOut(1000);  
                } else
                if(response == -2){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Error al guardar en base de datos</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == -3){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Grupo ya fue asignado</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == -6){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Nombre de usuario ya existe</div>`
                $(msg).fadeOut(1000);  
                } else
                if(response == -5){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Grupo ya existe</div>`
                $(msg).fadeOut(1000); 
                }else
                if(response == -7){
                    msg.innerHTML = `
                <div class="alert alert-danger" role="alert">No Hay Registros Cargados</div>`
                $(msg).fadeOut(1000); 
                } else{
                    msg.innerHTML = `
                    <div class="alert alert-info" role="alert">Solicitud N°- ${response}</div>` 
                    window.open("http://localhost/job/php/modulos/exportSA.php?"+send+"&code="+response, "_blank");
                }
                             
            }
        }

        xhttp.open('POST',url, true)
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(sendForm);
    }