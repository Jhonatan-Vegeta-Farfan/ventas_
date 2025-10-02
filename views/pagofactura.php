<style>
    body {
        background-color: #f9f5f0;
        color: #5a3921;
        padding-top: 20px;
    }

    .invoice-container {
        background-color: #fffdfa;
        border-radius: 10px;
        padding: 20px;
        margin: auto;
        max-width: 800px;
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
        border: 1px solid #cd853f;
        position: relative;
        overflow: hidden;
    }

    .invoice-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
    }

    .logo-image {
        max-width: 150px;
    }

    .invoice-container h1,
    .invoice-container h2 {
        color: #8b4513;
        font-family: 'Playfair Display', serif;
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
        background-color: #fffdfa;
        color: #5a3921;
        margin-bottom: 20px;
        border: 1px solid #cd853f;
    }

    .product-table th {
        background-color: #8b4513;
        color: #f9f5f0;
        font-family: 'Playfair Display', serif;
    }

    .total-label {
        font-weight: bold;
    }

    .total-amount {
        font-size: 1.2em;
        font-weight: bold;
        color: #8b4513;
    }

    .download-btn,
    .print-btn {
        margin-right: 10px;
    }

    .download-btn {
        background-color: #8b4513;
        border-color: #8b4513;
        color: #fff;
    }

    .download-btn:hover {
        background-color: #a0522d;
        border-color: #a0522d;
    }

    .print-btn {
        background-color: #cd853f;
        border-color: #cd853f;
        color: #fff;
    }

    .print-btn:hover {
        background-color: #d2691e;
        border-color: #d2691e;
    }

    .return-btn {
        background-color: #8b4513;
        border-color: #8b4513;
        color: #fff;
    }

    .return-btn:hover {
        background-color: #a0522d;
        border-color: #a0522d;
        color: #fff;
    }

    .embroidery-icon {
        color: #8b4513;
        margin: 0 5px;
    }

    .store-name {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: #8b4513;
        text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
        letter-spacing: 1px;
    }

    .location {
        font-style: italic;
        color: #cd853f;
        font-size: 0.9rem;
    }
</style>

<div class="invoice-container">
    <header class="text-center">
        <div class="logo">
            <img src="https://i.imgur.com/example-logo.png" alt="Logo de STILOS" class="logo-image">
        </div>
        <h1 class="store-name mb-0">
            <i class="fas fa-tshirt embroidery-icon"></i> STILOS <i class="fas fa-tshirt embroidery-icon"></i>
        </h1>
        <p class="location">Calle Grau 514, Huanta, Ayacucho</p>
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
                    <td>Camiseta con Bordado Tradicional</td>
                    <td>2</td>
                    <td>S/ 59.99</td>
                    <td>S/ 119.98</td>
                </tr>
                <tr>
                    <td>Pantalón de Algodón con Detalles</td>
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
            <a href="<?php echo BASE_URL ?>descargarboleta" class="btn download-btn">Descargar</a>
            <a href="<?php echo BASE_URL ?>imprimirboleta" class="btn print-btn">Imprimir</a>
            <a href="<?php echo BASE_URL ?>producto" class="btn return-btn">Volver a Comprar</a>
        </div>
        <p>¡Gracias por su compra!</p>
        <p>Visite nuestra tienda en línea: www.stiloshuanta.com</p>
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