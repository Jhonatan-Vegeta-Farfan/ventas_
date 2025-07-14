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

        .btn-primary,
        .btn-secondary,
        .btn-success {
            background-color: #000000;
            color: #ffffff;
            border-color: #000000;
        }

        .btn-primary:hover,
        .btn-secondary:hover,
        .btn-success:hover {
            background-color: #ffffff;
            color: #000000;
            border-color: #ffffff;
        }

        /* Estilos para el menú desplegable */
        .dropdown {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        .dropbtn {
            background-color: #ff0000;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .dropbtn:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #000000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>

<body>

    <div class="dropdown">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="<?php echo BASE_URL ?>Categorías">Categorías</a>
            <a href="<?php echo BASE_URL ?>compras">Compras</a>
            <a href="<?php echo BASE_URL ?>persona">Persona</a>
            <a href="<?php echo BASE_URL ?>Producto">Producto</a>
            <a href="<?php echo BASE_URL ?>Proveedor">Proveedor</a>
            <a href="<?php echo BASE_URL ?>Trabajador">Trabajador</a>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50">
            <div class="card-header text-center">
                <img src="https://img.pikbest.com/origin/09/25/32/52rpIkbEsTuQ5.png!sw800" alt="Goku" class="img-fluid" style="max-height: 200px;">
            </div>
            <div class="card-body">
                <form id="loginForm" method="POST" action="<?php echo BASE_URL ?>inicio">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">USUARIO</label>
                        <input type="tex" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu Usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu Contraseña" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Iniciar Sesion</button>
                        <a href="<?php echo BASE_URL ?>olvidastetucontraseña" class="btn btn-secondary">¿Olvidaste tu contraseña?</a>
                        <a href="<?php echo BASE_URL ?>registrarse" class="btn btn-success">Registrarse</a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3" style="display: none;"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
<script src="<?php BASE_URL; ?>views/js/functions_login.js"> </script>

</html>