<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STILOS - Registro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
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
            background-color: #f9f5f0;
        }

        /* Variables de tema textil */
        :root {
            --primary-brown: #8b4513;
            --secondary-brown: #a0522d;
            --accent-gold: #cd853f;
            --light-beige: #f9f5f0;
            --dark-brown: #5a3921;
            --highlight: #d2691e;
        }
        
        /* Fuentes elegantes */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        /* Estilos base */
        body {
            background-color: var(--light-beige);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.3" opacity="0.1"/></svg>');
            color: var(--dark-brown);
            font-family: 'Raleway', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Efecto de hilo */
        .thread-scanner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
            box-shadow: 0 0 5px var(--accent-gold);
            animation: scan 4s linear infinite;
            z-index: 1000;
        }

        @keyframes scan {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        /* Efectos de patrones de tela */
        .fabric-pattern {
            position: fixed;
            width: 120px;
            height: 120px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%23cd853f" stroke-width="0.5" opacity="0.2"/></svg>');
            z-index: -1;
            opacity: 0.5;
            pointer-events: none;
            animation: float 25s linear infinite;
        }

        @keyframes float {
            0% { left: -10%; }
            100% { left: 110%; }
        }

        /* Contenedor principal */
        .stilos-container {
            position: relative;
            z-index: 1;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Tarjeta STILOS */
        .stilos-card {
            background: rgba(255, 253, 250, 0.95);
            border: 2px solid var(--accent-gold);
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(139, 69, 19, 0.2);
            overflow: hidden;
            position: relative;
            transition: all 0.5s;
            width: 100%;
            max-width: 1000px;
        }

        .stilos-card:hover {
            box-shadow: 0 8px 30px rgba(139, 69, 19, 0.3);
            transform: translateY(-5px);
        }

        .stilos-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%23cd853f" opacity="0.05"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        /* Encabezado de tarjeta */
        .stilos-card-header {
            border-bottom: 2px solid var(--accent-gold);
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 1;
            background: rgba(249, 245, 240, 0.8);
        }

        .stilos-card-header h3 {
            color: var(--primary-brown);
            font-size: 1.8rem;
            margin: 0;
            letter-spacing: 1px;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
        }

        .stilos-card-header p {
            color: var(--dark-brown);
            margin-top: 10px;
            font-size: 1.1rem;
        }

        /* Cuerpo de tarjeta */
        .stilos-card-body {
            padding: 25px;
            position: relative;
            z-index: 1;
        }

        /* Formulario STILOS */
        .stilos-form-label {
            color: var(--primary-brown);
            margin-bottom: 8px;
            display: block;
            font-size: 1rem;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .stilos-form-control {
            background-color: rgba(255, 253, 250, 0.9);
            border: 2px solid var(--accent-gold);
            border-radius: 8px;
            color: var(--dark-brown);
            padding: 12px 15px;
            width: 100%;
            margin-bottom: 20px;
            font-family: 'Raleway', sans-serif;
            transition: all 0.3s;
            box-shadow: 0 0 5px rgba(205, 133, 63, 0.1);
        }

        .stilos-form-control:focus {
            border-color: var(--primary-brown);
            box-shadow: 0 0 10px rgba(139, 69, 19, 0.2);
            outline: none;
            background-color: rgba(255, 253, 250, 1);
        }

        .stilos-form-select {
            background-color: rgba(255, 253, 250, 0.9);
            border: 2px solid var(--accent-gold);
            border-radius: 8px;
            color: var(--dark-brown);
            padding: 12px 15px;
            width: 100%;
            margin-bottom: 20px;
            font-family: 'Raleway', sans-serif;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='%238b4513' d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .stilos-form-select:focus {
            border-color: var(--primary-brown);
            box-shadow: 0 0 10px rgba(139, 69, 19, 0.2);
        }

        /* Checkbox personalizado */
        .stilos-form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
        }

        .stilos-form-check-input {
            margin-right: 10px;
            appearance: none;
            width: 22px;
            height: 22px;
            border: 2px solid var(--accent-gold);
            border-radius: 4px;
            background-color: transparent;
            position: relative;
            cursor: pointer;
            transition: all 0.3s;
        }

        .stilos-form-check-input:checked {
            background-color: var(--accent-gold);
            box-shadow: 0 0 5px var(--accent-gold);
        }

        .stilos-form-check-input:checked::after {
            content: '✓';
            position: absolute;
            color: var(--light-beige);
            font-size: 14px;
            font-weight: bold;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .stilos-form-check-label {
            color: var(--dark-brown);
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .stilos-form-check:hover .stilos-form-check-label {
            color: var(--primary-brown);
        }

        /* Botones STILOS */
        .stilos-btn {
            display: inline-block;
            background: linear-gradient(45deg, var(--primary-brown), var(--accent-gold));
            color: var(--light-beige);
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(139, 69, 19, 0.2);
            text-decoration: none;
            cursor: pointer;
            font-family: 'Raleway', sans-serif;
            margin: 5px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--primary-brown);
        }

        .stilos-btn:hover {
            background: linear-gradient(45deg, var(--accent-gold), var(--primary-brown));
            color: #fff;
            box-shadow: 0 0 15px rgba(139, 69, 19, 0.4);
            transform: translateY(-3px);
        }

        .stilos-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .stilos-btn:hover::before {
            left: 100%;
        }

        .stilos-btn-secondary {
            background: linear-gradient(45deg, var(--accent-gold), var(--highlight));
            border: 1px solid var(--accent-gold);
        }

        .stilos-btn-secondary:hover {
            background: linear-gradient(45deg, var(--highlight), var(--accent-gold));
        }

        /* Imagen STILOS */
        .stilos-img {
            border-radius: 10px;
            border: 2px solid var(--accent-gold);
            box-shadow: 0 0 15px rgba(139, 69, 19, 0.2);
            max-width: 100%;
            height: auto;
            transition: all 0.5s;
            position: relative;
            z-index: 1;
        }

        .stilos-img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(139, 69, 19, 0.3);
        }

        .stilos-img-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .stilos-img-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, transparent 40%, var(--accent-gold) 150%);
            z-index: 2;
            opacity: 0.1;
        }

        /* Efecto de borde decorativo */
        .stilos-border {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-brown), var(--accent-gold), var(--primary-brown));
            opacity: 0.7;
            transition: all 0.5s;
        }

        .stilos-card:hover .stilos-border {
            height: 6px;
            opacity: 1;
        }

        /* Efecto de hilos flotantes */
        .thread-particle {
            position: absolute;
            background-color: var(--accent-gold);
            border-radius: 50%;
            opacity: 0.3;
            z-index: -1;
            animation: float 15s linear infinite;
        }

        @keyframes float {
            0% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 0.3; }
            90% { opacity: 0.3; }
            100% { transform: translateY(-100vh) translateX(20px); opacity: 0; }
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .stilos-card-header h3 {
                font-size: 1.6rem;
            }
            
            .stilos-card-body {
                padding: 20px;
            }
        }

        @media (max-width: 992px) {
            .stilos-card-header h3 {
                font-size: 1.4rem;
            }
            
            .stilos-form-control, .stilos-form-select {
                padding: 10px 12px;
            }
            
            .stilos-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .stilos-card-header h3 {
                font-size: 1.3rem;
            }
            
            .stilos-card-header p {
                font-size: 1rem;
            }
            
            .stilos-card-body {
                padding: 15px;
            }
            
            .stilos-form-label {
                font-size: 0.9rem;
            }
            
            .row > .col-md-6:last-child {
                margin-top: 30px;
            }
        }

        @media (max-width: 576px) {
            .stilos-card-header h3 {
                font-size: 1.2rem;
            }
            
            .stilos-card-header p {
                font-size: 0.9rem;
            }
            
            .stilos-form-control, .stilos-form-select {
                padding: 8px 10px;
                font-size: 0.9rem;
            }
            
            .stilos-btn {
                padding: 8px 15px;
                font-size: 0.8rem;
            }
            
            .stilos-form-check-label {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Efecto de hilo -->
    <div class="thread-scanner"></div>
    
    <!-- Patrones de tela flotantes -->
    <div class="fabric-pattern" style="top: 15%; animation: float 25s linear infinite;"></div>
    <div class="fabric-pattern" style="top: 65%; animation: float 30s linear infinite 5s; width: 80px; height: 80px;"></div>
    <div class="fabric-pattern" style="top: 40%; animation: float 35s linear infinite 10s; opacity: 0.3;"></div>

    <div class="stilos-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="stilos-card">
                        <div class="stilos-card-header">
                            <h3><i class="fas fa-tshirt"></i> ¡ÚNETE A LA FAMILIA STILOS!</h3>
                            <p>Recibe un 50% de descuento en tu primera compra</p>
                            <div class="stilos-border"></div>
                        </div>
                        <div class="stilos-card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form id="stilos-subscription-form">
                                        <div class="mb-3">
                                            <label for="stilos-nombre" class="stilos-form-label">
                                                <i class="fas fa-user"></i> Nombre
                                            </label>
                                            <input type="text" class="stilos-form-control" id="stilos-nombre" placeholder="Ej: María" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stilos-apellido" class="stilos-form-label">
                                                <i class="fas fa-user-tag"></i> Apellido
                                            </label>
                                            <input type="text" class="stilos-form-control" id="stilos-apellido" placeholder="Ej: González" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stilos-email" class="stilos-form-label">
                                                <i class="fas fa-envelope"></i> Correo Electrónico
                                            </label>
                                            <input type="email" class="stilos-form-control" id="stilos-email" placeholder="ejemplo@correo.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stilos-contrasena" class="stilos-form-label">
                                                <i class="fas fa-lock"></i> Contraseña
                                            </label>
                                            <input type="password" class="stilos-form-control" id="stilos-contrasena" placeholder="••••••••" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stilos-celular" class="stilos-form-label">
                                                <i class="fas fa-mobile-alt"></i> Celular
                                            </label>
                                            <input type="tel" class="stilos-form-control" id="stilos-celular" placeholder="+51 999 999 999" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stilos-fecha-nacimiento" class="stilos-form-label">
                                                <i class="fas fa-calendar-alt"></i> Fecha de Nacimiento
                                            </label>
                                            <input type="date" class="stilos-form-control" id="stilos-fecha-nacimiento" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stilos-genero" class="stilos-form-label">
                                                <i class="fas fa-venus-mars"></i> Género
                                            </label>
                                            <select class="stilos-form-select" id="stilos-genero" required>
                                                <option value="">Selecciona tu género</option>
                                                <option value="femenino">Femenino</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="otro">Otro</option>
                                                <option value="prefiero-no-decir">Prefiero no decir</option>
                                            </select>
                                        </div>
                                        <div class="stilos-form-check">
                                            <input class="stilos-form-check-input" type="checkbox" value="" id="stilos-politicas" required>
                                            <label class="stilos-form-check-label" for="stilos-politicas">
                                                Acepto los términos y condiciones de STILOS.
                                            </label>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="stilos-btn">
                                                <i class="fas fa-tag"></i> ACTIVAR DESCUENTO
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-center mt-3">
                                        <a href="<?php echo BASE_URL ?>producto" class="stilos-btn stilos-btn-secondary">
                                            <i class="fas fa-eye"></i> Continuar como visitante
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center align-items-center">
                                    <div class="stilos-img-container">
                                        <img src="https://cdn.pixabay.com/photo/2016/11/23/06/57/isolated-t-shirt-1852114_1280.png" 
                                             class="stilos-img" 
                                             alt="Ropa STILOS">
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
        document.getElementById('stilos-subscription-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Efecto visual de confirmación
            const card = document.querySelector('.stilos-card');
            card.style.boxShadow = '0 0 30px rgba(139, 69, 19, 0.4)';
            card.style.transform = 'scale(1.02)';
            
            // Simulación de envío de datos
            setTimeout(function() {
                window.location.href = '<?php echo BASE_URL ?>producto';
            }, 2000);
            
            setTimeout(() => {
                card.style.boxShadow = '0 5px 20px rgba(139, 69, 19, 0.2)';
                card.style.transform = 'scale(1)';
            }, 2000);
        });

        // Crear hilos flotantes
        function createThreads() {
            const container = document.querySelector('.stilos-container');
            const threadCount = 20;
            
            for (let i = 0; i < threadCount; i++) {
                const thread = document.createElement('div');
                thread.classList.add('thread-particle');
                
                // Tamaño aleatorio entre 1px y 3px
                const size = Math.random() * 2 + 1;
                thread.style.width = `${size}px`;
                thread.style.height = `${size}px`;
                
                // Posición aleatoria
                thread.style.left = `${Math.random() * 100}%`;
                thread.style.top = `${Math.random() * 100}%`;
                
                // Opacidad y delay aleatorio
                thread.style.opacity = Math.random() * 0.3;
                thread.style.animationDelay = `${Math.random() * 15}s`;
                thread.style.animationDuration = `${Math.random() * 10 + 10}s`;
                
                container.appendChild(thread);
            }
        }
        
        // Llamar a la función cuando el DOM esté cargado
        document.addEventListener('DOMContentLoaded', createThreads);
    </script>
</body>
</html>