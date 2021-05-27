<div class="target-admin-margin hide" id="solicitud-b-generar">
    <div class="row mb-1">
        <div class="col-12">
            <h3>SOLICITUD 1-B - Cargar Registros</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12" id="resultadoCargarRegistroB"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <select class="form-control" name="opcionesb" id="opcionesb">
                <option value="" selected>Seleccione Opcion
                <option value="1">Opcion 1
                <option value="2">Opcion 2
                <option value="3">Opcion 3
                <option value="4">Opcion 4
                <option value="5">Opcion 5
                <option value="6">Opcion 6
            </select>
        </div>
    </div>
    <!-- telefonoOP -->
    <form id="telefonoSB">
            <div class="hide" id="telefonoOP"> 
    <div class="row mt-3 " >
        <div class="col-12">
            <label class="sr-only" for="telefonoSB">Telefono</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                        </svg></div>
                </div>
                <input type="tel" class="form-control" id="telefonoSB" placeholder="Telefono" name="telefono">
            </div>
        </div>
    </div>
    <div class="row mb-3">
                        <div class="col-6">
                        <button type="submit" form="telefonoSB" class="btn btn-block btn-default">Cargar</button>
                        </div>
                        <div class="col-6">
                        <button type="button" class=" btn btn-block btn-default"  data-toggle="modal" data-target="#ModalGenerarSolicitudTelefonosB">Generar e imprimir</button>
                        </div>
                </div>
                </div>
    </form>
     <!-- nombreOP -->
    <form id="nombreSB">
        <div class="hide" id="nombreOP">
    <div class="row mt-3">
        <div class="col-12">
            <label class="sr-only" for="nombreSB">Nombre</label>
            <div class="input-group mb-2 mt-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" id="nombreSB" name="nombre" placeholder="Nombre"
                    pattern="[A-Za-z]{1,40}" title="Ingrese solo Letras">
                    
               </div>
        </div>
    </div>
    <div class="row mb-3">
                        <div class="col-6">
                        <button type="submit" form="nombreSB" class="btn btn-block btn-default">Cargar</button>
                        </div>
                        <div class="col-6">
                    <button type="button" class=" btn btn-block btn-default"  data-toggle="modal" data-target="#ModalGenerarSolicitudNombresB">Generar e imprimir</button>
                        </div>
                    </div>
                    </div>
    </form>
