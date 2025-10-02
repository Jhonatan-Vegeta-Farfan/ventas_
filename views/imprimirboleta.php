<!DOCTYPE html>
<html lang="es">
<head>
    <!-- HEADER STILOS -->
    <?php include('header_stilos.php'); ?>
    
    <title>Comprobante de Compra - STILOS</title>
    <style>
        :root {
            --stilos-primary: #8b4513;
            --stilos-secondary: #cd853f;
            --stilos-accent: #a0522d;
            --stilos-dark: #5a3921;
            --stilos-bg: #f9f5f0;
        }
        
        body {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 100px 0 150px; /* Espacio para header/footer */
            background-color: var(--stilos-bg);
            color: var(--stilos-dark);
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(139, 69, 19, 0.1) 0%, transparent 20%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><path d="M30,5 Q45,20 30,35 Q15,20 30,5" fill="none" stroke="%23cd853f" stroke-width="0.3" opacity="0.1"/></svg>');
        }

        .main-content {
            max-width: 900px;
            margin: 40px auto;
            background: rgba(255, 253, 250, 0.95);
            padding: 40px;
            border: 2px solid var(--stilos-primary);
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(139, 69, 19, 0.2);
            position: relative;
            overflow: hidden;
        }

        .main-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }

        h1 {
            text-align: center;
            color: var(--stilos-primary);
            margin-bottom: 40px;
            font-size: 32px;
            font-family: 'Playfair Display', serif;
            letter-spacing: 2px;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
        }

        .store-info {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px dashed var(--stilos-secondary);
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: var(--stilos-primary);
            margin-bottom: 5px;
        }

        .store-location {
            font-style: italic;
            color: var(--stilos-secondary);
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
            border: 1px solid var(--stilos-secondary);
            font-family: 'Raleway', sans-serif;
        }

        th {
            background-color: var(--stilos-primary);
            color: #f9f5f0;
            padding: 18px;
            text-align: left;
            font-size: 16px;
            letter-spacing: 1px;
            border-bottom: 3px solid var(--stilos-accent);
            font-weight: 500;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid rgba(205, 133, 63, 0.3);
            font-size: 15px;
        }

        tfoot td {
            font-weight: bold;
            background-color: rgba(205, 133, 63, 0.1);
            border-top: 3px solid var(--stilos-primary);
            color: var(--stilos-primary);
            font-size: 17px;
        }

        .btn-print {
            display: block;
            width: 280px;
            margin: 40px auto;
            padding: 15px 30px;
            background-color: var(--stilos-primary);
            color: #f9f5f0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            box-shadow: 0 3px 10px rgba(139, 69, 19, 0.3);
        }

        .btn-print:hover {
            background-color: var(--stilos-accent);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.4);
            color: #fff;
        }

        #message {
            text-align: center;
            margin: 30px 0;
            font-weight: bold;
            color: var(--stilos-primary);
            display: none;
            font-size: 18px;
            padding: 15px;
            background-color: rgba(205, 133, 63, 0.1);
            border-radius: 5px;
            border-left: 4px solid var(--stilos-primary);
        }

        .product-name {
            max-width: 300px;
            color: var(--stilos-primary);
            font-weight: 500;
        }

        .currency {
            color: var(--stilos-accent);
            font-weight: bold;
        }

        .embroidery-corner {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 2px solid var(--stilos-secondary);
            border-radius: 50%;
        }

        .embroidery-corner.tl {
            top: 10px;
            left: 10px;
        }

        .embroidery-corner.tr {
            top: 10px;
            right: 10px;
        }

        .embroidery-corner.bl {
            bottom: 10px;
            left: 10px;
        }

        .embroidery-corner.br {
            bottom: 10px;
            right: 10px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="main-content">
        <!-- Bordados decorativos -->
        <div class="embroidery-corner tl"></div>
        <div class="embroidery-corner tr"></div>
        <div class="embroidery-corner bl"></div>
        <div class="embroidery-corner br"></div>
        
        <div class="store-info">
            <div class="store-name">STILOS</div>
            <div class="store-location">Huanta, Ayacucho</div>
            <div>Especialistas en ropa y bordados</div>
        </div>
        
        <h1>COMPROBANTE DE COMPRA</h1>
        
        <table>
            <thead>
                <tr>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO UNITARIO</th>
                    <th>SUB-TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-name">Polo bordado tradicional</td>
                    <td>3</td>
                    <td class="currency">S/ 50.00</td>
                    <td class="currency">S/ 150.00</td>
                </tr>
                <tr>
                    <td class="product-name">Chalina de lana premium</td>
                    <td>4</td>
                    <td class="currency">S/ 100.00</td>
                    <td class="currency">S/ 400.00</td>
                </tr>
                <tr>
                    <td class="product-name">Poncho artesanal ayacuchano</td>
                    <td>3</td>
                    <td class="currency">S/ 50.00</td>
                    <td class="currency">S/ 150.00</td>
                </tr>
                <tr>
                    <td class="product-name">Falda con bordados típicos</td>
                    <td>4</td>
                    <td class="currency">S/ 100.00</td>
                    <td class="currency">S/ 400.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">TOTAL EN SOLES:</td>
                    <td class="currency">S/ 1,100.00</td>
                </tr>
            </tfoot>
        </table>

        <a href="<?php echo BASE_URL ?>pagofactura" class="btn-print">
            <i class="fas fa-receipt"></i> IMPRIMIR COMPROBANTE
        </a>
        
        <div id="message">¡Comprobante generado exitosamente!</div>
    </div>

    <!-- FOOTER STILOS -->
    <?php include('footer_stilos.php'); ?>

    <script>
        function printReceipt() {
            // Mostrar mensaje de confirmación
            const message = document.getElementById("message");
            message.style.display = "block";
            
            // Efecto visual
            document.querySelector('.main-content').style.boxShadow = "0 0 30px rgba(139, 69, 19, 0.4)";
            
            // Ocultar después de 4 segundos
            setTimeout(() => {
                message.style.display = "none";
                document.querySelector('.main-content').style.boxShadow = "0 5px 25px rgba(139, 69, 19, 0.2)";
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