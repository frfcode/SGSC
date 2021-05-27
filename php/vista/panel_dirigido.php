<!-- CARGAR DIRIGIDO-->
<div class="target-admin-margin row hide" id="menuDirigido">
  <div class="row">
    <div class="col-12">
      <h3>Crear Dirigido</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12" id="resultadoDirigido"></div>
  </div>
  <div class="row">
    <div class="col-12">
      <form id="dirigidoform">
        <label>Dirigido</label>
        <input class="form-control" id="dirigido" name="dirigido" />
        <button type="submit" form="dirigidoform" class="btn btn-default btn-block">Crear</button>
      </form>
    </div>
  </div>
  <form id="dirigidoEliminarForm">
    <div class="row mt-2">
      <div class="col-12">
        <label>Dirigido - Eliminar</label>
        <select id="dirigidoSA" name="dirigidoSA" class="form-control">
        </select>
        <button type="submit" form="dirigidoEliminarForm" class="btn btn-default btn-block">Eliminar</button>
      </div>
    </div>
  </form>
</div>