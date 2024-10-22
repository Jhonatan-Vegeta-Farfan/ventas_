<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
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
        .btn-primary, .btn-secondary, .btn-success {
            background-color: #000000;
            color: #ffffff;
            border-color: #000000;
        }
        .btn-primary:hover, .btn-secondary:hover, .btn-success:hover {
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
                <img src="https://imgmedia.larepublica.pe/640x371/larepublica/migration/images/LJE4TYPS6VA6JOOTO4MRKWHDAM.webp" alt="Goku" class="img-fluid" style="max-height: 200px;">
            </div>
            <div class="card-body">
                <form id="loginForm" method="POST" action="<?php echo BASE_URL ?>login">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">CORREO ELECTRONICO</label> 
                        <input type="email" class="form-control" id="usuario" placeholder="Ingresa tu Correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu Contraseña" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        <a href="<?php echo BASE_URL ?>suscribirte" class="btn btn-secondary">¿Olvidaste tu contraseña?</a>
                        <a href="<?php echo BASE_URL ?>registrarse" class="btn btn-success">Registrarse</a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3" style="display: none;"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            const usuario = document.getElementById('usuario').value;
            const contrasena = document.getElementById('contrasena').value;
            const errorMessage = document.getElementById('error-message');

            errorMessage.style.display = 'none'; // Ocultar el mensaje de error

            if (!usuario || !contrasena) {
                event.preventDefault(); // Evitar el envío del formulario
                errorMessage.textContent = 'Por favor, completa todos los campos.';
                errorMessage.style.display = 'block'; // Mostrar el mensaje de error
            }
        });
    </script>
</body>
</html>
