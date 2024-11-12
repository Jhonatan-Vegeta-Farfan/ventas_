<?php
<<<<<<< HEAD
require_once "../models/modelCompras.php";

$compraModel = new CompraModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_GET['tipo'];

    switch ($tipo) {
        case 'registrar':
            $id_producto = $_POST['id_producto'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $id_trabajador = $_POST['id_trabajador'];

            $resultado = $compraModel->registrarCompra($id_producto, $cantidad, $precio, $id_trabajador);
            if ($resultado) {
                echo json_encode(['status' => true, 'mensaje' => 'Compra registrada exitosamente.']);
            } else {
                echo json_encode(['status' => false, 'mensaje' => 'Error al registrar la compra.']);
            }
            break;

        case 'listarProductos':
            $productos = $compraModel->listarProductos();
            echo json_encode(['status' => true, 'contenido' => $productos]);
            break;

        case 'listarTrabajadores':
            $trabajadores = $compraModel->listarTrabajadores();
            echo json_encode(['status' => true, 'contenido' => $trabajadores]);
            break;

        default:
            echo json_encode(['status' => false, 'mensaje' => 'Tipo no válido.']);
            break;
    }
=======
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
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
}
?>