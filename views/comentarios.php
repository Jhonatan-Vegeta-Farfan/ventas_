<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Testimonios de clientes satisfechos de STILOS Huanta">
    <title>Testimonios de Clientes | STILOS Huanta</title>
    <!-- Preconexión para recursos externos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <!-- Precarga de fuentes y estilos -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style">
    <!-- Carga de estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --main-brown: #8b4513;
            --light-brown: #cd853f;
            --accent-gold: #d4af37;
            --cream-bg: #f9f5f0;
            --dark-text: #5a3921;
        }
        
        body {
            font-family: 'Raleway', sans-serif;
            background-color: var(--cream-bg);
            color: var(--dark-text);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Contenedor principal ajustado para header/footer */
        .stilos-comments-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
        }

        .stilos-comments-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%);
            z-index: -1;
            opacity: 0.5;
        }

        .stilos-section-title {
            color: var(--main-brown);
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            position: relative;
            font-family: 'Playfair Display', serif;
        }

        .stilos-section-title::before,
        .stilos-section-title::after {
            content: '❖';
            color: var(--light-brown);
            margin: 0 15px;
            font-size: 1.8rem;
        }

        .stilos-comment {
            background: rgba(255, 253, 250, 0.9);
            border: 2px solid var(--light-brown);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stilos-comment:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.2);
            border-color: var(--main-brown);
        }

        .stilos-comment::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--main-brown), var(--light-brown));
        }

        .stilos-rating {
            color: var(--accent-gold);
            margin-bottom: 15px;
            font-size: 1.5rem;
            letter-spacing: 3px;
        }

        .stilos-comment-text {
            color: var(--dark-text);
            line-height: 1.6;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .stilos-comment-author {
            color: var(--main-brown);
            font-style: italic;
            text-align: right;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .stilos-additional-info {
            color: var(--dark-text);
            margin: 40px 0;
            padding: 20px;
            border-left: 3px solid var(--light-brown);
            background: rgba(255, 253, 250, 0.7);
            font-size: 1rem;
            line-height: 1.6;
            border-radius: 0 8px 8px 0;
        }

        .stilos-back-btn {
            display: inline-block;
            background: linear-gradient(45deg, var(--main-brown), var(--light-brown));
            color: #fff;
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
            font-family: 'Raleway', sans-serif;
        }

        .stilos-back-btn:hover, .stilos-back-btn:focus {
            background: linear-gradient(45deg, var(--light-brown), var(--accent-gold));
            color: #fff;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
            transform: translateY(-3px);
            outline: none;
        }

        /* Efecto de hilo cosiendo */
        .stilos-sewing-thread {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--main-brown), transparent);
            animation: sew 4s linear infinite;
            z-index: 1000;
            pointer-events: none;
        }

        @keyframes sew {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        /* Mejoras de accesibilidad para motion */
        @media (prefers-reduced-motion: reduce) {
            .stilos-sewing-thread {
                animation: none;
                opacity: 0.5;
            }
            
            .stilos-comment:hover {
                transform: none;
            }
            
            .stilos-back-btn:hover, .stilos-back-btn:focus {
                transform: none;
            }
        }

        /* Focus styles para accesibilidad */
        .stilos-back-btn:focus {
            outline: 2px solid var(--accent-gold);
            outline-offset: 2px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .stilos-comments-section {
                padding: 30px 15px;
            }
            
            .stilos-section-title {
                font-size: 2rem;
            }
            
            .stilos-comment {
                padding: 20px;
            }
        }

        /* Estilos para elementos de bordado */
        .embroidery-icon {
            color: var(--main-brown);
            margin: 0 5px;
        }

        .store-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .store-logo h1 {
            font-family: 'Playfair Display', serif;
            color: var(--main-brown);
            font-size: 2.8rem;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
        }

        .store-location {
            color: var(--light-brown);
            font-style: italic;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <!-- Efecto de hilo cosiendo -->
    <div class="stilos-sewing-thread" aria-hidden="true"></div>

    <main class="stilos-comments-section">
        <div class="store-logo">
            <h1><i class="fas fa-tshirt embroidery-icon"></i> STILOS <i class="fas fa-tshirt embroidery-icon"></i></h1>
            <p class="store-location">Huanta, Ayacucho</p>
        </div>

        <h1 class="stilos-section-title">TESTIMONIOS DE CLIENTES</h1>

        <article class="stilos-comment" aria-labelledby="comment1-title">
            <h2 id="comment1-title" class="visually-hidden">Testimonio de María González</h2>
            <div class="stilos-rating" aria-label="Calificación: 5 estrellas">
                ★ ★ ★ ★ ★
            </div>
            <blockquote class="stilos-comment-text">
                "¡Como cliente frecuente de STILOS, debo decir que tienen los mejores diseños de ropa en Huanta! Sus prendas con bordados artesanales son increíbles. La calidad es superior a la de cualquier otra tienda en Ayacucho. Siempre encuentro lo que busco y la atención es excelente."
            </blockquote>
            <p class="stilos-comment-author">- María González, cliente desde 2019</p>
        </article>

        <article class="stilos-comment" aria-labelledby="comment2-title">
            <h2 id="comment2-title" class="visually-hidden">Testimonio de Carlos Mendoza</h2>
            <div class="stilos-rating" aria-label="Calificación: 4 estrellas">
                ★ ★ ★ ★ ☆
            </div>
            <blockquote class="stilos-comment-text">
                "La ropa de STILOS es muy cómoda y resistente, perfecta para el clima de Huanta. Los precios son justos y la variedad de tallas es buena. Me encantan los diseños únicos que no encuentro en otras tiendas. ¡Sigan así!"
            </blockquote>
            <p class="stilos-comment-author">- Carlos Mendoza, agricultor</p>
        </article>

        <article class="stilos-comment" aria-labelledby="comment3-title">
            <h2 id="comment3-title" class="visually-hidden">Testimonio de Laura Quispe</h2>
            <div class="stilos-rating" aria-label="Calificación: 5 estrellas">
                ★ ★ ★ ★ ★
            </div>
            <blockquote class="stilos-comment-text">
                "Compré un conjunto para la fiesta de mi hija y quedé encantada con la calidad de los bordados. El servicio al cliente fue excepcional, me ayudaron a encontrar exactamente lo que necesitaba. Definitivamente mi tienda de ropa favorita en Huanta."
            </blockquote>
            <p class="stilos-comment-author">- Laura Quispe, madre y ama de casa</p>
        </article>

        <aside class="stilos-additional-info" aria-label="Información adicional">
            Los clientes de STILOS coinciden: ofrecemos la mejor moda con estilo huantino en Ayacucho. Nuestras prendas con bordados artesanales y materiales de calidad satisfacen a toda la familia. Continuamente incorporamos nuevos diseños manteniendo nuestras tradiciones locales.
        </aside>

        <div style="text-align: center;">
            <a href="<?php echo BASE_URL ?>producto" class="stilos-back-btn" aria-label="Volver a la tienda">
                <i class="fas fa-arrow-left" aria-hidden="true"></i> VOLVER A LA TIENDA
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
            document.querySelectorAll('.stilos-back-btn').forEach(button => {
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