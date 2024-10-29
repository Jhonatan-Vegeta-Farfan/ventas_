<style>
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

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Boletín</h5>
        <p>Introduzca su dirección de correo electrónico</p>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Ingresa tu correo...">
          </div>
          <a href="<?php echo BASE_URL ?>contactanos" class="btn btn-primary">ENVIAR</a>
        </form>
      </div>
      <div class="col-md-6">
        <h5>Configuración de la tienda</h5>
        <p>Dragon ball Z confecciones S.A.C., 854 Av, San Martin, Huanta, PERU</p>
        <p>Llámamos ahora: +51 956 654 357</p>
        <p>dragonballZ@gmail.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <a href="https://web.facebook.com/factor.anime?locale=es_LA" target="_blank">
          <img src="https://static.vecteezy.com/system/resources/previews/016/716/447/non_2x/facebook-icon-free-png.png" alt="Facebook" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://www.instagram.com/viltug.cl/reel/C8sFYKQuVoL/" target="_blank">
          <img src="https://static.vecteezy.com/system/resources/previews/018/930/691/original/instagram-logo-instagram-icon-transparent-free-png.png" alt="Instagram" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://x.com/dragonballz" target="_blank">
          <img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-twitter-logo-icon-png-image_3570310.png" alt="Twitter" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://www.youtube.com/@anzu361" target="_blank">
          <img src="https://pngfre.com/wp-content/uploads/You-Tube-14.png" alt="YouTube" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="#" target="_blank">
          <img src="https://www.keyweo.com/wp-content/uploads/2022/03/el-logo-g-de-google.png" alt="Google" class="img-fluid" style="max-width: 50px;">
        </a>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Script personalizado para activar el cambio de estilo al hacer clic -->
<script>
  // JavaScript para activar el cambio de estilo al hacer clic
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      navLinks.forEach(link => link.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script
     src="https://code.jquery.com/jquery-3.7.1.js"
     integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
     crossorigin="anonymous"></script>
     
</body>
</html>
