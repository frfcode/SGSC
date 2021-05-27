<!-- Menu Grupos -->
<!-- Crear Grupo -->
<form id="agregarGrupo">
  <div class="target-admin-margin hide" id="creargrupo">
    <div class="row">
      <div class="col-12">
        <h3>Crear Grupo</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoCrearGrupo"></div>
    </div>
    <div class="form-group">
      <label for="group">Nombre de Grupo</label>
      <input type="text" class="form-control" name="group" id="group">
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-block btn-default">Crear</button>
      </div>
    </div>
  </div>
</form>
<!-- Historial de Asiganciones de Grupos -->
<div class="target-admin-margin hide" id="HistorialAsignarGrupo">
  <div class="row">
    <div class="col-12">
      <h3>Historial de Asignacion de Grupos a Usuarios</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12 table-scroll" id="grupohistorial">
    </div>
  </div>
</div>