<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$objProducto = new ProductoModel();
$objCategorias= new CategoriaModel();

$tipo = $_REQUEST['tipo'];



if($tipo == "listar"){
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Productos = $objProducto->obtener_Productos();
    if (!empty($arr_Productos)) {
        //recorremos el array para agregar las opciones de las Productos
        for ($i=0; $i < count($arr_Productos); $i++) { //declara una variable siendo 0 el valor inicial -- define hasta donde sera el bucle -- aumenta +1
            $id_categoria = $arr_Productos[$i]->id_categoria;
            $r_categoria = $objCategorias->obtener_categoria($id_categoria);
            $arr_Productos[$i]->categoria=$r_categoria;

            $id_proveedor = $arr_Productos[$i]->id_proveedor;
            $r_proveedor = $objPersona->obtener_proveedor_id($id_proveedor);
            $arr_Productos[$i]->proveedor=$r_proveedor;

            $id_Productos = $arr_Productos[$i]->id;
            $productos =  $arr_Productos[$i]->codigo;
            $nombre =  $arr_Productos[$i]->nombre;
            $precio =  $arr_Productos[$i]->precio;
            $stock =  $arr_Productos[$i]->stock;
            $id_categoria =  $arr_Productos[$i]->id_categoria;
            $id_proveedor =  $arr_Productos[$i]->id_proveedor;
            $opciones = '';
            $arr_Productos[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arr_Productos;
    }
    echo json_encode($arr_Respuesta);
}


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



if($tipo == "ver"){

}

if ($tipo == "eliminar") {

}
?>