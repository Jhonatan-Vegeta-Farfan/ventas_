<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STILOS - Tienda de Ropa y Bordados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-brown: #8B4513;
            --secondary-gold: #D4AF37;
            --accent-beige: #F5F5DC;
            --dark-brown: #5D4037;
            --light-beige: #FFF8E1;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        body {
            background-color: var(--light-beige);
            color: var(--dark-brown);
            font-family: 'Raleway', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
            padding-top: 100px;
        }

        /* NAVBAR STILOS */
        .navbar-stilos {
            background: rgba(255, 253, 250, 0.98) !important;
            border-bottom: 3px solid var(--primary-brown);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            backdrop-filter: blur(10px);
            padding: 12px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            transition: all 0.3s ease;
        }

        .navbar-brand-stilos {
            position: relative;
            display: flex;
            align-items: center;
            text-decoration: none;
            flex-shrink: 0;
        }

        .logo-stilos {
            width: 180px;
            height: 60px;
            filter: drop-shadow(0 2px 4px rgba(139, 69, 19, 0.3));
            transition: all 0.3s ease;
        }

        .stilos-title {
            font-family: 'Playfair Display', serif;
            color: var(--primary-brown);
            font-size: 1.8rem;
            margin-left: 10px;
            letter-spacing: 2px;
            display: inline-block;
            vertical-align: middle;
            font-weight: 700;
            white-space: nowrap;
        }

        .location-badge {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 0.7rem;
            color: var(--primary-brown);
            transform: rotate(0deg);
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
            border: 1px dashed var(--primary-brown);
            padding: 3px 8px;
            border-radius: 3px;
            background: rgba(255, 253, 250, 0.9);
        }

        .nav-link-stilos {
            color: var(--dark-brown) !important;
            background: rgba(212, 175, 55, 0.1) !important;
            border: 1px solid transparent !important;
            margin: 0 5px;
            border-radius: 5px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            padding: 8px 15px;
            font-weight: 500;
            white-space: nowrap;
        }

        .nav-link-stilos:hover {
            background: rgba(139, 69, 19, 0.1) !important;
            color: var(--primary-brown) !important;
            border-color: var(--primary-brown) !important;
            transform: translateY(-2px);
        }

        .nav-link-stilos::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.3), transparent);
            transition: 0.5s;
        }

        .nav-link-stilos:hover::before {
            left: 100%;
        }

        /* BOTONES STILOS */
        .btn-stilos {
            background: var(--primary-brown);
            color: var(--light-beige);
            border: 1px solid var(--primary-brown);
            border-radius: 5px;
            padding: 8px 20px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .btn-stilos:hover {
            background: var(--dark-brown);
            color: #fff;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .btn-stilos-secondary {
            background: transparent;
            color: var(--primary-brown);
            border: 1px solid var(--primary-brown);
        }

        .btn-stilos-secondary:hover {
            background: var(--primary-brown);
            color: var(--light-beige);
        }

        /* EFECTOS ESPECIALES */
        .thread-line {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-brown), transparent);
            animation: weave 6s linear infinite;
            z-index: 1000;
        }

        @keyframes weave {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        .fabric-pattern {
            position: fixed;
            width: 120px;
            height: 120px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%238B4513" stroke-width="0.3" opacity="0.1"/></svg>');
            animation: float 25s linear infinite;
            z-index: -1;
            opacity: 0.3;
            pointer-events: none;
        }

        @keyframes float {
            0% { left: -10%; transform: rotate(0deg); }
            100% { left: 110%; transform: rotate(360deg); }
        }

        .main-content {
            padding: 20px 0;
            position: relative;
            z-index: 1;
            min-height: calc(100vh - 200px);
        }

        /* RESPONSIVE ADJUSTMENTS */
        @media (max-width: 1200px) {
            .logo-stilos {
                width: 160px;
                height: 55px;
            }
            
            .stilos-title {
                font-size: 1.6rem;
            }
            
            .nav-link-stilos {
                padding: 8px 12px;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 992px) {
            .logo-stilos {
                width: 140px;
                height: 50px;
            }
            
            .stilos-title {
                font-size: 1.4rem;
                margin-left: 8px;
            }
            
            .nav-link-stilos {
                padding: 8px 12px;
                margin: 3px 0;
                font-size: 0.8rem;
            }
            
            .navbar-nav .btn-stilos {
                margin-top: 10px;
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 90px;
            }
            
            .logo-stilos {
                width: 120px;
                height: 45px;
            }
            
            .stilos-title {
                font-size: 1.2rem;
                margin-left: 5px;
            }
            
            .navbar-collapse {
                background: rgba(255, 253, 250, 0.98);
                padding: 15px;
                border: 1px solid var(--primary-brown);
                margin-top: 10px;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            }
            
            .location-badge {
                display: none;
            }
            
            .navbar-nav .btn-stilos {
                margin-top: 5px;
                width: 100%;
                text-align: center;
            }
            
            .nav-link-stilos {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            body {
                padding-top: 80px;
            }
            
            .logo-stilos {
                width: 100px;
                height: 40px;
            }
            
            .stilos-title {
                font-size: 1rem;
                margin-left: 5px;
                letter-spacing: 1px;
            }
            
            .btn-stilos {
                padding: 6px 12px;
                font-size: 0.8rem;
            }
            
            .navbar-stilos {
                padding: 8px 0;
            }
        }

        @media (max-width: 400px) {
            .logo-stilos {
                width: 80px;
                height: 35px;
            }
            
            .stilos-title {
                font-size: 0.9rem;
                margin-left: 3px;
            }
            
            .navbar-toggler {
                padding: 4px 8px;
                font-size: 0.9rem;
            }
        }

        /* Estilos para el logo SVG personalizado */
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .embroidery-icon {
            font-size: 1.2rem;
            margin: 0 5px;
            color: var(--primary-brown);
        }
        
        /* Ajustes para el menú de navegación en pantallas pequeñas */
        .navbar-nav {
            align-items: center;
        }
        
        @media (max-width: 992px) {
            .navbar-nav {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- EFECTOS ESPECIALES -->
    <div class="thread-line"></div>
    <div class="fabric-pattern" style="top: 15%;"></div>
    <div class="fabric-pattern" style="top: 65%; animation-delay: 5s; animation-duration: 30s;"></div>
    <div class="fabric-pattern" style="top: 40%; animation-delay: 10s; animation-duration: 35s; width: 80px; height: 80px;"></div>

    <!-- NAVBAR STILOS -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stilos">
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-stilos" href="<?php echo BASE_URL; ?>producto">
                <div class="logo-container">
                    <!-- Logo SVG personalizado para STILOS -->
                    <svg class="logo-stilos" viewBox="0 0 180 60" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="brownGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#8B4513" />
                                <stop offset="100%" stop-color="#5D4037" />
                            </linearGradient>
                            <pattern id="fabricPattern" patternUnits="userSpaceOnUse" width="10" height="10">
                                <path d="M0,5 L10,5 M5,0 L5,10" stroke="#D4AF37" stroke-width="0.5" opacity="0.3"/>
                            </pattern>
                        </defs>
                        
                        <!-- Fondo con patrón de tela -->
                        <rect width="180" height="60" fill="url(#fabricPattern)" opacity="0.1" rx="5"/>
                        
                        <!-- Marco decorativo -->
                        <rect x="2" y="2" width="176" height="56" fill="none" stroke="url(#brownGradient)" stroke-width="1.5" rx="5"/>
                        
                        <!-- Letra S estilizada -->
                        <path d="M30,15 C30,10 35,8 40,10 C45,12 45,18 40,20 C35,22 30,25 30,30 C30,35 35,38 40,40 C45,42 50,40 50,35" 
                              fill="none" stroke="url(#brownGradient)" stroke-width="3" stroke-linecap="round"/>
                        
                        <!-- Letra T -->
                        <path d="M65,15 L65,35 M60,15 L70,15" 
                              fill="none" stroke="url(#brownGradient)" stroke-width="3" stroke-linecap="round"/>
                        
                        <!-- Letra I -->
                        <path d="M80,15 L80,35" 
                              fill="none" stroke="url(#brownGradient)" stroke-width="3" stroke-linecap="round"/>
                        
                        <!-- Letra L -->
                        <path d="M95,15 L95,35 L105,35" 
                              fill="none" stroke="url(#brownGradient)" stroke-width="3" stroke-linecap="round"/>
                        
                        <!-- Letra O -->
                        <ellipse cx="125" cy="25" rx="8" ry="10" 
                                 fill="none" stroke="url(#brownGradient)" stroke-width="3"/>
                        
                        <!-- Letra S -->
                        <path d="M140,15 C140,10 145,8 150,10 C155,12 155,18 150,20 C145,22 140,25 140,30 C140,35 145,38 150,40 C155,42 160,40 160,35" 
                              fill="none" stroke="url(#brownGradient)" stroke-width="3" stroke-linecap="round"/>
                        
                        <!-- Elementos de bordado decorativos -->
                        <circle cx="20" cy="15" r="2" fill="#D4AF37" opacity="0.7"/>
                        <circle cx="20" cy="45" r="2" fill="#D4AF37" opacity="0.7"/>
                        <circle cx="160" cy="15" r="2" fill="#D4AF37" opacity="0.7"/>
                        <circle cx="160" cy="45" r="2" fill="#D4AF37" opacity="0.7"/>
                        
                        <!-- Línea decorativa inferior -->
                        <path d="M25,50 L155,50" stroke="#D4AF37" stroke-width="1.5" stroke-dasharray="2,2"/>
                    </svg>
                    <span class="stilos-title">STILOS</span>
                </div>
            </a>

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStilos" aria-controls="navbarStilos" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarStilos">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>producto"><i class="fas fa-tshirt"></i> TIENDA</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>novedades"><i class="fas fa-newspaper"></i> NOVEDADES</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>nosotros"><i class="fas fa-users"></i> NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>contactanos"><i class="fas fa-phone"></i> CONTACTO</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>ubicacion"><i class="fas fa-map-marker-alt"></i> UBICACIÓN</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>rutadeenvio"><i class="fas fa-truck"></i> ENVÍOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>libroreclamaciones"><i class="fas fa-book"></i> RECLAMOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-stilos" href="<?php echo BASE_URL ?>comentarios"><i class="fas fa-comments"></i> COMENTARIOS</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-stilos btn-stilos-secondary me-2" href="<?php echo BASE_URL ?>login">
                            <i class="fas fa-user"></i> INICIAR SESIÓN
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-stilos" href="<?php echo BASE_URL ?>panel">
                            <i class="fas fa-cog"></i> PANEL
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>