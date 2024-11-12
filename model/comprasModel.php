<?php
require_once "../library/conexion.php";

class CompraModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarCompra($producto, $cantidad, $precio, $trabajador) {
        $sql = $this->conexion->query("CALL insertar_compra('{$producto}', '{$cantidad}', '{$precio}', '{$trabajador}')");
        return $sql->fetch_object(); // No es necesario asignar a $sql de nuevo
    }
}
?>