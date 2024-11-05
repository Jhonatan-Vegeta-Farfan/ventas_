
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
                <h2>Restablecer Contraseña</h2>
            </div>
            <div class="card-body">
                <form id="resetPasswordForm" method="POST" action="<?php echo BASE_URL ?>resetear_contrasena">
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Nueva Contraseña</label> 
                        <input type="password" class="form-control" id="new-password" placeholder="Ingresa tu Nueva Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirmar Nueva Contraseña</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu Nueva Contraseña" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Restablecer Contraseña</button>
                        <a href="<?php echo BASE_URL ?>login" class="btn btn-secondary">Regresar a Iniciar Sesión</a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3" style="display: none;"></div>
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
