<style>
    /* Estilos generales para el tema alienígena */
    :root {
        --alien-green: #00ff9d;
        --alien-purple: #9d00ff;
        --ufo-blue: #00e1ff;
        --dark-space: #0a001a;
        --energy-pink: #ff00aa;
    }
    
    .alien-container {
        background-color: var(--dark-space);
        color: var(--alien-green);
        font-family: 'Orbitron', sans-serif;
        background-image: 
            radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
            radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
        padding: 20px;
    }

    .alien-card {
        background: rgba(20, 10, 40, 0.7);
        border: 3px solid var(--alien-green);
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.4);
        overflow: hidden;
        position: relative;
    }

    .alien-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.1"/></svg>');
        opacity: 0.3;
        z-index: 0;
    }

    .alien-card-header {
        border-bottom: 2px solid var(--alien-purple);
        padding: 20px;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .alien-card-header h3 {
        color: var(--ufo-blue);
        text-shadow: 0 0 10px var(--alien-green);
        font-size: 1.8rem;
        margin: 0;
    }

    .alien-card-body {
        padding: 25px;
        position: relative;
        z-index: 1;
    }

    .alien-form-label {
        color: var(--ufo-blue);
        margin-bottom: 8px;
        display: block;
    }

    .alien-form-control {
        background-color: rgba(10, 0, 26, 0.8);
        border: 2px solid var(--alien-green);
        border-radius: 8px;
        color: var(--alien-green);
        padding: 10px 15px;
        width: 100%;
        margin-bottom: 20px;
        font-family: 'Orbitron', sans-serif;
        transition: all 0.3s;
    }

    .alien-form-control:focus {
        border-color: var(--energy-pink);
        box-shadow: 0 0 15px var(--energy-pink);
        outline: none;
    }

    .alien-form-select {
        background-color: rgba(10, 0, 26, 0.8);
        border: 2px solid var(--alien-green);
        border-radius: 8px;
        color: var(--alien-green);
        padding: 10px 15px;
        width: 100%;
        margin-bottom: 20px;
        font-family: 'Orbitron', sans-serif;
    }

    .alien-form-check {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .alien-form-check-input {
        margin-right: 10px;
        appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid var(--alien-green);
        border-radius: 4px;
        background-color: transparent;
        position: relative;
    }

    .alien-form-check-input:checked {
        background-color: var(--alien-green);
    }

    .alien-form-check-input:checked::after {
        content: '✓';
        position: absolute;
        color: var(--dark-space);
        font-size: 14px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .alien-form-check-label {
        color: #ccc;
        font-size: 0.9rem;
    }

    .alien-btn {
        display: inline-block;
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
        text-decoration: none;
        cursor: pointer;
        font-family: 'Orbitron', sans-serif;
        margin: 5px;
    }

    .alien-btn:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        box-shadow: 0 0 25px var(--alien-green);
        transform: translateY(-3px);
    }

    .alien-btn-secondary {
        background: linear-gradient(45deg, var(--alien-purple), var(--energy-pink));
    }

    .alien-img {
        border-radius: 10px;
        border: 3px solid var(--alien-green);
        box-shadow: 0 0 20px var(--alien-purple);
        max-width: 100%;
        height: auto;
        transition: transform 0.3s;
    }

    .alien-img:hover {
        transform: scale(1.05);
    }

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
        .alien-card-header h3 {
            font-size: 1.4rem;
        }
        
        .alien-card-body {
            padding: 15px;
        }
    }
</style>

<!-- Efecto scanner -->
<div class="alien-scanner"></div>

<div class="alien-container">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="alien-card">
                    <div class="alien-card-header">
                        <h3>¡ÚNETE A NUESTRA COMUNIDAD INTERGALÁCTICA!</h3>
                        <p>Recibe un 50% de descuento en tu primera compra</p>
                    </div>
                    <div class="alien-card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form id="alien-subscription-form">
                                    <div class="mb-3">
                                        <label for="alien-nombre" class="alien-form-label">Nombre Terrestre</label>
                                        <input type="text" class="alien-form-control" id="alien-nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alien-apellido" class="alien-form-label">Apellido Galáctico</label>
                                        <input type="text" class="alien-form-control" id="alien-apellido" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alien-email" class="alien-form-label">Frecuencia de Comunicación (Email)</label>
                                        <input type="email" class="alien-form-control" id="alien-email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alien-contrasena" class="alien-form-label">Código Secreto</label>
                                        <input type="password" class="alien-form-control" id="alien-contrasena" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alien-celular" class="alien-form-label">Dispositivo de Contacto</label>
                                        <input type="tel" class="alien-form-control" id="alien-celular" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alien-fecha-nacimiento" class="alien-form-label">Fecha de Aterrizaje en la Tierra</label>
                                        <input type="date" class="alien-form-control" id="alien-fecha-nacimiento" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alien-genero" class="alien-form-label">Tipo de Especie</label>
                                        <select class="alien-form-select" id="alien-genero" required>
                                            <option value="">Selecciona tu especie</option>
                                            <option value="gris">Gris</option>
                                            <option value="reptiliano">Reptiliano</option>
                                            <option value="nordico">Nórdico</option>
                                            <option value="hibrido">Híbrido</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>
                                    <div class="alien-form-check">
                                        <input class="alien-form-check-input" type="checkbox" value="" id="alien-politicas" required>
                                        <label class="alien-form-check-label" for="alien-politicas">
                                            Acepto los términos del Tratado Intergaláctico de Privacidad.
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="alien-btn">ACTIVAR DESCUENTO</button>
                                    </div>
                                </form>
                                <div class="text-center mt-3">
                                    <a href="<?php echo BASE_URL ?>producto" class="alien-btn alien-btn-secondary">Continuar como visitante</a>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <img src="https://m.media-amazon.com/images/M/MV5BMGU2NjZhMmUtNTYzYS00OTMyLTkzZDAtMTkzNDIwNWFkM2I0XkEyXkFqcGdeQXVyMTY3NTgwODk5._V1_FMjpg_UX1000_.jpg" class="alien-img" alt="Alienígena">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recursos necesarios -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
    // Script para redireccionar al usuario al presionar el botón
    document.getElementById('alien-subscription-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Simulación de envío de datos
        setTimeout(function() {
            window.location.href = '<?php echo BASE_URL ?>producto';
        }, 2000);
        
        // Efecto visual de confirmación
        const card = document.querySelector('.alien-card');
        card.style.boxShadow = '0 0 50px var(--energy-pink)';
        setTimeout(() => {
            card.style.boxShadow = '0 0 30px rgba(0, 255, 157, 0.4)';
        }, 2000);
    });
</script>