<?php
/*
Desarrollado por: Francisco Garcia - Dominican Republic
Fecha: 10-08-2020
Licencia: N/A
Descripcion: Codigo PHP logica del todo el Sistema
LEYENDA
-8  ID GENERADO REPETIDO INTENTE NUEVAMENTE
-7  NO HAY REGISTROS CARGADOS
-6  NOMRDE DE USUARIO YA EXISTE
-5  GRUPO YA EXISTE 
-4  NO HAY REGISTROS PARA ELIMINAR  
-3  GRUPO YA HA SIDO AGIGNADO AL USUARIO
-2  ERROR TABLA DE BASE DE DATOS
-1  COMPLETE LOS CAMPOS
1   INSERT EXITOSOS 
*/
include 'conexion.php';
$date = date("Y-m-d");
session_start();
date_default_timezone_set('America/Santo_Domingo');

/*___________ PANEL DE USUARIOS Y GRUPOS___________ */
//CREAR USUARIO
if(isset($_POST['btnCrearUSuario'])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $rol = $_POST["rol"];
    $passcode = md5($pass);
    $fields = strlen($user) * strlen($pass);
    if($fields == true){
        if($serachUsuario = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$user' ")){
            if(mysqli_num_rows($serachUsuario)){
                while($row = mysqli_fetch_array($serachUsuario)){
                    if($user != $row['usuario']){
                        if($result = mysqli_query($link,"INSERT INTO usuarios VALUES ('','$user','$passcode','$rol','$date')")){
                            echo "1";
                        }else{
                             echo "-2";
                        }
                        break;
                    }else{
                        echo "-6";
                        break;
                    }
                }
            }else{
                if($result = mysqli_query($link,"INSERT INTO usuarios VALUES ('','$user','$passcode','$rol','$date')")){
                    echo "1";
                }else{
                     echo "-2";
                }
            }
        }else{
            echo "-2";
        }
    }else{
    echo "-1";   
    }
}
//ELIMINAR USUARIO
if(isset($_POST['btnEliminarUsuario'])){
    $user = $_POST['user'];
    if($result = mysqli_query($link,"DELETE FROM usuarios WHERE id_usuario = '$user'")){
        echo "1";
    }else{
        echo "-2";
    }
}
//CREAR GRUPO
if(isset($_POST['btnCrearGroup'])){
    $group = $_POST["group"];
    $code = rand(0,900);
    $fields = strlen($group);
    if($fields == true){
        if($serachGrupo = mysqli_query($link, "SELECT * FROM grupos WHERE grupo = '$group' ")){
            if(mysqli_num_rows($serachGrupo)){
                while($row = mysqli_fetch_array($serachGrupo)){
                    if($group != $row['grupo']){
                        if($result = mysqli_query($link,"INSERT INTO grupos VALUES ('$code','$group')")){
                            echo "1";
                        }else{
                            echo "-2";
                        }
                        break;
                    }else{
                        echo "-5";
                        break;
                    }
                }
            }else{
                if($result = mysqli_query($link,"INSERT INTO grupos VALUES ('$code','$group')")){
                    echo "1";
                }else{
                    echo "-2";
                }
            }
        }else{
            echo "-2";
        }
    }else{
        echo "-1";
    }
}
//ELIMINAR GRUPO
if(isset($_POST['btnEliminarGrupo'])){
    $grupo = $_POST['grupo'];
    if($result = mysqli_query($link,"DELETE FROM grupos WHERE id_grupo = '$grupo'")){
        if($resultAsig = mysqli_query($link,"DELETE FROM asignacion WHERE id_grupo = '$grupo'")){
            echo "1"; 
        }
     }else{
        echo "-2";
     }
}
//ASIGNAR USUARIO
if(isset($_POST['btnAsignarUsuario'])){
    $user = $_POST['user'];
    $group = $_POST["group"];
    if($serach = mysqli_query($link, "SELECT * FROM asignacion WHERE id_usuario = '$user' AND id_grupo = '$group'")){
        if(mysqli_num_rows($serach)>0){
            echo "-3";
        }else{
            if($result = mysqli_query($link,"INSERT INTO asignacion VALUES ('','$user','$group','$date')")){
                echo "1";
            }else{
                echo "-2";
            }
        }
    }
}
//ELIMINAR ASIGNACION
if(isset($_POST['btnEliminarAsignacion'])){
    $asignacion = $_POST['asignacion'];
    if($result = mysqli_query($link,"DELETE FROM asignacion WHERE id_asignacion = '$asignacion'")){
        echo "1";
     }else{
        echo "-2";
     }
}
/*___________ PANEL DE SOLICITUD A ___________ */
//CREAR CARGAR REGISTRO SOLICITUD A
if(isset($_POST['btnCargarRegistro'])){
    $name = $_POST['nombre'];
    $phone= $_POST['telefono'];
    $business= $_POST['empresa'];
    $nationality = $_POST['nacionalidad'];
    $tiposolicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $fields = strlen($name)*strlen($phone)*strlen($business)*strlen($nationality);
    if($fields == true){
        if($serachUsuario = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$user' ")){
            while($row = mysqli_fetch_array($serachUsuario)){
                $id = $row["id_usuario"];
                if($serach = mysqli_query($link, "SELECT * FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO'")){
                    if(mysqli_num_rows($serach)>0){
                        if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','','','$name','$phone','$nationality','','$business','$id','','','NO','')")){
                            echo "1";
                        }else{
                            echo "-2";
                        }
                    }else{
                        if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','','','$name','$phone','$nationality','','$business','$id','','','NO','')")){
                            echo "1";
                        }else{
                            echo "-2";
                        }
                    }
                }
            }
        }
    }else{
        echo "-1";
    }
}
//ELIMINAR REGISTROS DE SOLICITUD A
if(isset($_POST['btnEliminarRegistro'])){
    $solicitud = 'S'.$_POST['solicitud'];
    $id = $_SESSION['id'];
    if($result = mysqli_query($link,"DELETE FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO' AND tipo_solicitud = '$solicitud'")){
       echo "1";
    }else{
        echo "-2";
    }
}
//ELMINAR FILA DE REGISTRO SOLICITUD A
if(isset($_POST['btnEliminarFila'])){
    $fila = $_POST['fila'];
    $id = $_SESSION['id'];
    if($result = mysqli_query($link,"DELETE FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO' AND id_contador = '$fila'")){
        echo "1";
     }else{
         echo "-2";
     }
}
//MODIFICAR REGISTRO SOLICITUD A
if(isset($_POST['btnModificarRegistro'])){
    $id = $_POST['iduser'];
    $nombre = $_POST['nombre'];
    $telefono= $_POST['telefono'];
    $empresa= $_POST['empresa'];
    $nacionalidad = $_POST['nacionalidad'];
    $id_usuario = $_SESSION['id'];
    if(mysqli_query($link, "UPDATE registro SET nombre = '$nombre', telefono = '$telefono',
    pais='$nacionalidad', empresa ='$empresa' WHERE id_contador = '$id' AND id_usuario = '$id_usuario'")){
        echo "1";
    }else{
        echo "-2";
    }
}
/*___________ PANEL DE SOLICITUD B ___________ */
//SOLICITUD B AGREGAR REGISTRO TELEFONO
if(isset($_POST['btnSolicitudBTelefono'])){
    $phone = $_POST['telefono'];
    $tiposolicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $op = $_POST['opcion'];
    if($serachUsuario = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$user' ")){
        while($row = mysqli_fetch_array($serachUsuario)){
            $id = $row["id_usuario"];
            if($serach = mysqli_query($link, "SELECT * FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO'")){
                if(mysqli_num_rows($serach)>0){
                    if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','$op','','','$phone','','','','$id','','','NO','')")){
                        echo "1";                                               
                    }else{
                        echo "-2";
                    }
                }else{
                    if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','$op','','','$phone','','','','$id','','','NO','')")){
                        echo "1";
                    }else{
                        echo "-2";
                    }
                }
            }
        }
    }
}
//SOLICITUD B AGREGAR REGISTRO NOMBRE
if(isset($_POST['btnSolicitudBNombre'])){
    $name = $_POST['nombre'];
    $tiposolicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $opcion = $_POST['opcion'];
    if($serachUsuario = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$user' ")){
        while($row = mysqli_fetch_array($serachUsuario)){
            $id = $row["id_usuario"];
            if($serach = mysqli_query($link, "SELECT * FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO'")){
                if(mysqli_num_rows($serach)>0){                                     
                    if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','$opcion','','$name','','','','','$id','','','NO','')")){
                        echo "1";
                    }else{
                        echo "-2";
                    }
                }else{
                    if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','$opcion','','$name','','','','','$id','','','NO','')")){
                        echo "1";
                    }else{
                        echo "-2";
                    }
                }
            }
        }
    }
}
//SOLICITUD B AGREGAR REGISTRO PAIS
if(isset($_POST['btnSolicitudBPais'])){
    $meses = $_POST['meses'];
    $empresa = $_POST['empresa'];
    $pais = $_POST['pais'];
    $tiposolicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $op = $_POST['opcion'];
    if($serachUsuario = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$user' ")){
        while($row = mysqli_fetch_array($serachUsuario)){
            $id = $row["id_usuario"];  
            if($result = mysqli_query($link,"INSERT INTO registro VALUES ('','$tiposolicitud','$op','','','',' $pais','$meses','$empresa','$id','','','NO','')")){
                    echo "1";
                }else{
                    echo "-2";
            }

        }
    }
}

