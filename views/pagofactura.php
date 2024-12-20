<style>
    body {
        background-color: #000;
        color: #fff;
        padding-top: 20px;
    }

    .invoice-container {
        background-color: #333;
        border-radius: 10px;
        padding: 20px;
        margin: auto;
        max-width: 800px;
    }

    .logo-image {
        max-width: 150px;
    }

    .invoice-container h1,
    .invoice-container h2 {
        color: #ffcc00;
    }

    .invoice-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .customer-info,
    .invoice-details {
        flex: 1;
    }

    .product-table {
        background-color: #444;
        color: #fff;
        margin-bottom: 20px;
    }

    .total-label {
        font-weight: bold;
    }

    .total-amount {
        font-size: 1.2em;
        font-weight: bold;
        color: #ffcc00;
    }

    .download-btn,
    .print-btn {
        margin-right: 10px;
    }

    .download-btn {
        background-color: #ffcc00;
        border-color: #ffcc00;
    }

    .download-btn:hover {
        background-color: #ff9900;
        border-color: #ff9900;
    }

    .print-btn {
        background-color: #28a745;
        border-color: #28a745;
    }

    .print-btn:hover {
        background-color: #218838;
        border-color: #218838;
    }

    .return-btn {
        background-color: #ffcc00;
        border-color: #ffcc00;
        color: #000;
    }

    .return-btn:hover {
        background-color: #ff9900;
        border-color: #ff9900;
        color: #000;
    }

    .navbar {
        background-color: #000000;
    }

    .navbar-brand img {
        width: 150px;
    }

    .navbar-nav .nav-link,
    .navbar-nav .nav-item {
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

    /* Estilo para los botones activos */
    .navbar-nav .nav-item .nav-link.active {
        color: rgb(255, 0, 0) !important;
        font-weight: bold;
        background-color: rgb(0, 0, 0) !important;
    }
</style>

<div class="invoice-container">
    <header class="text-center">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Logo de la Tienda" class="logo-image">
        </div>
        <h1 class="mb-0">Tienda de Ropa Dragon Ball Z</h1>
        <p>Calle Grau 514, Huanta, Ayacucho</p>
        <p>Perú</p>
    </header>

    <main>
        <div class="invoice-info">
            <div class="customer-info">
                <h2>Información del Cliente</h2>
                <p>Nombre: Juan Pérez</p>
                <p>Dirección: Av. Los Andes 123, Huanta, Ayacucho</p>
                <p>Teléfono: 123-456-7890</p>
            </div>
            <div class="invoice-details">
                <h2>Detalles de la Factura</h2>
                <p>Número de Factura: 0001</p>
                <p>Fecha: 21 de junio de 2024</p>
            </div>
        </div>

        <table class="table table-striped table-bordered product-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Camiseta Dragon Ball Z</td>
                    <td>2</td>
                    <td>S/ 59.99</td>
                    <td>S/ 119.98</td>
                </tr>
                <tr>
                    <td>Pantalón Dragon Ball Z</td>
                    <td>1</td>
                    <td>S/ 89.99</td>
                    <td>S/ 89.99</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="total-label">Total:</td>
                    <td class="total-amount">S/ 209.97</td>
                </tr>
            </tfoot>
        </table>
    </main>

    <footer class="text-center">
        <div class="actions">
            <a href="<?php echo BASE_URL ?>descargarboleta" class="btn btn-warning return-btn">Descargar</a>
            <a href="<?php echo BASE_URL ?>imprimirboleta" class="btn btn-warning return-btn">Imprimir</a>
            <a href="<?php echo BASE_URL ?>producto" class="btn btn-warning return-btn">Volver a Comprar</a>
        </div>
        <p>¡Gracias por su compra!</p>
        <p>Visite nuestra tienda en línea: www.tiendaropadesenodragballz.com</p>
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const downloadBtn = document.querySelector('.download-btn');
    const printBtn = document.querySelector('.print-btn');

    downloadBtn.addEventListener('click', () => {
        downloadBtn.classList.remove('btn-primary');
        downloadBtn.classList.add('btn-secondary');
        // Lógica para descargar la factura
        console.log('Factura descargada');
    });

    printBtn.addEventListener('click', () => {
        printBtn.classList.remove('btn-success');
        printBtn.classList.add('btn-warning');
        // Lógica para imprimir la factura
        console.log('Factura impresa');
    });
</script>