<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña - STILOS Huanta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        body {
            background-color: #f9f5f0;
            color: #5a3921;
            font-family: 'Raleway', sans-serif;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(139, 69, 19, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(205, 133, 63, 0.05) 0%, transparent 20%);
            overflow-x: hidden;
        }

        .card {
            background-color: rgba(255, 253, 250, 0.95);
            color: #5a3921;
            border: 1px solid #cd853f;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }

        .form-control {
            background-color: rgba(255, 253, 250, 0.9);
            color: #5a3921;
            border: 1px solid #cd853f;
            border-radius: 5px;
            font-family: 'Raleway', sans-serif;
        }

        .form-control:focus {
            background-color: rgba(255, 253, 250, 1);
            color: #8b4513;
            border-color: #8b4513;
            box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
        }

        .btn-primary, .btn-secondary {
            background-color: #8b4513;
            color: #f9f5f0;
            border: 1px solid #8b4513;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
        }

        .btn-primary:hover, .btn-secondary:hover {
            background-color: #a0522d;
            color: #fff;
            border-color: #a0522d;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: #cd853f;
            border-color: #cd853f;
        }

        .btn-secondary:hover {
            background-color: #d2691e;
            border-color: #d2691e;
        }

        .embroidery-icon {
            font-size: 1.5rem;
            margin: 0 5px;
            color: #8b4513;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #8b4513;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
            letter-spacing: 1px;
        }

        .location {
            font-style: italic;
            color: #cd853f;
            font-size: 0.9rem;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            max-height: 120px;
            filter: drop-shadow(0 0 5px rgba(139, 69, 19, 0.3));
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50">
            <div class="card-header text-center">
                <div class="logo-container">
                    <img src="https://cdn.pixabay.com/photo/2016/11/23/00/57/t-shirt-1852114_1280.png" alt="STILOS Logo" class="logo">
                </div>
                <h2 class="store-name">Restablecer Contraseña</h2>
                <p class="location mb-0">STILOS - Huanta, Ayacucho</p>
            </div>
            <div class="card-body">
                <form id="resetPasswordForm" method="POST" action="<?php echo BASE_URL ?>resetear_contrasena">
                    <div class="mb-3">
                        <label for="new-password" class="form-label">
                            <i class="fas fa-lock embroidery-icon"></i> Nueva Contraseña
                        </label>
                        <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Ingresa tu Nueva Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">
                            <i class="fas fa-lock embroidery-icon"></i> Confirmar Nueva Contraseña
                        </label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirma tu Nueva Contraseña" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-key"></i> Restablecer Contraseña
                        </button>
                        <a href="<?php echo BASE_URL ?>login" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Regresar a Iniciar Sesión
                        </a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3 text-center" style="display: none;"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function(event) {
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const errorMessage = document.getElementById('error-message');

            errorMessage.style.display = 'none'; // Ocultar el mensaje de error

            if (!newPassword || !confirmPassword) {
                event.preventDefault(); // Evitar el envío del formulario
                errorMessage.textContent = 'Por favor, completa todos los campos.';
                errorMessage.style.display = 'block'; // Mostrar el mensaje de error
            } else if (newPassword !== confirmPassword) {
                event.preventDefault(); // Evitar el envío del formulario
                errorMessage.textContent = 'Las contraseñas no coinciden.';
                errorMessage.style.display = 'block'; // Mostrar el mensaje de error
            }
        });
    </script>
</body>
</html>