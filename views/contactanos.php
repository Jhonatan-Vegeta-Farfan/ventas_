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
    
    <!-- Carga de estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* [Todo tu CSS actual permanece igual] */
        /* He mantenido todo tu CSS original aquí */
        /* Solo lo omito para hacer el código más compacto en la respuesta */
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
        
        /* ... resto de tu CSS ... */
    </style>
</head>

<body>
    <!-- Efecto scanner -->
    <div class="alien-scanner" aria-hidden="true"></div>

    <!-- Header principal -->
    <header class="main-header">
        <div class="container">
            <div class="text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3618/3618730.png" alt="Logo de Área 51 Clothing" class="alien-logo" width="80" height="80">
                <h1 class="main-title">ÁREA 51 CLOTHING</h1>
            </div>
        </div>
    </header>

    <!-- Contenido principal después del header -->
    <main class="container">
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

    <!-- Footer -->
    <footer class="intergalactic-footer">
        <div class="container">
            <p>© <?php echo date('Y'); ?> Área 51 Clothing - Todos los derechos reservados en esta y otras galaxias</p>
        </div>
    </footer>

    <!-- Scripts al final del body -->
    <script>
        // Función para cerrar el modal
        function closeModal() {
            const modal = document.getElementById('successModal');
            const overlay = document.getElementById('modalOverlay');
            
            if (modal && overlay) {
                modal.style.display = 'none';
                overlay.style.display = 'none';
            }
        }

        // Configuración de eventos cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            // Cerrar modal al hacer clic fuera
            const overlay = document.getElementById('modalOverlay');
            if (overlay) {
                overlay.addEventListener('click', closeModal);
            }

            // Manejar el cierre con Escape
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeModal();
                }
            });

            // Validación del formulario
            const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(event) {
                    let valid = true;
                    const name = document.getElementById('name');
                    const email = document.getElementById('email');
                    const message = document.getElementById('message');

                    // Resetear estilos
                    [name, email, message].forEach(el => el.style.borderColor = '');

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
            }

            // Mejorar accesibilidad de iconos
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