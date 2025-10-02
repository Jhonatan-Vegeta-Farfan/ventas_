<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STILOS - Huanta, Ayacucho</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-brown: #8b4513;
            --accent-orange: #cd853f;
            --light-beige: #f9f5f0;
            --dark-brown: #5a3921;
            --gold: #d4af37;
        }
        
        body {
            background-color: var(--light-beige);
            color: var(--dark-brown);
            font-family: 'Raleway', sans-serif;
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* Espacio superior más grande para bajar el contenido */
        .top-space {
            height: 300px;
            display: flex;
            align-items: flex-end;
            padding-bottom: 30px;
            box-sizing: border-box;
        }

        .location-container {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .location-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 2px;
            position: relative;
            font-family: 'Playfair Display', serif;
            color: var(--primary-brown);
        }

        .location-title::before,
        .location-title::after {
            content: '✦';
            color: var(--accent-orange);
            margin: 0 15px;
            font-size: 2rem;
        }

        .map-container {
            position: relative;
            border: 3px solid var(--primary-brown);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(139, 69, 19, 0.2);
            margin-bottom: 30px;
            background: rgba(255, 253, 250, 0.9);
            padding: 10px;
        }

        .map-responsive {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            border-radius: 10px;
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            filter: sepia(20%) contrast(110%) brightness(95%);
        }

        .location-info {
            background: rgba(255, 253, 250, 0.9);
            border: 2px solid var(--primary-brown);
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.15);
        }

        .info-item {
            margin-bottom: 15px;
            color: var(--dark-brown);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .info-item strong {
            color: var(--primary-brown);
            font-weight: 600;
        }

        .btn-back {
            display: inline-block;
            background: linear-gradient(45deg, var(--primary-brown), var(--accent-orange));
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
            text-decoration: none;
            margin-top: 20px;
            font-family: 'Raleway', sans-serif;
        }

        .btn-back:hover {
            background: linear-gradient(45deg, var(--accent-orange), var(--primary-brown));
            color: #fff;
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.4);
            transform: translateY(-3px);
        }

        /* Efecto decorativo de hilo */
        .thread-line {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-orange), transparent);
            animation: weave 6s linear infinite;
            z-index: 1000;
        }

        @keyframes weave {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        /* Logo STILOS */
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: var(--primary-brown);
            text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.2);
            letter-spacing: 3px;
        }

        .logo-subtitle {
            font-style: italic;
            color: var(--accent-orange);
            margin-top: -10px;
            letter-spacing: 2px;
        }

        /* Bordes decorativos */
        .decorative-border {
            position: relative;
            padding: 20px;
        }

        .decorative-border::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--primary-brown), var(--accent-orange), var(--primary-brown));
        }

        /* Responsive */
        @media (max-width: 768px) {
            .top-space {
                height: 200px;
            }
            
            .location-title {
                font-size: 2rem;
            }
            
            .location-title::before,
            .location-title::after {
                margin: 0 8px;
            }
            
            .info-item {
                font-size: 1rem;
            }
            
            .logo {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Efecto decorativo de hilo -->
    <div class="thread-line"></div>

    <!-- Espacio superior ampliado para bajar más el contenido -->
    <div class="top-space">
        <div class="logo-container">
            <div class="logo">STILOS</div>
            <div class="logo-subtitle">Huanta, Ayacucho</div>
        </div>
    </div>

    <!-- Location content -->
    <div class="location-container">
        <h1 class="location-title">NUESTRA TIENDA EN HUANTA, AYACUCHO</h1>
        
        <div class="map-container decorative-border">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.4537194787183!2d-74.2441244!3d-12.9762572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910f3843f4d37915%3A0xd78a04a05151532b!2sCalle%20Grau%20614%2C%20Huanta%2C%20Ayacucho!5e0!3m2!1sen!2spe!4v1624125600000!5m2!1sen!2spe" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <div class="location-info decorative-border text-center">
            <div class="info-item">
                <strong>DIRECCIÓN:</strong> Calle Grau 614, Huanta, Ayacucho 05001, Perú
            </div>
            <div class="info-item">
                <strong>HORARIOS DE ATENCIÓN:</strong> Lunes a Sábado: 9:00 am - 8:00 pm | Domingos: 10:00 am - 6:00 pm
            </div>
            <div class="info-item">
                <strong>CONTACTO:</strong> Teléfono: 966-123-456 | Email: info@stiloshuanta.com
            </div>
            
            <a href="#" class="btn-back">
                <i class="fas fa-arrow-left"></i> VOLVER A LA TIENDA
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>