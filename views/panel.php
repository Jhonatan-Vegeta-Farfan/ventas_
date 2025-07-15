<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Área 51</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Variables y estilos base del tema alienígena */
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
            --energy-pink: #ff00aa;
        }
        
        body {
            background-color: var(--dark-space);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
            color: var(--alien-green);
            font-family: 'Orbitron', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
            padding-top: 80px;
        }

        /* Efectos especiales */
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
            pointer-events: none;
            animation: fly 25s linear infinite;
        }

        @keyframes fly {
            0% { left: -10%; }
            100% { left: 110%; }
        }

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

        /* Estilos del panel de control */
        .admin-panel {
            padding: 30px 0;
            position: relative;
            z-index: 1;
        }

        .panel-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--ufo-blue);
            text-shadow: 0 0 15px var(--alien-green);
            letter-spacing: 3px;
            font-weight: bold;
            position: relative;
        }

        .panel-title::before,
        .panel-title::after {
            content: '✧';
            color: var(--alien-purple);
            margin: 0 15px;
            text-shadow: 0 0 10px var(--energy-pink);
        }

        .admin-card {
            background: rgba(20, 10, 40, 0.7);
            border: 2px solid var(--alien-green);
            border-radius: 15px;
            padding: 25px;
            height: 100%;
            transition: all 0.5s;
            box-shadow: 0 0 20px rgba(0, 255, 157, 0.2);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .admin-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 30px var(--alien-green);
            border-color: var(--ufo-blue);
        }

        .card-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            transition: all 0.5s;
        }

        .admin-card:hover .card-icon {
            transform: scale(1.1) rotate(10deg);
            filter: drop-shadow(0 0 10px currentColor);
        }

        .card-title {
            color: var(--ufo-blue);
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .admin-btn {
            flex: 1;
            margin: 0 5px;
            border-radius: 8px;
            padding: 8px 0;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s;
            text-align: center;
            border: 1px solid;
            background: rgba(0, 0, 0, 0.3);
        }

        .btn-register {
            color: var(--alien-green);
            border-color: var(--alien-green);
        }

        .btn-view {
            color: var(--ufo-blue);
            border-color: var(--ufo-blue);
        }

        .admin-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 15px currentColor;
            background: rgba(255, 255, 255, 0.1);
        }

        /* Colores específicos para cada tarjeta */
        .card-products {
            border-color: var(--alien-green);
        }

        .card-products .card-icon {
            color: var(--alien-green);
        }

        .card-products:hover {
            box-shadow: 0 0 30px var(--alien-green);
        }

        .card-users {
            border-color: var(--alien-purple);
        }

        .card-users .card-icon {
            color: var(--alien-purple);
        }

        .card-users:hover {
            box-shadow: 0 0 30px var(--alien-purple);
        }

        .card-categories {
            border-color: var(--energy-pink);
        }

        .card-categories .card-icon {
            color: var(--energy-pink);
        }

        .card-categories:hover {
            box-shadow: 0 0 30px var(--energy-pink);
        }

        .card-purchases {
            border-color: var(--ufo-blue);
        }

        .card-purchases .card-icon {
            color: var(--ufo-blue);
        }

        .card-purchases:hover {
            box-shadow: 0 0 30px var(--ufo-blue);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .panel-title {
                font-size: 1.8rem;
            }
            
            .card-icon {
                font-size: 2.5rem;
            }
            
            .card-buttons {
                flex-direction: column;
            }
            
            .admin-btn {
                margin: 5px 0;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Efectos especiales -->
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 15%; animation-duration: 25s;"></div>
    <div class="ufo-fleet" style="top: 65%; animation-duration: 30s; animation-delay: 5s;"></div>
    <div class="ufo-fleet" style="top: 40%; width: 80px; height: 40px; animation-duration: 35s; animation-delay: 10s;"></div>
    <div class="parallax-bg"></div>

    <!-- Navbar Alien (debes incluir el mismo que ya tenías) -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-area51">
        <!-- Tu navbar existente aquí -->
    </nav>

    <!-- Panel de Control -->
    <div class="container admin-panel">
        <h1 class="panel-title">PANEL DE CONTROL INTERGALÁCTICO</h1>
        
        <div class="row g-4">
            <!-- Productos -->
            <div class="col-md-6 col-lg-3">
                <div class="admin-card card-products">
                    <div class="text-center">
                        <i class="fas fa-cubes card-icon"></i>
                        <h3 class="card-title">ARTEFACTOS EXTRATERRESTRES</h3>
                    </div>
                    <div class="card-buttons">
                        <a href="<?php echo BASE_URL ?>nuevo-producto" class="admin-btn btn-register">
                            <i class="fas fa-plus-circle"></i> Registrar
                        </a>
                        <a href="<?php echo BASE_URL ?>productos" class="admin-btn btn-view">
                            <i class="fas fa-eye"></i> Ver Todos
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Usuarios -->
            <div class="col-md-6 col-lg-3">
                <div class="admin-card card-users">
                    <div class="text-center">
                        <i class="fas fa-user-astronaut card-icon"></i>
                        <h3 class="card-title">ESPECIES REGISTRADAS</h3>
                    </div>
                    <div class="card-buttons">
                        <a href="<?php echo BASE_URL ?>nuevo-persona" class="admin-btn btn-register">
                            <i class="fas fa-plus-circle"></i> Registrar
                        </a>
                        <a href="<?php echo BASE_URL ?>usuarios" class="admin-btn btn-view">
                            <i class="fas fa-eye"></i> Ver Todos
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Categorías -->
            <div class="col-md-6 col-lg-3">
                <div class="admin-card card-categories">
                    <div class="text-center">
                        <i class="fas fa-atom card-icon"></i>
                        <h3 class="card-title">DIMENSIONES</h3>
                    </div>
                    <div class="card-buttons">
                        <a href="<?php echo BASE_URL ?>nuevo-categoria" class="admin-btn btn-register">
                            <i class="fas fa-plus-circle"></i> Registrar
                        </a>
                        <a href="<?php echo BASE_URL ?>categorias" class="admin-btn btn-view">
                            <i class="fas fa-eye"></i> Ver Todos
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Compras -->
            <div class="col-md-6 col-lg-3">
                <div class="admin-card card-purchases">
                    <div class="text-center">
                        <i class="fas fa-rocket card-icon"></i>
                        <h3 class="card-title">EXPEDICIONES</h3>
                    </div>
                    <div class="card-buttons">
                        <a href="<?php echo BASE_URL ?>nuevo-compra" class="admin-btn btn-register">
                            <i class="fas fa-plus-circle"></i> Registrar
                        </a>
                        <a href="<?php echo BASE_URL ?>compras" class="admin-btn btn-view">
                            <i class="fas fa-eye"></i> Ver Todos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Alien (debes incluir el mismo que ya tenías) -->
    <footer class="alien-footer">
        <!-- Tu footer existente aquí -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Efecto adicional para las tarjetas
        document.querySelectorAll('.admin-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const energy = document.createElement('div');
                energy.style.position = 'absolute';
                energy.style.bottom = '0';
                energy.style.left = '0';
                energy.style.width = '100%';
                energy.style.height = '5px';
                energy.style.background = `linear-gradient(90deg, ${card.style.borderColor}, ${card.style.borderColor.replace(')', ', 0.5)')}, transparent)`;
                energy.style.opacity = '0';
                energy.style.transition = 'all 0.5s';
                card.appendChild(energy);
                
                setTimeout(() => {
                    energy.style.height = '10px';
                    energy.style.opacity = '1';
                }, 10);
            });
            
            card.addEventListener('mouseleave', () => {
                const energy = card.querySelector('div');
                if (energy) {
                    energy.style.height = '0';
                    energy.style.opacity = '0';
                    setTimeout(() => energy.remove(), 500);
                }
            });
        });
    </script>
</body>
</html>