<?php

require_once "../libreria/conexcion.php";

class CategoriaModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
<<<<<<< HEAD

    public function obtener_categorias()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function registrarCategoria($nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL insertCategoria('{$nombre}', '{$detalle}')");
=======
    public function registrarCategoria($nombre, $detalle){
        $sql=$this->conexion->query("CALL insertarCategoria('{$nombre}','{$detalle}')");
>>>>>>> a6d149b5d612e78169f1d6c983037a54bff4812c
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
    }
    return $arrRespuesta;
    }

    public function obtener_categoria($id){
        $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
}
?>