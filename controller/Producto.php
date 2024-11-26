<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php'); 
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloProducto
$objProducto = new ProductoModel();
$objCategoria = new categoriaModel();
$objPersona = new PersonaModel(); 

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrProducto = $objProducto->obtenerProductos();

    if (!empty($arrProducto)) {
        for ($i = 0; $i < count($arrProducto); $i++) {
            $id_categoria = $arrProducto[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria_id($id_categoria);
            $arrProducto[$i]->categoria=$r_categoria;

            $id_proveedor = $arrProducto[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor_id($id_proveedor);
            $arrProducto[$i]->proveedor=$r_proveedor;

            $id_producto =  $arrProducto[$i]->id;
            $nombre =  $arrProducto[$i]->nombre;
            $opciones = '';
            $arrProducto[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arrProducto;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}

if ($tipo == "registrar") {
    /*print_r($_POST);
    echo $_FILES['imagen']['name'];*/

    $archivo = $_FILES['imagen']['tmp_name'];
    $destino = './assets/img_productos/';
    $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = 'imagen';
        $proveedor = $_POST['proveedor'];
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == "" ||  $imagen == "" || $proveedor == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta
        } else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);
            if ($arrProducto->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
                //CARGAR ARCHIVO
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                $nombre = $arrProducto->id . "." . $tipoArchivo;
                if (move_uploaded_file($archivo, $destino . $nombre)) {
                    $arr_imagen = $objProducto->actualizar_imagen($id, $nombre);
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso, error al subir imagen');
                }
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}