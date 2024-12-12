<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

$objPersona = new PersonaModel();

if ($tipo == "listar_p") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrPersona = $objPersona->obtenerPersona();

    if (!empty($arrPersona)) {
        for ($i = 0; $i < count($arrPersona); $i++) {

            $id_persona =  $arrPersona[$i]->id;
            $nro_identidad =  $arrPersona[$i]->nro_identidad;
            $razon_social =  $arrPersona[$i]->razon_social;
            $telefono =  $arrPersona[$i]->telefono;
            $correo =  $arrPersona[$i]->correo;
            $departamento =  $arrPersona[$i]->departamento;
            $cod_postal =  $arrPersona[$i]->cod_postal;
            $direccion =  $arrPersona[$i]->direccion;
            $rol =  $arrPersona[$i]->rol;

            $opciones = '
            <a href="' . BASE_URL . 'editar-persona/' . $id_persona . '"><i class="fas fa-edit btn btn-dark btn-sm">EDITAR</i></a>
            <button onclick="eliminar_persona(' . $id_persona . ');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt">ELIMINAR</i></button>
        ';
            $arrPersona[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arrPersona;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}

if ($tipo == "registrar") {
    //print_r($_POST);
    if ($_POST) {
        $nro_identidad = $_POST['nroIdentidad'];
        $razon_social = $_POST['razonSocial'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];

        $secure_password = password_hash($nro_identidad, PASSWORD_DEFAULT);

        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" ||  $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta
        } else {
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
if ($tipo == "listar_proveedores") {
    $arr_respuesta = array('status' => false, 'contenido' => '');
    $arr_proveedor =  $objPersona->obtenerProveedor();

    if (!empty($arr_proveedor)) {

        for ($i = 0; $i < count($arr_proveedor); $i++) {
            $opciones = '';
            $arr_proveedor[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_proveedor;
    }
    //$arr_respuesta['contenido']=$arr_proveedor;
    echo json_encode($arr_respuesta);
}
if ($tipo == "listar_trabajador") {
    $arr_respuesta = array('status' => false, 'contenido' => '');
    $arr_Trabajador =  $objPersona->obtener_trabajador();

    if (!empty($arr_Trabajador)) {

        for ($i = 0; $i < count($arr_Trabajador); $i++) {
            $rol_persona = $arr_Trabajador[$i]->rol;
            $persona = $arr_Trabajador[$i]->razon_social;
            $opciones = '';
            $arr_Trabajador[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_Trabajador;
    }
    //$arr_respuesta['contenido']=$arr_proveedor;
    echo json_encode($arr_respuesta);
}
if ($tipo == "ver") {
    //print_r($_POST);
    $id_persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->verPersona($id_persona);
    // print_r($arr_Respuesta);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => "ErroR¡¡ no hay informacion");
    } else {
        $response = array('status' => true, 'mensaje' => "datos encontrados", 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
}

if ($tipo == "actualizar") {
    // Obtener los datos del formulario
    $id_persona = $_POST['id_persona'];
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];

    if (
        $id_persona == "" || $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == ""
        || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == ""
    ) {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

    } else {
        $arrPersona = $objPersona->actualizarPersona(
            $id_persona,
            $nro_identidad,
            $razon_social,
            $telefono,
            $correo,
            $departamento,
            $provincia,
            $distrito,
            $cod_postal,
            $direccion,
            $rol
        );
        if ($arrPersona->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar PERSONA');
        }
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "eliminar") {

    if ($_POST) {
        $id_persona = $_POST['id_persona'];

        if ($objPersona->personasAsociados($id_persona)) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'No se puede eliminar al usuario, por que
         tiene compras o productos asociados');
        } else {
            $arrPersona = $objPersona->eliminar_persona($id_persona);
            //print_r($arr_Respuesta);
            if ($arrPersona) {

                $arr_Respuesta = array('status' => true, 'mensaje' => '');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'No se puede eliminar la categoria');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