<form id="paisesSB">
<div class="hide" id="paisesOP">
<div class="row mt-3">
      <div class="col-12">
          <h3>SELECCIONE COMPAÑIA</h3>
      </div>
  </div>
  <div class="row">
         <div class="col-12">
        <select class="form-control" id="selectempresa">
                <option value="CLARO" selected>Claro Codetel</option>
                <option value="ALTICE">Altice Dominicana</option>
                <option value="VIVA">Viva (Trilogy Dominicana)</option>
        </select>
        </div>
  </div>
  <div class="hideselect" id="hideselect">
          
    <div class="row mt-2">
      <div class="col-12">
          <h3>SELECCIONE MESES</h3>
      </div>
  </div> 
  
  <div class="row">
      <div class="col-4">
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Enero"><label
                  class="form-check-label" for="defaultCheck1">Enero</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Febrero"><label
                  class="form-check-label" for="defaultCheck1">Febrero</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Marzo"><label
                  class="form-check-label" for="defaultCheck1">Marzo</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Abril"><label
                  class="form-check-label" for="defaultCheck1">Abril</label></div>
      </div>
      <div class="col-4">
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Mayo"><label
                  class="form-check-label" for="defaultCheck1">Mayo</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Junio"><label
                  class="form-check-label" for="defaultCheck1">Junio</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Julio"><label
                  class="form-check-label" for="defaultCheck1">Julio</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Agosto"><label
                  class="form-check-label" for="defaultCheck1">Agosto</label></div>
      </div>
      <div class="col-4">
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox"
                  value="Septiembre"><label class="form-check-label" for="defaultCheck1">Septiembre</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Octubre"><label
                  class="form-check-label" for="defaultCheck1">Octubre</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Noviembre"><label
                  class="form-check-label" for="defaultCheck1">Noviembre</label></div>
          <div class="form-check"><input class="form-check-input" id="checkmes" type="checkbox" value="Diciembre"><label
                  class="form-check-label" for="defaultCheck1">Diciembre</label></div>
      </div>
  </div>
  
  <div class="row mt-2 ">
      <div class="col-12">
          <h3>Seleccione Paises</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-3">
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Argentina"><label class="form-check-label" for="defaultCheck1">Argentina</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Afganistán"><label class="form-check-label" for="defaultCheck1">Afganistán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Albania"><label
                  class="form-check-label" for="defaultCheck1">Albania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Alemania"><label
                  class="form-check-label" for="defaultCheck1">Alemania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Andorra"><label
                  class="form-check-label" for="defaultCheck1">Andorra</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Angola"><label
                  class="form-check-label" for="defaultCheck1">Angola</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Anguilla"><label
                  class="form-check-label" for="defaultCheck1">Anguilla</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Antigua y Barbuda"><label class="form-check-label" for="defaultCheck1">Antigua y
                  Barbuda</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value=">Antillas Holandesas"><label class="form-check-label" for="defaultCheck1">Antillas
                  Holandesas</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Arabia Saudita"><label class="form-check-label" for="defaultCheck1">Arabia Saudita</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Argelia"><label
                  class="form-check-label" for="defaultCheck1">Argelia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Armenia"><label
                  class="form-check-label" for="defaultCheck1">Armenia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Aruba"><label
                  class="form-check-label" for="defaultCheck1">Aruba</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Australia"><label class="form-check-label" for="defaultCheck1">Australia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Austria"><label
                  class="form-check-label" for="defaultCheck1">Austria</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Azerbaiján"><label class="form-check-label" for="defaultCheck1">Azerbaiján</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bahamas"><label
                  class="form-check-label" for="defaultCheck1">Bahamas</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bahrain"><label
                  class="form-check-label" for="defaultCheck1">Bahrain</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Bangladesh"><label class="form-check-label" for="defaultCheck1">Bangladesh</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Barbados"><label
                  class="form-check-label" for="defaultCheck1">Barbados</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Argentina"><label class="form-check-label" for="defaultCheck1">Argentina</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Afganistán"><label class="form-check-label" for="defaultCheck1">Afganistán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Albania"><label
                  class="form-check-label" for="defaultCheck1">Albania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Alemania"><label
                  class="form-check-label" for="defaultCheck1">Alemania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Andorra"><label
                  class="form-check-label" for="defaultCheck1">Andorra</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Angola"><label
                  class="form-check-label" for="defaultCheck1">Angola</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Anguilla"><label
                  class="form-check-label" for="defaultCheck1">Anguilla</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Antigua y Barbuda"><label class="form-check-label" for="defaultCheck1">Antigua y
                  Barbuda</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value=">Antillas Holandesas"><label class="form-check-label" for="defaultCheck1">Antillas
                  Holandesas</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Arabia Saudita"><label class="form-check-label" for="defaultCheck1">Arabia Saudita</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Argelia"><label
                  class="form-check-label" for="defaultCheck1">Argelia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Armenia"><label
                  class="form-check-label" for="defaultCheck1">Armenia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Aruba"><label
                  class="form-check-label" for="defaultCheck1">Aruba</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Australia"><label class="form-check-label" for="defaultCheck1">Australia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Austria"><label
                  class="form-check-label" for="defaultCheck1">Austria</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Azerbaiján"><label class="form-check-label" for="defaultCheck1">Azerbaiján</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bahamas"><label
                  class="form-check-label" for="defaultCheck1">Bahamas</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bahrain"><label
                  class="form-check-label" for="defaultCheck1">Bahrain</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Bangladesh"><label class="form-check-label" for="defaultCheck1">Bangladesh</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Barbados"><label
                  class="form-check-label" for="defaultCheck1">Barbados</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bélgica"><label
                  class="form-check-label" for="defaultCheck1">Bélgica</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Belice"><label
                  class="form-check-label" for="defaultCheck1">Belice</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Benin"><label
                  class="form-check-label" for="defaultCheck1">Benin</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bhutan"><label
                  class="form-check-label" for="defaultCheck1">Bhutan</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Bielorusia"><label class="form-check-label" for="defaultCheck1">Bielorusia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bolivia"><label
                  class="form-check-label" for="defaultCheck1">Bolivia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Bosnia Herzegovina"><label class="form-check-label" for="defaultCheck1">Bosnia
                  Herzegovina</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Botswana"><label
                  class="form-check-label" for="defaultCheck1">Botswana</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Brasil"><label
                  class="form-check-label" for="defaultCheck1">Brasil</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Brunei"><label
                  class="form-check-label" for="defaultCheck1">Brunei</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Bulgaria"><label
                  class="form-check-label" for="defaultCheck1">Bulgaria</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Burkina Faso"><label class="form-check-label" for="defaultCheck1">Burkina Faso</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Burundi"><label
                  class="form-check-label" for="defaultCheck1">Burundi</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Cabo Verde"><label class="form-check-label" for="defaultCheck1">Cabo Verde</label></div>
      </div>
      <div class="col-3">
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Camboya"><label
                  class="form-check-label" for="defaultCheck1">Camboya</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Camerún"><label
                  class="form-check-label" for="defaultCheck1">Camerún</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Canadá"><label
                  class="form-check-label" for="defaultCheck1">Canadá</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Chad"><label
                  class="form-check-label" for="defaultCheck1">Chad</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Chile"><label
                  class="form-check-label" for="defaultCheck1">Chile</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="China"><label
                  class="form-check-label" for="defaultCheck1">China</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Chipre"><label
                  class="form-check-label" for="defaultCheck1">Chipre</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Colombia"><label
                  class="form-check-label" for="defaultCheck1">Colombia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Comoros"><label
                  class="form-check-label" for="defaultCheck1">Comoros</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Congo"><label
                  class="form-check-label" for="defaultCheck1">Congo</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Corea del Norte"><label class="form-check-label" for="defaultCheck1">Corea del Norte</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Corea del Sur"><label class="form-check-label" for="defaultCheck1">Corea del Sur</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Costa de Marfil"><label class="form-check-label" for="defaultCheck1">Costa de Marfil</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Costa Rica"><label class="form-check-label" for="defaultCheck1">Costa Rica</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Croacia"><label
                  class="form-check-label" for="defaultCheck1">Croacia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Cuba"><label
                  class="form-check-label" for="defaultCheck1">Cuba</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Darussalam"><label class="form-check-label" for="defaultCheck1">Darussalam</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Dinamarca"><label class="form-check-label" for="defaultCheck1">Dinamarca</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Djibouti"><label
                  class="form-check-label" for="defaultCheck1">Djibouti</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Dominica"><label
                  class="form-check-label" for="defaultCheck1">Dominica</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Ecuador"><label
                  class="form-check-label" for="defaultCheck1">Ecuador</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Egipto"><label
                  class="form-check-label" for="defaultCheck1">Egipto</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="El Salvador"><label class="form-check-label" for="defaultCheck1">El Salvador</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Eritrea"><label
                  class="form-check-label" for="defaultCheck1">Eritrea</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Eslovaquia"><label class="form-check-label" for="defaultCheck1">Eslovaquia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Eslovenia"><label class="form-check-label" for="defaultCheck1">Eslovenia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Espana"><label
                  class="form-check-label" for="defaultCheck1">España</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Estados Unidos"><label class="form-check-label" for="defaultCheck1">Estados Unidos</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Estonia"><label
                  class="form-check-label" for="defaultCheck1">Estonia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Etiopía"><label
                  class="form-check-label" for="defaultCheck1">Etiopía</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Fiji"><label
                  class="form-check-label" for="defaultCheck1">Fiji</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Filipinas"><label class="form-check-label" for="defaultCheck1">Filipinas</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Finlandia"><label class="form-check-label" for="defaultCheck1">Finlandia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Francia"><label
                  class="form-check-label" for="defaultCheck1">Francia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Gabón"><label
                  class="form-check-label" for="defaultCheck1">Gabón</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Gambia"><label
                  class="form-check-label" for="defaultCheck1">Gambia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Georgia"><label
                  class="form-check-label" for="defaultCheck1">Georgia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Ghana"><label
                  class="form-check-label" for="defaultCheck1">Ghana</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Gibraltar"><label class="form-check-label" for="defaultCheck1">Gibraltar</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Grecia"><label
                  class="form-check-label" for="defaultCheck1">Grecia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Grenada"><label
                  class="form-check-label" for="defaultCheck1">Grenada</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Groenlandia"><label class="form-check-label" for="defaultCheck1">Groenlandia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Guadalupe"><label class="form-check-label" for="defaultCheck1">Guadalupe</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Guam"><label
                  class="form-check-label" for="defaultCheck1">Guam</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Guatemala"><label class="form-check-label" for="defaultCheck1">Guatemala</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Guayana Francesa"><label class="form-check-label" for="defaultCheck1">Guayana Francesa</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Guinea"><label
                  class="form-check-label" for="defaultCheck1">Guinea</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Guinea Ecuatorial"><label class="form-check-label" for="defaultCheck1">Guinea
                  Ecuatorial</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Guinea-Bissau"><label class="form-check-label" for="defaultCheck1">Guinea-Bissau</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Guyana"><label
                  class="form-check-label" for="defaultCheck1">Guyana</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Haití"><label
                  class="form-check-label" for="defaultCheck1">Haití</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Holanda"><label
                  class="form-check-label" for="defaultCheck1">Holanda</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Honduras"><label
                  class="form-check-label" for="defaultCheck1">Honduras</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Hong Kong"><label class="form-check-label" for="defaultCheck1">Hong Kong</label></div>
      </div>
      <div class="col-3">
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Hungría"><label
                  class="form-check-label" for="defaultCheck1">Hungría</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="India"><label
                  class="form-check-label" for="defaultCheck1">India</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Indonesia"><label class="form-check-label" for="defaultCheck1">Indonesia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Irak"><label
                  class="form-check-label" for="defaultCheck1">Irak</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Irán"><label
                  class="form-check-label" for="defaultCheck1">Irán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Irlanda"><label
                  class="form-check-label" for="defaultCheck1">Irlanda</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Islandia"><label
                  class="form-check-label" for="defaultCheck1">Islandia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Cayman"><label class="form-check-label" for="defaultCheck1">Islas Cayman</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Cook"><label class="form-check-label" for="defaultCheck1">Islas Cook</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Faroe"><label class="form-check-label" for="defaultCheck1">Islas Faroe</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Marianas del Norte"><label class="form-check-label" for="defaultCheck1">Islas Marianas
                  del
                  Norte</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Marshall"><label class="form-check-label" for="defaultCheck1">Islas Marshall</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Solomon"><label class="form-check-label" for="defaultCheck1">Islas Solomon</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Turcas y Caicos"><label class="form-check-label" for="defaultCheck1">Islas Turcas y
                  Caicos</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Vírgenes"><label class="form-check-label" for="defaultCheck1">Islas Vírgenes</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Islas Wallis y Futuna"><label class="form-check-label" for="defaultCheck1">Islas Wallis y
                  Futuna</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Israel"><label
                  class="form-check-label" for="defaultCheck1">Israel</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Italia"><label
                  class="form-check-label" for="defaultCheck1">Italia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Jamaica"><label
                  class="form-check-label" for="defaultCheck1">Jamaica</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Japón"><label
                  class="form-check-label" for="defaultCheck1">Japón</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Jordania"><label
                  class="form-check-label" for="defaultCheck1">Jordania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Kazajstán"><label class="form-check-label" for="defaultCheck1">Kazajstán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Kenya"><label
                  class="form-check-label" for="defaultCheck1">Kenya</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Kirguistán"><label class="form-check-label" for="defaultCheck1">Kirguistán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Kiribati"><label
                  class="form-check-label" for="defaultCheck1">Kiribati</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Kuwait"><label
                  class="form-check-label" for="defaultCheck1">Kuwait</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Laos"><label
                  class="form-check-label" for="defaultCheck1">Laos</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Lesotho"><label
                  class="form-check-label" for="defaultCheck1">Lesotho</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Letonia"><label
                  class="form-check-label" for="defaultCheck1">Letonia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Líbano"><label
                  class="form-check-label" for="defaultCheck1">Líbano</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Liberia"><label
                  class="form-check-label" for="defaultCheck1">Liberia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Libia"><label
                  class="form-check-label" for="defaultCheck1">Libia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Liechtenstein"><label class="form-check-label" for="defaultCheck1">Liechtenstein</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Lituania"><label
                  class="form-check-label" for="defaultCheck1">Lituania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Luxemburgo"><label class="form-check-label" for="defaultCheck1">Luxemburgo</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Macao"><label
                  class="form-check-label" for="defaultCheck1">Macao</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Macedonia"><label class="form-check-label" for="defaultCheck1">Macedonia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Madagascar"><label class="form-check-label" for="defaultCheck1">Madagascar</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Malasia"><label
                  class="form-check-label" for="defaultCheck1">Malasia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Malawi"><label
                  class="form-check-label" for="defaultCheck1">Malawi</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Mali"><label
                  class="form-check-label" for="defaultCheck1">Mali</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Malta"><label
                  class="form-check-label" for="defaultCheck1">Malta</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Marruecos"><label class="form-check-label" for="defaultCheck1">Marruecos</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Martinica"><label class="form-check-label" for="defaultCheck1">Martinica</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Mauricio"><label
                  class="form-check-label" for="defaultCheck1">Mauricio</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Mauritania"><label class="form-check-label" for="defaultCheck1">Mauritania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Mayotte"><label
                  class="form-check-label" for="defaultCheck1">Mayotte</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="México"><label
                  class="form-check-label" for="defaultCheck1">México</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Micronesia"><label class="form-check-label" for="defaultCheck1">Micronesia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Moldova"><label
                  class="form-check-label" for="defaultCheck1">Moldova</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Mónaco"><label
                  class="form-check-label" for="defaultCheck1">Mónaco</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Mongolia"><label
                  class="form-check-label" for="defaultCheck1">Mongolia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Montserrat"><label class="form-check-label" for="defaultCheck1">Montserrat</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Mozambique"><label class="form-check-label" for="defaultCheck1">Mozambique</label></div>
      </div>
      <div class="col-3">
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Myanmar"><label
                  class="form-check-label" for="defaultCheck1">Myanmar</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Namibia"><label
                  class="form-check-label" for="defaultCheck1">Namibia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Nauru"><label
                  class="form-check-label" for="defaultCheck1">Nauru</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Nepal"><label
                  class="form-check-label" for="defaultCheck1">Nepal</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Nicaragua"><label class="form-check-label" for="defaultCheck1">Nicaragua</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Níger"><label
                  class="form-check-label" for="defaultCheck1">Níger</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Nigeria"><label
                  class="form-check-label" for="defaultCheck1">Nigeria</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Noruega"><label
                  class="form-check-label" for="defaultCheck1">Noruega</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Nueva Caledonia"><label class="form-check-label" for="defaultCheck1">Nueva Caledonia</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Nueva Zelandia"><label class="form-check-label" for="defaultCheck1">Nueva Zelandia</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Omán"><label
                  class="form-check-label" for="defaultCheck1">Omán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Pakistán"><label
                  class="form-check-label" for="defaultCheck1">Pakistán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Panamá"><label
                  class="form-check-label" for="defaultCheck1">Panamá</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Nueva Guinea"><label class="form-check-label" for="defaultCheck1">Papua Nueva Guinea</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Paraguay"><label
                  class="form-check-label" for="defaultCheck1">Paraguay</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Perú"><label
                  class="form-check-label" for="defaultCheck1">Perú</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Pitcairn"><label
                  class="form-check-label" for="defaultCheck1">Pitcairn</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Polinesia Francesa"><label class="form-check-label" for="defaultCheck1">Polinesia
                  Francesa</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Polonia"><label
                  class="form-check-label" for="defaultCheck1">Polonia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Portugal"><label
                  class="form-check-label" for="defaultCheck1">Portugal</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Puerto Rico"><label class="form-check-label" for="defaultCheck1">Puerto Rico</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Qatar"><label
                  class="form-check-label" for="defaultCheck1">Qatar</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Republica Dominicana" selected><label class="form-check-label" for="defaultCheck1">Republica
                  Dominicana</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="RD Cong"><label
                  class="form-check-label" for="defaultCheck1">RD Congo</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Reino Unido"><label class="form-check-label" for="defaultCheck1">Reino Unido</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="República Centroafricana"><label class="form-check-label" for="defaultCheck1">República
                  Centroafricana</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="República Checa"><label class="form-check-label" for="defaultCheck1">República Checa</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="República Dominicana"><label class="form-check-label" for="defaultCheck1">República
                  Dominicana</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Reunión"><label
                  class="form-check-label" for="defaultCheck1">Reunión</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Rumania"><label
                  class="form-check-label" for="defaultCheck1">Rumania</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Rusia"><label
                  class="form-check-label" for="defaultCheck1">Rusia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Rwanda"><label
                  class="form-check-label" for="defaultCheck1">Rwanda</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Sahara Occidental"><label class="form-check-label" for="defaultCheck1">Sahara
                  Occidental</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Saint Pierre y Miquelon"><label class="form-check-label" for="defaultCheck1">Saint Pierre y
                  Miquelon</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Samoa"><label
                  class="form-check-label" for="defaultCheck1">Samoa</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Samoa Americana"><label class="form-check-label" for="defaultCheck1">Samoa Americana</label>
          </div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="San Cristóbal y Nevis"><label class="form-check-label" for="defaultCheck1">San Cristóbal y
                  Nevis</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="San Marino"><label class="form-check-label" for="defaultCheck1">San Marino</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Santa Elena"><label class="form-check-label" for="defaultCheck1">Santa Elena</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Santa Lucía"><label class="form-check-label" for="defaultCheck1">Santa Lucía</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Sao Tomé y Príncipe"><label class="form-check-label" for="defaultCheck1">Sao Tomé y
                  Príncipe</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Senegal"><label
                  class="form-check-label" for="defaultCheck1">Senegal</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Serbia y Montenegro"><label class="form-check-label" for="defaultCheck1">Serbia y
                  Montenegro</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Seychelles"><label class="form-check-label" for="defaultCheck1">Seychelles</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Sierra Leona"><label class="form-check-label" for="defaultCheck1">Sierra Leona</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Singapur"><label
                  class="form-check-label" for="defaultCheck1">Singapur</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Siria"><label
                  class="form-check-label" for="defaultCheck1">Siria</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Somalia"><label
                  class="form-check-label" for="defaultCheck1">Somalia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Sri Lanka"><label class="form-check-label" for="defaultCheck1">Sri Lanka</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Sudáfrica"><label class="form-check-label" for="defaultCheck1">Sudáfrica</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Sudán"><label
                  class="form-check-label" for="defaultCheck1">Sudán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Suecia"><label
                  class="form-check-label" for="defaultCheck1">Suecia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Suiza"><label
                  class="form-check-label" for="defaultCheck1">Suiza</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Suriname"><label
                  class="form-check-label" for="defaultCheck1">Suriname</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox"
                  value="Swazilandia"><label class="form-check-label" for="defaultCheck1">Swazilandia</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Taiwán"><label
                  class="form-check-label" for="defaultCheck1">Taiwán</label></div>
          <div class="form-check"><input class="form-check-input" id="checkpais" type="checkbox" value="Uruguay"><label
                  class="form-check-label" for="defaultCheck1">Uruguay</label></div>
      </div>
  </div>
  <div class="row mb-3">
        <div class="col-6">
                <button type="submit" form="paisesSB" class="btn btn-block btn-default">Cargar</button>
        </div>
        <div class="col-6"> 
                <button type="button" class=" btn btn-block btn-default"  data-toggle="modal" data-target="#ModalGenerarSolicitudPaisesB">Generar e imprimir</button>
        </div>
  </div>
  </div>
  </form>
  </div>
  <div class="row">
      <div class="col-12 hide" id="tablaSB">
      </div>
    </div>
