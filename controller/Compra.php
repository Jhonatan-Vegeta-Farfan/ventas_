<?php
$tipo  = $_REQUEST['tipo'];
require_once('../model/comprasModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$objCompras = new ComprasModel();
$objProducto = new ProductoModel();
$objPersona = new PersonaModel(); 


if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCompras = $objCompras->obtenerCompras();

    if (!empty($arrCompras)) {
        for ($i = 0; $i < count($arrCompras); $i++) {
            $id_compra = $arrCompras[$i]->id;
            $id_producto = $arrCompras[$i]->id_producto;
            $cantidad = $arrCompras[$i]->cantidad;
            $precio = $arrCompras[$i]->precio;
            $id_trabajador = $arrCompras[$i]->id_trabajador;

            $id_producto = $arrCompras[$i]->id_producto;
            $r_producto = $objProducto->obtener_producto_id($id_producto);
            $arrCompras[$i]->producto=$r_producto;

            $id_trabajador = $arrCompras[$i]->id_trabajador;
            $r_trabajador = $objPersona->obtener_trabajador_id($id_trabajador);
            $arrCompras[$i]->trabajador=$r_trabajador;

            $opciones = '
             <a href="'.BASE_URL.'editar-compra/'.$id_compra.'"><i class="fas fa-edit btn btn-info btn-sm">EDITAR COMPRA</i></a>
                 <button onclick="eliminar_compra('.$id_compra.');"class="btn btn-danger btn-sm">ELIMINAR COMPRA<i class="fas fa-trash-alt"></i></button>
            ';
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
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar compra');
        }
    }
            echo json_encode($arr_Respuesta);

}
}
if($tipo == "ver") {
    //print_r($_POST);
    $id_compra = $_POST['id_compra'];
    $arr_Respuesta = $objCompras->verCompras($id_compra);
   // print_r($arr_Respuesta);
   if (empty($arr_Respuesta)) {
       $response = array('status' => false, 'mensaje' => "ErroR¡¡ no hay informacion");
   }else{
    $response = array('status' => true, 'mensaje'=>"datos encontrados", 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}

if ($tipo == "actualizar") {
    if ($_POST) {
        $id_compra = $_POST['id_compra'];
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio']; 
        $trabajador = $_POST['trabajador'];

        if ($id_compra == "" || $id_producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $resultado = $objCompras->actualizarCompras($id_compra, $id_producto, $cantidad, $precio, $trabajador);
            if ($resultado) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualización exitosa');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar compra');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}


if ($tipo == "eliminar") {
    if ($_POST) {
        $id_compra = $_POST['id_compra'];

        if ($id_compra == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, ID de compra vacío');
        } else {
            $resultado = $objCompras->eliminarCompra($id_compra);
            if ($resultado) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Compra eliminada exitosamente');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al eliminar compra');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
?>