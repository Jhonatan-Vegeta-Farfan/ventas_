<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área 51 - Registro Intergaláctico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset para eliminar header y footer */
        header, footer, .navbar, .footer {
            display: none !important;
            height: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            border: none !important;
        }
        
        body {
            padding-top: 0 !important;
            margin: 0 !important;
            overflow-x: hidden;
            min-height: 100vh;
            background-color: #0a001a;
        }

        /* Variables de tema alienígena */
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
            --energy-pink: #ff00aa;
            --alien-gold: #ffd700;
        }
        
        /* Fuente alienígena */
        @font-face {
            font-family: 'Alien Encounter';
            src: url('https://www.dafontfree.io/data/30/a/12484/Alien-Encounters-Regular.ttf') format('truetype');
        }
        
        /* Estilos base */
        body {
            background-color: var(--dark-space);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
            color: var(--alien-green);
            font-family: 'Alien Encounter', 'Orbitron', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Efecto scanner */
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

        /* Efectos de UFO */
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

        /* Contenedor principal */
        .alien-container {
            position: relative;
            z-index: 1;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Tarjeta alienígena */
        .alien-card {
            background: rgba(20, 10, 40, 0.7);
            border: 3px solid var(--alien-green);
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 255, 157, 0.4);
            overflow: hidden;
            position: relative;
            transition: all 0.5s;
            width: 100%;
            max-width: 1000px;
        }

        .alien-card:hover {
            box-shadow: 0 0 50px var(--alien-purple);
            transform: translateY(-5px);
        }

        .alien-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        /* Encabezado de tarjeta */
        .alien-card-header {
            border-bottom: 2px solid var(--alien-purple);
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 1;
            background: rgba(10, 0, 26, 0.5);
        }

        .alien-card-header h3 {
            color: var(--ufo-blue);
            text-shadow: 0 0 10px var(--alien-green);
            font-size: 1.8rem;
            margin: 0;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .alien-card-header p {
            color: var(--alien-green);
            margin-top: 10px;
            font-size: 1.1rem;
            text-shadow: 0 0 5px var(--alien-green);
        }

        /* Cuerpo de tarjeta */
        .alien-card-body {
            padding: 25px;
            position: relative;
            z-index: 1;
        }

        /* Formulario alienígena */
        .alien-form-label {
            color: var(--ufo-blue);
            margin-bottom: 8px;
            display: block;
            font-size: 1rem;
            text-shadow: 0 0 5px var(--ufo-blue);
            letter-spacing: 1px;
        }

        .alien-form-control {
            background-color: rgba(10, 0, 26, 0.8);
            border: 2px solid var(--alien-green);
            border-radius: 8px;
            color: var(--alien-green);
            padding: 12px 15px;
            width: 100%;
            margin-bottom: 20px;
            font-family: 'Orbitron', sans-serif;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(0, 255, 157, 0.1);
        }

        .alien-form-control:focus {
            border-color: var(--energy-pink);
            box-shadow: 0 0 15px var(--energy-pink);
            outline: none;
            background-color: rgba(20, 0, 40, 0.9);
        }

        .alien-form-select {
            background-color: rgba(10, 0, 26, 0.8);
            border: 2px solid var(--alien-green);
            border-radius: 8px;
            color: var(--alien-green);
            padding: 12px 15px;
            width: 100%;
            margin-bottom: 20px;
            font-family: 'Orbitron', sans-serif;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='%2300ff9d' d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .alien-form-select:focus {
            border-color: var(--energy-pink);
            box-shadow: 0 0 15px var(--energy-pink);
        }

        /* Checkbox personalizado */
        .alien-form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
        }

        .alien-form-check-input {
            margin-right: 10px;
            appearance: none;
            width: 22px;
            height: 22px;
            border: 2px solid var(--alien-green);
            border-radius: 4px;
            background-color: transparent;
            position: relative;
            cursor: pointer;
            transition: all 0.3s;
        }

        .alien-form-check-input:checked {
            background-color: var(--alien-green);
            box-shadow: 0 0 10px var(--alien-green);
        }

        .alien-form-check-input:checked::after {
            content: '✓';
            position: absolute;
            color: var(--dark-space);
            font-size: 14px;
            font-weight: bold;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .alien-form-check-label {
            color: #ccc;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .alien-form-check:hover .alien-form-check-label {
            color: var(--alien-green);
        }

        /* Botones alienígenas */
        .alien-btn {
            display: inline-block;
            background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
            color: #000;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(0, 255, 157, 0.3);
            text-decoration: none;
            cursor: pointer;
            font-family: 'Orbitron', sans-serif;
            margin: 5px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--alien-green);
        }

        .alien-btn:hover {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
            box-shadow: 0 0 25px var(--alien-green);
            transform: translateY(-3px);
        }

        .alien-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .alien-btn:hover::before {
            left: 100%;
        }

        .alien-btn-secondary {
            background: linear-gradient(45deg, var(--alien-purple), var(--energy-pink));
            border: 1px solid var(--alien-purple);
        }

        .alien-btn-secondary:hover {
            background: linear-gradient(45deg, var(--energy-pink), var(--alien-purple));
        }

        /* Imagen alienígena */
        .alien-img {
            border-radius: 10px;
            border: 3px solid var(--alien-green);
            box-shadow: 0 0 20px var(--alien-purple);
            max-width: 100%;
            height: auto;
            transition: all 0.5s;
            position: relative;
            z-index: 1;
        }

        .alien-img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px var(--energy-pink);
        }

        .alien-img-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .alien-img-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, transparent 40%, var(--alien-purple) 150%);
            z-index: 2;
            opacity: 0.3;
        }

        /* Efecto de energía */
        .alien-energy {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--alien-green), var(--ufo-blue), var(--alien-purple));
            opacity: 0.7;
            transition: all 0.5s;
        }

        .alien-card:hover .alien-energy {
            height: 8px;
            opacity: 1;
        }

        /* Efecto de partículas */
        .alien-particle {
            position: absolute;
            background-color: var(--alien-green);
            border-radius: 50%;
            opacity: 0.6;
            z-index: -1;
            animation: float 15s linear infinite;
        }

        @keyframes float {
            0% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 0.6; }
            90% { opacity: 0.6; }
            100% { transform: translateY(-100vh) translateX(20px); opacity: 0; }
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .alien-card-header h3 {
                font-size: 1.6rem;
            }
            
            .alien-card-body {
                padding: 20px;
            }
        }

        @media (max-width: 992px) {
            .alien-card-header h3 {
                font-size: 1.4rem;
            }
            
            .alien-form-control, .alien-form-select {
                padding: 10px 12px;
            }
            
            .alien-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .alien-card-header h3 {
                font-size: 1.3rem;
            }
            
            .alien-card-header p {
                font-size: 1rem;
            }
            
            .alien-card-body {
                padding: 15px;
            }
            
            .alien-form-label {
                font-size: 0.9rem;
            }
            
            .row > .col-md-6:last-child {
                margin-top: 30px;
            }
        }

        @media (max-width: 576px) {
            .alien-card-header h3 {
                font-size: 1.2rem;
            }
            
            .alien-card-header p {
                font-size: 0.9rem;
            }
            
            .alien-form-control, .alien-form-select {
                padding: 8px 10px;
                font-size: 0.9rem;
            }
            
            .alien-btn {
                padding: 8px 15px;
                font-size: 0.8rem;
            }
            
            .alien-form-check-label {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Efecto scanner -->
    <div class="alien-scanner"></div>
    
    <!-- UFOs volando -->
    <div class="ufo-fleet" style="top: 15%; animation: fly 25s linear infinite;"></div>
    <div class="ufo-fleet" style="top: 65%; animation: fly 30s linear infinite 5s; width: 80px; height: 40px;"></div>
    <div class="ufo-fleet" style="top: 40%; animation: fly 35s linear infinite 10s; opacity: 0.5;"></div>

    <div class="alien-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="alien-card">
                        <div class="alien-card-header">
                            <h3><i class="fas fa-user-astronaut"></i> ¡ÚNETE A NUESTRA COMUNIDAD INTERGALÁCTICA!</h3>
                            <p>Recibe un 50% de descuento en tu primera compra</p>
                            <div class="alien-energy"></div>
                        </div>
                        <div class="alien-card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form id="alien-subscription-form">
                                        <div class="mb-3">
                                            <label for="alien-nombre" class="alien-form-label">
                                                <i class="fas fa-id-card"></i> Nombre Terrestre
                                            </label>
                                            <input type="text" class="alien-form-control" id="alien-nombre" placeholder="Ej: Zorgon-9" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alien-apellido" class="alien-form-label">
                                                <i class="fas fa-stars"></i> Apellido Galáctico
                                            </label>
                                            <input type="text" class="alien-form-control" id="alien-apellido" placeholder="Ej: De Andrómeda" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alien-email" class="alien-form-label">
                                                <i class="fas fa-satellite-dish"></i> Frecuencia de Comunicación (Email)
                                            </label>
                                            <input type="email" class="alien-form-control" id="alien-email" placeholder="ejemplo@galaxia.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alien-contrasena" class="alien-form-label">
                                                <i class="fas fa-key"></i> Código Secreto
                                            </label>
                                            <input type="password" class="alien-form-control" id="alien-contrasena" placeholder="••••••••" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alien-celular" class="alien-form-label">
                                                <i class="fas fa-mobile-alt"></i> Dispositivo de Contacto
                                            </label>
                                            <input type="tel" class="alien-form-control" id="alien-celular" placeholder="+51 999 999 999" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alien-fecha-nacimiento" class="alien-form-label">
                                                <i class="fas fa-calendar-alt"></i> Fecha de Aterrizaje en la Tierra
                                            </label>
                                            <input type="date" class="alien-form-control" id="alien-fecha-nacimiento" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alien-genero" class="alien-form-label">
                                                <i class="fas fa-dna"></i> Tipo de Especie
                                            </label>
                                            <select class="alien-form-select" id="alien-genero" required>
                                                <option value="">Selecciona tu especie</option>
                                                <option value="gris">Gris</option>
                                                <option value="reptiliano">Reptiliano</option>
                                                <option value="nordico">Nórdico</option>
                                                <option value="hibrido">Híbrido</option>
                                                <option value="otro">Otro</option>
                                            </select>
                                        </div>
                                        <div class="alien-form-check">
                                            <input class="alien-form-check-input" type="checkbox" value="" id="alien-politicas" required>
                                            <label class="alien-form-check-label" for="alien-politicas">
                                                Acepto los términos del Tratado Intergaláctico de Privacidad.
                                            </label>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="alien-btn">
                                                <i class="fas fa-rocket"></i> ACTIVAR DESCUENTO
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-center mt-3">
                                        <a href="<?php echo BASE_URL ?>producto" class="alien-btn alien-btn-secondary">
                                            <i class="fas fa-eye"></i> Continuar como visitante
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center align-items-center">
                                    <div class="alien-img-container">
                                        <img src="https://img.pikbest.com/origin/09/25/32/52rpIkbEsTuQ5.png!sw800" 
                                             class="alien-img" 
                                             alt="Alienígena">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script para redireccionar al usuario al presionar el botón
        document.getElementById('alien-subscription-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Efecto visual de confirmación
            const card = document.querySelector('.alien-card');
            card.style.boxShadow = '0 0 50px var(--energy-pink)';
            card.style.transform = 'scale(1.02)';
            
            // Simulación de envío de datos
            setTimeout(function() {
                window.location.href = '<?php echo BASE_URL ?>producto';
            }, 2000);
            
            setTimeout(() => {
                card.style.boxShadow = '0 0 30px rgba(0, 255, 157, 0.4)';
                card.style.transform = 'scale(1)';
            }, 2000);
        });

        // Crear partículas flotantes
        function createParticles() {
            const container = document.querySelector('.alien-container');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('alien-particle');
                
                // Tamaño aleatorio entre 1px y 3px
                const size = Math.random() * 2 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Posición aleatoria
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Opacidad y delay aleatorio
                particle.style.opacity = Math.random() * 0.6;
                particle.style.animationDelay = `${Math.random() * 15}s`;
                particle.style.animationDuration = `${Math.random() * 10 + 10}s`;
                
                container.appendChild(particle);
            }
        }
        
        // Llamar a la función cuando el DOM esté cargado
        document.addEventListener('DOMContentLoaded', createParticles);
    </script>
</body>
</html>