/*___________ GENERAR DOCUMENTO O SOLICITUES ___________ */
//SOLICITUD A GENERAR 
if(isset($_POST['btnGenerarA'])){
    $id = $_SESSION['id'];
    $code = rand(0,99999);
    $grupo = $_POST['grupo'];
    $dirigido = $_POST['dirigido'];
    $solicitud = 'NUEVO';
    $prioridad = $_POST['prioridad'];
    $detalle = $_POST['detalle'];
    $tiempo = $_POST['tiempo'];
    $nota = $_POST['nota'];
    $hora = date("h:i:s");
    $formato =  date("A");
    $insertDirigido = '';
    $insertVigencia = '';
    $insertTiempo = '';
    if($resultID = mysqli_query($link,"SELECT id_solicitud FROM registro  WHERE id_usuario = $id AND id_solicitud = $code ")){
        if(mysqli_num_rows($resultID)){
            echo "-8";
        }else{
            if($result = mysqli_query($link,"UPDATE registro SET estatus_generado='SI', id_solicitud ='$code', prioridad = '$prioridad', estatus_solicitud = '$solicitud', estado_general = 'ACTIVO' WHERE id_usuario = $id AND estatus_generado = 'NO'")){
                if(mysqli_affected_rows($link)){
                    if($searchDirigido = mysqli_query($link,"SELECT * FROM dirigido WHERE texto_dirigido = '$dirigido'")){
                        while ($filaDirigido = mysqli_fetch_array($searchDirigido)) {
                            $insertDirigido = $filaDirigido['id_dirigido'];
                        }
                        if($searchTiempo = mysqli_query($link,"SELECT * FROM tiempo WHERE texto_tiempo = '$tiempo'")){
                            while ($filaTiempo = mysqli_fetch_array($searchTiempo)) {
                                $insertTiempo =  $filaTiempo['id_tiempo'];
                            }
                            if($resultInsert = mysqli_query($link,"INSERT INTO solicitud VALUES ('$code', '$date','$hora','$formato','$id','$grupo','','$insertDirigido','$insertTiempo','$detalle','','','','','','','','','','','','','','','','','','$nota')")){
                                echo $code;
                            }else{
                                echo "-3";
                            }
                        }else{
                            echo "-2";
                        } 
                    }else{
                        echo "-1";
                    }
                }else{
                   echo '-7';
                }   
            }else{
                echo "-2";
            }
        }
    }
}
//SOLICITUD B GENERAR TELEFONO
if(isset($_POST['btnGenerarTelefonoB'])){
    $id = $_SESSION['id'];
    $code = rand(0,99999);
    $solicitud = 'NUEVO';
    $prioridad = $_POST['prioridad'];
    $insertdetalle = $_POST['detalle'];
    $insertDirigido = $_POST['dirigido'];
    $tiempo = $_POST['tiempo'];
    $nota = $_POST['nota'];
    $hora = date("h:i:s");
    $formato =  date("A");
    $op = $_POST['opcion'];
    if($resultID = mysqli_query($link,"SELECT id_solicitud FROM registro  WHERE id_usuario = $id AND id_solicitud = $code ")){
        if(mysqli_num_rows($resultID)){
            $code = rand(0,99999);
        }else{
            if($result = mysqli_query($link,"UPDATE registro SET estatus_generado='SI', id_solicitud ='$code', prioridad = '$prioridad', estatus_solicitud = '$solicitud', estado_general = 'ACTIVO' WHERE id_usuario = $id AND estatus_generado = 'NO' AND tipo_opcion = $op")){
                if(mysqli_affected_rows($link)){
                    if($searchTiempo = mysqli_query($link,"SELECT * FROM tiempo WHERE texto_tiempo = '$tiempo'")){
                        while ($filaTiempo = mysqli_fetch_array($searchTiempo)) {
                            $insertTiempo =  $filaTiempo['id_tiempo'];
                            break;
                        }
                        if($resultInsert = mysqli_query($link,"INSERT INTO solicitud VALUES ('$code', '$date','$hora','$formato','$id','','','$insertDirigido','$insertTiempo','$insertdetalle','','','','','','','','','','','','','','','','','','$nota')")){
                            echo $code;
                        }else{
                            echo "-3";
                        }
                       
                    }else{
                        echo "-1";
                    }
                }else{
                    echo '-7';
                }   
            }else{
                echo "-2";
            }
        }
    }
}
//SOLICITUD B GENERAR NOMBRE
if(isset($_POST['btnGenerarNombresB'])){
    $id = $_SESSION['id'];
    $code = rand(0,99999);
    $dirigido = $_POST['dirigido'];
    $solicitud = 'NUEVO';
    $prioridad = $_POST['prioridad'];
    $insertdetalle = $_POST['detalle'];
    $insertDirigido = $_POST['dirigido'];
    $insertTiempo = '';
    $tiempo = $_POST['tiempo'];
    $nota = $_POST['nota'];
    $hora = date("h:i:s");
    $formato =  date("A");
    $op = $_POST['opcion'];
    if($resultID = mysqli_query($link,"SELECT id_solicitud FROM registro  WHERE id_usuario = $id AND id_solicitud = $code ")){
        if(mysqli_num_rows($resultID)){
            $code = rand(0,99999);
        }else{
            if($result = mysqli_query($link,"UPDATE registro SET estatus_generado='SI', id_solicitud ='$code', prioridad = '$prioridad', estatus_solicitud = '$solicitud', estado_general = 'ACTIVO' WHERE id_usuario = $id AND estatus_generado = 'NO' AND tipo_opcion = $op")){
                if(mysqli_affected_rows($link)){
                    if($searchTiempo = mysqli_query($link,"SELECT * FROM tiempo WHERE texto_tiempo = '$tiempo'")){
                        while ($filaTiempo = mysqli_fetch_array($searchTiempo)) {
                            $insertTiempo =  $filaTiempo['id_tiempo'];
                            break;
                        }
                        if($resultInsert = mysqli_query($link,"INSERT INTO solicitud VALUES ('$code', '$date','$hora','$formato','$id','','','$insertDirigido','$insertTiempo','$insertdetalle','','','','','','','','','','','','','','','','','','$nota')")){
                            echo $code;
                        }else{
                            echo "-3";
                        }
                       
                    }else{
                        echo "-1";
                    }
                }else{
                    echo '-7';
                }   
            }else{
                echo "-2";
            }
        }
    }
}
//SOLICITUD B GENERAR PAISES
if(isset($_POST['btnGenerarPaisesB'])){
    $id = $_SESSION['id'];
    $code = rand(0,99999);
    $dirigido = $_POST['dirigido'];
    $solicitud = 'NUEVO';
    $prioridad = $_POST['prioridad'];
    $detalle = $_POST['detalle'];
    $empresa = $_POST['empresa'];
    $nota = $_POST['nota'];
    $hora = date("h:i:s");
    $formato =  date("A");
    $insertDirigido = '';
    $insertVigencia = '';
    $insertTiempo = '';
    
    if($resultID = mysqli_query($link,"SELECT id_solicitud FROM registro  WHERE id_usuario = $id AND id_solicitud = $code ")){
        if(mysqli_num_rows($resultID)){
            $code = rand(0,99999);
        }
    }
    
    if($result = mysqli_query($link,"UPDATE registro SET estatus_generado='SI', id_solicitud ='$code', prioridad = '$prioridad', estatus_solicitud = '$solicitud', estado_general = 'ACTIVO' WHERE id_usuario = $id AND estatus_generado = 'NO' AND empresa = '$empresa'")){
         echo $code;
    }else{
        echo "-3";
    }
}
/*___________ PANEL DE USUARIOS ___________ */
//CREAR GRUPO PARA USUARIO
if(isset($_POST['btnCrearGroupUsuario'])){
    $group = $_POST["group"];
    $code = rand(0,900);
    $fields = strlen($group);
    $id_usuario = $_SESSION['id'];
    if($fields == true){
        if($searchGrupo = mysqli_query($link,"SELECT * FROM grupos WHERE grupo = '$group'")){
            if(mysqli_num_rows($searchGrupo)){
                echo "-5";
            }else{
                if($resultGrupo = mysqli_query($link,"INSERT INTO grupos VALUES ('$code','$group')")){
                    if($serachAsignacion = mysqli_query($link, "SELECT * FROM asignacion WHERE id_usuario = '$id_usuario' AND id_grupo = '$code'")){
                        if(mysqli_num_rows($serachAsignacion)){
                            echo "-3";
                        }else{
                            if($resultAsignacion = mysqli_query($link,"INSERT INTO asignacion VALUES ('','$id_usuario','$code','$date')")){
                                echo "1"; 
                            }else {
                                echo "-2";
                            }
                        }
                    }else{
                        echo "-2";
                        }
                }else{
                    echo "-2";
                }
            }
        }else{
            echo "-2";
        }
    }
}

