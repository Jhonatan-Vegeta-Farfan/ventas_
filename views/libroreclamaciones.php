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
        --primary-brown: #8B4513;
        --accent-orange: #CD853F;
        --light-beige: #F9F5F0;
        --dark-brown: #5A3921;
    }
    
    /* Contenedor principal con espacio para el header */
    .complaint-section {
        padding-top: 100px; /* Más espacio para el header */
        min-height: calc(100vh - 100px); /* Ajuste de altura */
        background: 
            radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
            radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%);
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
        background-color: var(--light-beige);
    }

    .complaint-container {
        width: 90%; /* Más responsive */
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: rgba(255, 253, 250, 0.95);
        border: 2px solid var(--primary-brown);
        border-radius: 1rem;
        box-shadow: 0 0 2rem rgba(139, 69, 19, 0.2);
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
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23CD853F" stroke-width="0.5" opacity="0.1"/></svg>');
        opacity: 0.3;
        z-index: -1;
    }

    .complaint-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .complaint-title {
        font-size: 2.2rem;
        color: var(--primary-brown);
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
        font-family: 'Playfair Display', serif;
    }

    .complaint-title::before,
    .complaint-title::after {
        content: '✦';
        color: var(--accent-orange);
        margin: 0 1rem;
    }

    .complaint-form .form-group {
        margin-bottom: 1.5rem;
    }

    .complaint-form label {
        display: block;
        color: var(--dark-brown);
        margin-bottom: 0.5rem;
        font-weight: bold;
        font-size: 1.1rem;
        font-family: 'Raleway', sans-serif;
    }

    .complaint-form input,
    .complaint-form textarea {
        width: 100%;
        padding: 1rem;
        background: rgba(255, 253, 250, 0.9);
        border: 1px solid var(--accent-orange);
        border-radius: 0.5rem;
        color: var(--dark-brown);
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
        border-color: var(--primary-brown);
        box-shadow: 0 0 0.5rem rgba(139, 69, 19, 0.3);
        outline: none;
        background: rgba(255, 253, 250, 1);
    }

    .submit-complaint {
        background: linear-gradient(45deg, var(--primary-brown), var(--accent-orange));
        color: #fff;
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
        background: linear-gradient(45deg, var(--accent-orange), var(--primary-brown));
        transform: translateY(-3px);
        box-shadow: 0 0 1rem rgba(139, 69, 19, 0.4);
    }

    /* Logo y branding STILOS */
    .stilos-logo {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .stilos-logo img {
        max-height: 80px;
        filter: drop-shadow(0 2px 4px rgba(139, 69, 19, 0.3));
    }

    .location-badge {
        display: inline-block;
        background: var(--accent-orange);
        color: white;
        padding: 0.3rem 1rem;
        border-radius: 2rem;
        font-size: 0.9rem;
        margin-top: 0.5rem;
        font-style: italic;
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
        background: rgba(255, 253, 250, 0.98);
        border: 2px solid var(--primary-brown);
        border-radius: 1rem;
        padding: 2rem;
        max-width: 500px;
        width: 100%;
        box-shadow: 0 0 2rem rgba(139, 69, 19, 0.3);
        text-align: center;
    }

    .complaint-modal-title {
        color: var(--primary-brown);
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        font-family: 'Playfair Display', serif;
    }

    .complaint-modal-message {
        color: var(--dark-brown);
        margin-bottom: 2rem;
        line-height: 1.6;
        font-family: 'Raleway', sans-serif;
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
            <div class="stilos-logo">
                <!-- Logo de STILOS con bordados -->
                <svg width="200" height="80" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="brownGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#8B4513"/>
                            <stop offset="100%" stop-color="#CD853F"/>
                        </linearGradient>
                    </defs>
                    <text x="100" y="45" text-anchor="middle" font-family="'Playfair Display', serif" font-size="36" font-weight="bold" fill="url(#brownGradient)">STILOS</text>
                    <path d="M60,55 Q100,65 140,55" stroke="#CD853F" stroke-width="2" fill="none"/>
                    <circle cx="60" cy="55" r="3" fill="#8B4513"/>
                    <circle cx="100" cy="55" r="3" fill="#8B4513"/>
                    <circle cx="140" cy="55" r="3" fill="#8B4513"/>
                </svg>
                <div class="location-badge">Huanta, Ayacucho</div>
            </div>
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
        <p class="complaint-modal-message">Su reclamo ha sido recibido en nuestro sistema. Nuestro equipo de STILOS se pondrá en contacto dentro de 24-48 horas.</p>
        <a href="<?php echo BASE_URL ?>producto" class="submit-complaint">
            VOLVER A LA TIENDA
        </a>
    </div>
</div>
<?php endif; ?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">