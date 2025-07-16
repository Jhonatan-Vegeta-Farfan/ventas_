<!DOCTYPE html>
<html lang="es">
<head>
    <!-- HEADER ALIEN -->
    <?php include('header_alien.php'); ?>
    
    <title>Comprobante Intergaláctico</title>
    <style>
        :root {
            --alien-primary: #27d8a1;
            --alien-secondary: #1a237e;
            --alien-accent: #ffeb3b;
            --alien-dark: #0d1b2a;
            --alien-bg: #121a24;
        }
        
        body {
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            padding: 100px 0 150px; /* Espacio para header/footer alien */
            background-color: var(--alien-bg);
            color: #e0e0e0;
            background-image: radial-gradient(circle at 10% 20%, rgba(39, 216, 161, 0.1) 0%, transparent 20%);
        }

        .main-content {
            max-width: 900px;
            margin: 40px auto;
            background: rgba(13, 27, 42, 0.8);
            padding: 40px;
            border: 2px solid var(--alien-primary);
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(39, 216, 161, 0.3);
        }

        h1 {
            text-align: center;
            color: var(--alien-accent);
            margin-bottom: 40px;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 15px var(--alien-primary);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
            border: 1px solid var(--alien-primary);
        }

        th {
            background-color: var(--alien-secondary);
            color: var(--alien-accent);
            padding: 18px;
            text-align: left;
            font-size: 18px;
            letter-spacing: 1px;
            border-bottom: 3px solid var(--alien-primary);
        }

        td {
            padding: 15px;
            border-bottom: 1px solid rgba(39, 216, 161, 0.3);
            font-size: 16px;
        }

        tfoot td {
            font-weight: bold;
            background-color: rgba(26, 35, 126, 0.3);
            border-top: 3px solid var(--alien-primary);
            color: var(--alien-accent);
            font-size: 18px;
        }

        .btn-print {
            display: block;
            width: 250px;
            margin: 40px auto;
            padding: 15px 30px;
            background-color: var(--alien-primary);
            color: var(--alien-dark);
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s;
            letter-spacing: 1px;
            box-shadow: 0 0 20px rgba(39, 216, 161, 0.5);
        }

        .btn-print:hover {
            background-color: var(--alien-accent);
            transform: translateY(-3px);
            box-shadow: 0 0 30px rgba(255, 235, 59, 0.7);
            color: var(--alien-dark);
        }

        #message {
            text-align: center;
            margin: 30px 0;
            font-weight: bold;
            color: var(--alien-primary);
            display: none;
            font-size: 20px;
            text-shadow: 0 0 10px rgba(39, 216, 161, 0.7);
        }

        .product-name {
            max-width: 300px;
            color: var(--alien-accent);
        }

        .currency {
            color: var(--alien-primary);
            font-weight: bold;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="main-content">
        <h1>COMPROBANTE INTERGALÁCTICO</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ARTEFACTO</th>
                    <th>CANTIDAD</th>
                    <th>VALOR UNITARIO</th>
                    <th>SUB-TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-name">Túnica de energía Zeta</td>
                    <td>3</td>
                    <td class="currency">CR 50.00</td>
                    <td class="currency">CR 150.00</td>
                </tr>
                <tr>
                    <td class="product-name">Armadura de plasma Quantum</td>
                    <td>4</td>
                    <td class="currency">CR 100.00</td>
                    <td class="currency">CR 400.00</td>
                </tr>
                <tr>
                    <td class="product-name">Generador de escudo personalizado</td>
                    <td>3</td>
                    <td class="currency">CR 50.00</td>
                    <td class="currency">CR 150.00</td>
                </tr>
                <tr>
                    <td class="product-name">Visor holográfico de realidad X</td>
                    <td>4</td>
                    <td class="currency">CR 100.00</td>
                    <td class="currency">CR 400.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">TOTAL EN CRÉDITOS GALÁCTICOS:</td>
                    <td class="currency">CR 1,100.00</td>
                </tr>
            </tfoot>
        </table>

        <a href="<?php echo BASE_URL ?>pagofactura" class="btn-print">
            <i class="bi bi-stars"></i> TRANSMITIR COMPROBANTE
        </a>
        
        <div id="message">¡Transmisión exitosa a la Federación Galáctica!</div>
    </div>

    <!-- FOOTER ALIEN -->
    <?php include('footer_alien.php'); ?>

    <script>
        function printReceipt() {
            // Efecto de sonido alienígena (opcional)
            const audio = new Audio('<?php echo BASE_URL ?>sounds/alien_transmission.mp3');
            audio.play();

            // Mostrar mensaje de confirmación
            const message = document.getElementById("message");
            message.style.display = "block";
            
            // Efecto visual
            document.querySelector('.main-content').style.boxShadow = "0 0 50px rgba(39, 216, 161, 0.8)";
            
            // Ocultar después de 4 segundos
            setTimeout(() => {
                message.style.display = "none";
                document.querySelector('.main-content').style.boxShadow = "0 0 30px rgba(39, 216, 161, 0.3)";
            }, 4000);
        }

        // Asignar evento al botón
        document.querySelector('.btn-print').addEventListener('click', function(e) {
            e.preventDefault();
            printReceipt();
            setTimeout(() => {
                window.location.href = this.href;
            }, 2000);
        });
    </script>
</body>
</html>