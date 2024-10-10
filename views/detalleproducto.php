<style>
        body {
            background-color: black;
            color: white;
        }
        .btn, .btn-outline-secondary {
            color: white;
        }
        .btn-secondary, .btn-secondary:hover {
            background-color: #343a40;
            border-color: #343a40;
        }
        h1, h1 span {
            color: white;
        }
        p, a {
            color: white;
        }
        .container {
            background-color: black;
            color: white;
        }
        .rounded {
            border: 2px solid white;
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
    .footer {
      background-color: #000000;
      color: #fff;
      padding: 20px 0;
    }
    .footer a {
      color: #fff;
    }
    </style>

<div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Logo de la tienda -->
                <img src="https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-6.jpg" alt="Polo Lewis Z" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h1>POLO LEWIS Z <span class="text-danger">código: 3OZGT002</span></h1>
                <p>NEGRO</p>
                <p>De: <s>S/200.00</s></p>
                <p>A: <span class="h4 text-success" id="precio">S/120.00</span></p>
                <p class="text-danger font-weight-bold" id="descuento">DESCUENTO DE S/80.00</p>
                <p class="text-danger font-weight-bold">40% DSCTO</p>
                <p>Colores disponibles</p>
                <div class="d-flex">
                    <div class="me-2" style="width: 30px; height: 30px; background-color: grey; border-radius: 50%;"></div>
                    <div class="me-2" style="width: 30px; height: 30px; background-color: black; border-radius: 50%;"></div>
                    <div class="me-2" style="width: 30px; height: 30px; background-color: white; border-radius: 50%; border: 1px solid #ddd;"></div>
                </div>
                <p>No sabes qué talla eres? Contáctanos y te asesoramos con tu compra</p>
                <p>TALLAS</p>
                <div class="d-flex">
                    <button class="btn btn-outline-secondary me-2" onclick="cambiarTalla('S')">S</button>
                    <button class="btn btn-outline-secondary me-2" onclick="cambiarTalla('M')">M</button>
                    <button class="btn btn-outline-secondary me-2" onclick="cambiarTalla('L')">L</button>
                    <button class="btn btn-outline-secondary me-2" onclick="cambiarTalla('XL')">XL</button>
                </div>
                <p>CANTIDAD</p>
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-secondary btn-sm" onclick="restarCantidad()">-</button>
                    <input type="number" id="cantidad" class="form-control mx-2" value="1" min="1" style="width: 80px;" onchange="actualizarPrecio()">
                    <button class="btn btn-outline-secondary btn-sm" onclick="sumarCantidad()">+</button>
                </div>
                <a href="<?php echo BASE_URL ?>carrito" class="btn btn-danger mt-3">AÑADIR AL CARRITO</a>
                <p class="text-success mt-3">DELIVERY GRATIS en Huanta por compras mayores de S/299.00</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="<?php echo BASE_URL ?>producto" class="btn btn-secondary">VOLVER A LA PÁGINA PRINCIPAL</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Funciones para ajustar la talla y la cantidad
        function cambiarTalla(talla) {
            // Puedes implementar lógica adicional si es necesario
        }

        function sumarCantidad() {
            var cantidadInput = document.getElementById('cantidad');
            var cantidad = parseInt(cantidadInput.value);
            cantidadInput.value = cantidad + 1;
            actualizarPrecio();
        }

        function restarCantidad() {
            var cantidadInput = document.getElementById('cantidad');
            var cantidad = parseInt(cantidadInput.value);
            if (cantidad > 1) {
                cantidadInput.value = cantidad - 1;
                actualizarPrecio();
            }
        }

        function actualizarPrecio() {
            var cantidadInput = document.getElementById('cantidad');
            var cantidad = parseInt(cantidadInput.value);
            var precioUnitario = 120; // Precio unitario del producto
            var descuento = 80; // Descuento aplicado

            var precioFinal = cantidad * precioUnitario - descuento;
            document.getElementById('precio').innerText = 'S/' + precioFinal.toFixed(2);

            var descuentoTexto = 'DESCUENTO DE S/' + descuento.toFixed(2);
            document.getElementById('descuento').innerText = descuentoTexto;
        }
    </script>