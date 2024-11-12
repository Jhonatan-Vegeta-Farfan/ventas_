<?php
require_once "../library/conexion.php";

<<<<<<< HEAD
class compraModel {
=======
class CompraModel {
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

<<<<<<< HEAD
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
=======
    public function registrarCompra($producto, $cantidad, $precio, $trabajador) {
        $sql = $this->conexion->query("CALL insertar_compra('{$producto}', '{$cantidad}', '{$precio}', '{$trabajador}')");
        return $sql->fetch_object(); // No es necesario asignar a $sql de nuevo
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
    }
}
?>