<style>
    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }
    .btn-primary {
      background-color: #ff0019;
      color: #fff; 
      border-color: #ff0019;
    }
    .btn-primary:hover {
      background-color: #ff0019;
      border-color: #ff0019;
    }
    .btn-outline-secondary {
      color: #ff0019;
      border-color: #ff0019;
    }
    .btn-outline-secondary:hover {
      background-color: #ff0019;
      color: #fff;
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
    <div class="row">
      <div class="col-md-6">
        <img src="https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-6.jpg" alt="Polo Lewis Z Negro" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h1>POLO LEWIS Z NEGRO</h1>
        <p class="h4">Precio: S/120.00</p>
        <div class="form-group">
          <label for="quantity">Cantidad:</label>
          <div class="input-group">
            <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
            <input type="number" class="form-control" id="quantity" value="1" min="1">
            <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
          </div>
        </div>
        <p class="h4">Total: S/120.00</p>
        <div class="form-group">
          <label for="discount-code">Cupon de descuento:</label>
          <div class="input-group">
            <input type="text" class="form-control" id="discount-code" placeholder="Ingresa el código">
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
        <div class="d-grid gap-2">
          <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary" type="button">Añadir al carrito</a>
          <a href="<?php echo BASE_URL ?>producto" class="btn btn-outline-secondary" type="button">Volver a elegir producto</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
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