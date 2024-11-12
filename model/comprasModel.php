<?php
require_once "../library/conexion.php";

class compraModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarCompra($id_producto, $cantidad, $precio, $id_trabajador) {
        $sql = $this->conexion->query("CALL insertar_compra('{$id_producto}', '{$cantidad}', '{$precio}', '{$id_trabajador}')");
        return $sql->fetch_object();
    }

    public function listarProductos() {
        $sql = $this->conexion->query("SELECT * FROM productos");
        return $sql->fetch_all(MYSQLI_ASSOC);
    }

    public function listarTrabajadores() {
        $sql = $this->conexion->query("SELECT * FROM trabajadores");
        return $sql->fetch_all(MYSQLI_ASSOC);
    }
}
?>