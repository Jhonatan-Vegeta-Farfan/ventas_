<?php
require_once "../libreria/conexcion.php";
class PersonaModel {
    private $conexion;

    public function __construct() {

            $this->conexion = new Conexion;
            $this->conexion =  $this->conexion->connect();

    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion, $rol, $password, $estado, $fecha_reg) {
        try {
            $sql = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password, estado, fecha_reg)
                    VALUES (:nro_identidad, :razon_social, :telefono, :correo, :departamento, :provincia, :distrito, :cos_postal, :direccion, :rol, :password, :estado, :fecha_reg)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([
                ':nro_identidad' => $nro_identidad,
                ':razon_social' => $razon_social,
                ':telefono' => $telefono,
                ':correo' => $correo,
                ':departamento' => $departamento,
                ':provincia' => $provincia,
                ':distrito' => $distrito,
                ':cos_postal' => $cos_postal,
                ':direccion' => $direccion,
                ':rol' => $rol,
                ':password' => $password,
                ':estado' => $estado,
                ':fecha_reg' => $fecha_reg
            ]);
            return ['status' => true, 'mensaje' => 'Registro exitoso'];
        } catch (Exception $e) {
            return ['status' => false, 'mensaje' => 'Error al registrar: ' . $e->getMessage()];
        }
    }

    public function listarPersonas() {

            $sql = $this->conexion->query("SELECT * FROM persona");
            $sql = $sql->fetch_object();
           return $sql;
    }
    public function buscarPersonaPorDNI($dni){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad = '{$dni}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
?>