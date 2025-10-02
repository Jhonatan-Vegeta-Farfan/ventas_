<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Pago - STILOS Huanta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
      
      body {
          background-color: #f9f5f0;
          color: #5a3921;
          font-family: 'Raleway', sans-serif;
      }

      .boleta-container {
          background-color: #fffdfa;
          border-radius: 10px;
          border: 1px solid #cd853f;
          box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
          padding: 25px;
          margin: 30px auto;
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
          background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
      }

      .boleta-title {
          color: #8b4513;
          text-align: center;
          margin-bottom: 25px;
          font-weight: bold;
          text-transform: uppercase;
          letter-spacing: 1px;
          border-bottom: 1px solid #cd853f;
          padding-bottom: 10px;
          font-family: 'Playfair Display', serif;
      }

      .store-logo {
          text-align: center;
          margin-bottom: 15px;
      }

      .store-logo h1 {
          font-family: 'Playfair Display', serif;
          font-weight: 700;
          color: #8b4513;
          margin: 0;
      }

      .store-location {
          text-align: center;
          color: #cd853f;
          font-style: italic;
          margin-bottom: 20px;
      }

      .boleta-table {
          width: 100%;
          border-collapse: collapse;
          margin-bottom: 25px;
          background-color: #fefcf9;
      }

      .boleta-table th {
          background-color: #f5efe6;
          color: #5a3921;
          padding: 12px;
          text-align: left;
          border-bottom: 2px solid #cd853f;
          font-family: 'Playfair Display', serif;
      }

      .boleta-table td {
          padding: 10px 12px;
          border-bottom: 1px solid #e8d9c9;
      }

      .boleta-table tbody tr:nth-child(odd) {
          background-color: #faf7f2;
      }

      .boleta-table tbody tr:hover {
          background-color: #f5f0e8;
      }

      .boleta-table tfoot td {
          font-weight: bold;
          background-color: #f5efe6;
          border-top: 2px solid #cd853f;
      }

      .boleta-table tfoot td:last-child {
          color: #8b4513;
      }

      .text-danger {
          color: #a52a2a !important;
      }

      .text-success {
          color: #228b22 !important;
      }

      .btn-descarga {
          display: block;
          width: 250px;
          margin: 25px auto;
          padding: 10px;
          background-color: #8b4513;
          color: #f9f5f0;
          border: none;
          border-radius: 5px;
          font-weight: bold;
          text-transform: uppercase;
          text-align: center;
          text-decoration: none;
          transition: all 0.3s;
          font-family: 'Raleway', sans-serif;
      }

      .btn-descarga:hover {
          background-color: #a0522d;
          transform: translateY(-2px);
          color: #fff;
          box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
      }

      .boleta-message {
          text-align: center;
          margin: 20px auto;
          padding: 12px;
          max-width: 400px;
          background-color: rgba(139, 69, 19, 0.1);
          border: 1px solid #8b4513;
          border-radius: 5px;
          color: #5a3921;
          display: none;
      }

      .btn-outline-stilos {
          color: #8b4513;
          border-color: #8b4513;
          font-family: 'Raleway', sans-serif;
      }

      .btn-outline-stilos:hover {
          background-color: #8b4513;
          color: #f9f5f0;
      }

      .embroidery-border {
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          pointer-events: none;
          z-index: 1;
      }

      .embroidery-border::before, .embroidery-border::after {
          content: "";
          position: absolute;
          width: 20px;
          height: 20px;
          border: 2px solid #cd853f;
          border-radius: 50%;
      }

      .embroidery-border::before {
          top: 10px;
          left: 10px;
      }

      .embroidery-border::after {
          bottom: 10px;
          right: 10px;
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
            <div class="embroidery-border"></div>
            
            <div class="store-logo">
                <h1><i class="fas fa-tshirt"></i> STILOS <i class="fas fa-tshirt"></i></h1>
            </div>
            
            <div class="store-location">
                Huanta, Ayacucho
            </div>
            
            <h2 class="boleta-title">BOLETA DE PAGO</h2>
            
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
                  <td>Camisa bordada tradicional</td>
                  <td>2</td>
                  <td>S/ 120.00</td>
                  <td>S/ 240.00</td>
                </tr>
                <tr>
                  <td>Pantalón de lino artesanal</td>
                  <td>1</td>
                  <td>S/ 85.00</td>
                  <td>S/ 85.00</td>
                </tr>
                <tr>
                  <td>Chaleco con bordados ayacuchanos</td>
                  <td>1</td>
                  <td>S/ 65.00</td>
                  <td>S/ 65.00</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">Subtotal:</td>
                  <td>S/ 390.00</td>
                </tr>
                <tr>
                  <td colspan="3">Descuento por cliente frecuente:</td>
                  <td class="text-danger">- S/ 50.00</td>
                </tr>
                <tr>
                  <td colspan="3">Total a pagar:</td>
                  <td class="text-success">S/ 340.00</td>
                </tr>
              </tfoot>
            </table>
            
            <a href="<?php echo BASE_URL ?>descargar-boleta" class="btn-descarga">
              <i class="fas fa-download me-2"></i>DESCARGAR BOLETA
            </a>
            
            <div class="boleta-message" id="message">
              <i class="fas fa-check-circle me-2"></i>¡Boleta generada correctamente!
            </div>

            <div class="text-center mt-3">
                <a href="<?php echo BASE_URL ?>productos" class="btn btn-outline-stilos">VOLVER A LA TIENDA</a>
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