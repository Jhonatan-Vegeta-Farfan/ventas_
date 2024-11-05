
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
                        <label for="name" class="form-label">Nombres y Apellidos Completos</label> 
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tus Nombres y Apellidos Completos" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label> 
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu Correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="new-password" placeholder="Ingresa tu Contraseña" required>
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
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const errorMessage = document.getElementById('error-message');

            errorMessage.style.display = 'none'; // Ocultar el mensaje de error

            if (!name || !email || !newPassword || !confirmPassword) {
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
