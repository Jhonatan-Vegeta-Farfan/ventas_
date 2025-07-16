<style>
    /* Estilos existentes */
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

    /* Estilos específicos para el formulario */
    .alien-form-container {
        padding: 40px 0;
        max-width: 800px;
        margin: 0 auto;
    }

    .alien-form-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 10px var(--alien-green);
        letter-spacing: 3px;
        position: relative;
    }

    .alien-form-title::before,
    .alien-form-title::after {
        content: '✧';
        color: var(--ufo-blue);
        margin: 0 15px;
    }

    .alien-form {
        background: rgba(20, 10, 40, 0.7);
        border: 3px solid var(--alien-green);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
        color: var(--ufo-blue);
        font-size: 1.1rem;
        letter-spacing: 1px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        background-color: rgba(10, 5, 20, 0.8);
        border: 1px solid var(--alien-purple);
        border-radius: 8px;
        color: var(--alien-green);
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        transition: all 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--alien-green);
        box-shadow: 0 0 10px var(--alien-green);
    }

    .form-control::placeholder {
        color: rgba(0, 255, 157, 0.5);
    }

    .btn-alien-submit {
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
        width: 100%;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.1rem;
    }

    .btn-alien-submit:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        box-shadow: 0 0 25px var(--alien-green);
        transform: translateY(-3px);
    }

    /* Efectos especiales */
    .alien-form-field {
        position: relative;
    }

    .alien-form-field::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--alien-green), transparent);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .alien-form-field:focus-within::after {
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .alien-form-title {
            font-size: 2rem;
        }
        
        .alien-form-title::before,
        .alien-form-title::after {
            margin: 0 8px;
        }
        
        .alien-form {
            padding: 20px;
        }
    }
</style>

<!-- Contenedor del formulario -->
<div class="alien-form-container">
    <div class="container">
        <h1 class="alien-form-title">FORMULARIO DE CONTACTO INTERGALÁCTICO</h1>
        
        <form class="alien-form" action="#" method="POST">
            <div class="form-group alien-form-field">
                <label for="name" class="form-label">NOMBRE TERRÍCOLA</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese su nombre terrestre" required>
            </div>
            
            <div class="form-group alien-form-field">
                <label for="email" class="form-label">SEÑAL DE CONTACTO (EMAIL)</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="su@señal.intergalactica" required>
            </div>
            
            <div class="form-group alien-form-field">
                <label for="planet" class="form-label">PLANETA DE ORIGEN</label>
                <select id="planet" name="planet" class="form-control" required>
                    <option value="" disabled selected>Seleccione su planeta</option>
                    <option value="earth">Tierra</option>
                    <option value="mars">Marte</option>
                    <option value="andromeda">Andrómeda</option>
                    <option value="x-357">X-357</option>
                    <option value="other">Otro (especificar)</option>
                </select>
            </div>
            
            <div class="form-group alien-form-field">
                <label for="message" class="form-label">MENSAJE CODIFICADO</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Transmita su mensaje en código universal..." required></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn-alien-submit">
                    <i class="fas fa-paper-plane"></i> TRANSMITIR MENSAJE
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Recursos necesarios (si no están ya incluidos en tu página) -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>