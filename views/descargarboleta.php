<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Pago - STILOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
      :root {
        --primary-brown: #8b4513;
        --secondary-orange: #cd853f;
        --accent-beige: #f9f5f0;
        --text-dark: #5a3921;
        --highlight: #d2691e;
      }

      /* Estilos específicos para la boleta */
      .boleta-section {
        background-color: var(--accent-beige);
        background-image: 
          radial-gradient(circle at 70% 30%, rgba(205, 133, 63, 0.1) 0%, transparent 25%),
          radial-gradient(circle at 30% 70%, rgba(139, 69, 19, 0.1) 0%, transparent 25%),
          url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M20,50 Q50,30 80,50 T20,50" fill="none" stroke="%23cd853f" stroke-width="0.3" opacity="0.2"/></svg>');
        color: var(--text-dark);
        font-family: 'Raleway', sans-serif;
        padding: 20px 0;
        margin: 0;
      }

      .boleta-container {
        background-color: rgba(255, 253, 250, 0.95);
        border-radius: 10px;
        border: 2px solid var(--primary-brown);
        box-shadow: 0 5px 20px rgba(139, 69, 19, 0.2);
        padding: 30px;
        margin: 20px auto;
        max-width: 900px;
        position: relative;
        overflow: hidden;
      }

      .boleta-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--primary-brown), var(--secondary-orange), var(--primary-brown));
      }

      .boleta-container h1 {
        color: var(--primary-brown);
        text-align: center;
        margin-bottom: 30px;
        font-weight: bold;
        font-family: 'Playfair Display', serif;
        letter-spacing: 1px;
        font-size: 1.8rem;
        text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
      }

      .store-header {
        text-align: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 1px dashed var(--secondary-orange);
      }

      .store-name {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--primary-brown);
        font-size: 2.2rem;
        margin-bottom: 5px;
      }

      .store-location {
        font-style: italic;
        color: var(--secondary-orange);
        font-size: 1rem;
      }

      .boleta-container table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
        background-color: rgba(255, 253, 250, 0.8);
      }

      .boleta-container th {
        background-color: rgba(139, 69, 19, 0.1);
        color: var(--primary-brown);
        padding: 15px;
        text-align: left;
        border-bottom: 2px solid var(--primary-brown);
        font-family: 'Playfair Display', serif;
        font-weight: 600;
      }

      .boleta-container td {
        padding: 12px 15px;
        border-bottom: 1px solid rgba(205, 133, 63, 0.3);
        vertical-align: middle;
      }

      .boleta-container tbody tr:nth-child(odd) {
        background-color: rgba(205, 133, 63, 0.05);
      }

      .boleta-container tbody tr:hover {
        background-color: rgba(139, 69, 19, 0.08);
        box-shadow: 0 0 10px rgba(139, 69, 19, 0.1);
      }

      .boleta-container tfoot td {
        font-weight: bold;
        background-color: rgba(139, 69, 19, 0.1);
        border-top: 2px solid var(--primary-brown);
        font-family: 'Playfair Display', serif;
      }

      .boleta-container tfoot td:last-child {
        color: var(--primary-brown);
        font-size: 1.1em;
      }

      .btn-descarga {
        display: block;
        width: 250px;
        margin: 30px auto;
        padding: 12px;
        background-color: var(--primary-brown);
        color: white;
        border: none;
        border-radius: 5px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.3);
        transition: all 0.3s;
      }

      .btn-descarga:hover {
        background-color: var(--highlight);
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(139, 69, 19, 0.4);
        color: white;
      }

      .btn-descarga:active {
        transform: translateY(1px);
      }

      .btn-descarga i {
        margin-right: 10px;
      }

      #message {
        text-align: center;
        margin: 20px auto;
        padding: 15px;
        max-width: 400px;
        background-color: rgba(139, 69, 19, 0.1);
        border: 1px solid var(--primary-brown);
        border-radius: 5px;
        color: var(--primary-brown);
        font-weight: bold;
        display: none;
      }

      .embroidery-corner {
        position: absolute;
        width: 40px;
        height: 40px;
      }

      .embroidery-corner.tl {
        top: 10px;
        left: 10px;
        border-top: 2px solid var(--secondary-orange);
        border-left: 2px solid var(--secondary-orange);
      }

      .embroidery-corner.tr {
        top: 10px;
        right: 10px;
        border-top: 2px solid var(--secondary-orange);
        border-right: 2px solid var(--secondary-orange);
      }

      .embroidery-corner.bl {
        bottom: 10px;
        left: 10px;
        border-bottom: 2px solid var(--secondary-orange);
        border-left: 2px solid var(--secondary-orange);
      }

      .embroidery-corner.br {
        bottom: 10px;
        right: 10px;
        border-bottom: 2px solid var(--secondary-orange);
        border-right: 2px solid var(--secondary-orange);
      }

      @media (max-width: 768px) {
        .boleta-container {
          padding: 15px;
        }
        
        .boleta-container th, 
        .boleta-container td {
          padding: 8px 10px;
          font-size: 0.9em;
        }
        
        .btn-descarga {
          width: 90%;
          padding: 10px;
        }
        
        .store-name {
          font-size: 1.8rem;
        }
      }
    </style>
</head>
<body>

    <section class="boleta-section">
        <div class="boleta-container">
            <!-- Esquinas decorativas -->
            <div class="embroidery-corner tl"></div>
            <div class="embroidery-corner tr"></div>
            <div class="embroidery-corner bl"></div>
            <div class="embroidery-corner br"></div>
            
            <!-- Encabezado de la tienda -->
            <div class="store-header">
                <div class="store-name">
                    <i class="fas fa-tshirt"></i> STILOS <i class="fas fa-tshirt"></i>
                </div>
                <div class="store-location">Huanta, Ayacucho</div>
            </div>
            
            <h1>BOLETA DE VENTA</h1>
            
            <table>
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
                  <td>Polo con Bordado Andino</td>
                  <td>3</td>
                  <td>S/ 50.00</td>
                  <td>S/ 150.00</td>
                </tr>
                <tr>
                  <td>Pantalón de Algodón con Diseño Tradicional</td>
                  <td>4</td>
                  <td>S/ 100.00</td>
                  <td>S/ 400.00</td>
                </tr>
                <tr>
                  <td>Chaleco con Bordados Huantinos</td>
                  <td>3</td>
                  <td>S/ 50.00</td>
                  <td>S/ 150.00</td>
                </tr>
                <tr>
                  <td>Polera con Estampado Ayacuchano</td>
                  <td>4</td>
                  <td>S/ 100.00</td>
                  <td>S/ 400.00</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">Total:</td>
                  <td>S/ 1,100.00</td>
                </tr>
              </tfoot>
            </table>
            
            <a href="<?php echo BASE_URL ?>respuestadedecarga" class="btn-descarga">
              <i class="fas fa-download"></i> DESCARGAR BOLETA
            </a>
            
            <div id="message">¡Boleta descargada exitosamente!</div>
        </div>
    </section>

    <script>
      document.querySelector('.btn-descarga')?.addEventListener('click', function(e) {
        e.preventDefault();
        console.log("Descargando boleta de STILOS...");
        
        // Mostrar mensaje de confirmación
        const message = document.getElementById("message");
        if(message) {
          message.style.display = "block";
        }
        
        // Redirigir después de 2 segundos (simulando descarga)
        setTimeout(function() {
          window.location.href = e.target.href;
        }, 2000);
      });
    </script>
</body>
</html>