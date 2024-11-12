<?php
require_once('../models/categoriaModel.php');
require_once('../models/compraModel.php'); // Asegúrate de incluir el modelo de compra
$tipo  = $_REQUEST['tipo'];

$objCategoria = new CategoriaModel();
$objCompra = new CompraModel(); // Instanciar el modelo de compra

if ($tipo == "registrar") {
    if ($_POST) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];

        if ($producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status'=> false,'mensaje'=>'Error: campos vacíos');
        } else {
            $arrCompra = $objCompra->registrarCompra($producto, $cantidad, $precio, $trabajador);
            
            if ($arrCompra->id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=> false,'mensaje'=>'Error al registrar compra');
            }
        }
        echo json_encode($arr_Respuesta);
    }
} else if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' =>'');
    $arrCategorias = $objCategoria->obtener_categorias();

    if (!empty($arrCategorias)) {
        foreach ($arrCategorias as $categoria) {
            $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $categoria->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCategorias;
    }
    echo json_encode($arr_Respuesta);
}
?>