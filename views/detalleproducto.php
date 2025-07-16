<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Pago - Alien Outpost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
      body {
          background-color: #0a0a1a;
          color: #e0e0e0;
      }

      .boleta-container {
          background-color: #12122a;
          border-radius: 10px;
          border: 1px solid #00ff9d;
          box-shadow: 0 0 15px rgba(0, 255, 157, 0.3);
          padding: 25px;
          margin: 30px auto;
          max-width: 900px;
      }

      .boleta-title {
          color: #00ff9d;
          text-align: center;
          margin-bottom: 25px;
          font-weight: bold;
          text-transform: uppercase;
          letter-spacing: 1px;
          border-bottom: 1px solid #00ff9d;
          padding-bottom: 10px;
      }

      .boleta-table {
          width: 100%;
          border-collapse: collapse;
          margin-bottom: 25px;
          background-color: #1a1a3a;
      }

      .boleta-table th {
          background-color: #23234a;
          color: white;
          padding: 12px;
          text-align: left;
          border-bottom: 2px solid #00ff9d;
      }

      .boleta-table td {
          padding: 10px 12px;
          border-bottom: 1px solid #2a2a5a;
      }

      .boleta-table tbody tr:nth-child(odd) {
          background-color: #151530;
      }

      .boleta-table tbody tr:hover {
          background-color: #252545;
      }

      .boleta-table tfoot td {
          font-weight: bold;
          background-color: #23234a;
          border-top: 2px solid #00ff9d;
      }

      .boleta-table tfoot td:last-child {
          color: #00ff9d;
      }

      .btn-descarga {
          display: block;
          width: 250px;
          margin: 25px auto;
          padding: 10px;
          background-color: #00ff9d;
          color: #0a0a1a;
          border: none;
          border-radius: 5px;
          font-weight: bold;
          text-transform: uppercase;
          text-align: center;
          text-decoration: none;
          transition: all 0.3s;
      }

      .btn-descarga:hover {
          background-color: #00cc7d;
          transform: translateY(-2px);
          color: #0a0a1a;
      }

      .boleta-message {
          text-align: center;
          margin: 20px auto;
          padding: 12px;
          max-width: 400px;
          background-color: rgba(0, 255, 157, 0.1);
          border: 1px solid #00ff9d;
          border-radius: 5px;
          color: white;
          display: none;
      }

      .btn-outline-alien {
          color: #00ff9d;
          border-color: #00ff9d;
      }

      .btn-outline-alien:hover {
          background-color: #00ff9d;
          color: #0a0a1a;
      }

      @media (max-width: 768px) {
          .boleta-container {
              padding: 15px;
          }
          
          .boleta-table th, 
          .boleta-table td {
              padding: 8px 10px;
              font-size: 0.9em;
          }
          
          .btn-descarga {
              width: 90%;
          }
      }
    </style>
</head>
<body>


    <!-- Contenido principal -->
    <main class="container my-4">
        <div class="boleta-container">
            <h2 class="boleta-title">BOLETA INTERGALÁCTICA - ALIEN OUTPOST</h2>
            
            <table class="boleta-table">
              <thead>
                <tr>
                  <th>Artículo</th>
                  <th>Cantidad</th>
                  <th>Precio Unitario</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Traje de Camuflaje Bio-Luminiscente</td>
                  <td>2</td>
                  <td>S/ 120.00</td>
                  <td>S/ 240.00</td>
                </tr>
                <tr>
                  <td>Transporte por Teletransportador</td>
                  <td>1</td>
                  <td>S/ 15.00</td>
                  <td>S/ 15.00</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">Subtotal:</td>
                  <td>S/ 255.00</td>
                </tr>
                <tr>
                  <td colspan="3">Descuento por lealtad intergaláctica:</td>
                  <td class="text-danger">- S/ 80.00</td>
                </tr>
                <tr>
                  <td colspan="3">Total a pagar (en créditos cósmicos):</td>
                  <td class="text-success">S/ 175.00</td>
                </tr>
              </tfoot>
            </table>
            
            <a href="<?php echo BASE_URL ?>descargar-boleta" class="btn-descarga">
              <i class="fas fa-download me-2"></i>DESCARGAR BOLETA
            </a>
            
            <div class="boleta-message" id="message">
              <i class="fas fa-check-circle me-2"></i>¡Transmisión de boleta completada!
            </div>

            <div class="text-center mt-3">
                <a href="<?php echo BASE_URL ?>productos" class="btn btn-outline-alien">VOLVER AL OUTPOST</a>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.querySelector('.btn-descarga')?.addEventListener('click', function(e) {
          e.preventDefault();
          
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