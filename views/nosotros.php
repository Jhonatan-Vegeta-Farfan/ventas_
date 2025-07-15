<style>
  :root {
    --alien-green: #00ff9d;
    --alien-purple: #9d00ff;
    --ufo-blue: #00e1ff;
    --dark-space: #0a001a;
    --energy-pink: #ff00aa;
  }
  
  @font-face {
    font-family: 'Alien Encounter';
    src: url('https://www.dafontfree.io/data/30/a/12484/Alien-Encounters-Regular.ttf') format('truetype');
  }
  
  body {
    background-color: var(--dark-space);
    color: var(--alien-green);
    font-family: 'Orbitron', sans-serif;
    background-image: 
      radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
      radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
      url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
    padding: 20px 0;
  }

  .about-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .page-title {
    font-family: 'Alien Encounter', sans-serif;
    text-align: center;
    color: var(--alien-green);
    text-shadow: 0 0 10px var(--alien-green);
    letter-spacing: 3px;
    margin-bottom: 40px;
    position: relative;
    font-size: 2.5rem;
  }

  .page-title::before,
  .page-title::after {
    content: '✧';
    color: var(--ufo-blue);
    margin: 0 15px;
  }

  .about-card {
    background: rgba(20, 10, 40, 0.7);
    border: 2px solid var(--alien-green);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 0 20px rgba(0, 255, 157, 0.2);
    transition: all 0.5s;
  }

  .about-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 30px var(--alien-green);
    border-color: var(--ufo-blue);
  }

  .card-title {
    color: var(--alien-green);
    font-family: 'Alien Encounter', sans-serif;
    font-size: 1.8rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--alien-purple);
  }

  .card-title::after {
    content: '🛸';
    position: absolute;
    right: 0;
  }

  .card-text {
    color: #ccc;
    line-height: 1.6;
    font-size: 1rem;
  }

  .alien-list {
    list-style-type: none;
    padding-left: 0;
    color: #ccc;
  }

  .alien-list li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 25px;
  }

  .alien-list li::before {
    content: '👽';
    position: absolute;
    left: 0;
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
    font-family: 'Orbitron', sans-serif;
  }

  .btn-back:hover {
    background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
    color: #fff;
    box-shadow: 0 0 25px var(--alien-green);
    transform: translateY(-3px);
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
    .page-title {
      font-size: 1.8rem;
    }
    
    .page-title::before,
    .page-title::after {
      margin: 0 8px;
    }
    
    .about-card {
      padding: 20px;
    }
    
    .card-title {
      font-size: 1.5rem;
    }
  }
</style>

<!-- Efecto especial -->
<div class="alien-scanner"></div>

<!-- Contenido principal -->
<div class="about-container">
  <h1 class="page-title">SOBRE LA TIENDA ÁREA 51</h1>
  
  <div class="about-card">
    <h2 class="card-title">NUESTRA HISTORIA</h2>
    <p class="card-text">Área 51 Clothing surgió de la energía cósmica en Roswell, Nuevo México, con el objetivo de fusionar el estilo urbano terrestre con diseños inspirados en civilizaciones interestelares. Nuestros patrones de diseño fueron "recuperados" de artefactos no identificados y adaptados para el uso humano.</p>
    <p class="card-text">Cada colección está impregnada de misterio y tecnología avanzada, utilizando tejidos que parecen de otro mundo pero con la comodidad que necesitas en la Tierra.</p>
  </div>
  
  <div class="about-card">
    <h2 class="card-title">MISIÓN INTERGALÁCTICA</h2>
    <p class="card-text">En Área 51 Clothing, nuestra misión es:</p>
    <ul class="alien-list">
      <li>Crear moda que desafíe los límites de lo terrestre</li>
      <li>Producir prendas con materiales sostenibles (incluyendo algunos no originarios de este planeta)</li>
      <li>Ofrecer diseños exclusivos inspirados en avistamientos reales</li>
      <li>Preparar a la humanidad para el contacto estilístico con otras civilizaciones</li>
      <li>Mantener el secreto de nuestras fuentes de inspiración</li>
    </ul>
  </div>
  
  <div class="about-card">
    <h2 class="card-title">VISIÓN EXTRATERRESTRE</h2>
    <p class="card-text">Aspiramos a convertirnos en el puente de moda entre la Tierra y otras civilizaciones:</p>
    <ul class="alien-list">
      <li>Lanzar la primera colección interestelar colaborativa</li>
      <li>Establecer boutiques en ubicaciones con alta actividad OVNI</li>
      <li>Desarrollar tejidos con propiedades "no humanas"</li>
      <li>Ser la marca oficial para el primer contacto oficial</li>
      <li>Expandirnos a 51 países en los próximos 5 años terrestres</li>
    </ul>
  </div>
  
  <div class="text-center">
    <a href="<?php echo BASE_URL ?>producto" class="btn-back">
      <i class="fas fa-arrow-left"></i> VOLVER A LA TIENDA
    </a>
  </div>
</div>

<!-- Recursos necesarios -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">