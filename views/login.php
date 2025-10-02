<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso - STILOS Huanta</title>
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
                radial-gradient(circle at 80% 70%, rgba(205, 133, 63, 0.05) 0%, transparent 20%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.5" opacity="0.3"/></svg>');
            overflow-x: hidden;
        }

        .card {
            background-color: rgba(255, 253, 250, 0.95);
            color: #5a3921;
            border: 1px solid #cd853f;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            backdrop-filter: blur(5px);
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

        .btn-primary, .btn-secondary, .btn-success {
            background-color: #8b4513;
            color: #f9f5f0;
            border: 1px solid #8b4513;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
        }

        .btn-primary:hover, .btn-secondary:hover, .btn-success:hover {
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

        /* Efectos especiales */
        .embroidery-icon {
            font-size: 1.5rem;
            margin: 0 5px;
            color: #8b4513;
        }

        .location-stamp {
            position: absolute;
            right: 20px;
            top: 20px;
            transform: rotate(5deg);
            opacity: 0.8;
            font-size: 0.7rem;
            color: #8b4513;
            font-family: 'Playfair Display', serif;
            text-align: center;
            border: 1px dashed #cd853f;
            padding: 5px;
            border-radius: 3px;
        }

        .thread-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, transparent, #cd853f, transparent);
            animation: weave 6s linear infinite;
            z-index: 10;
        }

        @keyframes weave {
            0% { top: 0; }
            50% { top: 100%; }
            100% { top: 0; }
        }

        .fabric-pattern {
            position: fixed;
            width: 150px;
            height: 150px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%23cd853f" stroke-width="0.5" opacity="0.1"/></svg>');
            animation: float 25s linear infinite;
            z-index: -1;
            opacity: 0.3;
        }

        @keyframes float {
            0% { transform: translate(-150px, 50vh) rotate(0deg); }
            100% { transform: translate(calc(100vw + 150px), calc(-50vh)) rotate(360deg); }
        }

        .welcome-note {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 0.7rem;
            color: rgba(139, 69, 19, 0.6);
            font-style: italic;
        }

        .embroidery-border {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 1;
        }

        .embroidery-border::before, .embroidery-border::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid #cd853f;
            border-radius: 50%;
        }

        .embroidery-border::before {
            top: 10px;
            left: 10px;
        }

        .embroidery-border::after {
            bottom: 10px;
            right: 10px;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            color: #5a3921;
        }

        .text-accent {
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
    </style>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>

<body>
    <!-- Efectos especiales -->
    <div class="thread-line"></div>
    <div class="fabric-pattern" style="top: 20%;"></div>
    <div class="fabric-pattern" style="top: 70%; animation-delay: 5s; animation-duration: 30s;"></div>
    <div class="fabric-pattern" style="top: 40%; animation-delay: 10s; animation-duration: 35s;"></div>
    <div class="welcome-note">
        <i class="fas fa-heart"></i> Bienvenido a STILOS - Huanta, Ayacucho
    </div>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 position-relative">
            <div class="embroidery-border"></div>
            <span class="location-stamp">STILOS<br>Huanta<br>Ayacucho</span>
            <div class="card-header text-center border-bottom" style="border-color: #cd853f !important;">
                <h1 class="store-name mt-3">
                    <i class="fas fa-tshirt embroidery-icon"></i> STILOS <i class="fas fa-tshirt embroidery-icon"></i>
                </h1>
                <p class="location mb-0">Huanta, Ayacucho</p>
                <p class="mb-0 mt-2">Sistema de acceso para empleados</p>
            </div>
            <div class="card-body">
                <form id="loginForm" method="POST" action="<?php echo BASE_URL ?>inicio">
                    <div class="mb-4">
                        <label for="usuario" class="form-label">
                            <i class="fas fa-user embroidery-icon"></i> Usuario
                        </label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock embroidery-icon"></i> Contraseña
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-sign-in-alt"></i> INGRESAR
                        </button>
                        <a href="<?php echo BASE_URL ?>olvidastetucontraseña" class="btn btn-secondary">
                            <i class="fas fa-question-circle"></i> ¿OLVIDÓ SU CONTRASEÑA?
                        </a>
                        <a href="<?php echo BASE_URL ?>suscribirte" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> REGISTRARSE
                        </a>
                    </div>
                </form>
                <div id="error-message" class="text-danger mt-3 text-center" style="display: none;">
                    <i class="fas fa-exclamation-triangle"></i> <span id="error-text"></span>
                </div>
            </div>
            <div class="card-footer text-center" style="border-top: 1px solid #cd853f; color: #8b4513;">
                <small>STILOS - Ropa y Bordados de Calidad</small>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="<?php BASE_URL; ?>views/js/functions_login.js"></script>
</body>

</html>