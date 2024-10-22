<?php
require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registraProducto
    ($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor){
        public function resgistrarProducto
        $sql = $this->conexion->query("CALL isertproducto('{$codigo}', '{$nombre}', '{$detalle}', '{$stock}', '{$categoria}', '{$fecha_v}', '{$imagen}', '{$proveedor}')");
    }
}

?>