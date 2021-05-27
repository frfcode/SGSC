//ListGET('modulos/lista_grupos_asignados_usuarios.php','groupUsuarioSA');
//FORMULARIOS DE DEFAULT.PHP
const formCrearGrupo = document.getElementById('agregarGrupo');
const formBuscarModel = document.getElementById('BuscarModal');
const formModificarRegistroBuscador = document.getElementById('modificar-registro-buscador');
//ACCIONDES DE CADA FORMALACION
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
})
/****************************************************************/
/*  PANEL BUSCAR                                                      */
/****************************************************************/
Busar('');
$('#buscarSolicitd').keydown(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
}) 

$('#buscarUsuario').keydown(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
})

$('#buscar').change(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
})

$('#buscarFecha').change(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
})

$('#buscarEstado').change(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
})

$('#buscarEstatus').change(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
})

$('#buscarEmpresa').change(function(){
  var valor = $(this).val();
  if(valor != ''){
    Busar(valor);
  }else{
    Busar('');
  }
})

$('#buscarGrupo').change(function(){
    var valor = $(this).val();
    if(valor != ''){
      Busar(valor);
    }else{
      Busar('');
    }
})

/****************************************************************/
/*  MODIFICAR REGISTRO BUSCADOR                                 */
/****************************************************************/
$(document).on('click','a[data-role=updateRegistros]',function(){
  var idRegistro = $(this).data('id');
  var nombreRegistro = $('#'+idRegistro).children('td[data-target=nombreRegistro]').text();
  var empresaRegistro = $('#'+idRegistro).children('td[data-target=empresaRegistro]').text();
  var nacionalidadRegistro = $('#'+idRegistro).children('td[data-target=nacionalidadRegistro]').text();
  var estautsRegistro = $('#'+idRegistro).children('td[data-target=estatusRegistro]').text();
  $('#nombremodificarRegistro').val(nombreRegistro)
  $('#empresamodificarRegistro').val(empresaRegistro)
  $('#nacionalidadmodificarRegistro').val(nacionalidadRegistro)
  $('#updateRegistros').val(idRegistro)
  $('#estatusModificarRegistro').val(estautsRegistro)
  $('#ModalModificarRegistro').modal('toggle');
})

formModificarRegistroBuscador.addEventListener('submit',function(e){
  e.preventDefault();
  var idRegistro = formModificarRegistroBuscador.updateRegistros.value;
  console.log(idRegistro)
  var nameegistro = formModificarRegistroBuscador.nombremodificarRegistro.value;
  var empresaegistro = formModificarRegistroBuscador.empresamodificarRegistro.value;
  var estatusegistro = formModificarRegistroBuscador.estatusModificarRegistro.value;
  var nacionalidadegistro = formModificarRegistroBuscador.nacionalidadmodificarRegistro.value;
  var msg = document.getElementById('resultadoModificarRegistro');
  $('#ModalModificarRegistro').modal('hide');
  if(nameegistro == ''){
      $(msg).fadeIn();
      msg.innerHTML = `
          <div class="alert alert-danger" role="alert">Escriba un Nombre</div>`;
      $(msg).fadeOut(2500);
  }else{
    ajaxGenerarSolicitudA('modulos/test.php','iduser='+idRegistro+'&nombre='+nameegistro+'&estatus='+estatusegistro+'&empresa='+empresaegistro+'&nacionalidad='+nacionalidadegistro+'&btnModificarRegistroBuscador=btnModificarRegistroBuscador','resultadoModificarRegistro');
      setTimeout(function(){
          Busar('');
          ListGET('modulos/solicitud_aprobar_estado_1.php','aprobarSoliciudEstado1');
      }, 1000);
  }
})

/****************************************************************/
/*  FUNCIONES AJAX O LLAMADOS                                   */
/****************************************************************/
function Busar(consulta) {
    ajaxForm('modulos/test.php', 'consulta=' + consulta + '&btnBuscarTodoUsuario=btnBuscarTodoUsuario', 'datos')
    function ajaxForm(url, send, result) {
        var sendForm = send;
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText;
                var msg = document.getElementById(result);
                msg.innerHTML = response;
            }
        }

        xhttp.open('POST', url, true)
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(sendForm);
    }
}

function ajaxFormBuscar(url, send, result) {
    var sendForm = send;
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            var msg = document.getElementById(result);
            msg.innerHTML = response;
        }
    }

    xhttp.open('POST', url, true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(sendForm);
}

function ajaxForm(url, send, result) {
    var sendForm = send;
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            //console.log(response);
            var msg = document.getElementById(result);
            $(msg).fadeIn();
            if (response == -1) {
                msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Complete los Campos</div>`
                $(msg).fadeOut(1000);
            } else
            if (response == 1) {
                msg.innerHTML = `
                <div class="alert alert-info" role="alert">Operacion Exitosa</div>`
                $(msg).fadeOut(1000);
            } else
            if (response == -2) {
                msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Error al guardar en base de datos</div>`
                $(msg).fadeOut(1000);
            } else
            if (response == -3) {
                msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Grupo ya fue asignado</div>`
                $(msg).fadeOut(1000);
            } else
            if (response == -6) {
                msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Nombre de usuario ya existe</div>`
                $(msg).fadeOut(1000);
            } else
            if (response == -5) {
                msg.innerHTML = `
                <div class="alert alert-danger" role="alert">Grupo ya existe</div>`
                $(msg).fadeOut(1000);
            } else
            if (response === -7) {
                msg.innerHTML = `
                <div class="alert alert-danger" role="alert">No Hay Registros Cargados</div>`
                $(msg).fadeOut(1000);
            }
        }
    }

    xhttp.open('POST', url, true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(sendForm);
}