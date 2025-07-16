<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Intergaláctico - Tienda Alien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
      :root {
        --alien-green: #00ff9d;
        --alien-purple: #9d00ff;
        --ufo-blue: #00e1ff;
        --dark-space: #0a001a;
        --energy-pink: #ff00aa;
        --alien-red: #ff0033;
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

      /* Estilos del carrito */
      .table {
        background-color: rgba(20, 10, 40, 0.7);
        color: var(--alien-green);
        border-color: var(--alien-green);
      }

      .table th {
        border-color: var(--alien-green);
        color: var(--ufo-blue);
      }

      .table td {
        border-color: var(--alien-green);
      }

      .card-body {
        background-color: rgba(20, 10, 40, 0.7);
        border: 1px solid var(--alien-green);
        border-radius: 8px;
      }

      .card-title {
        color: var(--ufo-blue);
      }

      .card-text {
        color: var(--alien-green);
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

      .btn-secondary {
        background-color: var(--dark-space);
        border-color: var(--alien-green);
        color: var(--alien-green);
        font-weight: bold;
        letter-spacing: 1px;
        transition: all 0.3s;
        text-transform: uppercase;
      }

      .btn-secondary:hover {
        background-color: var(--alien-green);
        color: #000;
        box-shadow: 0 0 15px var(--alien-green);
        transform: translateY(-2px);
      }

      .btn-danger {
        background-color: var(--alien-red);
        border-color: var(--alien-red);
        color: #000;
        font-weight: bold;
      }

      .btn-danger:hover {
        background-color: #ff3366;
        border-color: #ff3366;
      }

      .form-control, .input-group-text {
        background-color: rgba(20, 10, 40, 0.7);
        border: 1px solid var(--alien-green);
        color: var(--alien-green);
      }

      .form-control:focus {
        background-color: rgba(20, 10, 40, 0.9);
        border-color: var(--ufo-blue);
        box-shadow: 0 0 10px var(--ufo-blue);
        color: var(--alien-green);
      }

      #bank-info {
        background-color: rgba(20, 10, 40, 0.7);
        border: 1px solid var(--alien-green);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
      }

      .img-thumbnail {
        background-color: transparent;
        border: 1px solid var(--alien-green);
        transition: all 0.3s;
      }

      .img-thumbnail:hover {
        border-color: var(--ufo-blue);
        box-shadow: 0 0 15px var(--ufo-blue);
        transform: translateY(-3px);
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

      h1 {
        color: var(--ufo-blue);
        text-shadow: 0 0 10px var(--ufo-blue);
        margin-bottom: 30px;
        font-weight: bold;
        text-transform: uppercase;
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
            <h1>CARRO INTERGALÁCTICO</h1>
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
                            <a href="<?php echo BASE_URL ?>producto" class="btn btn-secondary w-100 mt-2">VOLVER A LA GALERÍA</a>
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
                name: 'Polo Intergaláctico',
                price: 120.00,
                quantity: 1,
                image: 'https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-6.jpg'
            },
            {
                name: 'Camiseta Nebulosa',
                price: 150.00,
                quantity: 2,
                image: 'https://tiendanebula.net/cdn/shop/products/947d03e9b59dc9beaf0bacaf27b020c1_grande.jpg?v=1614530255'
            },
            {
                name: 'Pantalón Estelar',
                price: 180.00,
                quantity: 1,
                image: 'https://sugoiclothes.com/wp-content/uploads/2022/03/Summer-New-Style-Men-s-Sports-Suit-Brand-Anime-Printing-Casual-Fashion-Cotton-Short-Sleeves-sweatshirt.jpg_480x480q90.jpg_.webp'
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
                    <td><img src="${item.image}" alt="${item.name}" class="img-fluid" style="max-width: 100px; border: 1px solid var(--alien-green); border-radius: 5px;"></td>
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