<?php
// Inicializar variable para estado del formulario
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $submitted = true;
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
    <title>Contacto Intergaláctico | Área 51 Clothing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <img src="https://cdn-icons-png.flaticon.com/512/3618/3618730.png" 
                 alt="Logo Área 51 Clothing" 
                 class="alien-logo" 
                 width="80" 
                 height="80">
            <h1>ÁREA 51 CLOTHING</h1>
        </div>
    </header>

    <!-- Todo el contenido después del header -->
    <style>
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
        }
        
        body {
            background-color: var(--dark-space);
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .main-header {
            background: rgba(10, 0, 26, 0.9);
            padding: 20px 0;
            text-align: center;
            border-bottom: 2px solid var(--alien-green);
        }
        
        .alien-logo {
            filter: drop-shadow(0 0 10px var(--alien-green));
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* [Resto de tus estilos CSS aquí] */
        .contact-container {
            background: rgba(20, 10, 40, 0.8);
            border: 2px solid var(--alien-green);
            border-radius: 15px;
            padding: 30px;
            max-width: 800px;
            margin: 40px auto;
        }
        
        /* ... otros estilos ... */
    </style>

    <!-- Contenido principal -->
    <main class="container">
        <div class="contact-container">
            <h1 class="contact-title">CONTACTO INTERGALÁCTICO</h1>
            
            <form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="name">NOMBRE TERRESTRE:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">EMAIL:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message">MENSAJE:</label>
                    <textarea id="message" name="message" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="btn-send">
                    <i class="fas fa-paper-plane"></i> ENVIAR
                </button>
            </form>
        </div>
    </main>

    <!-- Modal de éxito -->
    <?php if ($submitted): ?>
    <div class="modal-overlay"></div>
    <div class="alien-modal">
        <div class="alien-modal-body">
            <p>¡Mensaje transmitido con éxito!</p>
        </div>
    </div>
    <?php endif; ?>

    <!-- Scripts -->
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            let valid = true;
            
            // Validación simple
            document.querySelectorAll('.form-control').forEach(input => {
                if (!input.value.trim()) {
                    input.style.borderColor = 'red';
                    valid = false;
                }
            });
            
            if (!valid) {
                e.preventDefault();
                alert('Complete todos los campos');
            }
        });
        
        // Cerrar modal
        function closeModal() {
            document.querySelector('.alien-modal').style.display = 'none';
            document.querySelector('.modal-overlay').style.display = 'none';
        }
    </script>
</body>
</html>