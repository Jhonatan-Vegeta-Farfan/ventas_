<?php
// Inicializar una variable para manejar el estado del formulario
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $submitted = true;
}
?>

<style>
    :root {
        --alien-green: #00ff9d;
        --alien-purple: #9d00ff;
        --ufo-blue: #00e1ff;
        --dark-space: #0a001a;
    }
    
    .complaint-main {
        background-color: var(--dark-space);
        background-image: 
            radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
            radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
        color: var(--alien-green);
        font-family: 'Orbitron', sans-serif;
        padding: 40px 0;
        min-height: calc(100vh - 120px); /* Ajuste para header/footer */
    }

    .complaint-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        background: rgba(20, 10, 40, 0.8);
        border: 2px solid var(--alien-green);
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
        position: relative;
    }

    .complaint-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
        opacity: 0.2;
        z-index: -1;
    }

    .complaint-title {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 30px;
        text-shadow: 0 0 10px var(--alien-green);
        position: relative;
    }

    .complaint-title::before,
    .complaint-title::after {
        content: '✧';
        color: var(--ufo-blue);
        margin: 0 15px;
    }

    .complaint-form .form-group {
        margin-bottom: 25px;
    }

    .complaint-form label {
        color: var(--ufo-blue);
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
    }

    .complaint-form input,
    .complaint-form textarea {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid var(--alien-green);
        color: var(--alien-green);
        border-radius: 8px;
        padding: 12px 15px;
        width: 100%;
        transition: all 0.3s;
    }

    .complaint-form textarea {
        min-height: 180px;
        resize: vertical;
    }

    .complaint-form input:focus,
    .complaint-form textarea:focus {
        border-color: var(--ufo-blue);
        box-shadow: 0 0 15px var(--ufo-blue);
        outline: none;
    }

    .btn-submit-complaint {
        background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
        color: #000;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s;
        width: 100%;
        margin-top: 20px;
    }

    .btn-submit-complaint:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 0 25px var(--alien-green);
    }

    /* Modal de éxito */
    .alien-modal {
        background: rgba(10, 0, 26, 0.95);
        border: 2px solid var(--alien-green);
        color: var(--alien-green);
    }

    .alien-modal-header {
        border-bottom: 1px solid var(--alien-purple);
    }

    .alien-modal-title {
        color: var(--ufo-blue);
    }

    @media (max-width: 768px) {
        .complaint-container {
            padding: 20px;
            margin: 20px;
        }
        
        .complaint-title {
            font-size: 1.8rem;
        }
    }
</style>

<main class="complaint-main">
    <div class="complaint-container">
        <h1 class="complaint-title">LIBRO DE RECLAMACIONES</h1>
        
        <form class="complaint-form" method="POST" action="">
            <div class="form-group">
                <label for="name">Nombre completo:</label>
                <input type="text" id="name" name="name" placeholder="Ingrese su nombre..." required>
            </div>
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su email..." required>
            </div>
            
            <div class="form-group">
                <label for="message">Detalle su reclamación:</label>
                <textarea id="message" name="message" placeholder="Describa su reclamo con detalles..." required></textarea>
            </div>
            
            <button type="submit" class="btn-submit-complaint">
                ENVIAR RECLAMACIÓN
            </button>
        </form>
    </div>
</main>

<?php if ($submitted): ?>
<div class="modal fade show" id="successModal" tabindex="-1" style="display: block; background: rgba(0,0,0,0.5);">
    <div class="modal-dialog">
        <div class="modal-content alien-modal">
            <div class="modal-header alien-modal-header">
                <h5 class="modal-title alien-modal-title">RECLAMACIÓN REGISTRADA</h5>
                <button type="button" class="close" onclick="$('#successModal').hide()">
                    <span style="color: var(--alien-green);">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Su reclamo ha sido recibido en nuestro sistema. Nos contactaremos dentro de 24-48 horas terrestres.</p>
            </div>
            <div class="modal-footer">
                <button onclick="$('#successModal').hide()" class="btn btn-submit-complaint">ACEPTAR</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Recursos necesarios -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>