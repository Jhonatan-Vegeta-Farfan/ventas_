<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Restringido - Área 51</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        
        body {
            background-color: #0a0a1a;
            color: #00ff00;
            font-family: 'Orbitron', sans-serif;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(0, 255, 0, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(0, 255, 255, 0.1) 0%, transparent 20%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="%2300ff00" opacity="0.5"/></svg>');
            overflow-x: hidden;
        }

        .card {
            background-color: rgba(10, 20, 30, 0.9);
            color: #00ff00;
            border: 1px solid #00ff00;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5),
                        0 0 40px rgba(0, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            animation: pulse 2s infinite alternate;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 20px rgba(0, 255, 0, 0.5), 0 0 40px rgba(0, 255, 255, 0.3); }
            100% { box-shadow: 0 0 30px rgba(0, 255, 0, 0.8), 0 0 50px rgba(0, 255, 255, 0.5); }
        }

        .form-control {
            background-color: rgba(0, 20, 30, 0.7);
            color: #00ff00;
            border: 1px solid #00ff00;
            border-radius: 5px;
        }

        .form-control:focus {
            background-color: rgba(0, 30, 40, 0.8);
            color: #00ffff;
            border-color: #00ffff;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }

        .btn-primary, .btn-secondary, .btn-success {
            background-color: #003300;
            color: #00ff00;
            border: 1px solid #00ff00;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: bold;
        }

        .btn-primary:hover, .btn-secondary:hover, .btn-success:hover {
            background-color: #00ff00;
            color: #000;
            border-color: #00ff00;
            box-shadow: 0 0 15px rgba(0, 255, 0, 0.7);
            transform: translateY(-2px);
        }

        /* Menú desplegable estilo alien */
        .dropdown {
            position: relative;
            display: inline-block;
            margin: 20px;
            z-index: 1000;
        }

        .dropbtn {
            background-color: rgba(0, 50, 0, 0.7);
            color: #00ff00;
            padding: 12px 24px;
            font-size: 16px;
            font-family: 'Orbitron', sans-serif;
            border: 1px solid #00ff00;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .dropbtn:hover {
            background-color: rgba(0, 255, 0, 0.3);
            color: #00ffff;
            border-color: #00ffff;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 20, 30, 0.9);
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 255, 0, 0.3);
            z-index: 1;
            border-radius: 5px;
            border: 1px solid #00ff00;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #00ff00;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
            border-bottom: 1px solid rgba(0, 255, 0, 0.2);
        }

        .dropdown-content a:hover {
            background-color: rgba(0, 255, 0, 0.2);
            color: #00ffff;
            padding-left: 20px;
        }

        /* Efectos especiales */
        .alien-icon {
            font-size: 2rem;
            margin: 0 10px;
            color: #00ff00;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.7);
        }

        .security-stamp {
            position: absolute;
            right: 20px;
            top: 20px;
            transform: rotate(15deg);
            opacity: 0.7;
            font-size: 0.8rem;
            color: #ff0000;
        }

        .scanner-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, transparent, #00ff00, transparent);
            animation: scan 4s linear infinite;
            z-index: 10;
        }

        @keyframes scan {
            0% { top: 0; }
            100% { top: 100%; }
        }

        .ufo {
            position: fixed;
            width: 100px;
            height: 50px;
            background: radial-gradient(ellipse at center, rgba(0,255,0,0.8) 0%, rgba(0,255,0,0) 70%);
            border-radius: 50%;
            animation: fly 20s linear infinite;
            z-index: -1;
        }

        @keyframes fly {
            0% { transform: translate(-100px, 50vh); }
            100% { transform: translate(calc(100vw + 100px), calc(-50vh)); }
        }

        .access-denied {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 0.7rem;
            color: rgba(0, 255, 0, 0.5);
        }
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>

<body>
    <!-- Efectos especiales -->
    <div class="scanner-line"></div>
    <div class="ufo" style="top: 20%;"></div>
    <div class="ufo" style="top: 70%; animation-delay: 5s; animation-duration: 25s;"></div>
    <div class="ufo" style="top: 40%; animation-delay: 10s; animation-duration: 30s;"></div>
    <div class="access-denied">
        <i class="fas fa-exclamation-triangle"></i> ACCESO RESTRINGIDO - NIVEL 5 CLEARANCE REQUERIDO
    </div>
<!--
    <div class="dropdown">
        <button class="dropbtn"><i class="fas fa-ufo-beam"></i> MENÚ SECRETO <i class="fas fa-ufo-beam"></i></button>
        <div class="dropdown-content">
            <a href="<?php echo BASE_URL ?>Categor"><i class="fas fa-tags"></i> Categorías</a>
            <a href="<?php echo BASE_URL ?>compra"><i class="fas fa-shopping-cart"></i> Compras</a>
            <a href="<?php echo BASE_URL ?>persona"><i class="fas fa-user-secret"></i> Persona</a>
            <a href="<?php echo BASE_URL ?>Product"><i class="fas fa-flask"></i> Producto</a>
            <a href="<?php echo BASE_URL ?>Proveedo"><i class="fas fa-satellite-dish"></i> Proveedor</a>
            <a href="<?php echo BASE_URL ?>Trabajado"><i class="fas fa-user-astronaut"></i> Trabajador</a>
        </div>
    </div>
    -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 position-relative">
            <span class="security-stamp">TOP SECRET<br>ÁREA 51</span>
            <div class="card-header text-center border-bottom border-success">
                <img src="https://img.pikbest.com/origin/09/25/32/52rpIkbEsTuQ5.png!sw800" alt="Alien" class="img-fluid" style="max-height: 120px; filter: drop-shadow(0 0 10px rgba(0, 255, 0, 0.7))">
                <h2 class="mt-3" style="text-shadow: 0 0 10px rgba(0, 255, 0, 0.7); letter-spacing: 3px;">
                    <i class="fas fa-user-secret"></i> ACCESO RESTRINGIDO
                </h2>
                <p class="mb-0">Sistema de autenticación Área 51</p>
            </div>
            <div class="card-body">
                <form id="loginForm" method="POST" action="<?php echo BASE_URL ?>inicio">
                    <div class="mb-4">
                        <label for="usuario" class="form-label">
                            <i class="fas fa-id-card"></i> IDENTIFICACIÓN
                        </label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su código de agente" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">
                            <i class="fas fa-fingerprint"></i> CÓDIGO DE ACCESO
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su código de acceso" required>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-sign-in-alt"></i> AUTENTICAR
                        </button>
                        <a href="<?php echo BASE_URL ?>olvidastetucontraseña" class="btn btn-secondary">
                            <i class="fas fa-question-circle"></i> CÓDIGO PERDIDO
                        </a>
                        <a href="<?php echo BASE_URL ?>suscribirte" class="btn btn-success">
                            <i class="fas fa-user-plus"></i> NUEVO AGENTE
                        </a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3 text-center" style="display: none;">
                    <i class="fas fa-exclamation-triangle"></i> <span id="error-text"></span>
                </div>
            </div>
            <div class="card-footer text-center text-muted" style="border-top: 1px solid #00ff00;">
                <small>AREA 51</small>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="<?php BASE_URL; ?>views/js/functions_login.js"></script>
</body>

</html>