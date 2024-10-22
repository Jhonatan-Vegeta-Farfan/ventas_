<?php
require_once('./model/productoModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloProducto
$objProducto = new ProductoModel();


if($tipo=="registrar"){
    //print_r($POST);
    if ($_POST);{
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];
        $proveedor = $_POST['proveedor'];
        if ($codigo=="" || $nombre=="" || $detalle=="" || $precio=="" || $stock=="" || $categoria=="" || $fecha_v || $imagen=="" || $proveedor==""){
            //respuesta
            $arr_Respuesta = array
            ('status'=>false,
            'mensaje'=>'Error, campos vacios');
        }else{
            $arrProducto = 
            $objProducto->resgistrarProducto
            ($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor); 
        }
    }
}
if($tipo=="listar"){

}

if($tipo=="ver"){
    
}

if($tipo=="actualizar"){
    
}

if($tipo=="eliminar"){
    
}

?>