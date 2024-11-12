<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

// Instancio la clase modelproducto
$objProducto = new ProductoModel();

if ($tipo == "registrar") {
    // print_r($_POST);
    // echo $_FILES['imagen']['name'];

    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle']; // Asegurarse de que 'detalle' esté definido
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['idCategoria'];
        $imagen = 'imagen';
        $proveedor = $_POST['idProveedor'];

        // Verificar si alguno de los campos está vacío
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == "" || $imagen == "" || $proveedor == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Todos los campos son obligatorios');
        } else {
            if ($arrProducto->id) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');

                // Cargar archivo
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '/assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION)); 
                
                $nombreImagen = $arrProducto->id . "." . $tipoArchivo;

                if (move_uploaded_file($archivo, $destino . $nombreImagen)) {
                    $arrimagen = $objProducto->actualizar_imagen($arrProducto->id, $nombreImagen);
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                }
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
            }
        }
        
        echo json_encode($arr_Respuesta);
    }
}
?>