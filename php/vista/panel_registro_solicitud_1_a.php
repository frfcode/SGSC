  <div class="target-admin-margin hide" id="solicitud-a-generar">
    <div class="row mb-1">
      <div class="col-12">
        <h3>SOLICITUD 1-A - Cargar Registros</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="resultadoCargarRegistroA"></div>
    </div>
    <!-- Agregar Registro -->
    <form id="cargarRegistro-solicitud-a" class="form-registro">
      <div class="row">
        <div class="col-12">
          <label class="sr-only" for="nombreSA">Nombre</label>
          <div class="input-group mb-2 mt-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16"
                  class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                </svg></div>
            </div>
            <input type="text" class="form-control" id="nombreSA" name="nombre" placeholder="Nombre"
              pattern="[A-Za-z ]{1,40}" title="Ingrese solo Letras">
          </div>
          <label class="sr-only" for="telefonoSA">Telefono</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16"
                  class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                </svg></div>
            </div>
            <input type="tel" class="form-control" id="telefonoSA" placeholder="Telefono" name="telefono">
          </div>
          <label class="sr-only" for="empresaSA">Compañia</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                  <path
                    d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                </svg></div>
            </div>
            <select name="empresa" id="empresaSA" class="form-control">
              <option value="Claro" selected>Claro Codetel</option>
              <option value="Altice">Altice Dominicana</option>
              <option value="Viva">Viva (Trilogy Dominicana)</option>
            </select>
          </div>
          <label class="sr-only" for="nacionalidadSA">Nacionalidad</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4H2.255a7.025 7.025 0 0 1 3.072-2.472 6.7 6.7 0 0 0-.597.933c-.247.464-.462.98-.64 1.539zm-.582 3.5h-2.49c.062-.89.291-1.733.656-2.5H3.82a13.652 13.652 0 0 0-.312 2.5zM4.847 5H7.5v2.5H4.51A12.5 12.5 0 0 1 4.846 5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5H7.5V11H4.847a12.5 12.5 0 0 1-.338-2.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12H7.5v2.923c-.67-.204-1.335-.82-1.887-1.855A7.97 7.97 0 0 1 5.145 12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11H1.674a6.958 6.958 0 0 1-.656-2.5h2.49c.03.877.138 1.718.312 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12h2.355a7.967 7.967 0 0 1-.468 1.068c-.552 1.035-1.218 1.65-1.887 1.855V12zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5h-2.49A13.65 13.65 0 0 0 12.18 5h2.146c.365.767.594 1.61.656 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z" />
                </svg></div>
            </div>
            <select name="nacionalidad" id="nacionalidadSA" class="form-control">
              <option value="Argentina">Argentina</option>
              <option value="Afganistán">Afganistán</option>
              <option value="Albania">Albania</option>
              <option value="Alemania">Alemania</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option value=">Antillas Holandesas">Antillas Holandesas</option>
              <option value="Arabia Saudita">Arabia Saudita</option>
              <option value="Argelia">Argelia</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaiján">Azerbaiján</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Bélgica">Bélgica</option>
              <option value="Belice">Belice</option>
              <option value="Benin">Benin</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Bielorusia">Bielorusia</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
              <option value="Botswana">Botswana</option>
              <option value="Brasil">Brasil</option>
              <option value="Brunei">Brunei</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cabo Verde">Cabo Verde</option>
              <option value="Camboya">Camboya</option>
              <option value="Camerún">Camerún</option>
              <option value="Canadá">Canadá</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Chipre">Chipre</option>
              <option value="Colombia">Colombia</option>
              <option value="Comoros">Comoros</option>
              <option value="Congo">Congo</option>
              <option value="Corea del Norte">Corea del Norte</option>
              <option value="Corea del Sur">Corea del Sur</option>
              <option value="Costa de Marfil">Costa de Marfil</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Croacia">Croacia</option>
              <option value="Cuba">Cuba</option>
              <option value="Darussalam">Darussalam</option>
              <option value="Dinamarca">Dinamarca</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egipto">Egipto</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Eslovaquia">Eslovaquia</option>
              <option value="Eslovenia">Eslovenia</option>
              <option value="Espana">España</option>
              <option value="Estados Unidos">Estados Unidos</option>
              <option value="Estonia">Estonia</option>
              <option value="Etiopía">Etiopía</option>
              <option value="Fiji">Fiji</option>
              <option value="Filipinas">Filipinas</option>
              <option value="Finlandia">Finlandia</option>
              <option value="Francia">Francia</option>
              <option value="Gabón">Gabón</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Grecia">Grecia</option>
              <option value="Grenada">Grenada</option>
              <option value="Groenlandia">Groenlandia</option>
              <option value="Guadalupe">Guadalupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guayana Francesa">Guayana Francesa</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
              <option value="Guinea-Bissau">Guinea-Bissau</option>
              <option value="Guyana">Guyana</option>
              <option value="Haití">Haití</option>
              <option value="Holanda">Holanda</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungría">Hungría</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Irak">Irak</option>
              <option value="Irán">Irán</option>
              <option value="Irlanda">Irlanda</option>
              <option value="Islandia">Islandia</option>
              <option value="Islas Cayman">Islas Cayman</option>
              <option value="Islas Cook">Islas Cook</option>
              <option value="Islas Faroe">Islas Faroe</option>
              <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
              <option value="Islas Marshall">Islas Marshall</option>
              <option value="Islas Solomon">Islas Solomon</option>
              <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
              <option value="Islas Vírgenes">Islas Vírgenes</option>
              <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
              <option value="Israel">Israel</option>
              <option value="Italia">Italia</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japón">Japón</option>
              <option value="Jordania">Jordania</option>
              <option value="Kazajstán">Kazajstán</option>
              <option value="Kenya">Kenya</option>
              <option value="Kirguistán">Kirguistán</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Laos">Laos</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Letonia">Letonia</option>
              <option value="Líbano">Líbano</option>
              <option value="Liberia">Liberia</option>
              <option value="Libia">Libia</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lituania">Lituania</option>
              <option value="Luxemburgo">Luxemburgo</option>
              <option value="Macao">Macao</option>
              <option value="Macedonia">Macedonia</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malasia">Malasia</option>
              <option value="Malawi">Malawi</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marruecos">Marruecos</option>
              <option value="Martinica">Martinica</option>
              <option value="Mauricio">Mauricio</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mayotte">Mayotte</option>
              <option value="México">México</option>
              <option value="Micronesia">Micronesia</option>
              <option value="Moldova">Moldova</option>
              <option value="Mónaco">Mónaco</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Myanmar">Myanmar</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Níger">Níger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Noruega">Noruega</option>
              <option value="Nueva Caledonia">Nueva Caledonia</option>
              <option value="Nueva Zelandia">Nueva Zelandia</option>
              <option value="Omán">Omán</option>
              <option value="Pakistán">Pakistán</option>
              <option value="Panamá">Panamá</option>
              <option value="Nueva Guinea">Papua Nueva Guinea</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Perú">Perú</option>
              <option value="Pitcairn">Pitcairn</option>
              <option value="Polinesia Francesa">Polinesia Francesa</option>
              <option value="Polonia">Polonia</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Republica Dominicana" selected>Republica Dominicana</option>
              <option value="RD Cong">RD Congo</option>
              <option value="Reino Unido">Reino Unido</option>
              <option value="República Centroafricana">República Centroafricana</option>
              <option value="República Checa">República Checa</option>
              <option value="República Dominicana">República Dominicana</option>
              <option value="Reunión">Reunión</option>
              <option value="Rumania">Rumania</option>
              <option value="Rusia">Rusia</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Sahara Occidental">Sahara Occidental</option>
              <option value="Saint Pierre y Miquelon">Saint Pierre y Miquelon</option>
              <option value="Samoa">Samoa</option>
              <option value="Samoa Americana">Samoa Americana</option>
              <option value="San Cristóbal y Nevis">San Cristóbal y Nevis</option>
              <option value="San Marino">San Marino</option>
              <option value="Santa Elena">Santa Elena</option>
              <option value="Santa Lucía">Santa Lucía</option>
              <option value="Sao Tomé y Príncipe">Sao Tomé y Príncipe</option>
              <option value="Senegal">Senegal</option>
              <option value="Serbia y Montenegro">Serbia y Montenegro</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leona">Sierra Leona</option>
              <option value="Singapur">Singapur</option>
              <option value="Siria">Siria</option>
              <option value="Somalia">Somalia</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Sudáfrica">Sudáfrica</option>
              <option value="Sudán">Sudán</option>
              <option value="Suecia">Suecia</option>
              <option value="Suiza">Suiza</option>
              <option value="Suriname">Suriname</option>
              <option value="Swazilandia">Swazilandia</option>
              <option value="Taiwán">Taiwán</option>
              <option value="Uruguay">Uruguay</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <button type="submit" class="btn btn-block btn-default">+</button>
        </div>
        <div class="col-4">
          <button type="button" data-toggle="modal" data-target="#ModalEliminarRegistrosSolicitudA"
            class=" btn btn-block btn-default">Borrar Registros</button>
        </div>
        <div class="col-4">
          <button type="button" class=" btn btn-block btn-default"  data-toggle="modal" data-target="#ModalGenerarSolicitudA">Generar e imprimir</button>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-12 mt-2 hide" id="tablaSA">
      </div>
    </div>
    <!-- CARGAR TIEMPO Y DETALLES-->
      <!-- <div class="col-6">
        <form id="detalleformSA">
          <label>Detalles</label>
          <input class="form-control" id="detalleSA" name="detalleSA" />
          <button type="submit" form="detalleformSA" class="btn btn-default btn-block">Cargar</button>
        </form>
      </div>-->
    <!--GENERAR REPORTE
    <form method="post" action="../php/modulos/exportSA.php" target="_blank">
      <div class="row">
        <div class="col-4">
          <label>Vigencia</label>
          <select id="solicitudSA" name="solicitudSA" class="form-control">
            <option value="NUEVO">-----</option>
          </select>
          </select>
        </div>
       CARGAR AL MENU IGUAL QUE TIEMPO POR SELECCION 
        <div class="col-4">
          <label>A quien va dirigido</label>
          <select id="dirigidoSA" name="dirigidoSA" class="form-control">
            <option value="x">X</option>
            <option value="y">Y</option>
          </select>
        </div>
        <div class="col-4">
          <label>Prioridad</label>
          <select id="prioridadSA" name="prioridadSA" class="form-control">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
          </select>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-4">
          <label>Grupo</label>
          <select id="groupUsuarioSA" name="groupUsuarioSA" class="form-control">
          </select>
        </div>
        <div class="col-4">
          <label>Tiempo</label>
          <select id="tiempoListSA" name="tiempoListSA" class="form-control">
          </select>
        </div>
        <div class="col-4">
          <label>Detalles específicos</label>
          <input class="form-control" id="detallesListSA" name="detallesListSA" />
           <select id="detallesListSA" name="detallesListSA" class="form-control">
          </select>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <label>Observaciones</label>
          <textarea class="form-control" id="notaSA" name="notaSA"></textarea>
        </div>
      </div>
    </form>-->
  </div>

  <!-- Modal Generar Registro -->
  <div class="modal fade" id="ModalGenerarSolicitudA" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generar Solicitud</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--<form id="registrosEliminar-solicitud-a">-->
                      <!--GENERAR REPORTE-->
        <form id="generar-solicitud-a">
       <!--<form method="post" action="../php/modulos/exportSA.php" target="_blank">-->
        <div class="modal-body">
          <div class="row">
          <div class="col-12">
              <label>A quien va dirigido</label>
              <select id="dirigidoListaSA" name="dirigidoListaSA" class="form-control">
              </select>
            </div>
            </div>
          <div class="row mt-2">
            <div class="col-6">
              <label>Grupo</label>
              <select id="groupUsuarioSA" name="groupUsuarioSA" class="form-control">
              </select>
            </div>
            <div class="col-6">
              <label>Prioridad</label>
              <select id="prioridadSA" name="prioridadSA" class="form-control">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
              </select>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <label>Tiempo</label>
              <select id="tiempoListaSA" name="tiempoListaSA" class="form-control">
              </select>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <label>Detalles específicos</label>
              <input class="form-control" id="detallesSA" name="detallesSA" />
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <label>Observaciones</label>
              <textarea class="form-control" id="notaSA" name="notaSA"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-login">Confirmar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Modal Confirmar Borrar Registro -->
  <div class="modal fade" id="ModalEliminarRegistrosSolicitudA" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="registrosEliminar-solicitud-a">
          <div class="modal-body">
            <p>Dseaa borrar los registros existentes</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-login">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Modificar -->
  <div class="modal fade" id="ModalModificarSA" tabindex="-1" role="dialog" aria-labelledby="ModalModificar"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalModificarSA">Modificar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="modificar-registro-solicitud-a">
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <label>Telefono</label>
                <input type="tel" id="telefonomodificarSA" class="form-control">
              </div>
              <div class="col-6">
                <label>Nombre</label>
                <input type="text" id="nombremodificarSA" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label>Compañia</label>
                <select name="empresa" id="empresamodificarSA" class="form-control">
                  <option value="Claro" selected>Claro Codetel</option>
                  <option value="Altice">Altice Dominicana</option>
                  <option value="Viva">Viva (Trilogy Dominicana)</option>
                </select>
              </div>
              <div class="col-6">
                <label>Nacionalidad</label>
                <select name="nacionalidad" id="nacionalidadmodificarSA" class="form-control">
                  <option value="Argentina">Argentina</option>
                  <option value="Afganistán">Afganistán</option>
                  <option value="Albania">Albania</option>
                  <option value="Alemania">Alemania</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                  <option value=">Antillas Holandesas">Antillas Holandesas</option>
                  <option value="Arabia Saudita">Arabia Saudita</option>
                  <option value="Argelia">Argelia</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaiján">Azerbaiján</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Bélgica">Bélgica</option>
                  <option value="Belice">Belice</option>
                  <option value="Benin">Benin</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bielorusia">Bielorusia</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brasil">Brasil</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cabo Verde">Cabo Verde</option>
                  <option value="Camboya">Camboya</option>
                  <option value="Camerún">Camerún</option>
                  <option value="Canadá">Canadá</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Chipre">Chipre</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Corea del Norte">Corea del Norte</option>
                  <option value="Corea del Sur">Corea del Sur</option>
                  <option value="Costa de Marfil">Costa de Marfil</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Croacia">Croacia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Darussalam">Darussalam</option>
                  <option value="Dinamarca">Dinamarca</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egipto">Egipto</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Eslovaquia">Eslovaquia</option>
                  <option value="Eslovenia">Eslovenia</option>
                  <option value="Espana">España</option>
                  <option value="Estados Unidos">Estados Unidos</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Etiopía">Etiopía</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Filipinas">Filipinas</option>
                  <option value="Finlandia">Finlandia</option>
                  <option value="Francia">Francia</option>
                  <option value="Gabón">Gabón</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Grecia">Grecia</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Groenlandia">Groenlandia</option>
                  <option value="Guadalupe">Guadalupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guayana Francesa">Guayana Francesa</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haití">Haití</option>
                  <option value="Holanda">Holanda</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungría">Hungría</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Irak">Irak</option>
                  <option value="Irán">Irán</option>
                  <option value="Irlanda">Irlanda</option>
                  <option value="Islandia">Islandia</option>
                  <option value="Islas Cayman">Islas Cayman</option>
                  <option value="Islas Cook">Islas Cook</option>
                  <option value="Islas Faroe">Islas Faroe</option>
                  <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                  <option value="Islas Marshall">Islas Marshall</option>
                  <option value="Islas Solomon">Islas Solomon</option>
                  <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                  <option value="Islas Vírgenes">Islas Vírgenes</option>
                  <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                  <option value="Israel">Israel</option>
                  <option value="Italia">Italia</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japón">Japón</option>
                  <option value="Jordania">Jordania</option>
                  <option value="Kazajstán">Kazajstán</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kirguistán">Kirguistán</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Laos">Laos</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Letonia">Letonia</option>
                  <option value="Líbano">Líbano</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libia">Libia</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lituania">Lituania</option>
                  <option value="Luxemburgo">Luxemburgo</option>
                  <option value="Macao">Macao</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malasia">Malasia</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marruecos">Marruecos</option>
                  <option value="Martinica">Martinica</option>
                  <option value="Mauricio">Mauricio</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="México">México</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Mónaco">Mónaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Níger">Níger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Noruega">Noruega</option>
                  <option value="Nueva Caledonia">Nueva Caledonia</option>
                  <option value="Nueva Zelandia">Nueva Zelandia</option>
                  <option value="Omán">Omán</option>
                  <option value="Pakistán">Pakistán</option>
                  <option value="Panamá">Panamá</option>
                  <option value="Nueva Guinea">Papua Nueva Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Perú">Perú</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Polinesia Francesa">Polinesia Francesa</option>
                  <option value="Polonia">Polonia</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republica Dominicana" selected>Republica Dominicana</option>
                  <option value="RD Cong">RD Congo</option>
                  <option value="Reino Unido">Reino Unido</option>
                  <option value="República Centroafricana">República Centroafricana</option>
                  <option value="República Checa">República Checa</option>
                  <option value="República Dominicana">República Dominicana</option>
                  <option value="Reunión">Reunión</option>
                  <option value="Rumania">Rumania</option>
                  <option value="Rusia">Rusia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Sahara Occidental">Sahara Occidental</option>
                  <option value="Saint Pierre y Miquelon">Saint Pierre y Miquelon</option>
                  <option value="Samoa">Samoa</option>
                  <option value="Samoa Americana">Samoa Americana</option>
                  <option value="San Cristóbal y Nevis">San Cristóbal y Nevis</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Santa Elena">Santa Elena</option>
                  <option value="Santa Lucía">Santa Lucía</option>
                  <option value="Sao Tomé y Príncipe">Sao Tomé y Príncipe</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia y Montenegro">Serbia y Montenegro</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leona">Sierra Leona</option>
                  <option value="Singapur">Singapur</option>
                  <option value="Siria">Siria</option>
                  <option value="Somalia">Somalia</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudáfrica">Sudáfrica</option>
                  <option value="Sudán">Sudán</option>
                  <option value="Suecia">Suecia</option>
                  <option value="Suiza">Suiza</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Swazilandia">Swazilandia</option>
                  <option value="Taiwán">Taiwán</option>
                  <option value="Uruguay">Uruguay</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <input type="hidden" id="useridSA" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-login">Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>