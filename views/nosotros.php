<style>
  /* ESTILOS PARA LA SECCIÓN "SOBRE NOSOTROS" - STILOS */
  :root {
    --brown-dark: #5a3921;
    --brown-medium: #8b4513;
    --brown-light: #cd853f;
    --cream: #f9f5f0;
    --gold: #d4af37;
  }

  .about-section {
    background-color: var(--cream);
    background-image: 
      radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
      radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%),
      url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.5" opacity="0.1"/></svg>');
    color: var(--brown-dark);
    font-family: 'Raleway', sans-serif;
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
    color: var(--brown-medium);
    letter-spacing: 2px;
    position: relative;
    font-family: 'Playfair Display', serif;
  }

  .about-title::before,
  .about-title::after {
    content: '❖';
    color: var(--brown-light);
    margin: 0 15px;
    font-size: 2rem;
  }

  .about-card {
    background: rgba(255, 253, 250, 0.9);
    border: 2px solid var(--brown-light);
    border-radius: 10px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
    transition: all 0.5s;
    position: relative;
    overflow: hidden;
  }

  .about-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(to right, var(--brown-medium), var(--brown-light), var(--brown-medium));
  }

  .about-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(139, 69, 19, 0.2);
    border-color: var(--brown-medium);
  }

  .card-title {
    color: var(--brown-medium);
    font-size: 1.8rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--brown-light);
    font-family: 'Playfair Display', serif;
  }

  .card-text {
    color: var(--brown-dark);
    line-height: 1.6;
    font-size: 1rem;
  }

  .stilos-list {
    list-style-type: none;
    padding-left: 0;
    color: var(--brown-dark);
  }

  .stilos-list li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 30px;
    line-height: 1.5;
  }

  .stilos-list li::before {
    content: '✽';
    position: absolute;
    left: 0;
    color: var(--brown-light);
    font-weight: bold;
  }

  .btn-back-to-shop {
    display: inline-block;
    background: linear-gradient(45deg, var(--brown-medium), var(--brown-light));
    color: #fff;
    border: none;
    padding: 12px 30px;
    border-radius: 5px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s;
    box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
    text-decoration: none;
    margin-top: 30px;
    font-family: 'Raleway', sans-serif;
  }

  .btn-back-to-shop:hover {
    background: linear-gradient(45deg, var(--brown-light), var(--brown-medium));
    color: #fff;
    box-shadow: 0 8px 20px rgba(139, 69, 19, 0.3);
    transform: translateY(-3px);
  }

  /* EFECTOS ESPECIALES */
  .thread-line {
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--brown-light), transparent);
    margin: 20px auto;
    width: 80%;
    max-width: 500px;
    border-radius: 3px;
  }

  .embroidery-corner {
    position: absolute;
    width: 30px;
    height: 30px;
  }

  .embroidery-corner.tl {
    top: 10px;
    left: 10px;
    border-top: 2px solid var(--brown-light);
    border-left: 2px solid var(--brown-light);
  }

  .embroidery-corner.tr {
    top: 10px;
    right: 10px;
    border-top: 2px solid var(--brown-light);
    border-right: 2px solid var(--brown-light);
  }

  .embroidery-corner.bl {
    bottom: 10px;
    left: 10px;
    border-bottom: 2px solid var(--brown-light);
    border-left: 2px solid var(--brown-light);
  }

  .embroidery-corner.br {
    bottom: 10px;
    right: 10px;
    border-bottom: 2px solid var(--brown-light);
    border-right: 2px solid var(--brown-light);
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
    <h1 class="about-title">SOBRE STILOS HUANTA</h1>
    
    <div class="about-card">
      <div class="embroidery-corner tl"></div>
      <div class="embroidery-corner tr"></div>
      <div class="embroidery-corner bl"></div>
      <div class="embroidery-corner br"></div>
      <h2 class="card-title">NUESTRO ORIGEN</h2>
      <div class="thread-line"></div>
      <p class="card-text">En el corazón de Huanta, Ayacucho, nació STILOS, nuestra tienda de ropa con identidad local. Comenzamos como un pequeño emprendimiento familiar especializado en bordados tradicionales y ahora vestimos a toda una generación que valora la autenticidad y calidad artesanal.</p>
      <p class="card-text">Cada prenda contiene elementos de nuestra rica herencia cultural, con diseños que han sido transmitidos por generaciones y técnicas de bordado que reflejan el alma ayacuchana.</p>
    </div>
    
    <div class="about-card">
      <div class="embroidery-corner tl"></div>
      <div class="embroidery-corner tr"></div>
      <div class="embroidery-corner bl"></div>
      <div class="embroidery-corner br"></div>
      <h2 class="card-title">NUESTRA MISIÓN</h2>
      <div class="thread-line"></div>
      <ul class="stilos-list">
        <li>Crear moda que celebre nuestra identidad cultural huantina</li>
        <li>Usar materiales de calidad con técnicas de bordado tradicionales</li>
        <li>Ofrecer diseños exclusivos que fusionen lo tradicional y contemporáneo</li>
        <li>Promover el trabajo de artesanos locales</li>
        <li>Preservar y renovar las técnicas textiles de Ayacucho</li>
      </ul>
    </div>
    
    <div class="about-card">
      <div class="embroidery-corner tl"></div>
      <div class="embroidery-corner tr"></div>
      <div class="embroidery-corner bl"></div>
      <div class="embroidery-corner br"></div>
      <h2 class="card-title">NUESTRA VISIÓN</h2>
      <div class="thread-line"></div>
      <ul class="stilos-list">
        <li>Ser la marca líder en moda con identidad ayacuchana a nivel nacional</li>
        <li>Expandir nuestras técnicas de bordado a nuevas generaciones</li>
        <li>Establecer talleres de capacitación para artesanos locales</li>
        <li>Llevar los bordados huantinos a mercados internacionales</li>
        <li>Ser reconocidos por nuestra calidad y autenticidad cultural</li>
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
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">