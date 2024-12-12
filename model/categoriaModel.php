<?php
require_once "../librerias/conexion.php";

class categoriaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
            
        }
        return $arrRespuesta;
    }

    public function registrarCategoria($nombre, $detalle){

        $sql = $this->conexion->query("CALL insertarCategoria('{$nombre}', '{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_categoria_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM categoria WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function verCategoria($id){
        $sql = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
     }
     public function actualizarCategoria($id, $nombre, $detalle){
        $sql = $this->conexion->query("CALL actualizarCategoria('{$id}','{$nombre}','{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function productosAsociados($id){
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_categoria ='{$id}'");
        $resultado = $sql->fetch_object();
        return $resultado -> count > 0;
    }
    
    public function eliminar_categoria($id){
        $sql = $this->conexion->query("CALL eliminarCategoria('{$id}')");
        if (!$sql){
            die("Error en la ejecucuión " . $this->conexion->error);
        }
        return $sql;
    }
  
}
?>