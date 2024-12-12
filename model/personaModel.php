<?php
require_once "../librerias/conexion.php";

class PersonaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password){

        $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', '{$direccion}', '{$rol}', '{$password}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function buscarPersonaDNI($nro_identidad){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;

    }

    public function obtenerProveedor(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol='proveedor'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return  $arrRespuesta;
    }

    public function obtener_proveedor_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function obtener_trabajador(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol='trabajador'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return  $arrRespuesta;
    }
   
    public function obtener_trabajador_id($id){
        $respuesta = $this->conexion->query("SELECT *FROM persona WHERE id='{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    
    public function obtenerPersona(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
            
        }
        return $arrRespuesta;
    }

    public function verPersona($id){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
     }
     public function actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia,
     $distrito, $cod_postal, $direccion, $rol){
        $sql = $this->conexion->query("CALL actualizarPersona('{$id}','{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}'
        ,'{$distrito}','{$cod_postal}','{$direccion}','{$rol}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function eliminar_persona($id){
        $sql = $this->conexion->query("CALL eliminarPersona('{$id}')");
        $sql = $sql->fetch_object();
        return$sql;
    
    }
    public function personasAsociados($id){
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM compras WHERE id_trabajador ='{$id}'");
        $resultado = $sql->fetch_object();
        if ($resultado-> count > 0) {
            return true;
        }
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_proveedor ='{$id}'");
        $resultado = $sql->fetch_object();
        return $resultado-> count > 0;
    }
}
?>