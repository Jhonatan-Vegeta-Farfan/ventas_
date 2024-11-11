<?php
require_once('../model/usuarioModel.php');

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new usuarioModel();
    }

    public function registrar_usuario() {
        // Captura de datos del formulario
        $nro_identidad = $_POST['nro_identidad'] ?? '';
        $razon_social = $_POST['razon_social'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $departamento = $_POST['departamento'] ?? '';
        $provincia = $_POST['provincia'] ?? '';
        $distrito = $_POST['distrito'] ?? '';
        $cod_postal = $_POST['cod_postal'] ?? '';
        $direccion = $_POST['direccion'] ?? '';
        $rol = $_POST['rol'] ?? 'usuario'; // Default role
        $password = $_POST['password'] ?? '';
        $estado = 'A'; // Estado activo por defecto

        // Validar datos
        if (empty($nro_identidad) || empty($razon_social) || empty($telefono) || empty($correo) || empty($password)) {
            die("Todos los campos son obligatorios.");
        }

        // Validar formato de correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            die("El correo electrónico no es válido.");
        }

        // Validar longitud del número de identidad
        if (strlen($nro_identidad) < 5) {
            die("El número de identidad debe tener al menos 5 caracteres.");
        }

        // Guardar usuario
        if ($this->usuarioModel->guardar_usuario($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, password_hash($password, PASSWORD_DEFAULT), $estado)) {
            header("Location: success_page.php"); // Cambia esto a la página que desees
            exit;
        } else {
            echo "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
        }
    }
}

// Manejo de la solicitud
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioController = new UsuarioController();
    $usuarioController->registrar_usuario();
}
?>