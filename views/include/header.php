<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Dragon Ball Z</title>
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
      height: 4px; /* Ajusta la altura de la línea */
      background-color: #ff0000; /* Color rojo */
      margin-top: 10px; /* Espacio superior */
      margin-bottom: 20px; /* Espacio inferior */
    }
  </style>
</head>
<script> const base_url = '<?php echo BASE_URL; ?>'; </script>
<body>
   
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="<?php echo BASE_URL ?>login">
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Logo Dragon Ball Z">
    CERRAR SESION
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>producto" style="margin-right:5px;margin-top:15px;">TIENDA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>novedades" style="margin-right:5px;margin-top:15px;">NOVEDADES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>nosotros" style="margin-right:5px;margin-top:15px;">NOSOTROS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>cantidad" style="margin-right:5px;margin-top:15px;">CANTIDAD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>contactanos" style="margin-right:5px;margin-top:15px;">CONTACTENOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>perfil" style="margin-right:5px;margin-top:15px;">PERFIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>ubicacion" style="margin-right:5px;margin-top:15px;">UBICACIÓN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>rutadeenvio" style="margin-right:5px;margin-top:15px;">RUTA DE ENVIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>libroreclamaciones" style="margin-right:5px;margin-top:15px;">LIBRO DE RECLAMACIONES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>comentarios" style="margin-top:15px;">COMENTARIOS</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Línea de separación -->
<div class="separator"></div>

<!-- Aquí comienza el contenido principal de la página -->

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
