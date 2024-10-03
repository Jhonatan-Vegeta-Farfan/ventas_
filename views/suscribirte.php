<style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .form-control,
        .form-select {
            background-color: #333;
            border-color: #666;
            color: #fff;
        }

        .btn-primary {
            background-color: #ff0000;
            border-color: #ff0000;
        }

        .btn-primary:hover {
            background-color: #ff3333;
            border-color: #ff3333;
        }

        .btn-secondary {
            background-color: #ff0000;
            border-color: #000000;
        }

        .btn-secondary:hover {
            background-color: #000000;
            border-color: #999;
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
    .footer {
      background-color: #000000;
      color: #fff;
      padding: 20px 0;
    }
    .footer a {
      color: #fff;
    }
    /* Estilo para los botones activos */
    .navbar-nav .nav-item .nav-link.active {
      color: rgb(255, 0, 0) !important; 
      font-weight: bold;
      background-color: rgb(0, 0, 0) !important;
    }
    </style>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Logo Dragon Ball Z"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        
        
      </ul>
    </div>
  </nav>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-header text-center">
                        <h3>SUSCRÍBETE Y RECIBE LA Z 50% DESCUENTO</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form id="subscription-form" action="../index.html">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Introduce tu nombre</label>
                                        <input type="text" class="form-control" id="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Introduce tu apellido</label>
                                        <input type="text" class="form-control" id="apellido" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Introduce tu correo electrónico</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="celular" class="form-label">Introduce tu celular</label>
                                        <input type="tel" class="form-control" id="celular" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fecha-nacimiento" class="form-label">Fecha de cumpleaños</label>
                                        <input type="date" class="form-control" id="fecha-nacimiento" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="genero" class="form-label">Género</label>
                                        <select class="form-select" id="genero" required>
                                            <option value="">Selecciona una opción</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="politicas-privacidad" required>
                                        <label class="form-check-label" for="politicas-privacidad">
                                            He leído y acepto las Políticas de Privacidad.
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php echo BASE_URL ?>login" class="btn btn-secondary">SUSCRIBETE</a>
                                    </div>
                                </form>
                                <div class="text-center mt-3">
                                    <a href="<?php echo BASE_URL ?>producto" class="btn btn-secondary">Seguir como espectador</a>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <img src="https://m.media-amazon.com/images/M/MV5BMGU2NjZhMmUtNTYzYS00OTMyLTkzZDAtMTkzNDIwNWFkM2I0XkEyXkFqcGdeQXVyMTY3NTgwODk5._V1_FMjpg_UX1000_.jpg" class="img-fluid" alt="Goku">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        // Script para redireccionar al usuario al presionar SUSCRÍBETE
        document.getElementById('subscription-form').addEventListener('submit', function(event) {
            // Evita el envío del formulario por defecto
            event.preventDefault();

            // Aquí se puede agregar la lógica para enviar el formulario

            // Redirecciona a index.html después de 2 segundos (simulando un proceso)
            setTimeout(function() {
                window.location.href = '<?php echo BASE_URL ?>producto';
            }, 2000);
        });
    </script>