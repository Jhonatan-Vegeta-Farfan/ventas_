<?php

require_once "../libreria/conexcion.php"; 

class usuarioModel {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function guardar_usuario($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $password, $estado) {
        // Preparar la consulta
        $stmt = $this->conexion->prepare("INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Asignar rol como 'usuario' de forma predeterminada
        $rol = 'usuario';
        $stmt->bind_param("ssssssssssss", $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $estado);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>