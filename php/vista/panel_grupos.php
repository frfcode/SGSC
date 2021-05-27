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
        <button type="submit" form="agregarGrupo" class="btn btn-block btn-default">Crear</button>
      </div>
    </div>
  </div>
</form>
<!-- Asignar Grupo de Usuarios -->
<form id="asignarGrupoUsuario">
  <div class="target-admin-margin hide" id="asingargrupo">
    <div class="row">
      <div class="col-12">
        <h3>Asignar Grupo a Usuario</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoAsignarGrupo"></div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <label for="password">Seleccionar Usuario</label>
        <select name="usuarioSelect" id="usuarioSelect" class="form-control">
        </select>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <label for="password">Para Aginarlo al Grupo</label>
        <select name="groupSelect" id="groupSelect" class="form-control">
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" form="asignarGrupoUsuario" class="btn btn-block btn-default">Asignar</button>
      </div>
    </div>
  </div>
</form>
<!-- Eliminar Asignacion a Usuario Creados -->
<form id="eliminarAsignacion">
  <div class="target-admin-margin hide" id="eliminarasignacion">
    <div class="row">
      <div class="col-12">
        <h3>Eliminar Asignacion a Usuarios</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoEliminarAsignacion"></div>
    </div>
    <div class="row">
      <div class="col-12">
        <select name="asignacion" id="asignacion" class="form-control">
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" form="eliminarAsignacion" class="btn btn-block btn-default">Eliminar aignacion</button>
      </div>
    </div>
  </div>
</form>
<!-- Eliminar Grupo-->
<form id="eliminarGrupo">
  <div class="target-admin-margin hide" id="eliminargrupo">
    <div class="row">
      <div class="col-12">
        <h3>Eliminar Grupo</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoEliminarGrupo"></div>
    </div>
    <div class="row">
      <div class="col-12">
        <select name="grupoeliminar" id="grupoeliminar" class="form-control">
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-block btn-default">Eliminar Grupo</button>
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
    <div class="col-12" id="grupohistorial">
    </div>
  </div>
</div>