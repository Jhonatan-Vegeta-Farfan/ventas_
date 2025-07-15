<style>
  /* ESTILOS PARA LA SECCIÓN "SOBRE NOSOTROS" */
  :root {
    --alien-green: #00ff9d;
    --alien-purple: #9d00ff;
    --ufo-blue: #00e1ff;
    --dark-space: #0a001a;
  }

  .about-section {
    background-color: var(--dark-space);
    background-image: 
      radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
      radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%);
    color: var(--alien-green);
    font-family: 'Orbitron', sans-serif;
    padding: 60px 0;
    position: relative;
    overflow: hidden;
  }

  .about-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
    position: relative;
    z-index: 2;
  }

  .about-title {
    font-size: 2.8rem;
    text-align: center;
    margin-bottom: 50px;
    text-shadow: 0 0 10px var(--alien-green);
    letter-spacing: 3px;
    position: relative;
  }

  .about-title::before,
  .about-title::after {
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
    font-size: 1.8rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--alien-purple);
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
    padding-left: 30px;
    line-height: 1.5;
  }

  .alien-list li::before {
    content: '🛸';
    position: absolute;
    left: 0;
  }

  .btn-back-to-shop {
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
    margin-top: 30px;
    font-family: 'Orbitron', sans-serif;
  }

  .btn-back-to-shop:hover {
    background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
    color: #fff;
    box-shadow: 0 0 25px var(--alien-green);
    transform: translateY(-3px);
  }

  /* EFECTOS ESPECIALES */
  .alien-energy-line {
    height: 3px;
    background: linear-gradient(90deg, var(--alien-green), var(--ufo-blue), var(--alien-purple));
    margin: 20px auto;
    width: 80%;
    max-width: 500px;
    border-radius: 3px;
  }

  /* RESPONSIVE */
  @media (max-width: 768px) {
    .about-section {
      padding: 40px 0;
    }
    
    .about-title {
      font-size: 2rem;
    }
    
    .about-card {
      padding: 20px;
    }
    
    .card-title {
      font-size: 1.5rem;
    }
  }
</style>

<!-- SECCIÓN SOBRE NOSOTROS (para colocar entre tu header y footer) -->
<section class="about-section">
  <div class="about-container">
    <h1 class="about-title">SOBRE ÁREA 51 CLOTHING</h1>
    
    <div class="about-card">
      <h2 class="card-title">NUESTRO ORIGEN</h2>
      <div class="alien-energy-line"></div>
      <p class="card-text">En el corazón del desierto de Nevada, cerca del legendario Área 51, nació nuestra marca de moda intergaláctica. Comenzamos diseñando camisetas para investigadores OVNI y ahora vestimos a toda una generación que cree que el estilo no es solo terrestre.</p>
      <p class="card-text">Cada prenda contiene elementos de misterio y tecnología alienígena, con diseños que han sido "inspirados" por avistamientos reales.</p>
    </div>
    
    <div class="about-card">
      <h2 class="card-title">NUESTRA MISIÓN</h2>
      <div class="alien-energy-line"></div>
      <ul class="alien-list">
        <li>Crear la moda más innovadora de este planeta (y quizás de otros)</li>
        <li>Usar materiales sostenibles (incluyendo algunos de origen... especial)</li>
        <li>Ofrecer diseños exclusivos con temática OVNI/alienígena</li>
        <li>Preparar a la humanidad para el primer contacto fashion</li>
        <li>Mantener el misterio de nuestras fuentes de inspiración</li>
      </ul>
    </div>
    
    <div class="about-card">
      <h2 class="card-title">NUESTRA VISIÓN</h2>
      <div class="alien-energy-line"></div>
      <ul class="alien-list">
        <li>Ser la marca líder en moda alienígena a nivel mundial</li>
        <li>Lanzar colecciones colaborativas con "artistas interestelares"</li>
        <li>Establecer tiendas en ubicaciones con alta actividad OVNI</li>
        <li>Desarrollar tejidos con propiedades "no terrestres"</li>
        <li>Ser la marca oficial del primer contacto oficial</li>
      </ul>
    </div>
    
    <div class="text-center">
      <a href="<?php echo BASE_URL ?>producto" class="btn-back-to-shop">
        <i class="fas fa-tshirt"></i> VOLVER A LA TIENDA
      </a>
    </div>
  </div>
</section>

<!-- RECURSOS NECESARIOS -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">