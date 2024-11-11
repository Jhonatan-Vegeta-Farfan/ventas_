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
        $password = $_POST['password'] ?? '';

        // Validar datos
        if (empty($nro_identidad) || empty($razon_social) || empty($telefono) || empty($correo) || empty($password)) {
            echo "Todos los campos son obligatorios.";
            return; // Salir si hay errores
        }

        // Validar formato de correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "El correo electrónico no es válido.";
            return; // Salir si hay errores
        }

        // Guardar usuario
        $estado = 'A'; // Estado activo por defecto
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if ($this->usuarioModel->guardar_usuario($nro_identidad, $razon_social, $telefono, $correo, $hashed_password, $estado)) {
            header("Location: success_page.php");
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