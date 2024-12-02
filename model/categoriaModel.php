<?php
require_once "../libreria/conexion.php";

class categoriaModel
{

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
        
        // Verificar si la consulta fue exitosa
        if ($sql === false) {
            // Puedes manejar el error aquí
            echo "Error en la consulta: " . $this->conexion->error;
            return false; // O manejar el error de otra manera
        }
        
        // Si la consulta fue exitosa, puedes continuar
        $resultado = $sql->fetch_object();
        return $resultado;
    
    }
    public function obtener_categoria_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM categoria WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
   
}

?>