<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model
$objCategoria = new categoriaModel();



if ($tipo=="listar") {
    //respuesta

    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        //recorremos el array para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Categorias); $i++) { //declara una variable siendo 0 el valor inicial -- define hasta donde sera el bucle -- aumenta +1
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria =  $arr_Categorias[$i]->nombre;
            $opciones = '
             <a href="'.BASE_URL.'editar-categoria/'.$id_categoria.'"><i class="fas fa-edit btn btn-info btn-sm">EDITAR CATEGORIA</i></a>
                 <button onclick="eliminar_categoria('.$id_categoria.');"class="btn btn-danger btn-sm">ELIMINAR CATEGORIA<i class="fas fa-trash-alt"></i></button>
            ';
            $arr_Categorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arr_Categorias;
    }
    echo json_encode($arr_Respuesta); //convertir en formeato -- 
}

if ($tipo=="registrar"){
    //print_r($_POST);

   if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        if($nombre=="" || $detalle==""){
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta

        }else {
            $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);

            if ($arrCategoria->id>0) {
                $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if($tipo == "ver") {
    //print_r($_POST);
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->verCategoria($id_categoria);
   // print_r($arr_Respuesta);
   if (empty($arr_Respuesta)) {
       $response = array('status' => false, 'mensaje' => "ErroR¡¡ no hay informacion");
   }else{
    $response = array('status' => true, 'mensaje'=>"datos encontrados", 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}

if ($tipo == "actualizar") {
    // Obtener los datos del formulario
    $id_categoria = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];

    // Validar que los campos no estén vacíos
    if ($id_categoria == "" || $nombre == "" || $detalle == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios'); //respuesta
    } else {
        // Llamar al método para actualizar la categoría
        $arrCategoria = $objCategoria->actualizarCategoria($id_categoria, $nombre, $detalle);
        
        // Verificar si la actualización fue exitosa
        if ($arrCategoria->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar categoria');
        }
    }
    // Devolver la respuesta en formato JSON
    echo json_encode($arr_Respuesta);
}

if ($tipo == "eliminar") {
    if ($_POST) {
        $id_categoria = $_POST['id_categoria'];

        // Validar que el ID de la categoría no esté vacío
        if ($id_categoria == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, ID de categoría vacío');
        } else {
            // Llamar al método para eliminar la categoría
            $resultado = $objCategoria->eliminarCategoria($id_categoria);

            // Verificar si la eliminación fue exitosa
            if ($resultado) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Eliminación exitosa');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al eliminar la categoría');
            }
        }
        // Devolver la respuesta en formato JSON
        echo json_encode($arr_Respuesta);
    }
}

?>