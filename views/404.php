<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - STILOS Huanta</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-brown: #8b4513;
            --accent-orange: #cd853f;
            --light-beige: #f9f5f0;
            --dark-brown: #5a3921;
            --gold: #d4af37;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Raleway', sans-serif;
            background-color: var(--light-beige);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.3" opacity="0.2"/></svg>');
            color: var(--dark-brown);
            overflow: hidden;
            position: relative;
        }

        /* Efectos especiales */
        .thread-scanner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-orange), transparent);
            box-shadow: 0 0 8px var(--accent-orange);
            animation: scan 4s linear infinite;
            z-index: 1;
        }

        @keyframes scan {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        .fabric-pattern {
            position: absolute;
            width: 100px;
            height: 100px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%23cd853f" stroke-width="0.5" opacity="0.2"/></svg>');
            z-index: -1;
            opacity: 0.5;
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { left: -10%; }
            100% { left: 110%; }
        }

        .container {
            text-align: center;
            background: rgba(255, 253, 250, 0.95);
            padding: 40px 60px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(139, 69, 19, 0.2);
            border: 2px solid var(--accent-orange);
            position: relative;
            overflow: hidden;
            z-index: 2;
            backdrop-filter: blur(5px);
            max-width: 80%;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 45%,
                var(--accent-orange) 50%,
                transparent 55%
            );
            opacity: 0.05;
            animation: rotate 20s linear infinite;
            z-index: -1;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        h1 {
            font-size: 6em;
            margin: 0;
            color: var(--primary-brown);
            text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.3);
            letter-spacing: 3px;
            font-family: 'Playfair Display', serif;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-size: 2.5em;
            color: var(--primary-brown);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .location {
            font-style: italic;
            color: var(--accent-orange);
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        p {
            font-size: 1.5em;
            margin: 20px 0 30px;
            color: var(--dark-brown);
        }

        a {
            display: inline-block;
            padding: 12px 30px;
            margin-top: 20px;
            background: rgba(139, 69, 19, 0.1);
            color: var(--primary-brown);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.4s;
            border: 1px solid var(--primary-brown);
            font-weight: 500;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        a:hover {
            background: var(--primary-brown);
            color: var(--light-beige);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
            transform: translateY(-3px);
        }

        a::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(205, 133, 63, 0.3), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }

        a:hover::after {
            transform: translateX(100%);
        }

        .embroidery-icon {
            margin: 0 10px;
            color: var(--accent-orange);
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 4em;
            }
            
            .store-name {
                font-size: 2em;
            }
            
            p {
                font-size: 1.2em;
            }
            
            .container {
                padding: 30px;
                max-width: 90%;
            }
        }
    </style>
</head>

<body>
    <!-- Efectos especiales -->
    <div class="thread-scanner"></div>
    <div class="fabric-pattern" style="top: 20%; animation-duration: 25s;"></div>
    <div class="fabric-pattern" style="top: 70%; animation-duration: 30s; animation-delay: 5s;"></div>
    <div class="fabric-pattern" style="top: 40%; width: 80px; height: 80px; animation-duration: 35s; animation-delay: 10s;"></div>

    <div class="container">
        <div class="store-name">
            <i class="fas fa-tshirt embroidery-icon"></i> STILOS <i class="fas fa-tshirt embroidery-icon"></i>
        </div>
        <div class="location">Huanta, Ayacucho</div>
        
        <h1>404</h1>
        <p><i class="fas fa-exclamation-circle"></i> PÁGINA NO ENCONTRADA</p>
        <a href="<?php echo BASE_URL; ?>"><i class="fas fa-home"></i> VOLVER AL INICIO</a>
    </div>
</body>
</html>