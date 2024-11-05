<style>
    body {
      background-color: black;
      color: white;
    }
    .table {
      background-color: red;
      color: white;
    }
    .btn-secondary {
      background-color: rgb(0, 0, 0);
      border-color: rgb(0, 0, 0);
    }
    .btn-primary {
      background-color: rgb(0, 0, 0);
      border-color: rgb(0, 0, 0);
    }
    .btn-danger {
      background-color: rgb(0, 0, 0);
      border-color: rgb(0, 0, 0);
    }
    .card-body {
      background-color: rgb(255, 0, 0);
    }
    .input-group-text, .form-control {
      background-color: red;
    }
    #bank-info {
      background-color: red;
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

    /* Estilo para los botones activos */
    .navbar-nav .nav-item .nav-link.active {
      color: rgb(255, 0, 0) !important; 
      font-weight: bold;
      background-color: rgb(0, 0, 0) !important;
    }

    /* Nuevos estilos para los botones de cantidad */
    .btn-outline-secondary {
      color: white; /* Color del texto */
      background-color: black; /* Fondo negro */
      border-color: black; /* Borde negro */
    }
    .btn-outline-secondary:hover {
      background-color: darkgray; /* Color al pasar el ratón */
      border-color: darkgray; /* Borde al pasar el ratón */
    }

    /* Estilo para el input de cantidad */
    .form-control {
      color: black; /* Color del texto del input */
    }
</style>

<div class="container my-5">
    <h1>Carrito de Compras</h1>
    <div class="row">
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Imagen</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="cart-items">
          </tbody>
        </table>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Resumen del Pedido</h5>
            <p class="card-text">Subtotal: <span id="cart-subtotal">S/0.00</span></p>
            <p class="card-text">Descuento: <span id="cart-discount">S/0.00</span></p>
            <p class="card-text">Total: <span id="cart-total">S/0.00</span></p>

            <div class="mb-3">
              <label for="account-number" class="form-label">Ingresar número de cuenta:</label>
              <input type="text" class="form-control" id="account-number" onchange="showBankInfo(this.value)">
            </div>

            <div id="bank-info" class="mb-3 d-none">
              <h6>Banco Seleccionado:</h6>
              <img id="bank-logo" src="" alt="Logo Banco" style="max-width: 100px;">
              <p id="bank-name"></p>
            </div>

            <div class="mb-3">
              <h6>Seleccionar Banco:</h6>
              <div class="d-flex justify-content-between align-items-center">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Yape_text_app_icon.png" alt="Banco A" class="img-thumbnail" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('Banco BCP', 'https://seeklogo.com/images/B/bcp-logo-87BA4231DF-seeklogo.com.png')">
                  <img src="https://seeklogo.com/images/P/plin-logo-967A4AF583-seeklogo.com.png" alt="Banco B" class="img-thumbnail" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('Banco INTERBANK', 'https://www.americanexpress.com/content/dam/amex/pe/network/Experiences/nuevo2020/Logo-Interbank.png')">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Banco C" class="img-thumbnail" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('VISA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Visa_Logo.png/640px-Visa_Logo.png')">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1200px-Mastercard-logo.svg.png" alt="Banco D" class="img-thumbnail" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('MASTERCARD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png')">
              </div>
            </div>
            
            <a href="<?php echo BASE_URL ?>pagofactura" class="btn btn-primary">PROCEDER EL PAGO</a> <br> <br>
            <a href="<?php echo BASE_URL ?>producto" class="btn btn-secondary">VOLVER A ELEGIR PRODUCTO</a>
          </div>
        </div>
      </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    const cartItems = [
      { name: 'Polo Lewis Z Negro', price: 150.00, quantity: 1, image: 'https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-3.jpg' },
      { name: 'Camisa Blanca', price: 170.00, quantity: 2, image: 'https://tiendanebula.net/cdn/shop/products/947d03e9b59dc9beaf0bacaf27b020c1_grande.jpg?v=1614530255' },
      { name: 'Pantalón Azul', price: 250.00, quantity: 1, image: 'https://sugoiclothes.com/wp-content/uploads/2022/03/Summer-New-Style-Men-s-Sports-Suit-Brand-Anime-Printing-Casual-Fashion-Cotton-Short-Sleeves-sweatshirt.jpg_480x480q90.jpg_.webp' }
    ];

    function updateCart() {
      const cartItemsElement = document.getElementById('cart-items');
      let subtotal = 0;

      cartItemsElement.innerHTML = '';
      cartItems.forEach((item, index) => {
        const total = item.price * item.quantity;
        subtotal += total;

        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${item.name}</td>
          <td><img src="${item.image}" alt="${item.name}" class="img-fluid" style="max-width: 100px;"></td>
          <td>S/${item.price.toFixed(2)}</td>
          <td>
            <div class="input-group">
              <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, -1)">-</button>
              <input type="number" class="form-control" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value - ${item.quantity})">
              <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, 1)">+</button>
            </div>
          </td>
          <td>S/${total.toFixed(2)}</td>
          <td><button class="btn btn-danger" onclick="removeFromCart(${index})">Eliminar</button></td>
        `;
        cartItemsElement.appendChild(row);
      });

      document.getElementById('cart-subtotal').textContent = `S/${subtotal.toFixed(2)}`;
      document.getElementById('cart-discount').textContent = 'S/0.00';
      document.getElementById('cart-total').textContent = `S/${subtotal.toFixed(2)}`;
    }

    function updateQuantity(index, change) {
      cartItems[index].quantity += change;
      if (cartItems[index].quantity < 1) {
        cartItems[index].quantity = 1;
      }
      updateCart();
    }

    function removeFromCart(index) {
      cartItems.splice(index, 1);
      updateCart();
    }

    function selectBank(bankName, bankLogoSrc) {
      const bankInfoElement = document.getElementById('bank-info');
      const bankLogoElement = document.getElementById('bank-logo');
      const bankNameElement = document.getElementById('bank-name');

      bankLogoElement.src = bankLogoSrc;
      bankLogoElement.alt = `Logo ${bankName}`;
      bankNameElement.textContent = bankName;

      bankInfoElement.classList.remove('d-none');
    }

    updateCart();
</script>