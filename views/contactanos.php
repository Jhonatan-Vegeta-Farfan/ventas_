<?php
// Inicializar una variable para manejar el estado del formulario
$submitted = false;

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y sanitizar los datos del formulario
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validar el email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lógica para enviar el mensaje (ejemplo básico)
        // mail($email, "Nuevo mensaje de contacto", $message);
        
        // Cambiar el estado a enviado
        $submitted = true;
        
        // Redirigir para evitar reenvío del formulario
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulario de contacto intergaláctico para Área 51 Clothing">
    <title>Contacto Intergaláctico | Área 51 Clothing</title>
    
    <!-- Preconexión para recursos externos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://code.jquery.com">
    
    <!-- Precarga de recursos críticos -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style">
    <link rel="preload" href="https://code.jquery.com/jquery-3.5.1.slim.min.js" as="script">
    
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
            background-color: var(--dark-space);
            color: #e0e0e0;
            font-family: 'Orbitron', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-container {
            background: rgba(20, 10, 40, 0.8);
            border: 2px solid var(--alien-green);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
            max-width: 800px;
            margin: 40px auto;
            position: relative;
            overflow: hidden;
        }

        .contact-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
            opacity: 0.3;
            z-index: -1;
        }

        h1.contact-title {
            color: var(--alien-green);
            text-shadow: 0 0 10px var(--alien-green);
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.2rem;
            position: relative;
            letter-spacing: 2px;
        }

        h1.contact-title::before,
        h1.contact-title::after {
            content: '✧';
            color: var(--ufo-blue);
            margin: 0 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            color: var(--ufo-blue);
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            background-color: rgba(0, 0, 0, 0.5);
            color: var(--alien-green);
            border: 1px solid var(--alien-green);
            border-radius: 8px;
            padding: 12px 15px;
            width: 100%;
            box-sizing: border-box;
            transition: all 0.3s;
            font-family: 'Orbitron', sans-serif;
        }

        .form-control:focus {
            background-color: rgba(0, 0, 0, 0.7);
            color: var(--alien-green);
            border-color: var(--ufo-blue);
            box-shadow: 0 0 15px var(--ufo-blue);
            outline: 2px solid var(--ufo-blue);
        }

        .form-control::placeholder {
            color: #666;
            font-style: italic;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .btn-send {
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
            width: 100%;
            margin-top: 20px;
            font-family: 'Orbitron', sans-serif;
            cursor: pointer;
        }

        .btn-send:hover,
        .btn-send:focus {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
            box-shadow: 0 0 25px var(--alien-green);
            transform: translateY(-3px);
            outline: none;
        }

        .alien-logo {
            max-height: 80px;
            margin-bottom: 20px;
            filter: drop-shadow(0 0 10px var(--alien-green));
            animation: float 6s ease-in-out infinite;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Modal de éxito */
        .alien-modal {
            background: rgba(10, 0, 26, 0.95);
            border: 2px solid var(--alien-green);
            border-radius: 15px;
            box-shadow: 0 0 30px var(--alien-green);
            color: var(--alien-green);
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
            max-width: 500px;
            width: 90%;
        }

        .alien-modal-header {
            border-bottom: 1px solid var(--alien-purple);
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .alien-modal-title {
            color: var(--ufo-blue);
            text-shadow: 0 0 5px var(--ufo-blue);
            margin: 0;
            font-size: 1.5rem;
        }

        .alien-modal-body {
            color: #ccc;
            padding: 20px;
        }

        .alien-modal-footer {
            border-top: 1px solid var(--alien-purple);
            padding: 15px;
            text-align: center;
        }

        .btn-alien {
            background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
            color: #000;
            border: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-alien:hover,
        .btn-alien:focus {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
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

        /* Overlay para modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1040;
        }

        /* Mejoras de accesibilidad */
        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Reducción de movimiento */
        @media (prefers-reduced-motion: reduce) {
            .alien-scanner {
                animation: none;
                opacity: 0.5;
            }
            
            .btn-send:hover,
            .btn-send:focus {
                transform: none;
            }
            
            .alien-logo {
                animation: none;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-container {
                padding: 20px;
                margin: 20px auto;
            }
            
            h1.contact-title {
                font-size: 1.8rem;
            }
            
            .alien-logo {
                max-height: 60px;
            }
        }
    </style>
</head>

<body>
    <!-- Efecto scanner -->
    <div class="alien-scanner" aria-hidden="true"></div>

    <main class="container">
        <div class="text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3618/3618730.png" alt="Logo de Área 51 Clothing" class="alien-logo" width="80" height="80">
        </div>
        
        <div class="contact-container">
            <h1 class="contact-title">CONTACTO INTERGALÁCTICO</h1>
            
            <form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
                <div class="form-group">
                    <label for="name">NOMBRE TERRESTRE:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre completo..." required aria-required="true">
                </div>
                
                <div class="form-group">
                    <label for="email">FREQUENCIA DE COMUNICACIÓN (EMAIL):</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su dirección de correo..." required aria-required="true">
                </div>
                
                <div class="form-group">
                    <label for="message">MENSAJE CODIFICADO:</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje intergaláctico..." required aria-required="true"></textarea>
                </div>
                
                <button type="submit" class="btn-send">
                    <i class="fas fa-paper-plane" aria-hidden="true"></i> TRANSMITIR MENSAJE
                </button>
            </form>
        </div>
    </main>

    <?php if ($submitted): ?>
        <!-- Modal de éxito -->
        <div class="modal-overlay" id="modalOverlay"></div>
        <div class="alien-modal" id="successModal" role="dialog" aria-modal="true" aria-labelledby="successModalTitle">
            <div class="alien-modal-header">
                <h2 id="successModalTitle" class="alien-modal-title">TRANSMISIÓN EXITOSA</h2>
                <button type="button" class="close" aria-label="Cerrar modal" onclick="closeModal()">
                    <span aria-hidden="true" style="color: var(--alien-green);">&times;</span>
                </button>
            </div>
            <div class="alien-modal-body">
                <p>Su mensaje ha sido recibido en nuestra base estelar. Nuestros agentes se pondrán en contacto con usted pronto.</p>
                <p class="text-center"><i class="fas fa-check-circle" style="color: var(--alien-green); font-size: 2rem;" aria-hidden="true"></i></p>
            </div>
            <div class="alien-modal-footer">
                <a href="<?php echo htmlspecialchars(BASE_URL); ?>producto" class="btn-alien">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i> VOLVER AL PORTAL PRINCIPAL
                </a>
            </div>
        </div>
    <?php endif; ?>

    <!-- Carga de scripts al final del body -->
    <script>
        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('successModal').style.display = 'none';
            document.getElementById('modalOverlay').style.display = 'none';
        }

        // Cerrar modal al hacer clic fuera
        document.getElementById('modalOverlay').addEventListener('click', closeModal);

        // Manejar el cierre con Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });

        // Validación del formulario
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            let valid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            // Validación simple
            if (name.value.trim() === '') {
                valid = false;
                name.style.borderColor = 'red';
            }

            if (!email.value.includes('@') || !email.value.includes('.')) {
                valid = false;
                email.style.borderColor = 'red';
            }

            if (message.value.trim() === '') {
                valid = false;
                message.style.borderColor = 'red';
            }

            if (!valid) {
                event.preventDefault();
                alert('Por favor complete todos los campos correctamente.');
            }
        });

        // Mejorar accesibilidad de iconos
        document.addEventListener('DOMContentLoaded', function() {
            const icons = document.querySelectorAll('.fas');
            icons.forEach(icon => {
                if (!icon.hasAttribute('aria-hidden')) {
                    icon.setAttribute('aria-hidden', 'true');
                }
            });
        });
    </script>
</body>
</html>