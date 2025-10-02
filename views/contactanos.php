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
    <title>Contacto | STILOS Huanta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <img src="https://cdn-icons-png.flaticon.com/512/2452/2452566.png" 
                 alt="Logo STILOS" 
                 class="store-logo" 
                 width="80" 
                 height="80">
            <h1>STILOS HUANTA</h1>
            <p class="location">Ayacucho, Perú</p>
        </div>
    </header>

    <!-- Todo el contenido después del header -->
    <style>
        :root {
            --primary-brown: #8b4513;
            --accent-orange: #cd853f;
            --light-beige: #f9f5f0;
            --dark-brown: #5a3921;
        }
        
        body {
            background-color: var(--light-beige);
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--dark-brown);
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(139, 69, 19, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(205, 133, 63, 0.05) 0%, transparent 20%);
        }
        
        .main-header {
            background: rgba(255, 253, 250, 0.95);
            padding: 20px 0;
            text-align: center;
            border-bottom: 3px solid var(--primary-brown);
            box-shadow: 0 2px 10px rgba(139, 69, 19, 0.1);
        }
        
        .store-logo {
            filter: drop-shadow(0 0 5px var(--accent-orange));
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        .main-header h1 {
            font-family: 'Playfair Display', serif;
            color: var(--primary-brown);
            margin: 10px 0 5px;
            font-size: 2.2rem;
            letter-spacing: 1px;
        }
        
        .location {
            color: var(--accent-orange);
            font-style: italic;
            margin: 0;
            font-size: 0.9rem;
        }
        
        .contact-container {
            background: rgba(255, 253, 250, 0.95);
            border: 2px solid var(--accent-orange);
            border-radius: 10px;
            padding: 30px;
            max-width: 800px;
            margin: 40px auto;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .contact-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--primary-brown), var(--accent-orange), var(--primary-brown));
        }
        
        .contact-title {
            font-family: 'Playfair Display', serif;
            color: var(--primary-brown);
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
            border-bottom: 1px dashed var(--accent-orange);
            padding-bottom: 15px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-brown);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--accent-orange);
            border-radius: 5px;
            background-color: rgba(255, 253, 250, 0.9);
            font-family: 'Raleway', sans-serif;
            transition: all 0.3s;
            box-sizing: border-box;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-brown);
            box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
            background-color: #fff;
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn-send {
            background-color: var(--primary-brown);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            display: block;
            margin: 0 auto;
            font-size: 1rem;
        }
        
        .btn-send:hover {
            background-color: var(--accent-orange);
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.2);
        }
        
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(90, 57, 33, 0.7);
            z-index: 999;
        }
        
        .alien-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid var(--accent-orange);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            z-index: 1000;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        
        .alien-modal-body {
            font-family: 'Raleway', sans-serif;
            color: var(--dark-brown);
        }
        
        .alien-modal-body p {
            margin: 0;
            font-size: 1.1rem;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Efectos de bordado decorativos */
        .embroidery-corner {
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid var(--accent-orange);
            border-radius: 50%;
        }
        
        .embroidery-corner.tl {
            top: 10px;
            left: 10px;
        }
        
        .embroidery-corner.tr {
            top: 10px;
            right: 10px;
        }
        
        .embroidery-corner.bl {
            bottom: 10px;
            left: 10px;
        }
        
        .embroidery-corner.br {
            bottom: 10px;
            right: 10px;
        }
    </style>

    <!-- Contenido principal -->
    <main class="container">
        <div class="contact-container">
            <div class="embroidery-corner tl"></div>
            <div class="embroidery-corner tr"></div>
            <div class="embroidery-corner bl"></div>
            <div class="embroidery-corner br"></div>
            
            <h1 class="contact-title">CONTACTO - STILOS</h1>
            
            <form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="name"><i class="fas fa-user"></i> NOMBRE:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> EMAIL:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message"><i class="fas fa-comment"></i> MENSAJE:</label>
                    <textarea id="message" name="message" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="btn-send">
                    <i class="fas fa-paper-plane"></i> ENVIAR MENSAJE
                </button>
            </form>
        </div>
    </main>

    <!-- Modal de éxito -->
    <?php if ($submitted): ?>
    <div class="modal-overlay"></div>
    <div class="alien-modal">
        <div class="alien-modal-body">
            <p>¡Mensaje enviado con éxito!</p>
            <p style="margin-top: 10px; font-size: 0.9rem;">Nos pondremos en contacto pronto.</p>
            <button onclick="closeModal()" class="btn-send" style="margin-top: 15px;">Cerrar</button>
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
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (!valid) {
                e.preventDefault();
                alert('Por favor, complete todos los campos');
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