<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Área 51</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
            --energy-pink: #ff00aa;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Orbitron', sans-serif;
            background-color: var(--dark-space);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
            color: var(--alien-green);
            overflow: hidden;
            position: relative;
        }

        /* Efectos especiales */
        .alien-scanner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--alien-green), transparent);
            box-shadow: 0 0 10px var(--alien-green);
            animation: scan 4s linear infinite;
            z-index: 1;
        }

        @keyframes scan {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        .ufo-fleet {
            position: absolute;
            width: 120px;
            height: 60px;
            background: radial-gradient(ellipse at center, var(--ufo-blue) 0%, transparent 70%);
            border-radius: 50%;
            filter: drop-shadow(0 0 15px var(--ufo-blue));
            z-index: -1;
            opacity: 0.7;
            animation: fly 25s linear infinite;
        }

        @keyframes fly {
            0% { left: -10%; }
            100% { left: 110%; }
        }

        .container {
            text-align: center;
            background: rgba(20, 10, 40, 0.8);
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
            border: 2px solid var(--alien-green);
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
                var(--alien-green) 50%,
                transparent 55%
            );
            opacity: 0.1;
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
            color: var(--alien-green);
            text-shadow: 0 0 15px var(--alien-green);
            letter-spacing: 5px;
        }

        p {
            font-size: 1.5em;
            margin: 20px 0 30px;
            color: var(--ufo-blue);
            text-shadow: 0 0 5px var(--ufo-blue);
        }

        a {
            display: inline-block;
            padding: 12px 30px;
            margin-top: 20px;
            background: rgba(0, 255, 157, 0.2);
            color: var(--alien-green);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.4s;
            border: 1px solid var(--alien-green);
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }

        a:hover {
            background: var(--alien-green);
            color: #000;
            box-shadow: 0 0 20px var(--alien-green);
            transform: translateY(-3px);
        }

        a::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 157, 0.4), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }

        a:hover::after {
            transform: translateX(100%);
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 4em;
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
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 20%; animation-duration: 25s;"></div>
    <div class="ufo-fleet" style="top: 70%; animation-duration: 30s; animation-delay: 5s;"></div>
    <div class="ufo-fleet" style="top: 40%; width: 80px; height: 40px; animation-duration: 35s; animation-delay: 10s;"></div>

    <div class="container">
        <h1>404</h1>
        <p><i class="fas fa-exclamation-triangle"></i> ¡ALERTA! DIMENSIÓN NO ENCONTRADA</p>
        <a href="<?php echo BASE_URL; ?>"><i class="fas fa-home"></i> REGRESAR A BASE</a>
    </div>
</body>
</html>