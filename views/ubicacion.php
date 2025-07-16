<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Secreta - Gente Cansino Peruano</title>
    <style>
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
            --energy-pink: #ff00aa;
        }
        
        body {
            background-color: var(--dark-space);
            color: var(--alien-green);
            font-family: 'Orbitron', sans-serif;
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
        }

        /* Header styles */
        header {
            background: linear-gradient(to right, var(--dark-space), var(--alien-purple), var(--dark-space));
            padding: 20px 0;
            border-bottom: 2px solid var(--alien-green);
            box-shadow: 0 0 30px rgba(157, 0, 255, 0.3);
        }

        .logo {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 0 0 15px var(--alien-green);
            letter-spacing: 3px;
            color: var(--alien-green);
        }

        .logo span {
            color: var(--ufo-blue);
        }

        /* Location container */
        .location-container {
            padding: 40px 0;
        }

        .location-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0 0 10px var(--alien-green);
            letter-spacing: 3px;
            position: relative;
        }

        .location-title::before,
        .location-title::after {
            content: '✧';
            color: var(--ufo-blue);
            margin: 0 15px;
        }

        .map-container {
            position: relative;
            border: 3px solid var(--alien-green);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
            margin-bottom: 30px;
            background: rgba(20, 10, 40, 0.7);
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
            filter: grayscale(50%) hue-rotate(120deg) contrast(110%) brightness(90%);
        }

        .location-info {
            background: rgba(20, 10, 40, 0.7);
            border: 2px solid var(--alien-green);
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
            box-shadow: 0 0 20px rgba(0, 255, 157, 0.2);
        }

        .info-item {
            margin-bottom: 15px;
            color: #ccc;
            font-size: 1.1rem;
        }

        .info-item strong {
            color: var(--ufo-blue);
        }

        .btn-back {
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
            margin-top: 20px;
        }

        .btn-back:hover {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
            box-shadow: 0 0 25px var(--alien-green);
            transform: translateY(-3px);
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

        /* Responsive */
        @media (max-width: 768px) {
            .logo {
                font-size: 1.8rem;
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
        }
    </style>
</head>
<body>
    <!-- Efecto scanner -->
    <div class="alien-scanner"></div>



    <!-- Location section -->
    <div class="location-container">
        <div class="container">
            <h1 class="location-title"></h1>
            
            <div class="map-container">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.4537194787183!2d-74.2441244!3d-12.9762572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910f3843f4d37915%3A0xd78a04a05151532b!2sCalle%20Grau%20614%2C%20Huanta%2C%20Ayacucho!5e0!3m2!1sen!2spe!4v1624125600000!5m2!1sen!2spe" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            
            <div class="location-info text-center">
                <div class="info-item">
                    <strong>COORDENADAS TERRESTRES:</strong> Calle Grau 614, Huanta, Ayacucho 05001, Perú
                </div>
                <div class="info-item">
                    <strong>HORARIOS DE CONTACTO:</strong> Lunes a Sábado: 10:00 am - 8:00 pm | Domingos: 11:00 am - 5:00 pm
                </div>
                <div class="info-item">
                    <strong>CANALES DE COMUNICACIÓN:</strong> Transmisor: 123-456-7890 | Señal interestelar: info@gentecandperuano.com
                </div>
                
                <a href="#" class="btn-back">
                    <i class="fas fa-arrow-left"></i> VOLVER AL PORTAL PRINCIPAL
                </a>
            </div>
        </div>
    </div>

    <!-- Recursos necesarios -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>