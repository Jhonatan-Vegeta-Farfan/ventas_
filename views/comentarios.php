<style>
  body {
    background-color: #000000;
    /* Fondo negro */
    color: #ffffff;
    /* Letras blancas */
  }

  .comments-section {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  .comment {
    margin-bottom: 20px;
    border: 1px solid #ff0019;
    /* Borde rojo */
    padding: 10px;
    background-color: #ff0019;
    /* Fondo rojo */
  }

  .comment .rating {
    color: #ffc107;
    /* Color dorado para estrellas */
  }

  .additional-info {
    margin-top: 20px;
  }

  .cart-button {
    margin-top: 20px;
  }

  .navbar {
    background-color: #000000;
  }

  .navbar-brand img {
    width: 150px;
  }

  .navbar-nav .nav-link,
  .navbar-nav .nav-item {
    color: #fff;
  }

  .product img {
    width: 100%;
    height: auto;
  }

  .navbar-nav .nav-link {
    color: #fff !important;
    background-color: #ff0000 !important;
    padding: 8px 16px;
    border-radius: 4px;
    transition: all 0.3s ease;
  }

  .footer {
    background-color: #000000;
    color: #fff;
    padding: 20px 0;
  }

  .footer a {
    color: #fff;
  }

  /* Estilo para los botones activos */
  .navbar-nav .nav-item .nav-link.active {
    color: rgb(255, 0, 0) !important;
    font-weight: bold;
    background-color: rgb(0, 0, 0) !important;
  }
</style>

<div class="comments-section">
  <h2 class="section-title">Comentarios de Clientes</h2>

  <div class="comment">
    <div class="rating">
      <!-- Rating stars (using Bootstrap's star icons) -->
      <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <!-- 5 stars -->
    </div>
    <p class="comment-text">"¡Soy un gran fanático de Dragon Ball Z y Goku Familia es mi tienda favorita para comprar ropa! Tienen una gran selección de diseños increíbles y la calidad de la ropa es excelente. ¡Los precios también son muy buenos! El servicio al cliente también es fantástico. ¡Recomiendo encarecidamente Goku Familia a todos los fanáticos de Dragon Ball Z!"</p>
    <p class="author">- Carlos M.</p>
  </div>

  <div class="comment">
    <div class="rating">
      <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- 4 stars -->
    </div>
    <p class="comment-text">"Me encanta la ropa de Goku Familia, ¡pero los precios pueden ser un poco altos a veces. Sin embargo, la calidad lo vale y siempre hay ofertas disponibles, ¡el envío también es muy rápido! En general, estoy muy satisfecho con Goku Familia y lo recomiendo a todos los fanáticos de Dragon Ball Z."</p>
    <p class="author">- Ana R.</p>
  </div>

  <div class="comment">
    <div class="rating">
      <span class="text-warning">&#9733;&#9733;&#9734;&#9734;&#9734;</span> <!-- 3 stars -->
    </div>
    <p class="comment-text">"La ropa de Goku Familia es genial, pero no tienen tanta variedad de tallas como me gustaría. También sería bueno que tuvieran más artículos para mujeres. Sin embargo, la calidad de la ropa es excelente y el servicio al cliente es muy bueno."</p>
    <p class="author">- María P.</p>
  </div>

  <p class="additional-info">En general, Goku Familia parece ser una empresa confiable con una gran pasión por Dragon Ball Z. Ofrecen una amplia variedad de productos de alta calidad a precios razonables. Sin embargo, algunos clientes han comentado que los precios pueden ser un poco altos y que la variedad de tallas y estilos para mujeres podría ser mejor.</p>

  <a href="<?php echo BASE_URL ?>producto" class="btn btn-primary cart-button">Volver a la página principal</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>