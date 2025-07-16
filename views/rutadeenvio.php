<!-- Espacio seguro después del header (ajustable) -->
<div class="header-spacer" style="height: 80px;"></div>

<!-- Efecto scanner (posicionado después del header) -->
<div class="alien-scanner"></div>

<!-- Contenedor principal con márgenes seguros -->
<div class="intergalactic-shipping">
    <div class="shipping-container">
        <h1 class="shipping-title">RUTAS DE ENVÍO INTERGALÁCTICAS</h1>
        
        <!-- Contenedor del mapa modificado para que sea más grande -->
        <div class="route-map-container">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15507.2159019346!2d-74.2474224348876!3d-13.525945399999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x9113cbd5c2eb0021%3A0xf8605c6a1d6a9a7a!2sPlaza%20de%20Armas%20de%20Ayacucho%2C%20Ayacucho!3m2!1d-13.5259454!2d-74.2235649!4m5!1s0x910f3843f4d37915%3A0xd78a04a05151532b!2sCalle%20Grau%20614%2C%20Huanta%2C%20Ayacucho!3m2!1d-12.9762572!2d-74.2441244!5e0!3m2!1sen!2spe!4v1624125600000!5m2!1sen!2spe" 
                        allowfullscreen="" 
                        loading="lazy"
                        style="border:0;"></iframe>
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
</div>

<!-- Estilos optimizados para evitar conflictos -->
<style>
    /* Variables CSS */
    :root {
        --alien-green: #00ff9d;
        --alien-purple: #9d00ff;
        --ufo-blue: #00e1ff;
        --dark-space: #0a001a;
        --energy-pink: #ff00aa;
        --header-height: 80px; /* Ajustar según tu header */
    }

    /* Reset de posicionamiento */
    .header-spacer {
        width: 100%;
        clear: both;
    }

    /* Scanner ajustado */
    .alien-scanner {
        position: fixed;
        top: var(--header-height);
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--alien-green), transparent);
        box-shadow: 0 0 10px var(--alien-green);
        animation: scan 4s linear infinite;
        z-index: 999;
    }

    /* Contenedor principal seguro */
    .intergalactic-shipping {
        position: relative;
        z-index: 1;
        margin-top: 30px;
    }

    .shipping-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        padding-top: 40px;
    }

    /* Estilos visuales */
    .shipping-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 40px;
        text-shadow: 0 0 15px var(--alien-green);
        letter-spacing: 3px;
        color: var(--alien-green);
        font-family: 'Orbitron', sans-serif;
    }

    .shipping-title::before,
    .shipping-title::after {
        content: '✧';
        color: var(--ufo-blue);
        margin: 0 15px;
    }

    /* Estilos para el mapa más grande */
    .route-map-container {
        border: 3px solid var(--alien-green);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.4);
        margin-bottom: 30px;
        background: rgba(20, 10, 40, 0.7);
        padding: 10px;
        position: relative;
        height: 500px; /* Altura aumentada */
        width: 100%; /* Ocupa todo el ancho disponible */
    }

    .map-responsive {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .shipping-info {
        background: rgba(10, 0, 26, 0.8);
        border-radius: 15px;
        padding: 30px;
        border: 1px solid var(--alien-purple);
        box-shadow: 0 0 20px rgba(157, 0, 255, 0.3);
    }

    .info-section {
        margin-bottom: 30px;
        position: relative;
    }

    .info-section:not(:last-child)::after {
        content: '';
        display: block;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--ufo-blue), transparent);
        margin: 25px 0;
    }

    .info-title {
        color: var(--ufo-blue);
        font-size: 1.3rem;
        margin-bottom: 15px;
        font-family: 'Orbitron', sans-serif;
        text-shadow: 0 0 10px var(--ufo-blue);
    }

    .info-content {
        color: #fff;
        line-height: 1.6;
    }

    .info-content ul {
        padding-left: 20px;
    }

    .info-content li {
        margin-bottom: 8px;
    }

    .route-point {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .point-marker {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-right: 15px;
        flex-shrink: 0;
        position: relative;
    }

    .point-marker::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .point-marker.start {
        background: var(--alien-green);
    }

    .point-marker.start::after {
        box-shadow: 0 0 0 0 rgba(0, 255, 157, 0.7);
    }

    .point-marker.mid {
        background: var(--ufo-blue);
    }

    .point-marker.mid::after {
        box-shadow: 0 0 0 0 rgba(0, 225, 255, 0.7);
    }

    .point-marker.end {
        background: var(--energy-pink);
    }

    .point-marker.end::after {
        box-shadow: 0 0 0 0 rgba(255, 0, 170, 0.7);
    }

    .point-text {
        color: #fff;
    }

    .btn-back {
        display: inline-block;
        padding: 12px 25px;
        background: var(--alien-purple);
        color: white;
        text-decoration: none;
        border-radius: 30px;
        font-weight: bold;
        transition: all 0.3s ease;
        border: 1px solid var(--alien-green);
        box-shadow: 0 0 15px rgba(157, 0, 255, 0.5);
        margin-top: 20px;
    }

    .btn-back:hover {
        background: var(--alien-green);
        color: var(--dark-space);
        transform: translateY(-3px);
        box-shadow: 0 0 20px var(--alien-green);
    }

    .btn-back i {
        margin-right: 8px;
    }

    /* Animaciones */
    @keyframes scan {
        0% { top: var(--header-height); opacity: 0.7; }
        50% { opacity: 1; }
        100% { top: 100vh; opacity: 0.7; }
    }

    @keyframes pulse {
        0% {
            transform: scale(0.95);
            opacity: 1;
        }
        70% {
            transform: scale(1.3);
            opacity: 0;
        }
        100% {
            transform: scale(0.95);
            opacity: 0;
        }
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
        
        :root {
            --header-height: 60px; /* Ajuste para mobile */
        }
        
        .route-map-container {
            height: 350px; /* Altura menor en móviles */
        }
    }

    @media (max-width: 480px) {
        .route-map-container {
            height: 300px; /* Altura aún menor en pantallas pequeñas */
        }
        
        .shipping-title {
            font-size: 1.5rem;
        }
    }
</style>

<!-- Recursos externos -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">