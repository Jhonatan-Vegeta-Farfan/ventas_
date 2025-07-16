<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polo Intergaláctico - Tienda Alien</title>
    <!-- Tus enlaces existentes a Bootstrap, Font Awesome, etc. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <!-- Estilos existentes del header/footer -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/footer.css">
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
        background-image: 
          radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
          radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
          url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
        color: var(--alien-green);
        font-family: 'Orbitron', sans-serif;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      .main-content {
        flex: 1;
        padding-top: 20px;
        padding-bottom: 40px;
      }

      .btn-primary {
        background-color: var(--alien-purple);
        color: #000;
        border-color: var(--alien-purple);
        font-weight: bold;
        letter-spacing: 1px;
        transition: all 0.3s;
        text-transform: uppercase;
      }

      .btn-primary:hover {
        background-color: var(--ufo-blue);
        border-color: var(--ufo-blue);
        box-shadow: 0 0 15px var(--ufo-blue);
        transform: translateY(-2px);
      }

      .btn-outline-secondary {
        color: var(--alien-green);
        border-color: var(--alien-green);
        font-weight: bold;
        letter-spacing: 1px;
        transition: all 0.3s;
        text-transform: uppercase;
      }

      .btn-outline-secondary:hover {
        background-color: var(--alien-green);
        color: #000;
        box-shadow: 0 0 15px var(--alien-green);
        transform: translateY(-2px);
      }

      .product img {
        width: 100%;
        height: auto;
        border: 2px solid var(--alien-green);
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 255, 157, 0.3);
        transition: transform 0.3s;
      }

      .product img:hover {
        transform: scale(1.02);
      }

      h1 {
        color: var(--ufo-blue);
        text-shadow: 0 0 10px var(--ufo-blue);
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
      }

      .h4 {
        color: var(--alien-green);
        margin-bottom: 15px;
      }

      .form-group label {
        color: var(--ufo-blue);
        margin-bottom: 8px;
        display: block;
      }

      .form-control {
        background-color: rgba(20, 10, 40, 0.7);
        border: 1px solid var(--alien-green);
        color: var(--alien-green);
        border-radius: 8px;
      }

      .form-control:focus {
        background-color: rgba(20, 10, 40, 0.9);
        border-color: var(--ufo-blue);
        box-shadow: 0 0 10px var(--ufo-blue);
        color: var(--alien-green);
      }

      .input-group {
        box-shadow: 0 0 15px rgba(0, 255, 157, 0.2);
        border-radius: 8px;
        overflow: hidden;
      }

      .input-group button {
        background-color: rgba(0, 40, 30, 0.7);
        border: 1px solid var(--alien-green);
        color: var(--alien-green);
        font-weight: bold;
      }

      .input-group button:hover {
        background-color: var(--alien-green);
        color: #000;
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

      .ufo-fleet {
        position: fixed;
        width: 120px;
        height: 60px;
        background: radial-gradient(ellipse at center, var(--ufo-blue) 0%, transparent 70%);
        border-radius: 50%;
        filter: drop-shadow(0 0 15px var(--ufo-blue));
        z-index: -1;
        opacity: 0.7;
        pointer-events: none;
        animation: fly 25s linear infinite;
      }

      @keyframes fly {
        0% { left: -10%; }
        100% { left: 110%; }
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Efectos especiales -->
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 15%; animation-duration: 25s;"></div>
    <div class="ufo-fleet" style="top: 65%; animation-duration: 30s; animation-delay: 5s;"></div>

    <div class="main-content">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-6">
              <div class="product">
                <img src="https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-6.jpg" alt="Polo Alienígena" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
              <h1>POLO INTERGALÁCTICO</h1>
              <p class="h4">Precio: S/120.00</p>
              <div class="form-group">
                <label for="quantity">Cantidad:</label>
                <div class="input-group">
                  <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                  <input type="number" class="form-control text-center" id="quantity" value="1" min="1">
                  <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                </div>
              </div>
              <p class="h4">Total: S/120.00</p>
              <div class="form-group">
                <label for="discount-code">Código de descuento interestelar:</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="discount-code" placeholder="Ingresa código alien">
                  <button class="btn btn-primary" type="button">Aplicar</button>
                </div>
              </div>
              <div class="form-group">
                <label for="subtotal">Subtotal:</label>
                <p class="h4" id="subtotal">S/120.00</p>
              </div>
              <div class="form-group">
                <label for="total">Total:</label>
                <p class="h4" id="total">S/120.00</p>
              </div>
              <div class="d-grid gap-2 mt-4">
                <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary" type="button">
                  <i class="fas fa-shopping-cart"></i> AÑADIR A LA NAVE
                </a>
                <a href="<?php echo BASE_URL ?>producto" class="btn btn-outline-secondary" type="button">
                  <i class="fas fa-arrow-left"></i> VOLVER A LA GALERÍA
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script>
      document.getElementById('button-minus').addEventListener('click', () => {
        const quantityInput = document.getElementById('quantity');
        let quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
          quantityInput.value = quantity - 1;
          updateTotal();
        }
      });

      document.getElementById('button-plus').addEventListener('click', () => {
        const quantityInput = document.getElementById('quantity');
        let quantity = parseInt(quantityInput.value);
        quantityInput.value = quantity + 1;
        updateTotal();
      });

      function updateTotal() {
        const quantityInput = document.getElementById('quantity');
        const quantity = parseInt(quantityInput.value);
        const total = 120.00 * quantity;
        document.getElementById('subtotal').textContent = `S/${total.toFixed(2)}`;
        document.getElementById('total').textContent = `S/${total.toFixed(2)}`;
      }
    </script>
</body>
</html>