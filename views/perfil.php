<style>
    :root {
        --alien-green: #00ff9d;
        --alien-purple: #9d00ff;
        --ufo-blue: #00e1ff;
        --dark-space: #0a001a;
    }
    
    body {
        background-color: var(--dark-space);
        color: #ffffff;
        font-family: 'Orbitron', sans-serif;
    }

    .alien-form-section {
        padding-top: 100px;
        min-height: calc(100vh - 100px);
        background: 
            radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
            radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .alien-form-card {
        width: 90%;
        max-width: 800px;
        background: rgba(20, 10, 40, 0.85);
        border: 2px solid var(--alien-green);
        border-radius: 1rem;
        box-shadow: 0 0 2rem rgba(0, 255, 157, 0.35);
        position: relative;
        overflow: hidden;
    }

    .alien-form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
        opacity: 0.2;
        z-index: 0;
    }

    .alien-form-header {
        text-align: center;
        padding: 2rem 2rem 1rem;
        position: relative;
        z-index: 1;
    }

    .alien-form-logo {
        max-height: 120px;
        filter: drop-shadow(0 0 10px var(--alien-green));
    }

    .alien-form-body {
        padding: 1rem 2rem 2rem;
        position: relative;
        z-index: 1;
    }

    .alien-form-title {
        color: var(--ufo-blue);
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        text-shadow: 0 0 5px var(--ufo-blue);
    }

    .form-label {
        color: var(--ufo-blue);
        font-weight: bold;
        margin-bottom: 0.5rem;
        display: block;
    }

    .form-control {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid var(--alien-green);
        color: var(--alien-green);
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
        width: 100%;
        transition: all 0.3s ease;
        font-family: 'Orbitron', sans-serif;
    }

    .form-control:focus {
        border-color: var(--ufo-blue);
        box-shadow: 0 0 1rem var(--ufo-blue);
        outline: none;
        background: rgba(0, 0, 0, 0.7);
    }

    .form-control::placeholder {
        color: rgba(0, 255, 157, 0.5);
    }

    .alien-form-footer {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .btn-alien-primary {
        background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
        color: #000;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Orbitron', sans-serif;
    }

    .btn-alien-primary:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 0 1.5rem var(--alien-green);
    }

    .btn-alien-secondary {
        background: rgba(20, 10, 40, 0.7);
        color: var(--ufo-blue);
        border: 1px solid var(--ufo-blue);
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Orbitron', sans-serif;
    }

    .btn-alien-secondary:hover {
        background: rgba(0, 225, 255, 0.2);
        color: var(--alien-green);
        transform: translateY(-3px);
        box-shadow: 0 0 1rem var(--ufo-blue);
    }

    /* Efectos especiales */
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

    @media (max-width: 768px) {
        .alien-form-section {
            padding-top: 80px;
            min-height: calc(100vh - 80px);
        }
        
        .alien-form-card {
            width: 95%;
            padding: 1.5rem;
        }
        
        .alien-form-logo {
            max-height: 80px;
        }
        
        .alien-form-footer {
            flex-direction: column;
        }
        
        .btn-alien-primary, .btn-alien-secondary {
            width: 100%;
        }
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

<!-- Efecto scanner -->
<div class="alien-scanner"></div>

<section class="alien-form-section">
    <div class="alien-form-card">
        <div class="alien-form-header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Logo Alien" class="alien-form-logo">
            <h2 class="alien-form-title">REGISTRO INTERGALÁCTICO</h2>
        </div>
        
        <div class="alien-form-body">
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
                
                <div class="alien-form-footer">
                    <a href="<?php echo BASE_URL ?>producto" class="btn-alien-secondary">Volver al inicio</a>
                    <a href="<?php echo BASE_URL ?>producto" class="btn-alien-primary">Aceptar</a>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>