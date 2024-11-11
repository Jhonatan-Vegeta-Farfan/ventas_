<?php
require_once "../libreria/conexcion.php";

class ComprasModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarCompra($id_producto, $cantidad, $precio, $id_trabajador) {
        $sql = $this->conexion->prepare("INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) VALUES (?, ?, ?, ?)");
        $sql->bind_param("iids", $id_producto, $cantidad, $precio, $id_trabajador);
        
        if ($sql->execute()) {
            return (object) [
                'id' => $this->conexion->insert_id,
                'status' => true
            ];
        } else {
            return (object) [
                'id' => null,
                'status' => false
            ];
        }
    }

    // You can add more methods related to purchases here
}
?>