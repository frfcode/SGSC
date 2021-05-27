<!-- CARGAR TIEMPO -->
<div class="target-admin-margin hide" id="menuTiempo">
  <div class="row">
    <div class="col-12">
      <h3>Crear Nota (Tiempo)</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12" id="resultadoTiempo"></div>
  </div>
  <form id="tiempoform">
    <div class="row">
      <div class="col-12">
        <label>Nota (Tiempo)</label>
        <input type="number" class="form-control" id="tiempo" name="tiempo" />
        <button type="submit" form="tiempoform" class="btn btn-default btn-block">Crear</button>
      </div>
    </div>
  </form>
  <form id="tiempoEliminarForm">
    <div class="row mt-2">
      <div class="col-12">
        <label>Tiempo - Eliminar</label>
        <select id="tiempoSA" name="tiempoSA" class="form-control">
        </select>
        <button type="submit" form="tiempoEliminarForm" class="btn btn-default btn-block">Eliminar</button>
      </div>
    </div>
  </form>
</div>