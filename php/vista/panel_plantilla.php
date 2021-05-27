<!-- Plantilla -->
  <div class="target-admin-margin hide" id="plantilla">
    <div class="row">
      <div class="col-12">
        <h3>Plantilla</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoPlantilla"></div>
    </div>
    <div class="form-group">
        <a href="modulos/test.php?descarga=plantilla_demo.docx" class="btn btn-block btn-default" >Descargar Plantilla Demo</a>
    </div>
    <form id="agregarPlantilla">
    <div class="form-group">
      <label for="group">Cargar Plantilla</label>
        <div class="border border-dark p-1">
            <div style="position: relative;">
                <h3 id="plantillaContenido" style="position: absolute; padding:5px;">CLICK PARA CARGAR PLANTILLA</h3>
            </div>
          <input type="file" id="archivoplantilla" class="form-control" style="opacity: 0;">
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" form="agregarPlantilla" class="btn btn-block btn-default">Cargar</button>
      </div>
    </div>
    </form>
  </div>

<!-- Asignar Grupo de Usuarios -->
<form id="configurarPlantilla">
  <div class="target-admin-margin hide" id="configurarplantilla">
    <div class="row">
      <div class="col-12">
        <h3>Configuracion de Plantillas</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoConfiguracion"></div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <label for="password">Solicitud 1</label>
        <select name="#" id="plantillaSolicitud1" class="form-control">
        </select>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <label for="password">Solicitud 2</label>
        <select name="#" id="plantillaSolicitud2" class="form-control">
        </select>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <label for="password">Solicitud 3</label>
        <select name="#" id="plantillaSolicitud3" class="form-control">
        </select>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <label for="password">Solicitud 4</label>
        <select name="#" id="plantillaSolicitud4" class="form-control">
        </select>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <label for="password">Solicitud 5</label>
        <select name="#" id="plantillaSolicitud5" class="form-control">
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" form="configurarPlantilla" class="btn btn-block btn-default">Configurar</button>
      </div>
    </div>
  </div>
</form>