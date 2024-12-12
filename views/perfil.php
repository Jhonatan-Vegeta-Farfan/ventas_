<style>
    body {
        background-color: #000000;
        color: #ffffff;
    }

    .card {
        background-color: #ff0000;
        color: #ffffff;
        border: none;
        box-shadow: none;
    }

    .card-header {
        background-color: transparent;
        border-bottom: none;
    }

    .img-logo {
        max-height: 100px;
    }

    .form-control {
        background-color: #000000;
        color: #ffffff;
        border-color: #ffffff;
    }

    .btn-primary {
        background-color: #ffffff;
        color: #000000;
        border-color: #ffffff;
    }

    .btn-primary:hover {
        background-color: #000000;
        color: #ffffff;
    }

    .btn-secondary {
        background-color: #ffffff;
        color: #000000;
        border-color: #ffffff;
    }

    .btn-secondary:hover {
        background-color: #000000;
        color: #ffffff;
    }

    .navbar {
        background-color: #000000;
    }

    .navbar-brand img {
        width: 150px;
    }

    .navbar-nav .nav-link,
    .navbar-nav .nav-item {
        color: #fff;
    }

    .navbar-nav .nav-link {
        color: #fff !important;
        background-color: #ff0000 !important;
        padding: 8px 16px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link.active {
        color: rgb(255, 0, 0) !important;
        font-weight: bold;
        background-color: rgb(0, 0, 0) !important;
    }

    .footer {
        background-color: #000000;
        color: #fff;
        padding: 20px 0;
    }

    .footer a {
        color: #fff;
    }
</style>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card w-75">
        <div class="card-header text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Goku" class="img-fluid img-logo">
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombres:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tus nombres...">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingresa tus apellidos...">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico...">
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña...">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu número de teléfono...">
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu nombre de usuario...">
                </div>
                <div class="mb-3">
                    <label for="contactos" class="form-label">Contactos:</label>
                    <input type="text" class="form-control" id="contactos" placeholder="Ingresa tus contactos...">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?php echo BASE_URL ?>producto" class="btn btn-primary">Aceptar</a>
                    <a href="<?php echo BASE_URL ?>producto" class="btn btn-secondary">Volver al inicio</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>