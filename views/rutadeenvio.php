<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas de Distribución - STILOS Huanta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        :root {
            --primary-brown: #8b4513;
            --secondary-brown: #a0522d;
            --accent-gold: #cd853f;
            --light-beige: #f9f5f0;
            --dark-brown: #5a3921;
            --header-height: 80px;
        }

        body {
            background-color: var(--light-beige);
            color: var(--dark-brown);
            font-family: 'Raleway', sans-serif;
            overflow-x: hidden;
        }

        .header-spacer {
            width: 100%;
            clear: both;
        }

        .fabric-scanner {
            position: fixed;
            top: var(--header-height);
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
            animation: scan 4s linear infinite;
            z-index: 999;
        }

        .stilos-shipping {
            position: relative;
            z-index: 1;
            margin-top: 30px;
        }

        .shipping-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 40px;
        }

        .shipping-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 40px;
            letter-spacing: 2px;
            color: var(--primary-brown);
            font-family: 'Playfair Display', serif;
            position: relative;
        }

        .shipping-title::before,
        .shipping-title::after {
            content: '✦';
            color: var(--accent-gold);
            margin: 0 15px;
            font-size: 1.8rem;
        }

        .route-map-container {
            border: 2px solid var(--accent-gold);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(139, 69, 19, 0.2);
            margin-bottom: 30px;
            background: rgba(255, 253, 250, 0.9);
            padding: 8px;
            position: relative;
            height: 500px;
            width: 100%;
        }

        .map-responsive {
            position: relative;
            height: 100%;
            width: 100%;
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .shipping-info {
            background: rgba(255, 253, 250, 0.95);
            border-radius: 10px;
            padding: 30px;
            border: 1px solid var(--accent-gold);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
        }

        .info-section {
            margin-bottom: 30px;
            position: relative;
        }

        .info-section:not(:last-child)::after {
            content: '';
            display: block;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
            margin: 25px 0;
        }

        .info-title {
            color: var(--primary-brown);
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-family: 'Playfair Display', serif;
            border-bottom: 1px solid var(--accent-gold);
            padding-bottom: 5px;
        }

        .info-content {
            color: var(--dark-brown);
            line-height: 1.6;
        }

        .info-content ul {
            padding-left: 20px;
        }

        .info-content li {
            margin-bottom: 8px;
        }

        .route-point {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .point-marker {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 15px;
            flex-shrink: 0;
            position: relative;
            border: 2px solid;
        }

        .point-marker::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .point-marker.start {
            background: var(--primary-brown);
            border-color: var(--primary-brown);
        }

        .point-marker.mid {
            background: var(--accent-gold);
            border-color: var(--accent-gold);
        }

        .point-marker.end {
            background: var(--secondary-brown);
            border-color: var(--secondary-brown);
        }

        .point-text {
            color: var(--dark-brown);
        }

        .btn-back {
            display: inline-block;
            padding: 12px 25px;
            background: var(--primary-brown);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid var(--primary-brown);
            box-shadow: 0 3px 10px rgba(139, 69, 19, 0.3);
            margin-top: 20px;
            font-family: 'Raleway', sans-serif;
        }

        .btn-back:hover {
            background: var(--secondary-brown);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.4);
        }

        .btn-back i {
            margin-right: 8px;
        }

        .store-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .store-logo img {
            max-height: 80px;
            filter: drop-shadow(0 2px 4px rgba(139, 69, 19, 0.3));
        }

        @keyframes scan {
            0% { top: var(--header-height); opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        @keyframes pulse {
            0% {
                transform: scale(0.95);
                opacity: 1;
            }
            70% {
                transform: scale(1.3);
                opacity: 0;
            }
            100% {
                transform: scale(0.95);
                opacity: 0;
            }
        }

        @media (max-width: 768px) {
            .shipping-title {
                font-size: 2rem;
            }
            
            .shipping-info {
                padding: 20px;
            }
            
            .info-title {
                font-size: 1.1rem;
            }
            
            :root {
                --header-height: 60px;
            }
            
            .route-map-container {
                height: 350px;
            }
        }

        @media (max-width: 480px) {
            .route-map-container {
                height: 300px;
            }
            
            .shipping-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Espacio seguro después del header (ajustable) -->
    <div class="header-spacer" style="height: 80px;"></div>

    <!-- Efecto scanner (posicionado después del header) -->
    <div class="fabric-scanner"></div>

    <!-- Contenedor principal con márgenes seguros -->
    <div class="stilos-shipping">
        <div class="shipping-container">
            <div class="store-logo">
                <img src="https://i.imgur.com/7Qc7Q2a.png" alt="STILOS - Tienda de Ropa y Bordados" style="max-height: 80px;">
            </div>
            
            <h1 class="shipping-title">RUTAS DE DISTRIBUCIÓN</h1>
            
            <!-- Contenedor del mapa modificado para que sea más grande -->
            <div class="route-map-container">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15507.2159019346!2d-74.2474224348876!3d-13.525945399999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x9113cbd5c2eb0021%3A0xf8605c6a1d6a9a7a!2sPlaza%20de%20Armas%20de%20Ayacucho%2C%20Ayacucho!3m2!1d-13.5259454!2d-74.2235649!4m5!1s0x910f3843f4d37915%3A0xd78a04a05151532b!2sCalle%20Grau%20614%2C%20Huanta%2C%20Ayacucho!3m2!1d-12.9762572!2d-74.2441244!5e0!3m2!1sen!2spe!4v1624125600000!5m2!1sen!2spe" 
                            allowfullscreen="" 
                            loading="lazy"
                            style="border:0;"></iframe>
                </div>
            </div>
            
            <div class="shipping-info">
                <div class="info-section">
                    <h3 class="info-title">NUESTRA RUTA DE DISTRIBUCIÓN</h3>
                    <div class="route-point">
                        <div class="point-marker start"></div>
                        <div class="point-text">
                            <strong>BASE PRINCIPAL:</strong> Plaza de Armas de Ayacucho
                        </div>
                    </div>
                    <div class="route-point">
                        <div class="point-marker mid"></div>
                        <div class="point-text">
                            <strong>PUNTO DE TRANSFERENCIA:</strong> Centro Logístico STILOS (Km 25 Carretera Ayacucho-Huanta)
                        </div>
                    </div>
                    <div class="route-point">
                        <div class="point-marker end"></div>
                        <div class="point-text">
                            <strong>DESTINO FINAL:</strong> Calle Grau 614, Huanta
                        </div>
                    </div>
                </div>
                
                <div class="info-section">
                    <h3 class="info-title">DETALLES DE LA RUTA</h3>
                    <div class="info-content">
                        <p>Nuestros envíos se realizan con vehículos especializados con las siguientes características:</p>
                        <ul>
                            <li><strong>Tiempo estimado:</strong> 24-48 horas</li>
                            <li><strong>Radio de cobertura:</strong> 50km alrededor de nuestra base</li>
                            <li><strong>Vehículos:</strong> Furgonetas climatizadas para textiles</li>
                            <li><strong>Seguimiento:</strong> Disponible en tiempo real mediante nuestra app</li>
                        </ul>
                    </div>
                </div>
                
                <div class="info-section">
                    <h3 class="info-title">HORARIOS DE TRANSPORTE</h3>
                    <div class="info-content">
                        <p><strong>Lunes a Viernes:</strong> 8:00 am - 6:00 pm (Última salida 5:00 pm)</p>
                        <p><strong>Sábados:</strong> 9:00 am - 2:00 pm (Última salida 1:00 pm)</p>
                        <p><strong>Domingos:</strong> Solo entregas urgentes (cargo adicional del 20%)</p>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="<?php echo BASE_URL ?>producto" class="btn-back">
                        <i class="fas fa-arrow-left"></i> VOLVER A LA TIENDA
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>