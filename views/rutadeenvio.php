<style>
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
        padding-top: 20px;
    }

    .shipping-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .shipping-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 40px;
        text-shadow: 0 0 15px var(--alien-green);
        letter-spacing: 3px;
        position: relative;
    }

    .shipping-title::before,
    .shipping-title::after {
        content: '✧';
        color: var(--ufo-blue);
        margin: 0 15px;
    }

    .route-map-container {
        border: 3px solid var(--alien-green);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.4);
        margin-bottom: 30px;
        background: rgba(20, 10, 40, 0.7);
        padding: 10px;
        position: relative;
    }

    .route-map-container::before {
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

    .map-responsive {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        border-radius: 10px;
        z-index: 1;
    }

    .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        filter: hue-rotate(120deg) contrast(110%) brightness(90%);
    }

    .shipping-info {
        background: rgba(20, 10, 40, 0.7);
        border: 2px solid var(--alien-green);
        border-radius: 15px;
        padding: 25px;
        margin-top: 30px;
        box-shadow: 0 0 20px rgba(0, 255, 157, 0.2);
    }

    .info-section {
        margin-bottom: 25px;
    }

    .info-title {
        color: var(--ufo-blue);
        font-size: 1.3rem;
        margin-bottom: 15px;
        border-bottom: 1px solid var(--alien-purple);
        padding-bottom: 8px;
    }

    .info-content {
        color: #ccc;
        line-height: 1.6;
    }

    .route-point {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .point-marker {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .point-marker.start {
        background: var(--alien-green);
        box-shadow: 0 0 10px var(--alien-green);
    }

    .point-marker.end {
        background: var(--energy-pink);
        box-shadow: 0 0 10px var(--energy-pink);
    }

    .point-marker.mid {
        background: var(--ufo-blue);
        box-shadow: 0 0 10px var(--ufo-blue);
    }

    .point-text {
        flex-grow: 1;
    }

    .btn-back {
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
        margin-top: 20px;
    }

    .btn-back:hover {
        background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
        color: #fff;
        box-shadow: 0 0 25px var(--alien-green);
        transform: translateY(-3px);
    }

    /* Efecto scanner */
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
        .shipping-title {
            font-size: 2rem;
        }
        
        .shipping-info {
            padding: 20px;
        }
        
        .info-title {
            font-size: 1.1rem;
        }
    }
</style>

<!-- Efecto scanner -->
<div class="alien-scanner"></div>

<div class="shipping-container">
    <h1 class="shipping-title">RUTAS DE ENVÍO INTERGALÁCTICAS</h1>
    
    <div class="route-map-container">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15507.2159019346!2d-74.2474224348876!3d-13.525945399999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x9113cbd5c2eb0021%3A0xf8605c6a1d6a9a7a!2sPlaza%20de%20Armas%20de%20Ayacucho%2C%20Ayacucho!3m2!1d-13.5259454!2d-74.2235649!4m5!1s0x910f3843f4d37915%3A0xd78a04a05151532b!2sCalle%20Grau%20614%2C%20Huanta%2C%20Ayacucho!3m2!1d-12.9762572!2d-74.2441244!5e0!3m2!1sen!2spe!4v1624125600000!5m2!1sen!2spe" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
    <div class="shipping-info">
        <div class="info-section">
            <h3 class="info-title">NUESTRA RUTA DE DISTRIBUCIÓN</h3>
            <div class="route-point">
                <div class="point-marker start"></div>
                <div class="point-text">
                    <strong>BASE PRINCIPAL:</strong> Plaza de Armas de Ayacucho
                </div>
            </div>
            <div class="route-point">
                <div class="point-marker mid"></div>
                <div class="point-text">
                    <strong>PUNTO DE TRANSFERENCIA:</strong> Centro Logístico Área 51 (Km 25 Carretera Ayacucho-Huanta)
                </div>
            </div>
            <div class="route-point">
                <div class="point-marker end"></div>
                <div class="point-text">
                    <strong>DESTINO FINAL:</strong> Calle Grau 614, Huanta
                </div>
            </div>
        </div>
        
        <div class="info-section">
            <h3 class="info-title">DETALLES DE LA RUTA</h3>
            <div class="info-content">
                <p>Nuestros envíos se realizan mediante tecnología de teletransportación cuántica con las siguientes características:</p>
                <ul>
                    <li><strong>Tiempo estimado:</strong> 24-48 horas terrestres</li>
                    <li><strong>Radio de cobertura:</strong> 50km alrededor de nuestra base</li>
                    <li><strong>Vehículos:</strong> Drones OVNI de última generación</li>
                    <li><strong>Seguimiento:</strong> Disponible en tiempo real mediante nuestra app</li>
                </ul>
            </div>
        </div>
        
        <div class="info-section">
            <h3 class="info-title">HORARIOS DE TRANSPORTE</h3>
            <div class="info-content">
                <p><strong>Lunes a Viernes:</strong> 8:00 am - 6:00 pm (Última salida 5:00 pm)</p>
                <p><strong>Sábados:</strong> 9:00 am - 2:00 pm (Última salida 1:00 pm)</p>
                <p><strong>Domingos:</strong> Solo entregas urgentes (cargo adicional del 20%)</p>
            </div>
        </div>
        
        <div class="text-center">
            <a href="<?php echo BASE_URL ?>producto" class="btn-back">
                <i class="fas fa-arrow-left"></i> VOLVER A LA TIENDA
            </a>
        </div>
    </div>
</div>

<!-- Recursos necesarios -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>