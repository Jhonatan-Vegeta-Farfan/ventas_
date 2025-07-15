<?php
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
    
    /* Contenedor principal ajustado para header */
    .complaint-main {
        padding: 40px 0;
        min-height: calc(100vh - 120px); /* Ajuste automático para header */
        background: 
            radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
            radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
    }

    .complaint-box {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        background: rgba(20, 10, 40, 0.8);
        border: 2px solid var(--alien-green);
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
        position: relative;
        overflow: hidden;
    }

    .complaint-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
        opacity: 0.2;
        z-index: 0;
    }

    .complaint-heading {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 30px;
        color: var(--alien-green);
        text-shadow: 0 0 10px var(--alien-green);
        position: relative;
    }

    .complaint-heading::before,
    .complaint-heading::after {
        content: '✧';
        color: var(--ufo-blue);
        margin: 0 15px;
    }

    .complaint-form .form-field {
        margin-bottom: 20px;
    }

    .complaint-form label {
        display: block;
        color: var(--ufo-blue);
        margin-bottom: 8px;
        font-weight: bold;
    }

    .complaint-form input,
    .complaint-form textarea {
        width: 100%;
        padding: 12px 15px;
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid var(--alien-green);
        border-radius: 8px;
        color: var(--alien-green);
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

    .submit-btn {
        background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
        color: #000;
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        width: 100%;
        margin-top: 20px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .submit-btn:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 0 25px var(--alien-green);
    }

    /* Modal de confirmación */
    .confirmation-modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .modal-content {
        background: rgba(10, 0, 26, 0.95);
        border: 2px solid var(--alien-green);
        border-radius: 15px;
        padding: 25px;
        max-width: 500px;
        width: 90%;
        box-shadow: 0 0 30px var(--alien-green);
    }

    .modal-title {
        color: var(--ufo-blue);
        margin-bottom: 20px;
        text-align: center;
    }

    .modal-message {
        color: #ccc;
        margin-bottom: 25px;
        text-align: center;
    }

    .modal-actions {
        text-align: center;
    }

    @media (max-width: 768px) {
        .complaint-box {
            padding: 20px;
            margin: 0 15px;
        }
        
        .complaint-heading {
            font-size: 1.8rem;
        }
    }
</style>

<main class="complaint-main">
    <div class="complaint-box">
        <h1 class="complaint-heading">LIBRO DE RECLAMACIONES</h1>
        
        <form class="complaint-form" method="POST" action="">
            <div class="form-field">
                <label for="name">Nombre completo:</label>
                <input type="text" id="name" name="name" placeholder="Ingrese su nombre..." required>
            </div>
            
            <div class="form-field">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su email..." required>
            </div>
            
            <div class="form-field">
                <label for="message">Detalle de su reclamación:</label>
                <textarea id="message" name="message" placeholder="Describa su reclamo con detalles..." required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">
                ENVIAR RECLAMACIÓN
            </button>
        </form>
    </div>
</main>

<?php if ($submitted): ?>
<div class="confirmation-modal">
    <div class="modal-content">
        <h3 class="modal-title">RECLAMACIÓN REGISTRADA</h3>
        <p class="modal-message">Su reclamo ha sido recibido en nuestro sistema intergaláctico. Nos contactaremos dentro de 24-48 horas terrestres.</p>
        <div class="modal-actions">
            <a href="<?php echo BASE_URL ?>producto" class="submit-btn">VOLVER A LA TIENDA</a>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Recursos mínimos necesarios -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">