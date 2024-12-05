<?php
require_once('../model/comprasModel.php');
require_once('../model/productosModel.php');
require_once('../model/personaModel.php');

$tipo  = $_REQUEST['tipo'];

$objCompra = new CompraModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel();

if ($tipo == "obtener_precio") {
    $productoId = $_GET['producto_id'] ?? null;
    if ($productoId) {
        $arrPrecio = $objCompra->ObtenerPrecioProducto($productoId);
        if ($arrPrecio !== null) {
            $arr_Respuesta = array('status' => true, 'precio' => $arrPrecio);
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Producto no encontrado');
        }
    } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Falta el producto_id');
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "registrar") {
    if ($_POST) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];

        if ($producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        } else {
            $arrCompra = $objCompra->registrarCompra($producto, $cantidad, $precio, $trabajador);

            if ($arrCompra->status) {
                $arr_Respuesta = array('status' => true, 'mensaje' => $arrCompra->mensaje);
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => $arrCompra->mensaje);
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
if($tipo == "listar"){
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCompras = $objCompra->obtenerCompras();
    if(!empty($arrCompras)){
        for($i=0; $i<count($arrCompras); $i++){
            $id_compra = $arrCompras[$i]->id;
            $id_producto = $arrCompras[$i]->id_producto;
            $cantidad = $arrCompras[$i]->cantidad;
            $precio = $arrCompras[$i]->precio;
            $fecha_compra = $arrCompras[$i]->fecha_compra;
            $id_trabajador = $arrCompras[$i]->id_trabajador;

            //llamar a el metodo ObtenerProductoPorId para identificar mejor el nombre del producto
            $id_producto = $arrCompras[$i]->id_producto;
            $r_producto = $objProducto->obtener_producto_id($id_producto);
            $arrCompras[$i]->producto = $r_producto;

            //llamar a el metodo ObtenerTrabajadorPorId para identificar mejor el nombre del trabajador
            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->ObtenerPersonaPorId($id_trabajador);
            $arrCompras[$i]->trabajador = $r_trabajador;

            $opciones = '<button class="btn btn-warning btn-sm m-2" onclick="editar-producto(${element.id})">
                        <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm m-2" onclick="eliminar-producto(${element.id})">
                        <i class="fas fa-trash-alt"></i> Eliminar
                        </button>';
            $arrCompras [$i] -> options = $opciones;
}
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCompras;
    }
    echo json_encode($arr_Respuesta);
}
