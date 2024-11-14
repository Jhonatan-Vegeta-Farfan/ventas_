<style>
.footer {
    background-color: #000000;
    color: #fff;
    padding: 20px 0;
    width: 100%; /* Asegura que el ancho sea del 100% */
    position: relative; /* Asegura que esté en la posición correcta */
    left: 0; /* Alinea al borde izquierdo */
    right: 0; /* Alinea al borde derecho */
    margin-left: calc(-50vw + 50%); /* Extiende el footer a borde a borde */
    margin-right: calc(-50vw + 50%); /* Extiende el footer a borde a borde */
}

.footer a {
    color: #fff;
}

.footer .form-group input {
    width: 70%; /* Cambiado a un ancho más pequeño */
    max-width: 300px; /* Limitar el ancho máximo */
}

.footer .social-icons img {
    max-width: 50px;
    margin: 0 10px; /* Añadir espacio entre iconos */
}

.footer .copyright {
    margin-top: 20px;
    text-align: center;
    font-size: 14px; /* Tamaño de fuente más pequeño */
}

/* Estilo para la línea de separación */
.footer-separator {
    height: 4px; /* Altura de la línea */
    background-color: #ff0000; /* Color rojo */
    margin-bottom: 20px; /* Espacio debajo de la línea */
}
</style>

<!-- Footer -->
<footer class="footer">
  <div class="footer-separator"></div> <!-- Línea de separación -->
  <div class="container-fluid">
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
        <p>Dragon Ball Z confecciones S.A.C., 854 Av, San Martin, Huanta, PERU</p>
        <p>Llámamos ahora: +51 956 654 357</p>
        <p>dragonballZ@gmail.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center social-icons">
        <a href="https://web.facebook.com/factor.anime?locale=es_LA" target="_blank">
          <img src="https://static.vecteezy.com/system/resources/previews/016/716/447/non_2x/facebook-icon-free-png.png" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/viltug.cl/reel/C8sFYKQuVoL/" target="_blank">
          <img src="https://static.vecteezy.com/system/resources/previews/018/930/691/original/instagram-logo-instagram-icon-transparent-free-png.png" alt="Instagram">
        </a>
        <a href="https://x.com/dragonballz" target="_blank">
          <img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-twitter-logo-icon-png-image_3570310.png" alt="Twitter">
        </a>
        <a href="https://www.youtube.com/@anzu361" target="_blank">
          <img src="https://pngfre.com/wp-content/uploads/You-Tube-14.png" alt="YouTube">
        </a>
        <a href="#" target="_blank">
          <img src="https://www.keyweo.com/wp-content/uploads/2022/03/el-logo-g-de-google.png" alt="Google">
        </a>
      </div>
    </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script personalizado para activar el cambio de estilo al hacer clic -->
<script>
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
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="<?php echo BASE_URL; ?>views/js/jquery-3.6.0.min.js"></script>
     <script> const base_url = '<?php echo BASE_URL; ?>'; </script>
     <script> const base_url = '<?php echo BASE_URL; ?>'; </script>

     <script src="<?php echo BASE_URL; ?>views/js/functions_login.js"></script>

</html>