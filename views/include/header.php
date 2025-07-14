<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁREA 51 - ACCESO RESTRINGIDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
        }
        
        @font-face {
            font-family: 'Alien Encounter';
            src: url('https://www.dafontfree.io/data/30/a/12484/Alien-Encounters-Regular.ttf') format('truetype');
        }
        
        body {
            background-color: var(--dark-space);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
            color: var(--alien-green);
            font-family: 'Alien Encounter', 'Orbitron', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* NAVBAR ALIENÍGENA */
        .navbar-area51 {
            background: rgba(10, 0, 26, 0.95) !important;
            border-bottom: 3px solid var(--alien-green);
            box-shadow: 0 0 25px rgba(0, 255, 157, 0.4);
            backdrop-filter: blur(10px);
            padding: 10px 0;
        }

        .navbar-brand-alien {
            position: relative;
            display: flex;
            align-items: center;
        }

        .logo-alien {
            width: 180px;
            filter: drop-shadow(0 0 10px var(--alien-green));
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .nav-link-alien {
            color: var(--alien-green) !important;
            background: rgba(0, 50, 40, 0.3) !important;
            border: 1px solid var(--alien-green) !important;
            margin: 0 8px;
            border-radius: 8px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
            padding: 10px 20px;
        }

        .nav-link-alien:hover {
            background: rgba(0, 255, 157, 0.2) !important;
            color: var(--ufo-blue) !important;
            border-color: var(--ufo-blue) !important;
            box-shadow: 0 0 15px rgba(0, 225, 255, 0.6);
            transform: translateY(-3px);
        }

        .nav-link-alien::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 157, 0.4), transparent);
            transition: 0.5s;
        }

        .nav-link-alien:hover::before {
            left: 100%;
        }

        /* BOTONES ALIEN */
        .btn-alien {
            background: rgba(0, 40, 30, 0.7);
            color: var(--alien-green);
            border: 1px solid var(--alien-green);
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 255, 157, 0.3);
        }

        .btn-alien:hover {
            background: var(--alien-green);
            color: #000;
            box-shadow: 0 0 20px var(--alien-green);
            transform: translateY(-3px);
        }

        .btn-alien::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 157, 0.4), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }

        .btn-alien:hover::after {
            transform: translateX(100%);
        }

        /* EFECTOS ESPECIALES */
        .alien-scanner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--alien-green), transparent);
            box-shadow: 0 0 10px var(--alien-green);
            animation: scan 4s linear infinite;
            z-index: 1000;
        }

        @keyframes scan {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        .ufo-fleet {
            position: fixed;
            width: 120px;
            height: 60px;
            background: radial-gradient(ellipse at center, var(--ufo-blue) 0%, transparent 70%);
            border-radius: 50%;
            filter: drop-shadow(0 0 15px var(--ufo-blue));
            z-index: -1;
            opacity: 0.7;
        }

        .security-badge {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 0.7rem;
            color: #ff0055;
            transform: rotate(15deg);
            text-shadow: 0 0 5px #ff0055;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .content {
            padding-top: 120px;
            position: relative;
            z-index: 1;
        }

        /* EFECTO PARALLAX */
        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-image: url('https://images.unsplash.com/photo-1534796636912-3b95b3ab5986?q=80&w=1000');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
        }

        @media (max-width: 992px) {
            .navbar-brand-alien img {
                width: 140px;
            }
            .nav-link-alien {
                padding: 8px 15px;
                margin: 5px 0;
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- EFECTOS ESPECIALES -->
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 15%; animation: fly 25s linear infinite;"></div>
    <div class="ufo-fleet" style="top: 65%; animation: fly 30s linear infinite 5s;"></div>
    <div class="ufo-fleet" style="top: 40%; animation: fly 35s linear infinite 10s; width: 80px; height: 40px;"></div>
    <div class="parallax-bg"></div>

    <!-- NAVBAR ALIEN -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-area51 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-alien" href="<?php echo BASE_URL ?>producto">
                <img src="https://img.pikbest.com/origin/09/25/32/52rpIkbEsTuQ5.png!sw800" alt="ÁREA 51" class="logo-alien">
                <span class="security-badge">NIVEL 5<br>CLASIFICADO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAlien">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAlien">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>producto"><i class="fas fa-shopping-cart"></i> TIENDA</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>novedades"><i class="fas fa-newspaper"></i> NOVEDADES</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>nosotros"><i class="fas fa-user-astronaut"></i> NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>contactanos"><i class="fas fa-phone-volume"></i> CONTACTO</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>ubicacion"><i class="fas fa-map-marked-alt"></i> UBICACIÓN</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>rutadeenvio"><i class="fas fa-route"></i> ENVÍOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>libroreclamaciones"><i class="fas fa-book"></i> RECLAMOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>comentarios"><i class="fas fa-comments"></i> COMENTARIOS</a></li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <button class="btn btn-alien">
                            <i class="fas fa-user-secret"></i> 
                            <?php echo isset($_SESSION['sesion_ventas_nombres']) ? strtoupper($_SESSION['sesion_ventas_nombres']) : 'INVITADO'; ?>
                        </button>
                    </li>
                    <li class="nav-item me-2">
                        <button class="btn btn-alien" onclick="cerrar_sesion();">
                            <i class="fas fa-sign-out-alt"></i> SALIR
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-alien" href="<?php echo BASE_URL ?>panel" style="background: rgba(157, 0, 255, 0.3); border-color: var(--alien-purple);">
                            <i class="fas fa-lock"></i> PANEL
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <!-- CONTENIDO PRINCIPAL -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
        
        // Efecto de movimiento para los UFOs
        document.querySelectorAll('.ufo-fleet').forEach((ufo, index) => {
            ufo.style.left = `${Math.random() * 100}%`;
            ufo.style.animationDelay = `${index * 5}s`;
            ufo.style.animationDuration = `${20 + Math.random() * 20}s`;
        });

        // Efecto activo para los enlaces
        const navLinks = document.querySelectorAll('.nav-link-alien');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>