<!-- CARGAR TIEMPO-->
<div class="target-admin-margin row hide" id="menuVigencia">
  <div class="row">
    <div class="col-12">
      <h3>Crear Vigencia</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12" id="resultadoVigencia"></div>
  </div>
  <div class="row">
    <div class="col-12">
      <form id="vigenciaform">
        <label>Vigencia</label>
        <input type="date" class="form-control" id="vigencia" name="vigencia" />
        <button type="submit" form="vigenciaform" class="btn btn-default btn-block">Crear</button>
      </form>
    </div>
  </div>
  <form id="vigenciaEliminarForm">
    <div class="row mt-2">
      <div class="col-12">
        <label>Vigencia - Eliminar</label>
        <select id="vigenciaSA" name="vigenciaSA" class="form-control">
        </select>
        <button type="submit" form="vigenciaEliminarForm" class="btn btn-default btn-block">Eliminar</button>
      </div>
    </div>
  </form>
</div>