<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

$objCategoria = new categoriaModel();

if ($tipo == "listar") {
    //respuesta

    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        //recorremos el array para agregar las opciones de las categorias
        for ($i = 0; $i < count($arr_Categorias); $i++) { //declara una variable siendo 0 el valor inicial -- define hasta donde sera el bucle -- aumenta +1
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria =  $arr_Categorias[$i]->nombre;
            $opciones = '
            <a href="' . BASE_URL . 'editar-categoria/' . $id_categoria . '"><i class="fas fa-edit btn btn-dark btn-sm">EDITAR</i></a>
            <button onclick="eliminar_categoria(' . $id_categoria . ');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt">ELIMINAR</i></button>
        ';
            $arr_Categorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arr_Categorias;
    }
    echo json_encode($arr_Respuesta); //convertir en formeato -- 
}

if ($tipo == "registrar") {
    //print_r($_POST);

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        if ($nombre == "" || $detalle == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

        } else {
            $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);

            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "ver") {
    //print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
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
    $id_categoria = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];

    if ($id_categoria == "" || $nombre == "" || $detalle == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta

    } else {
        $arrCategoria = $objCategoria->actualizarCategoria($id_categoria, $nombre, $detalle);
        if ($arrCategoria->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar categoria');
        }
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "eliminar") {

    if ($_POST) {
        $id_categoria = $_POST['id_categoria'];

        if ($objCategoria->productosAsociados($id_categoria)) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'No se puede eliminar esta categoria, por que
         tiene productos asociados.');
        } else {
            $arrCategoria = $objCategoria->eliminar_categoria($id_categoria);
            //print_r($arr_Respuesta);
            if ($arrCategoria) {

                $arr_Respuesta = array('status' => true, 'mensaje' => '');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'No se puede eliminar la categoria');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
