<?php

require_once "../libreria/conexcion.php";
 class PersonaModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
<<<<<<< HEAD
    
    public function registrarPersona($nro_identidad,$razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion,$rol,$password,$estado,$fecha_reg){
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_reg}')");
=======

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal,$direccion, $rol, $password){
        $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}','{$direccion}','{$rol}','{$password}')");
>>>>>>> a6d149b5d612e78169f1d6c983037a54bff4812c
        $sql = $sql->fetch_object();
        return $sql;
         }
         public function buscarPersonaPorDNI($dni){
            $sql = $this->conexion->query(" SELECT * FROM persona WHERE nro_identidad='{$dni}'");
            $sql = $sql->fetch_object();
            return $sql;
         }

         public function obtener_personas()
         {
             $arrRespuesta = array();
             $respuesta = $this->conexion->query(" SELECT * FROM persona WHERE rol ='trabajador'");
             while ($objeto = $respuesta->fetch_object()) {
                 array_push($arrRespuesta, $objeto);
             }
             return $arrRespuesta;
         }

         public function obtener_proveedor(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query( "SELECT * FROM persona WHERE rol='proveedor'");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return  $arrRespuesta;
        }
        
        public function obtener_proveedor_id($id){
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE id='{$id}'");
            $objeto = $respuesta->fetch_object();
            return $objeto;
        }
 }
?>