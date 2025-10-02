<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - STILOS Huanta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
      :root {
        --main-brown: #8b4513;
        --light-brown: #cd853f;
        --cream: #f9f5f0;
        --dark-text: #5a3921;
        --accent-gold: #d4af37;
      }

      body {
        background-color: var(--cream);
        background-image: 
          radial-gradient(circle at 70% 30%, rgba(139, 69, 19, 0.1) 0%, transparent 25%),
          radial-gradient(circle at 30% 70%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
          url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.5" opacity="0.1"/></svg>');
        color: var(--dark-text);
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

      /* Estilos del carrito */
      .table {
        background-color: rgba(255, 253, 250, 0.9);
        color: var(--dark-text);
        border-color: var(--light-brown);
      }

      .table th {
        border-color: var(--light-brown);
        color: var(--main-brown);
        font-family: 'Playfair Display', serif;
      }

      .table td {
        border-color: var(--light-brown);
      }

      .card-body {
        background-color: rgba(255, 253, 250, 0.95);
        border: 1px solid var(--light-brown);
        border-radius: 8px;
        position: relative;
        overflow: hidden;
      }

      .card-body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--main-brown), var(--light-brown), var(--main-brown));
      }

      .card-title {
        color: var(--main-brown);
        font-family: 'Playfair Display', serif;
      }

      .card-text {
        color: var(--dark-text);
      }

      .btn-primary {
        background-color: var(--main-brown);
        color: var(--cream);
        border-color: var(--main-brown);
        font-weight: 500;
        transition: all 0.3s;
        font-family: 'Raleway', sans-serif;
      }

      .btn-primary:hover {
        background-color: var(--light-brown);
        border-color: var(--light-brown);
        box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
        transform: translateY(-2px);
      }

      .btn-secondary {
        background-color: var(--cream);
        border-color: var(--light-brown);
        color: var(--main-brown);
        font-weight: 500;
        transition: all 0.3s;
        font-family: 'Raleway', sans-serif;
      }

      .btn-secondary:hover {
        background-color: var(--light-brown);
        color: var(--cream);
        box-shadow: 0 5px 10px rgba(139, 69, 19, 0.2);
        transform: translateY(-2px);
      }

      .btn-danger {
        background-color: #a52a2a;
        border-color: #a52a2a;
        color: var(--cream);
        font-weight: 500;
      }

      .btn-danger:hover {
        background-color: #8b0000;
        border-color: #8b0000;
      }

      .form-control, .input-group-text {
        background-color: rgba(255, 253, 250, 0.9);
        border: 1px solid var(--light-brown);
        color: var(--dark-text);
        font-family: 'Raleway', sans-serif;
      }

      .form-control:focus {
        background-color: rgba(255, 253, 250, 1);
        border-color: var(--main-brown);
        box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
        color: var(--dark-text);
      }

      #bank-info {
        background-color: rgba(255, 253, 250, 0.9);
        border: 1px solid var(--light-brown);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
      }

      .img-thumbnail {
        background-color: transparent;
        border: 1px solid var(--light-brown);
        transition: all 0.3s;
      }

      .img-thumbnail:hover {
        border-color: var(--main-brown);
        box-shadow: 0 0 10px rgba(139, 69, 19, 0.3);
        transform: translateY(-3px);
      }

      /* Efectos especiales */
      .thread-line {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--light-brown), transparent);
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
        height: 60px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%23cd853f" stroke-width="0.5" opacity="0.1"/></svg>');
        z-index: -1;
        opacity: 0.5;
        pointer-events: none;
        animation: float 25s linear infinite;
      }

      @keyframes float {
        0% { left: -10%; }
        100% { left: 110%; }
      }

      h1 {
        color: var(--main-brown);
        margin-bottom: 30px;
        font-weight: bold;
        font-family: 'Playfair Display', serif;
        text-align: center;
      }

      .store-logo {
        max-width: 200px;
        margin: 0 auto 20px;
        display: block;
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Efectos especiales -->
    <div class="thread-line"></div>
    <div class="fabric-pattern" style="top: 15%; animation-duration: 25s;"></div>
    <div class="fabric-pattern" style="top: 65%; animation-duration: 30s; animation-delay: 5s;"></div>

    <div class="main-content">
        <div class="container my-5">
            <!-- Logo STILOS -->
            <div class="text-center mb-4">
                <img src="https://i.imgur.com/6K3wv7E.png" alt="STILOS Huanta" class="store-logo">
            </div>
            
            <h1>CARRO DE COMPRAS</h1>
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
                            <h5 class="card-title">RESUMEN DEL PEDIDO</h5>
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
                                <p id="bank-name" class="mt-2"></p>
                            </div>

                            <div class="mb-3">
                                <h6>Seleccionar Banco:</h6>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Yape_text_app_icon.png" alt="Yape" class="img-thumbnail my-2" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('Yape', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Yape_text_app_icon.png')">
                                    <img src="https://seeklogo.com/images/P/plin-logo-967A4AF583-seeklogo.com.png" alt="Plin" class="img-thumbnail my-2" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('Plin', 'https://seeklogo.com/images/P/plin-logo-967A4AF583-seeklogo.com.png')">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa" class="img-thumbnail my-2" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('Visa', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Visa_Logo.png/640px-Visa_Logo.png')">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1200px-Mastercard-logo.svg.png" alt="Mastercard" class="img-thumbnail my-2" style="cursor: pointer; width: 80px; height: 80px;" onclick="selectBank('Mastercard', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png')">
                                </div>
                            </div>

                            <a href="<?php echo BASE_URL ?>pagofactura" class="btn btn-primary w-100">PROCEDER AL PAGO</a>
                            <a href="<?php echo BASE_URL ?>producto" class="btn btn-secondary w-100 mt-2">VOLVER A LA TIENDA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        const cartItems = [
            {
                name: 'Polo Bordado Tradicional',
                price: 85.00,
                quantity: 1,
                image: 'https://i.imgur.com/5Xr8W2j.jpg'
            },
            {
                name: 'Camisa Andina',
                price: 120.00,
                quantity: 2,
                image: 'https://i.imgur.com/8Y9vK7t.jpg'
            },
            {
                name: 'Chaleco Huantino',
                price: 95.00,
                quantity: 1,
                image: 'https://i.imgur.com/3MpL9rT.jpg'
            }
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
                    <td><img src="${item.image}" alt="${item.name}" class="img-fluid" style="max-width: 100px; border: 1px solid var(--light-brown); border-radius: 5px;"></td>
                    <td>S/${item.price.toFixed(2)}</td>
                    <td>
                        <div class="input-group" style="max-width: 120px;">
                            <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, -1)">-</button>
                            <input type="number" class="form-control text-center" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value - ${item.quantity})">
                            <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, 1)">+</button>
                        </div>
                    </td>
                    <td>S/${total.toFixed(2)}</td>
                    <td><button class="btn btn-danger" onclick="removeFromCart(${index})"><i class="fas fa-trash-alt"></i></button></td>
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

        function showBankInfo(accountNumber) {
            if (accountNumber.length > 0) {
                document.getElementById('bank-info').classList.remove('d-none');
            } else {
                document.getElementById('bank-info').classList.add('d-none');
            }
        }

        updateCart();
    </script>
</body>
</html>