/*___________ PANEL DE APROBACIONES ___________ */
//APROBAR SOLICITUD 1
if(isset($_POST['btnAprobarEstado1'])){
    $solicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $tipo = $_POST['tipo'];
    $code = rand(0,9999);
    if($resultID = mysqli_query($link,"SELECT num_solicitud_1 FROM solicitud WHERE num_solicitud_1 = $code AND id_solicitud = $solicitud ")){
        if(mysqli_num_rows($resultID)){
            echo "-2";
        }else{
            if(mysqli_query($link, "UPDATE solicitud SET aprobacion_1 = 'APROBADO', num_solicitud_1 = '$code', fecha_num_solicitud_1 = '$date' WHERE id_solicitud = '$solicitud'")){
                echo $code;
            }else{
                echo "-2";
            }
        }
    }
}
//APROBAR SOLICITUD 2
if(isset($_POST['btnAprobarEstado2'])){
    $solicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $fecha = $_POST['fechasolicitud'];
    $code = rand(0,9999);
    if($resultID = mysqli_query($link,"SELECT num_solicitud_2 FROM solicitud WHERE num_solicitud_2 = $code AND id_solicitud = $solicitud ")){
        if(mysqli_num_rows($resultID)){
            echo "-2";
        }else{
            if(mysqli_query($link, "UPDATE solicitud SET aprobacion_2 = 'APROBADO', num_solicitud_2 = '$code', fecha_num_solicitud_2 = '$date' WHERE id_solicitud = '$solicitud' AND aprobacion_1 = 'APROBADO' ")){
                echo $code;
            }else{
                echo "-2";
            }
        }
    }
}
//APROBAR SOLICITUD 3
if(isset($_POST['btnAprobarEstado3'])){
    $solicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $fecha = $_POST['fechasolicitud'];
    $code = rand(0,9999);
    $codigoSolicitud4 = rand(0,999);
    if($resultID = mysqli_query($link,"SELECT num_solicitud_3 FROM solicitud WHERE num_solicitud_3 = $code AND id_solicitud = $solicitud ")){
        if(mysqli_num_rows($resultID)){
            echo "-2";
        }else{
            if(mysqli_query($link, "UPDATE solicitud SET aprobacion_3 = 'APROBADO', num_solicitud_3 = '$code', codigo_num_solicitud_4 = '$codigoSolicitud4', fecha_num_solicitud_3 = '$date' WHERE id_solicitud = '$solicitud' AND aprobacion_2 = 'APROBADO' ")){
                    echo $code;
            }else{
                echo "-2";
            }
        }
    }
}
//APROBAR SOLICITUD 4
if(isset($_POST['btnAprobarEstado4'])){
    $solicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $fecha = $_POST['fechasolicitud'];
    $codigo = $_POST['codigo'];
    $vigencia = $_POST['vigencia'];
    $code = rand(0,9999);
    if($codigo == '' || $vigencia == '0000-00-00' || $vigencia == ''){
        echo "-1";
    }else{
        if($resultID = mysqli_query($link,"SELECT num_solicitud_4 FROM solicitud WHERE num_solicitud_4 = $code AND id_solicitud = $solicitud ")){
            if(mysqli_num_rows($resultID)){
                echo "-2";
            }else{
                if($resultado = mysqli_query($link, "UPDATE solicitud SET aprobacion_4 = 'APROBADO', num_solicitud_4 = '$code', fecha_num_solicitud_4 = '$date', vigencia = '$vigencia' WHERE id_solicitud = '$solicitud' AND aprobacion_3 = 'APROBADO' AND codigo_num_solicitud_4 = '$codigo' ")){
                      if(mysqli_affected_rows($link)){
                        echo $code;
                      }else{
                        echo "-2";
                      }
                }else{
                    echo "-2";
                }
            }
        }
    }
}
//APROBAR SOLICITUD 5
if(isset($_POST['btnAprobarEstado5'])){
    $solicitud = $_POST['solicitud'];
    $user = $_SESSION['User'];
    $fecha = $_POST['fechasolicitud'];
    $code = rand(0,9999);
    if($resultID = mysqli_query($link,"SELECT num_solicitud_5 FROM solicitud WHERE num_solicitud_5 = $code AND id_solicitud = $solicitud ")){
        if(mysqli_num_rows($resultID)){
            echo "-2";
        }else{
            if(mysqli_query($link, "UPDATE solicitud SET aprobacion_5 = 'APROBADO', num_solicitud_5 = '$code', fecha_num_solicitud_5 = '$date' WHERE id_solicitud = '$solicitud' AND aprobacion_4 = 'APROBADO' ")){
                    echo $code;
            }else{
                echo "-2";
            }
        }
    }
}
/*___________ PANEL DIRIGIDO - TIEMPO - VIGENCIA ___________ */
//CREAR TIEMPO
if(isset($_POST['btnTiempo'])){
    $tiempo = $_POST['tiempo'];
    $id = $_SESSION['id'];
    $campos = strlen($tiempo);
    if($campos == true){
        if($resultInsert = mysqli_query($link,"INSERT INTO tiempo VALUES ('', '$tiempo','$id')")){
            echo "1"; 
        }else{
            echo "-2";
        }
    }else{
        echo "-1"; 
    }
}
//CREAR DIRIGIDO
if(isset($_POST['btnDirigido'])){
    $dirigido = $_POST['dirigido'];
    $id = $_SESSION['id'];
    $campos = strlen($dirigido);
    if($campos == true){
        if($resultInsert = mysqli_query($link,"INSERT INTO dirigido VALUES ('', '$dirigido','$id')")){
            echo "1"; 
        }else{
            echo "-2";
        }
    }else{
        echo "-1"; 
    }
}
//CREAR VIGENCIA
if(isset($_POST['btnVigencia'])){
    $vigencia = $_POST['vigencia'];
    $id = $_SESSION['id'];
    $campos = strlen($vigencia);
    if($campos == true){
        if($resultInsert = mysqli_query($link,"INSERT INTO vigencia VALUES ('', '$vigencia','$id')")){
            echo "1"; 
        }else{
            echo "-2";
        }
    }else{
        echo "-1"; 
    }
}
//ELIMINAR VIGENCIA
if(isset($_POST['btnEliminarVigencia'])){
     $fila = $_POST['vigencia'];
    if($result = mysqli_query($link,"DELETE FROM vigencia WHERE texto_vigencia = '$fila'")){
        echo "1";
     }else{
         echo "-2";
     }
}
//ELIMINAR TIEMPO
if(isset($_POST['btnEliminarTiempo'])){
     $fila = $_POST['tiempo'];
    if($result = mysqli_query($link,"DELETE FROM tiempo WHERE texto_tiempo = '$fila'")){
        echo "1";
     }else{
         echo "-2";
     }
}
/*___________ PANEL BUSCADOR DE REGISTROS ___________ */
//BUSCADOR COMPLETO ADMIN
if(isset($_POST['btnBuscarTodo'])){
    $consulta = $_POST['consulta'];
    $id = $_SESSION['id'];
    $salida = ''; $vali = ''; $valigrupo = '';
    if(isset($consulta) || $consulta != ''){
        $query = "SELECT *
        FROM registro
        INNER JOIN solicitud
        ON registro.id_solicitud = solicitud.id_solicitud
        LEFT JOIN grupos
        ON solicitud.id_grupo = grupos.id_grupo
        LEFT JOIN usuarios
        ON solicitud.id_usuario = usuarios.id_usuario WHERE 
        solicitud.aprobacion_5 = 'APROBADO' AND registro.empresa LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND registro.estado_general = 'ACTIVO' AND usuarios.usuario LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO'  AND registro.estado_general = 'ACTIVO' AND solicitud.id_solicitud LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND registro.estado_general = 'ACTIVO' AND grupos.id_grupo LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND registro.estado_general = 'ACTIVO' AND DATE_FORMAT(solicitud.fecha, '%d-%m-%Y') LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND registro.estado_general LIKE '%".$consulta."%'
        ";
    }else{
        $query = "SELECT *
        FROM registro
        INNER JOIN solicitud
        ON registro.id_solicitud = solicitud.id_solicitud
        LEFT JOIN grupos
        ON solicitud.id_grupo = grupos.id_grupo
        LEFT JOIN usuarios
        ON solicitud.id_usuario = usuarios.id_usuario WHERE solicitud.aprobacion_5 = 'APROBADO' AND registro.estado_general = 'ACTIVO'";
    }
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
            $salida .='
                    <table class="table text-center">
                            <thead>
                                <tr>
                                <th>Solicitud</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Compañia</th>
                                <th>Nacionalidad</th>
                                <th>Grupo</th>
                                <th>Fecha</th> 
                                <th>Estatus Solicitud</th>
                                <th>Modificar</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                    ';
            while ($fila = mysqli_fetch_array($result)) {
                $idgrupo = $fila['id_grupo'];
                $salida .='
                    <tr id="'.$fila["id_contador"].'">
                        <td>'. $fila['id_solicitud'].'</td>
                        <td>'.$fila["usuario"].'</td>
                        <td data-target="nombreRegistro">'.$fila["nombre"].'</td>
                        <td>'.$fila["telefono"].'</td>
                        <td data-target="empresaRegistro">'.$fila["empresa"].'</td>
                        <td data-target="nacionalidadRegistro">'.$fila["pais"].'</td>';
                        if($resultgrupo =  mysqli_query($link,"SELECT * FROM grupos WHERE id_grupo = '$idgrupo'")){
                            while($rowGrupo = mysqli_fetch_array($resultgrupo)){
                            $salida .= '<td>'.$rowGrupo["grupo"].'</td>';
                            }
                        }
                       $salida .='
                        <td>'.$fila["fecha"].'</td>
                        <td data-target="estatusRegistro">'.$fila["estado_general"].'</td>
                        <td><a href="#" data-role="updateRegistros" data-id="'.$fila["id_contador"].'" class="btn btn-secondary btn-sm rounded-circle">M</button></td>
                    </tr>
                    ';
            }
            $salida .='
            </tbody>
            </table>
            ';  
    }else{
        $salida.= ' <h3 class="text-center mt-2">NO HAY DATOS</h3>';
        }
    echo $salida;
}
//BUSCADOR COMPLETO USUARIO
if(isset($_POST['btnBuscarTodoUsuario'])){
    $consulta = $_POST['consulta'];
     $id = $_SESSION['id'];
     //echo $id;
     $salida = ''; $vali = ''; $valigrupo = '';
    if(isset($consulta) || $consulta != ''){
        $query = "SELECT *
        FROM registro
        INNER JOIN solicitud
        ON registro.id_solicitud = solicitud.id_solicitud
        LEFT JOIN grupos
        ON solicitud.id_grupo = grupos.id_grupo
        LEFT JOIN usuarios
        ON solicitud.id_usuario = usuarios.id_usuario WHERE 
        solicitud.aprobacion_5 = 'APROBADO' AND usuarios.id_usuario = $id AND registro.empresa LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND usuarios.id_usuario = $id  AND registro.estado_general = 'ACTIVO' AND solicitud.id_solicitud LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND usuarios.id_usuario = $id AND registro.estado_general = 'ACTIVO' AND grupos.id_grupo LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND usuarios.id_usuario = $id AND registro.estado_general = 'ACTIVO' AND DATE_FORMAT(solicitud.fecha, '%d-%m-%Y') LIKE '%".$consulta."%'
        OR solicitud.aprobacion_5 = 'APROBADO' AND usuarios.id_usuario = $id AND registro.estado_general LIKE '%".$consulta."%'
        ";
    }else{
        $query = "SELECT *
        FROM registro
        INNER JOIN solicitud
        ON registro.id_solicitud = solicitud.id_solicitud
        LEFT JOIN grupos
        ON solicitud.id_grupo = grupos.id_grupo
        LEFT JOIN usuarios
        ON solicitud.id_usuario = usuarios.id_usuario WHERE solicitud.aprobacion_5 = 'APROBADO' AND usuarios.id_usuario = $id AND registro.estado_general = 'ACTIVO' ";
    }
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
            $salida .='
                    <table class="table text-center">
                            <thead>
                                <tr>
                                <th>Solicitud</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Compañia</th>
                                <th>Nacionalidad</th>
                                <th>Grupo</th>
                                <th>Fecha</th> 
                                <th>Estatus Solicitud</th>
                                <th>Modificar</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                    ';
            while ($fila = mysqli_fetch_array($result)) {
                $idgrupo = $fila['id_grupo'];
                $salida .='
                    <tr id="'.$fila["id_contador"].'">
                        <td>'. $fila['id_solicitud'].'</td>
                        <td>'.$fila["usuario"].'</td>
                        <td data-target="nombreRegistro">'.$fila["nombre"].'</td>
                        <td>'.$fila["telefono"].'</td>
                        <td data-target="empresaRegistro">'.$fila["empresa"].'</td>
                        <td data-target="nacionalidadRegistro">'.$fila["pais"].'</td>';
                        if($resultgrupo =  mysqli_query($link,"SELECT * FROM grupos WHERE id_grupo = '$idgrupo'")){
                            while($rowGrupo = mysqli_fetch_array($resultgrupo)){
                            $salida .= '<td>'.$rowGrupo["grupo"].'</td>';
                            }
                        }
                       $salida .='
                        <td>'.$fila["fecha"].'</td>
                        <td data-target="estatusRegistro">'.$fila["estado_general"].'</td>
                        <td><a href="#" data-role="updateRegistros" data-id="'.$fila["id_contador"].'" class="btn btn-secondary btn-sm rounded-circle">M</button></td>
                    </tr>
                    ';
            }
            $salida .='
            </tbody>
            </table>
            ';  
    }else{
        $salida.= ' <h3 class="text-center mt-2">NO HAY DATOS</h3>';
        }
    echo $salida;
}
//MODIFICAR REGISTRO DE BUSCADOR
if(isset($_POST['btnModificarRegistroBuscador'])){
    $id = $_POST['iduser'];
    $nombre = $_POST['nombre'];
    $estatus= $_POST['estatus'];
    $empresa = $_POST['empresa'];
    $nacionalidad = $_POST['nacionalidad'];
    $id_usuario = $_SESSION['id'];
    $code = rand(0,9999);
    $hora = date("h:i:s");
    $formato =  date("A");
    //estatus_generado = 'NO', id_solicitud = $code estado_general = '$estatus'
    if(mysqli_query($link, "UPDATE registro SET nombre = '$nombre', estado_general = '$estatus',
    pais='$nacionalidad', empresa ='$empresa' WHERE id_contador = '$id' AND id_usuario = '$id_usuario'")){
        $query = mysqli_query($link,"SELECT id_solicitud FROM registro WHERE id_contador = $id");
        $row = mysqli_fetch_array($query);
        $solicitud = $row['id_solicitud'];
        if(mysqli_query($link, "UPDATE registro SET estatus_generado = 'SI', id_solicitud = $code WHERE id_solicitud = $solicitud AND id_usuario = '$id_usuario'")){
            if(mysqli_query($link, "UPDATE solicitud SET id_solicitud = $code, fecha = '$date', hora_creacion = '$hora', formato_tiempo = '$formato',
                aprobacion_1 = '', num_solicitud_1 = '', fecha_num_solicitud_1 = '',
                aprobacion_2 = '', num_solicitud_2 = '', fecha_num_solicitud_2 = '',
                aprobacion_3 = '', num_solicitud_3 = '', fecha_num_solicitud_3 = '',
                aprobacion_4 = '', num_solicitud_4 = '', fecha_num_solicitud_4 = '', codigo_num_solicitud_4 = '',
                aprobacion_5 = '', num_solicitud_5 = '', fecha_num_solicitud_5 = ''
                WHERE id_solicitud = $solicitud AND id_usuario = '$id_usuario'")){
                    echo $code;
            }
        }
    }else{
        echo "-2";
    }
}
if(isset($_FILES['file'])){
    $archivo = $_FILES['file'];
    $archivo_nombre = $archivo['name'];
    $ruta_destino_archivo = "plantillas/{$archivo["name"]}";
    if($result = mysqli_query($link,"INSERT INTO plantilla VALUES ('','$archivo_nombre','$ruta_destino_archivo')")){
        $archivo_ok = move_uploaded_file($archivo["tmp_name"], $ruta_destino_archivo);
            if($archivo_ok == 1){
                echo  '1';
            }else{
                echo '-2';
            }
    }else{
         echo "-2";
    }
}
if(!empty($_GET['descarga'])){
    header('Content-Disposition: attachment; filename=plantilla.docx; charset=iso-8859-1');
    echo file_get_contents('word/plantilla.docx');
}
if(isset($_POST['btnConfiguracion'])){
    $plantillaS1 = $_POST['s1'];
    $plantillaS2 = $_POST['s2'];
    $plantillaS3 = $_POST['s3'];
    $plantillaS4 = $_POST['s4'];
    $plantillaS5 = $_POST['s5'];
    $buscar = mysqli_query($link,"SELECT * FROM configuracion");
    if(mysqli_num_rows($buscar) < 1){
        if($result = mysqli_query($link,"INSERT INTO configuracion VALUES ('','$plantillaS1','$plantillaS2','$plantillaS3','$plantillaS4','$plantillaS5')")){
            echo  '1';
        }else{
             echo "-2";
        }
    }else{
        $row = mysqli_fetch_array($buscar);
        $id = $row['id_configuracion'];
        if($result = mysqli_query($link,"UPDATE configuracion SET plantilla_solicitud1 = $plantillaS1, plantilla_solicitud2 = $plantillaS2, plantilla_solicitud3 = $plantillaS3, plantilla_solicitud4 = $plantillaS4, plantilla_solicitud5 = $plantillaS5 WHERE id_configuracion = $id ")){
            echo  '1';
        }else{
             echo "-2";
        }
    }
}
?>