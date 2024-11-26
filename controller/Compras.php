<?php

require_once('../model/comprasModel.php');
$objCompras = new ComprasModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel(); 
$tipo  = $_REQUEST['tipo'];

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCompras = $objCompras->obtener_Productos();
    if (!empty($arrCompras)) {
        for ($i = 0; $i < count($arrCompras); $i++) {
            $id_producto = $arrCompras[$i]->id;
            $r_compras = $objProducto->obtener_producto_id($id_producto);
            $arrCompras[$i]->compras=$r_compras;
            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->obtener_trabajador_id($id_trabajador);
            $arrCompras[$i]->trabajador=$r_trabajador;
            $id_compras =  $arrCompras[$i]->id;
            $nombre =  $arrCompras[$i]->nombre;
            $opciones = '';
            $arrCompras[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arrCompras;
    }
    echo json_encode($arr_Respuesta); //convertir en formato -- 
}
if ($tipo == "registrar") {
    if ($_POST) {
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio']; 
        $trabajador = $_POST['trabajador'];
        if (
            $id_producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $arrProducto = $objCompras->registrarCompras($id_producto,$cantidad,$precio,$trabajador);
            if ($arrProducto->id>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
    }
            echo json_encode($arr_Respuesta);
}
}

?>