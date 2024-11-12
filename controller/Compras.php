<?php
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
}
?>