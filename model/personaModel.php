<?php
class PersonaModel {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=sistema_ventas;charset=utf8', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Cambiado a WARNING para menos severidad
        } catch (Exception $e) {
            die('Error de conexión: ' . $e->getMessage());
        }
    }

    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cos_postal, $direccion, $rol, $password, $estado, $fecha_reg) {
        try {
            $sql = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password, estado, fecha_reg)
                    VALUES (:nro_identidad, :razon_social, :telefono, :correo, :departamento, :provincia, :distrito, :cos_postal, :direccion, :rol, :password, :estado, :fecha_reg)";
            $stmt = $this->db->prepare($sql);
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
                ':password' => password_hash($password, PASSWORD_DEFAULT),
                ':estado' => $estado,
                ':fecha_reg' => $fecha_reg
            ]);
            return ['status' => true, 'mensaje' => 'Registro exitoso'];
        } catch (Exception $e) {
            return ['status' => false, 'mensaje' => 'Error al registrar: ' . $e->getMessage()];
        }
    }

    public function listarPersonas() {
        try {
            $stmt = $this->db->query("SELECT * FROM persona");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return ['status' => false, 'mensaje' => 'Error al listar personas: ' . $e->getMessage()];
        }
    }
}
?>