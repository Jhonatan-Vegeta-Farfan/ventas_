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
    
    /* Contenedor principal con espacio para el header */
    .complaint-section {
        padding-top: 100px; /* Más espacio para el header */
        min-height: calc(100vh - 100px); /* Ajuste de altura */
        background: 
            radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
            radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
    }

    .complaint-container {
        width: 90%; /* Más responsive */
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: rgba(20, 10, 40, 0.85);
        border: 2px solid var(--alien-green);
        border-radius: 1rem;
        box-shadow: 0 0 2rem rgba(0, 255, 157, 0.35);
        position: relative;
        flex-grow: 1;
        box-sizing: border-box;
    }

    .complaint-container::before {
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

    .complaint-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .complaint-title {
        font-size: 2.2rem;
        color: var(--alien-green);
        text-shadow: 0 0 1rem var(--alien-green);
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .complaint-title::before,
    .complaint-title::after {
        content: '✧';
        color: var(--ufo-blue);
        margin: 0 1rem;
    }

    .complaint-form .form-group {
        margin-bottom: 1.5rem;
    }

    .complaint-form label {
        display: block;
        color: var(--ufo-blue);
        margin-bottom: 0.5rem;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .complaint-form input,
    .complaint-form textarea {
        width: 100%;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid var(--alien-green);
        border-radius: 0.5rem;
        color: var(--alien-green);
        font-family: inherit;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .complaint-form textarea {
        min-height: 12rem;
        resize: vertical;
    }

    .complaint-form input:focus,
    .complaint-form textarea:focus {
        border-color: var(--ufo-blue);
        box-shadow: 0 0 1rem var(--ufo-blue);
        outline: none;
        background: rgba(0, 0, 0, 0.7);
    }

    .submit-complaint {
        background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
        color: #000;
        border: none;
        padding: 1rem;
        border-radius: 0.5rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        width: 100%;
        margin-top: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: inherit;
        font-size: 1.1rem;
    }

    .submit-complaint:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 0 1.5rem var(--alien-green);
    }

    /* Modal de confirmación */
    .complaint-modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.85);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        padding: 1rem;
    }

    .complaint-modal-content {
        background: rgba(10, 0, 26, 0.95);
        border: 2px solid var(--alien-green);
        border-radius: 1rem;
        padding: 2rem;
        max-width: 500px;
        width: 100%;
        box-shadow: 0 0 2rem var(--alien-green);
        text-align: center;
    }

    .complaint-modal-title {
        color: var(--ufo-blue);
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        text-shadow: 0 0 0.5rem var(--ufo-blue);
    }

    .complaint-modal-message {
        color: #ccc;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .complaint-section {
            padding-top: 80px; /* Ajuste para mobile */
            min-height: calc(100vh - 80px);
        }
        
        .complaint-container {
            padding: 1.5rem;
            margin: 1rem auto;
            width: 95%;
        }
        
        .complaint-title {
            font-size: 1.8rem;
        }
    }
</style>

<section class="complaint-section">
    <div class="complaint-container">
        <div class="complaint-header">
            <h1 class="complaint-title">LIBRO DE RECLAMACIONES</h1>
        </div>
        
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
                <label for="message">Detalle de su reclamación:</label>
                <textarea id="message" name="message" placeholder="Describa su reclamo con detalles..." required></textarea>
            </div>
            
            <button type="submit" class="submit-complaint">
                ENVIAR RECLAMACIÓN
            </button>
        </form>
    </div>
</section>

<?php if ($submitted): ?>
<div class="complaint-modal">
    <div class="complaint-modal-content">
        <h3 class="complaint-modal-title">RECLAMACIÓN REGISTRADA</h3>
        <p class="complaint-modal-message">Su reclamo ha sido recibido en nuestro sistema intergaláctico. Nuestro equipo se pondrá en contacto dentro de 24-48 horas terrestres.</p>
        <a href="<?php echo BASE_URL ?>producto" class="submit-complaint">
            VOLVER A LA TIENDA
        </a>
    </div>
</div>
<?php endif; ?>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">