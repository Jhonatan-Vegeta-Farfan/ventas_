<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - STILOS Huanta</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-brown: #8B4513;
            --secondary-orange: #CD853F;
            --accent-beige: #F9F5F0;
            --dark-brown: #5A3921;
        }
        
        body {
            background-color: var(--accent-beige);
            color: var(--dark-brown);
            font-family: 'Raleway', sans-serif;
        }

        .stilos-form-section {
            padding-top: 100px;
            min-height: calc(100vh - 100px);
            background: 
                radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.15) 0%, transparent 25%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .stilos-form-card {
            width: 90%;
            max-width: 800px;
            background: rgba(255, 253, 250, 0.95);
            border: 2px solid var(--primary-brown);
            border-radius: 1rem;
            box-shadow: 0 0 2rem rgba(139, 69, 19, 0.25);
            position: relative;
            overflow: hidden;
        }

        .stilos-form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23CD853F" stroke-width="0.5" opacity="0.1"/></svg>');
            opacity: 0.2;
            z-index: 0;
        }

        .stilos-form-header {
            text-align: center;
            padding: 2rem 2rem 1rem;
            position: relative;
            z-index: 1;
        }

        .stilos-form-logo {
            max-height: 120px;
            filter: drop-shadow(0 0 5px var(--secondary-orange));
        }

        .stilos-form-body {
            padding: 1rem 2rem 2rem;
            position: relative;
            z-index: 1;
        }

        .stilos-form-title {
            color: var(--primary-brown);
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .form-label {
            color: var(--primary-brown);
            font-weight: bold;
            margin-bottom: 0.5rem;
            display: block;
            font-family: 'Raleway', sans-serif;
        }

        .form-control {
            background: rgba(255, 253, 250, 0.9);
            border: 1px solid var(--secondary-orange);
            color: var(--dark-brown);
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            width: 100%;
            transition: all 0.3s ease;
            font-family: 'Raleway', sans-serif;
        }

        .form-control:focus {
            border-color: var(--primary-brown);
            box-shadow: 0 0 0.5rem rgba(139, 69, 19, 0.3);
            outline: none;
            background: rgba(255, 253, 250, 1);
        }

        .form-control::placeholder {
            color: rgba(139, 69, 19, 0.5);
        }

        .stilos-form-footer {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .btn-stilos-primary {
            background: linear-gradient(45deg, var(--primary-brown), var(--secondary-orange));
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Raleway', sans-serif;
        }

        .btn-stilos-primary:hover {
            background: linear-gradient(45deg, var(--secondary-orange), var(--primary-brown));
            transform: translateY(-3px);
            box-shadow: 0 0 1rem rgba(139, 69, 19, 0.4);
        }

        .btn-stilos-secondary {
            background: rgba(255, 253, 250, 0.9);
            color: var(--primary-brown);
            border: 1px solid var(--primary-brown);
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Raleway', sans-serif;
        }

        .btn-stilos-secondary:hover {
            background: rgba(139, 69, 19, 0.1);
            color: var(--dark-brown);
            transform: translateY(-3px);
            box-shadow: 0 0 0.5rem rgba(139, 69, 19, 0.3);
        }

        /* Efectos especiales */
        .thread-scanner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--secondary-orange), transparent);
            animation: weave 6s linear infinite;
            z-index: 1000;
        }

        @keyframes weave {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        .embroidery-border {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 1;
        }

        .embroidery-border::before, .embroidery-border::after {
            content: "";
            position: absolute;
            width: 15px;
            height: 15px;
            border: 2px solid var(--secondary-orange);
            border-radius: 50%;
        }

        .embroidery-border::before {
            top: 10px;
            left: 10px;
        }

        .embroidery-border::after {
            bottom: 10px;
            right: 10px;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-brown);
            margin-top: 10px;
            font-size: 1.8rem;
        }

        .location {
            font-style: italic;
            color: var(--secondary-orange);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .stilos-form-section {
                padding-top: 80px;
                min-height: calc(100vh - 80px);
            }
            
            .stilos-form-card {
                width: 95%;
                padding: 1.5rem;
            }
            
            .stilos-form-logo {
                max-height: 80px;
            }
            
            .stilos-form-footer {
                flex-direction: column;
            }
            
            .btn-stilos-primary, .btn-stilos-secondary {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Efecto scanner de hilo -->
    <div class="thread-scanner"></div>

    <section class="stilos-form-section">
        <div class="stilos-form-card">
            <div class="embroidery-border"></div>
            <div class="stilos-form-header">
                <img src="https://cdn-icons-png.flaticon.com/512/863/863684.png" alt="Logo STILOS" class="stilos-form-logo">
                <h1 class="store-name">STILOS</h1>
                <p class="location">Huanta, Ayacucho</p>
                <h2 class="stilos-form-title">REGISTRO DE CLIENTE</h2>
            </div>
            
            <div class="stilos-form-body">
                <form>
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tus nombres...">
                    </div>
                    
                    <div class="form-group">
                        <label for="apellido" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ingresa tus apellidos...">
                    </div>
                    
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico...">
                    </div>
                    
                    <div class="form-group">
                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña...">
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu número de teléfono...">
                    </div>
                    
                    <div class="form-group">
                        <label for="usuario" class="form-label">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu nombre de usuario...">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactos" class="form-label">Contactos:</label>
                        <input type="text" class="form-control" id="contactos" placeholder="Ingresa tus contactos...">
                    </div>
                    
                    <div class="stilos-form-footer">
                        <a href="<?php echo BASE_URL ?>producto" class="btn-stilos-secondary">Volver al inicio</a>
                        <a href="<?php echo BASE_URL ?>producto" class="btn-stilos-primary">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>