</div>

<!-- Modal Generar Telefono -->
<div class="modal fade" id="ModalGenerarSolicitudTelefonosB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="solicitud_b_telefonos" target="_blank">
                <div class="modal-body">
                        <div class="row">
                           <div class="col-12">
                                <label>A quien va dirigido</label>
                                <select id="dirigidoListaSB" name="dirigidoListaSB" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Tiempo</label>
                                <select id="tiempoListaSB" name="tiempoListaSB" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-12">
                                <label>Prioridad</label>
                                <select id="prioridadSB" name="prioridadSB" class="form-control">
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Detalles específicos</label>
                                <input id="detallesListSB" name="detallesListSB" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Observaciones</label>
                                <textarea class="form-control" id="notaSB" name="notaSB"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Generar Nombres -->
<div class="modal fade" id="ModalGenerarSolicitudNombresB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="solicitud_b_nombres" target="_blank">
                <div class="modal-body">
                        <div class="row">
                           <div class="col-12">
                                <label>A quien va dirigido</label>
                                <select id="dirigidoNombreListaSB" name="dirigidoListaSB" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Tiempo</label>
                                <select id="tiempoNombreListaSB" name="tiempoNombreListaSB" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-12">
                                <label>Prioridad</label>
                                <select id="prioridadNombreSB" name="prioridadNombreSB" class="form-control">
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Detalles específicos</label>
                                <input id="detallesNombreListSB" name="detallesNombreListSB" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Observaciones</label>
                                <textarea class="form-control" id="notaNombreSB" name="notaNombreSB"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Generar Paises -->
<div class="modal fade" id="ModalGenerarSolicitudPaisesB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="solicitud_b_paises" target="_blank">
                <div class="modal-body">
                        <div class="row">
                           <div class="col-12">
                                <label>A quien va dirigido</label>
                                <select id="dirigidoPaisListaSB" name="dirigidoPaisListaSB" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-12">
                                <label>Prioridad</label>
                                <select id="prioridadPaisSB" name="prioridadPaisSB" class="form-control">
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Detalles específicos</label>
                                <input id="detallesPaisListSB" name="detallesPaisListSB" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label>Observaciones</label>
                                <textarea class="form-control" id="notaPaisSB" name="notaPaisSB"></textarea>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-12">
                                <input type="hidden" id="empresaid" class="form-control">
                                </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>