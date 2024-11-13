<?php
require_once "../model/comprasModel.php";
require_once "../model/categoriaModel.php"; // Asegúrate de incluir el modelo de categorías

$compraModel = new comprasModel();
$categoriaModel = new categoriaModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_GET['tipo'];

    switch ($tipo) {
        case 'registrar':
            $id_producto = $_POST['id_producto'] ?? $_POST['producto']; // Manejar ambos nombres de variable
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $id_trabajador = $_POST['id_trabajador'] ?? $_POST['trabajador']; // Manejar ambos nombres de variable

            if (empty($id_producto) || empty($cantidad) || empty($precio) || empty($id_trabajador)) {
                echo json_encode(['status' => false, 'mensaje' => 'Error: campos vacíos']);
            } else {
                $resultado = $compraModel->registrarCompra($id_producto, $cantidad, $precio, $id_trabajador);
                if ($resultado) {
                    echo json_encode(['status' => true, 'mensaje' => 'Compra registrada exitosamente.']);
                } else {
                    echo json_encode(['status' => false, 'mensaje' => 'Error al registrar la compra.']);
                }
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

        case 'listarCategorias':
            $arr_Respuesta = array('status' => false, 'contenido' => '');
            $arrCategorias = $categoriaModel->obtener_categorias();

            if (!empty($arrCategorias)) {
                foreach ($arrCategorias as $categoria) {
                    $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                    $categoria->options = $opciones;
                }
                $arr_Respuesta['status'] = true;
                $arr_Respuesta['contenido'] = $arrCategorias;
            }
            echo json_encode(value: $arr_Respuesta);
            break;

        default:
            echo json_encode(['status' => false, 'mensaje' => 'Tipo no válido.']);
            break;
    }
}
?>