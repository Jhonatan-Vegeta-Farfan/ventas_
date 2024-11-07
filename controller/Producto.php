<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modelproducto
$objProducto = new ProductoModel();

if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];



    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['idCategoria'];
        $imagen = 'imagen';
        $proveedor = $_POST['idProveedor'];
        if ($codigo=="" || $nombre=="" ||
        $detalle=="" || $precio=="" || $stock=="" || $categoria=="" || $imagen=="" || $proveedor=="") {
            //respuesta
            $arr_Respuesta = array('status'=>false,
            'mensaje'=>'Error, campos vacios');
        }else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);

            if ($arrProducto->id) {
                $arr_Respuesta = array('status'=>true,
                'mensaje'=>'Registro Exitoso');
                //cargar archivo
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '/assets/img_productos/';
                $tipoArchivo =strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION)); 
                
                $nombre = $arrProducto->id.".".$tipoArchivo;

                if(move_uploaded_file($archivo,$destino.$nombre)){
                    $arrimagen = $objProducto->actualizar_imagen($id, $nombre);

                }else{
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                }
            }else{
                $arr_Respuesta = array('status'=>false,
                'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
?>