<style>
    body {
      background-color: #000000;
      color: #ffffff;
    }
    .container {
      background-color: #ff0000;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }
    h2 {
      color: #ffffff;
      font-weight: bold;
    }
    .form-control {
      background-color: #000000;
      color: #ffffff;
      border-color: #ffffff;
    }
    .btn-primary {
      background-color: #000000;
      color: #ff0000;
      border-color: #ffffff;
    }
    .btn-primary:hover {
      background-color: #ff0000;
      color: #ffffff;
    }
    .modal-content {
      background-color: #000000;
      color: #ffffff;
      border-color: #ffffff;
    }
    .modal-title {
      color: #ffffff;
    }
    .modal-body, .modal-footer {
      color: #ffffff;
    }
    .img-logo {
      max-height: 50px;
      margin-bottom: 10px;
    }
    .navbar {
      background-color: #000000;
    }
    .navbar-brand img {
      width: 150px;
    }
    .navbar-nav .nav-link, .navbar-nav .nav-item {
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
    
  </style>

<div class="container my-5">
    <div class="text-center mb-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Dragon Ball Z Logo" class="img-fluid img-logo">
    </div>
    <h2 class="text-center mb-4">Contáctanos</h2>
    <form id="contact-form">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Escriba su Nombre Completo..." required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su Correo Electronico..." required>
      </div>
      <div class="form-group">
        <label for="message">Mensaje:</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Escriba su Comentario..." required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Mensaje enviado con éxito</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Gracias por elegir nuestra tienda. Nos pondremos en contacto con usted a la brevedad.</p>
        </div>
        <div class="modal-footer">
          <a href="<?php echo BASE_URL ?>producto" class="btn btn-primary">Volver a la Pagina Principal</a>
        </div>
      </div>
    </div>
  </div>