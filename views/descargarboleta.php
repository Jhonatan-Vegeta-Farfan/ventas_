<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Pago Intergaláctica</title>
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

      /* Estilos específicos para la boleta que no afectarán header/footer */
      .boleta-section {
        background-color: var(--dark-space);
        background-image: 
          radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
          radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
          url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
        color: var(--alien-green);
        font-family: 'Orbitron', sans-serif;
        padding: 20px 0;
        margin: 0;
      }

      .boleta-container {
        background-color: rgba(20, 10, 40, 0.9);
        border-radius: 15px;
        border: 2px solid var(--alien-green);
        box-shadow: 0 0 30px rgba(0, 255, 157, 0.3);
        padding: 30px;
        margin: 20px auto;
        max-width: 900px;
      }

      .boleta-container h1 {
        color: var(--ufo-blue);
        text-shadow: 0 0 10px var(--ufo-blue);
        text-align: center;
        margin-bottom: 30px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 1.8rem;
      }

      .boleta-container table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
        background-color: rgba(30, 15, 60, 0.7);
      }

      .boleta-container th {
        background-color: rgba(0, 225, 255, 0.2);
        color: var(--ufo-blue);
        padding: 15px;
        text-align: left;
        border-bottom: 2px solid var(--alien-green);
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .boleta-container td {
        padding: 12px 15px;
        border-bottom: 1px solid rgba(0, 255, 157, 0.3);
        vertical-align: middle;
      }

      .boleta-container tbody tr:nth-child(odd) {
        background-color: rgba(0, 255, 157, 0.05);
      }

      .boleta-container tbody tr:hover {
        background-color: rgba(157, 0, 255, 0.1);
        box-shadow: 0 0 15px rgba(157, 0, 255, 0.2);
      }

      .boleta-container tfoot td {
        font-weight: bold;
        background-color: rgba(0, 225, 255, 0.1);
        border-top: 2px solid var(--alien-green);
      }

      .boleta-container tfoot td:last-child {
        color: var(--energy-pink);
        font-size: 1.1em;
      }

      .btn-descarga {
        display: block;
        width: 250px;
        margin: 30px auto;
        padding: 12px;
        background-color: var(--alien-purple);
        color: #000;
        border: none;
        border-radius: 8px;
        font-family: 'Orbitron', sans-serif;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(157, 0, 255, 0.4);
        transition: all 0.3s;
      }

      .btn-descarga:hover {
        background-color: var(--ufo-blue);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 225, 255, 0.5);
        color: #000;
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
        background-color: rgba(0, 255, 157, 0.2);
        border: 1px solid var(--alien-green);
        border-radius: 8px;
        color: var(--alien-green);
        font-weight: bold;
        display: none;
        animation: pulse 2s infinite;
      }

      @keyframes pulse {
        0% { box-shadow: 0 0 5px rgba(0, 255, 157, 0.5); }
        50% { box-shadow: 0 0 20px rgba(0, 255, 157, 0.8); }
        100% { box-shadow: 0 0 5px rgba(0, 255, 157, 0.5); }
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
      }
    </style>
</head>
<body>

    <section class="boleta-section">
        <div class="boleta-container">
            <h1>BOLETA DE PAGO INTERGALÁCTICA</h1>
            
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
                  <td>Traje Espacial Dragon Ball Z</td>
                  <td>3</td>
                  <td>S/ 50.00</td>
                  <td>S/ 150.00</td>
                </tr>
                <tr>
                  <td>Pantalón de Combate Intergaláctico</td>
                  <td>4</td>
                  <td>S/ 100.00</td>
                  <td>S/ 400.00</td>
                </tr>
                <tr>
                  <td>Chaleco de Energía con Diseño Alien</td>
                  <td>3</td>
                  <td>S/ 50.00</td>
                  <td>S/ 150.00</td>
                </tr>
                <tr>
                  <td>Polera de Defensa Cuántica</td>
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
        console.log("Descargando boleta intergaláctica...");
        
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