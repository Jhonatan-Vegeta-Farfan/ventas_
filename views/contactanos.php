<?php
// Inicializar una variable para manejar el estado del formulario
$submitted = false;

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Lógica para enviar el mensaje (ejemplo básico)
    // mail($email, "Nuevo mensaje de contacto", $message);

    // Cambiar el estado a enviado
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Intergaláctico</title>
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

        h2.contact-title {
            color: var(--alien-green);
            text-shadow: 0 0 10px var(--alien-green);
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.2rem;
            position: relative;
            letter-spacing: 2px;
        }

        h2.contact-title::before,
        h2.contact-title::after {
            content: '✧';
            color: var(--ufo-blue);
            margin: 0 15px;
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
            transition: all 0.3s;
        }

        .form-control:focus {
            background-color: rgba(0, 0, 0, 0.7);
            color: var(--alien-green);
            border-color: var(--ufo-blue);
            box-shadow: 0 0 15px var(--ufo-blue);
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
        }

        .btn-send:hover {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
            box-shadow: 0 0 25px var(--alien-green);
            transform: translateY(-3px);
        }

        .alien-logo {
            max-height: 80px;
            margin-bottom: 20px;
            filter: drop-shadow(0 0 10px var(--alien-green));
            animation: float 6s ease-in-out infinite;
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
        }

        .alien-modal-header {
            border-bottom: 1px solid var(--alien-purple);
        }

        .alien-modal-title {
            color: var(--ufo-blue);
            text-shadow: 0 0 5px var(--ufo-blue);
        }

        .alien-modal-body {
            color: #ccc;
        }

        .alien-modal-footer {
            border-top: 1px solid var(--alien-purple);
        }

        .btn-alien {
            background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
            color: #000;
            border: none;
            font-weight: bold;
        }

        .btn-alien:hover {
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
        }

        @keyframes scan {
            0% { top: 0; opacity: 0.7; }
            50% { opacity: 1; }
            100% { top: 100vh; opacity: 0.7; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-container {
                padding: 20px;
                margin: 20px auto;
            }
            
            h2.contact-title {
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
    <div class="alien-scanner"></div>

    <div class="container">
        <div class="text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3618/3618730.png" alt="Área 51 Logo" class="alien-logo">
        </div>
        
        <div class="contact-container">
            <h2 class="contact-title">CONTACTO INTERGALÁCTICO</h2>
            
            <form id="contact-form" method="POST" action="">
                <div class="form-group">
                    <label for="name">NOMBRE TERRESTRE:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre completo..." required>
                </div>
                
                <div class="form-group">
                    <label for="email">FREQUENCIA DE COMUNICACIÓN (EMAIL):</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su dirección de correo..." required>
                </div>
                
                <div class="form-group">
                    <label for="message">MENSAJE CODIFICADO:</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje intergaláctico..." required></textarea>
                </div>
                
                <button type="submit" class="btn-send">
                    <i class="fas fa-paper-plane"></i> TRANSMITIR MENSAJE
                </button>
            </form>
        </div>
    </div>

    <?php if ($submitted): ?>
        <!-- Modal de éxito -->
        <div class="modal fade show" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content alien-modal">
                    <div class="modal-header alien-modal-header">
                        <h5 class="modal-title alien-modal-title" id="successModalLabel">TRANSMISIÓN EXITOSA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#successModal').modal('hide');">
                            <span aria-hidden="true" style="color: var(--alien-green);">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body alien-modal-body">
                        <p>Su mensaje ha sido recibido en nuestra base estelar. Nuestros agentes se pondrán en contacto con usted pronto.</p>
                        <p class="text-center"><i class="fas fa-check-circle" style="color: var(--alien-green); font-size: 2rem;"></i></p>
                    </div>
                    <div class="modal-footer alien-modal-footer">
                        <a href="<?php echo BASE_URL ?>producto" class="btn btn-alien" data-dismiss="modal">
                            <i class="fas fa-arrow-left"></i> VOLVER AL PORTAL PRINCIPAL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Recursos necesarios -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Cerrar el modal al hacer clic fuera de él
        $(document).on('click', '[data-dismiss="modal"]', function() {
            $('#successModal').modal('hide');
        });
    </script>
</body>
</html>