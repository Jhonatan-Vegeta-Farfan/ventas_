<?php
session_start(); // Inicia la sesión
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda VEGETA STOR</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }
    .btn-primary {
      background-color: #ff0019;
      color: #fff;
      border-color: #ff0019;
    }
    .btn-primary:hover {
      background-color: #ff0019;
      border-color: #ff0019;
    }
    .btn-outline-secondary {
      color: #ff0019;
      border-color: #ff0019;
    }
    .btn-outline-secondary:hover {
      background-color: #ff0019;
      color: #fff;
    }
    .navbar {
      background-color: #000000;
    }
    .navbar-brand img {
      width: 150px;
    }
    .navbar-nav .nav-link, .navbar-nav .nav-item {
      color: #fff;
    }
    .product img {
      width: 100%;
      height: auto;
    }
    .navbar-nav .nav-link {
      color: #fff !important;
      background-color: #ff0000 !important;
      padding: 8px 16px;
      border-radius: 4px;
      transition: all 0.3s ease;
    }
    /* Estilo para la línea de separación */
    .separator {
      height: 4px;
      background-color: #ff0000;
      margin-top: 10px;
      margin-bottom: 20px;
    }
    /* Estilo para el contenido */
    .content {
      padding-top: 80px;
    }
    /* Asegura que los botones no se distorsionen */
    .navbar-nav .nav-item {
      margin: 0 5px;
    }

    /* Clase personalizada para los botones con fondo blanco y texto negro */
    .btn-custom {
      background-color: #fff; /* Fondo blanco */
      color: #000; /* Texto negro */
      border: 1px solid #000; /* Borde negro */
    }

    .btn-custom:hover {
      background-color: #f8f8f8; /* Color de fondo al pasar el mouse */
      color: #000; /* Mantener el texto en negro */
    }
  </style>
</head>
<script>
  const base_url = '<?php echo BASE_URL; ?>'; 
</script>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="<?php echo BASE_URL ?>producto">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Logo Dragon Ball Z" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>producto">TIENDA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>novedades">NOVEDADES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>nosotros">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>cantidad">CANTIDAD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>contactanos">CONTACTENOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>perfil">PERFIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>ubicacion">UBICACIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>rutadeenvio">RUTA DE ENVIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>libroreclamaciones">LIBRO DE RECLAMACIONES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>comentarios">COMENTARIOS</a>
        </li>
      </ul>
    </div>
    <button type="button" class="me-2 btn btn-custom">
      <i class="bi bi-person-fill"></i> 
      <?php 
        if (isset($_SESSION['sesion_ventas_nombres'])) {
            echo $_SESSION['sesion_ventas_nombres']; 
        } else {
            echo '45'; // O cualquier otro mensaje de fallback
        }
      ?>
    </button>
    <button type="button" class="me-2 btn btn-custom" onclick="cerrar_sesion();">
      <i class="bi bi-box-arrow-right"></i> Cerrar sesión
    </button>
  </nav>

  <!-- Línea de separación -->
  <div class="separator"></div>

  <!-- Contenido principal de la página -->
  <div class="content">
    <!-- Aquí comienza el contenido principal de la página -->
  </div>

  <!-- Scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Script personalizado para activar el cambio de estilo al hacer clic -->
  <script>
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });
  </script>

</body>
</html>
