<!-- Menu Usuarios -->
<!-- Crear Usuario -->
<form id="crearUsuario">
  <div class="target-admin-margin hide" id="crear">
    <div class="row">
      <div class="col-12">
        <h3>Crear Usuario</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoCrearUsuario">
      </div>
    </div>
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="text" class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="form-group">
      <label for="rol">Asignar Nivel de Usuario</label>
      <select name="rol" id="rol" class="form-control">
        <option value="default">default</option>
        <option value="admin">administrador</option>
      </select>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" form="crearUsuario" class="btn btn-block btn-default">Crear</button>
      </div>
    </div>
  </div>
</form>
<!-- Eliminar Usuario -->
<form id="eliminarUsuario">
  <div class="target-admin-margin hide" id="eliminar">
    <div class="row">
      <div class="col-12">
        <h3>Eliminar Usuario</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoEliminarUsuario"></div>
    </div>
    <div class="row">
      <div class="col-12">
        <label>Seleccione Usuario a eliminar</label>
        <select name="eliminarusuario" id="eliminarusuario" class="form-control"></select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-block btn-default">ELIMINAR</button>
      </div>
    </div>
  </div>
</form>
<!-- Usuarios Creados -->
<div class="target-admin-margin hide" id="creados">
  <div class="row">
    <div class="col-12">
      <h3>Usuarios Creados</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12" id="listacreados">

    </div>
  </div>
</div>