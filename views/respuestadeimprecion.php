<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta - STILOS Huanta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f9f5f0;
            color: #5a3921;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            border: 1px solid #cd853f;
            position: relative;
        }
        
        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 1px dashed #cd853f;
            padding-bottom: 15px;
        }
        
        .logo {
            max-width: 200px;
            margin: 0 auto 10px;
            display: block;
            filter: drop-shadow(0 2px 4px rgba(139, 69, 19, 0.3));
        }
        
        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #8b4513;
            margin: 5px 0;
            font-size: 28px;
            letter-spacing: 1px;
        }
        
        .location {
            font-style: italic;
            color: #cd853f;
            margin: 5px 0;
        }
        
        .receipt-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .items-table th {
            background-color: #f5e9dc;
            color: #8b4513;
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #cd853f;
            font-weight: 600;
        }
        
        .items-table td {
            padding: 10px;
            border-bottom: 1px solid #e9d4c3;
        }
        
        .total-section {
            text-align: right;
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
            color: #8b4513;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #a0522d;
            border-top: 1px dashed #cd853f;
            padding-top: 15px;
        }
        
        .print-btn {
            background-color: #8b4513;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
            display: block;
            margin: 30px auto;
            font-family: 'Raleway', sans-serif;
        }
        
        .print-btn:hover {
            background-color: #a0522d;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }
        
        /* Estilos del modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 30px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid #cd853f;
            position: relative;
        }
        
        .modal-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }
        
        .modal-content h2 {
            font-family: 'Playfair Display', serif;
            color: #8b4513;
            margin-bottom: 20px;
        }
        
        .modal-btn {
            background-color: #8b4513;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Raleway', sans-serif;
        }
        
        .modal-btn:hover {
            background-color: #a0522d;
        }
        
        @media print {
            .print-btn {
                display: none;
            }
            
            .modal {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Logo de STILOS -->
            <svg class="logo" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#8b4513" />
                        <stop offset="100%" stop-color="#cd853f" />
                    </linearGradient>
                </defs>
                <rect x="10" y="30" width="40" height="40" rx="5" fill="url(#gradient)" stroke="#5a3921" stroke-width="1"/>
                <path d="M25 45 L35 35 L45 45 L35 55 Z" fill="white" opacity="0.8"/>
                <text x="60" y="45" font-family="'Playfair Display', serif" font-size="24" font-weight="bold" fill="url(#gradient)">STILOS</text>
                <text x="60" y="60" font-family="Raleway, sans-serif" font-size="12" fill="#5a3921">Huanta, Ayacucho</text>
            </svg>
            
            <h1 class="store-name">STILOS</h1>
            <p class="location">Huanta, Ayacucho</p>
            <h2>BOLETA DE VENTA</h2>
        </div>
        
        <div class="receipt-details">
            <div>
                <p><strong>N° Boleta:</strong> B001-000123</p>
                <p><strong>Fecha:</strong> 15/11/2023</p>
                <p><strong>Hora:</strong> 14:30</p>
            </div>
            <div>
                <p><strong>Vendedor:</strong> María López</p>
                <p><strong>Cliente:</strong> Juan Pérez</p>
                <p><strong>DNI:</strong> 76543210</p>
            </div>
        </div>
        
        <table class="items-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unit.</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Polo bordado tradicional</td>
                    <td>2</td>
                    <td>S/ 45.00</td>
                    <td>S/ 90.00</td>
                </tr>
                <tr>
                    <td>Falda con diseño ayacuchano</td>
                    <td>1</td>
                    <td>S/ 85.00</td>
                    <td>S/ 85.00</td>
                </tr>
                <tr>
                    <td>Chamarra de lana</td>
                    <td>1</td>
                    <td>S/ 120.00</td>
                    <td>S/ 120.00</td>
                </tr>
                <tr>
                    <td>Gorro tejido</td>
                    <td>3</td>
                    <td>S/ 25.00</td>
                    <td>S/ 75.00</td>
                </tr>
            </tbody>
        </table>
        
        <div class="total-section">
            <p>Subtotal: S/ 370.00</p>
            <p>IGV (18%): S/ 66.60</p>
            <p><strong>TOTAL: S/ 436.60</strong></p>
        </div>
        
        <div class="footer">
            <p>¡Gracias por su compra!</p>
            <p>STILOS - Ropa y Bordados de Calidad</p>
            <p>Av. Libertadores 123, Huanta, Ayacucho</p>
            <p>Teléfono: 966 123 456</p>
        </div>
        
        <button class="print-btn" onclick="printReceipt()">
            <i class="fas fa-print"></i> Imprimir Boleta
        </button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>¡La boleta se ha impreso correctamente!</h2>
            <p>Gracias por utilizar el sistema de STILOS</p>
            <button class="modal-btn" onclick="backToHome()">Volver al Inicio</button>
        </div>
    </div>

    <script>
        function printReceipt() {
            // Aquí irían las instrucciones para imprimir la boleta
            console.log("Imprimiendo boleta...");
            
            // Opción 1: Usar la función de impresión del navegador
            window.print();
            
            // Opción 2: Mostrar el modal después de la impresión
            document.getElementById("myModal").style.display = "block";
        }

        function backToHome() {
            // Redirigir al usuario a la página de inicio
            window.location.href = "<?php echo BASE_URL ?>producto";
        }
        
        // Cerrar modal si se hace clic fuera de él
        window.onclick = function(event) {
            const modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>