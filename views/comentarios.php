<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Testimonios de clientes intergalácticos sobre Área 51 Clothing">
    <title>Testimonios Intergalácticos | Área 51 Clothing</title>
    <!-- Preconexión para recursos externos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <!-- Precarga de fuentes y estilos -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style">
    <!-- Carga de estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
            --energy-pink: #ff00aa;
        }
        
        body {
            font-family: 'Orbitron', sans-serif;
            background-color: var(--dark-space);
            color: #fff;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Contenedor principal ajustado para header/footer */
        .alien-comments-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
        }

        .alien-comments-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.1) 0%, transparent 25%);
            z-index: -1;
            opacity: 0.5;
        }

        .alien-section-title {
            color: var(--alien-green);
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-shadow: 0 0 10px var(--alien-green);
            position: relative;
        }

        .alien-section-title::before,
        .alien-section-title::after {
            content: '✧';
            color: var(--ufo-blue);
            margin: 0 15px;
        }

        .alien-comment {
            background: rgba(20, 10, 40, 0.8);
            border: 2px solid var(--alien-green);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(0, 255, 157, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .alien-comment:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px var(--alien-green);
            border-color: var(--ufo-blue);
        }

        .alien-comment::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--alien-green), var(--ufo-blue));
        }

        .alien-rating {
            color: var(--ufo-blue);
            margin-bottom: 15px;
            font-size: 1.5rem;
            letter-spacing: 3px;
        }

        .alien-comment-text {
            color: #ccc;
            line-height: 1.6;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .alien-comment-author {
            color: var(--alien-green);
            font-style: italic;
            text-align: right;
            font-size: 0.9rem;
        }

        .alien-additional-info {
            color: #aaa;
            margin: 40px 0;
            padding: 20px;
            border-left: 3px solid var(--alien-purple);
            background: rgba(10, 0, 26, 0.5);
            font-size: 1rem;
            line-height: 1.6;
        }

        .alien-back-btn {
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
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
            width: 100%;
            max-width: 300px;
            cursor: pointer;
        }

        .alien-back-btn:hover, .alien-back-btn:focus {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
            box-shadow: 0 0 25px var(--alien-green);
            transform: translateY(-3px);
            outline: none;
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
            pointer-events: none;
        }

        @keyframes scan {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        /* Mejoras de accesibilidad para motion */
        @media (prefers-reduced-motion: reduce) {
            .alien-scanner {
                animation: none;
                opacity: 0.5;
            }
            
            .alien-comment:hover {
                transform: none;
            }
            
            .alien-back-btn:hover, .alien-back-btn:focus {
                transform: none;
            }
        }

        /* Focus styles para accesibilidad */
        .alien-back-btn:focus {
            outline: 2px solid var(--energy-pink);
            outline-offset: 2px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .alien-comments-section {
                padding: 30px 15px;
            }
            
            .alien-section-title {
                font-size: 2rem;
            }
            
            .alien-comment {
                padding: 20px;
            }
        }

        /* Mejora de contraste para accesibilidad */
        .alien-comment-text {
            color: #e0e0e0;
        }

        .alien-additional-info {
            color: #bbb;
        }
    </style>
</head>
<body>
    <!-- Efecto scanner -->
    <div class="alien-scanner" aria-hidden="true"></div>

    <main class="alien-comments-section">
        <h1 class="alien-section-title">TESTIMONIOS INTERGALÁCTICOS</h1>

        <article class="alien-comment" aria-labelledby="comment1-title">
            <h2 id="comment1-title" class="visually-hidden">Testimonio de Zyx-427</h2>
            <div class="alien-rating" aria-label="Calificación: 5 estrellas">
                ★ ★ ★ ★ ★
            </div>
            <blockquote class="alien-comment-text">
                "¡Como visitante frecuente de la Tierra, debo decir que Área 51 Clothing tiene los mejores diseños de moda galáctica! Sus prendas con tecnología de camuflaje interestelar son increíbles. La calidad es superior a la de cualquier otra tienda en 12 sistemas solares."
            </blockquote>
            <p class="alien-comment-author">- Zyx-427 de Andrómeda</p>
        </article>

        <article class="alien-comment" aria-labelledby="comment2-title">
            <h2 id="comment2-title" class="visually-hidden">Testimonio de Glorp</h2>
            <div class="alien-rating" aria-label="Calificación: 4 estrellas">
                ★ ★ ★ ★ ☆
            </div>
            <blockquote class="alien-comment-text">
                "Mis siete tentáculos adoran estas prendas, aunque algunas tallas para especies multi-limbadas podrían mejorar. El servicio de teletransporte cuántico para entregas es más rápido que la velocidad de la luz. ¡Casi!"
            </blockquote>
            <p class="alien-comment-author">- Glorp de Sirio B</p>
        </article>

        <article class="alien-comment" aria-labelledby="comment3-title">
            <h2 id="comment3-title" class="visually-hidden">Testimonio de X-9</h2>
            <div class="alien-rating" aria-label="Calificación: 3 estrellas">
                ★ ★ ★ ☆ ☆
            </div>
            <blockquote class="alien-comment-text">
                "Buenos diseños anti-radiación cósmica, pero necesitan más opciones para cuerpos no humanoides. El material es resistente incluso en atmósferas de metano. El proceso de devolución interestelar fue... complicado."
            </blockquote>
            <p class="alien-comment-author">- X-9 del Cinturón de Orion</p>
        </article>

        <aside class="alien-additional-info" aria-label="Información adicional">
            Los clientes de 47 sistemas estelares coinciden: Área 51 Clothing ofrece la mejor moda extraterrestre de la Vía Láctea. Nuestras prendas con tecnología de adaptación morfológica satisfacen el 93.7% de las formas de vida conocidas. Las mejoras en nuestro servicio de transporte interdimensional están programadas para el próximo ciclo lunar.
        </aside>

        <div style="text-align: center;">
            <a href="<?php echo BASE_URL ?>producto" class="alien-back-btn" aria-label="Volver al portal de productos">
                <i class="fas fa-arrow-left" aria-hidden="true"></i> VOLVER AL PORTAL
            </a>
        </div>
    </main>

    <script>
        // Carga diferida de recursos no críticos
        document.addEventListener('DOMContentLoaded', function() {
            // Añadir clase de carga para transiciones (evita animaciones en carga)
            setTimeout(function() {
                document.body.classList.add('loaded');
            }, 100);
            
            // Mejorar accesibilidad de iconos
            const icons = document.querySelectorAll('.fas');
            icons.forEach(icon => {
                const ariaHidden = icon.getAttribute('aria-hidden');
                if (!ariaHidden) {
                    icon.setAttribute('aria-hidden', 'true');
                }
            });
        });

        // Polyfill para :focus-visible
        if (!CSS.supports('selector(:focus-visible)')) {
            document.querySelectorAll('.alien-back-btn').forEach(button => {
                button.addEventListener('focus', function() {
                    this.classList.add('focus-visible');
                });
                button.addEventListener('blur', function() {
                    this.classList.remove('focus-visible');
                });
            });
        }
    </script>
</body>
</html>