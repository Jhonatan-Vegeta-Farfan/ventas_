<?php
require_once('../model/comprasModel.php');
$tipo = $_REQUEST['tipo'];

// Instantiate the Compras model
$objCompras = new ComprasModel();

if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $id_trabajador = $_POST['id_trabajador'];

        // Validate required fields
        if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacios'
            );
        } else {
            // Register the purchase
            $arrCompras = $objCompras->registrarCompra($id_producto, $cantidad, $precio, $id_trabajador);

            if ($arrCompras->id) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Registro Exitoso'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error al registrar compra'
                );
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
?>