<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polo Tradicional - STILOS Huanta</title>
    <!-- Tus enlaces existentes a Bootstrap, Font Awesome, etc. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Estilos existentes del header/footer -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/footer.css">
    <style>
      :root {
        --primary-brown: #8b4513;
        --accent-orange: #cd853f;
        --light-beige: #f9f5f0;
        --dark-brown: #5a3921;
        --textile-gold: #d4af37;
      }

      body {
        background-color: var(--light-beige);
        background-image: 
          radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
          radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%),
          url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.3" opacity="0.2"/></svg>');
        color: var(--dark-brown);
        font-family: 'Raleway', sans-serif;
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
        background-color: var(--primary-brown);
        color: var(--light-beige);
        border-color: var(--primary-brown);
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all 0.3s;
      }

      .btn-primary:hover {
        background-color: var(--accent-orange);
        border-color: var(--accent-orange);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        transform: translateY(-2px);
      }

      .btn-outline-secondary {
        color: var(--primary-brown);
        border-color: var(--primary-brown);
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all 0.3s;
      }

      .btn-outline-secondary:hover {
        background-color: var(--primary-brown);
        color: var(--light-beige);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        transform: translateY(-2px);
      }

      .product img {
        width: 100%;
        height: auto;
        border: 2px solid var(--accent-orange);
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
        transition: transform 0.3s;
      }

      .product img:hover {
        transform: scale(1.02);
      }

      h1 {
        color: var(--primary-brown);
        margin-bottom: 20px;
        font-weight: 600;
        font-family: 'Playfair Display', serif;
      }

      .h4 {
        color: var(--dark-brown);
        margin-bottom: 15px;
        font-family: 'Playfair Display', serif;
      }

      .form-group label {
        color: var(--primary-brown);
        margin-bottom: 8px;
        display: block;
        font-weight: 500;
      }

      .form-control {
        background-color: rgba(255, 253, 250, 0.9);
        border: 1px solid var(--accent-orange);
        color: var(--dark-brown);
        border-radius: 5px;
      }

      .form-control:focus {
        background-color: rgba(255, 253, 250, 1);
        border-color: var(--primary-brown);
        box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
        color: var(--dark-brown);
      }

      .input-group {
        box-shadow: 0 2px 8px rgba(205, 133, 63, 0.2);
        border-radius: 5px;
        overflow: hidden;
      }

      .input-group button {
        background-color: rgba(255, 253, 250, 0.9);
        border: 1px solid var(--accent-orange);
        color: var(--primary-brown);
        font-weight: 500;
      }

      .input-group button:hover {
        background-color: var(--accent-orange);
        color: var(--light-beige);
      }

      /* Efectos especiales adaptados */
      .thread-line {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--accent-orange), transparent);
        animation: weave 6s linear infinite;
        z-index: 1000;
      }

      @keyframes weave {
        0% { top: 0; opacity: 0.7; }
        50% { opacity: 1; }
        100% { top: 100vh; opacity: 0.7; }
      }

      .fabric-pattern {
        position: fixed;
        width: 120px;
        height: 120px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%23cd853f" stroke-width="0.3" opacity="0.2"/></svg>');
        z-index: -1;
        opacity: 0.5;
        pointer-events: none;
        animation: float 25s linear infinite;
      }

      @keyframes float {
        0% { left: -10%; }
        100% { left: 110%; }
      }
      
      .store-name {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--primary-brown);
        text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
      }
      
      .location {
        font-style: italic;
        color: var(--accent-orange);
        font-size: 0.9rem;
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Efectos especiales adaptados -->
    <div class="thread-line"></div>
    <div class="fabric-pattern" style="top: 15%; animation-duration: 25s;"></div>
    <div class="fabric-pattern" style="top: 65%; animation-duration: 30s; animation-delay: 5s;"></div>

    <div class="main-content">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-6">
              <div class="product">
                <img src="https://ejemplo.com/images/polo-tradicional-stilos.jpg" alt="Polo Tradicional STILOS" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
              <h1 class="store-name">POLO TRADICIONAL STILOS</h1>
              <p class="location">Huanta, Ayacucho</p>
              <p class="h4">Precio: S/85.00</p>
              <div class="form-group">
                <label for="quantity">Cantidad:</label>
                <div class="input-group">
                  <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                  <input type="number" class="form-control text-center" id="quantity" value="1" min="1">
                  <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                </div>
              </div>
              <p class="h4">Total: S/85.00</p>
              <div class="form-group">
                <label for="discount-code">Código de descuento:</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="discount-code" placeholder="Ingresa código promocional">
                  <button class="btn btn-primary" type="button">Aplicar</button>
                </div>
              </div>
              <div class="form-group">
                <label for="subtotal">Subtotal:</label>
                <p class="h4" id="subtotal">S/85.00</p>
              </div>
              <div class="form-group">
                <label for="total">Total:</label>
                <p class="h4" id="total">S/85.00</p>
              </div>
              <div class="d-grid gap-2 mt-4">
                <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary" type="button">
                  <i class="fas fa-shopping-bag"></i> AÑADIR AL CARRITO
                </a>
                <a href="<?php echo BASE_URL ?>producto" class="btn btn-outline-secondary" type="button">
                  <i class="fas fa-arrow-left"></i> VOLVER A LA TIENDA
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
        const total = 85.00 * quantity;
        document.getElementById('subtotal').textContent = `S/${total.toFixed(2)}`;
        document.getElementById('total').textContent = `S/${total.toFixed(2)}`;
      }
    </script>
</body>
</html>