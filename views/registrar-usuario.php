<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
        }
        .card {
            background-color: #ff0000;
            color: #ffffff;
            border: none;
        }
        .btn-primary, .btn-secondary {
            background-color: #000000;
            color: #ffffff;
            border-color: #000000;
        }
        .btn-primary:hover, .btn-secondary:hover {
            background-color: #ffffff;
            color: #000000;
            border-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50">
            <div class="card-header text-center">
                <h2>Registrarse</h2>
            </div>
            <div class="card-body">
                <form id="registerForm" method="POST" action="<?php echo BASE_URL ?>registrar_usuario">
                    <div class="mb-3">
                        <label for="nro_identidad" class="form-label">Número de Identidad</label> 
                        <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" placeholder="Ingresa tu Número de Identidad" required>
                    </div>
                    <div class="mb-3">
                        <label for="razon_social" class="form-label">Razón Social</label> 
                        <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingresa tu Razón Social" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu Teléfono" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label> 
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu Correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="departamento" class="form-label">Departamento</label>
                        <input type="text" class="form-control" id="departamento" name="departamento">
                    </div>
                    <div class="mb-3">
                        <label for="provincia" class="form-label">Provincia</label>
                        <input type="text" class="form-control" id="provincia" name="provincia">
                    </div>
                    <div class="mb-3">
                        <label for="distrito" class="form-label">Distrito</label>
                        <input type="text" class="form-control" id="distrito" name="distrito">
                    </div>
                    <div class="mb-3">
                        <label for="cod_postal" class="form-label">Código Postal</label>
                        <input type="number" class="form-control" id="cod_postal" name="cod_postal">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <select class="form-control" id="rol" name="rol" required>
                            <option value="usuario">Usuario</option>
                            <option value="proveedor">Proveedor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="new-password" name="password" placeholder="Ingresa tu Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu Contraseña" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                        <a href="<?php echo BASE_URL ?>login" class="btn btn-secondary">Regresar a Iniciar Sesión</a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3" style="display: none;"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const errorMessage = document.getElementById('error-message');

            errorMessage.style.display = 'none'; // Ocultar el mensaje de error

            if (newPassword !== confirmPassword) {
                event.preventDefault(); // Evitar el envío del formulario
                errorMessage.textContent = 'Las contraseñas no coinciden.';
                errorMessage.style.display = 'block'; // Mostrar el mensaje de error
            }
        });
    </script>
</body>
</html>