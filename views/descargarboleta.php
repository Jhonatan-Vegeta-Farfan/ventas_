<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5eaea;
}
    
    
    h1 {
      text-align: center;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    button {
      display: block;
      width: 10%;
      padding: 10px;
      background-color: #ff0000;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    #message {
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
      display: none;
    }
    a:-webkit-any-link {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
      background-color: hsl(0, 0%, 0%);
      color: white;
      border: none;
      cursor: pointer;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation: blink 2s infinite;
      text-decoration: none;
      animation: blink 2s infinite;
    }


  </style>
  
<h1>Boleta de Pago</h1>
  
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
        <td>Polo dragon ball Z Lewis</td>
        <td>3</td>
        <td>S/ 50.00</td>
        <td>S/ 150.00</td>
      </tr>
      <tr>
        <td>Pantalon diseñado pensando en ti</td>
        <td>4</td>
        <td>S/ 100.00</td>
        <td>S/ 400.00</td>
      </tr>
      <tr>
        <td>Shot pensado en ti con el diseño que te gusta de tus personaje favorito</td>
        <td>3</td>
        <td>S/ 50.00</td>
        <td>S/ 150.00</td>
      </tr>
      <tr>
        <td>Polera diseñado con los dibujos de tu personaje favorito</td>
        <td>4</td>
        <td>S/ 100.00</td>
        <td>S/ 400.00</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">Total:</td>
        <td>S/ 1,100</td>
      </tr>
    </tfoot>
  </table>
  
  
  <a href="<?php echo BASE_URL ?>respuestadedecarga" class="btn btn-warning return-btn">descargar</a>
  
  <div id="message">La boleta se ha descargado correctamente.</div>
  
  <script>
    function printReceipt() {
      // Aquí puedes agregar la lógica para imprimir la boleta
      console.log("descarga boleta...");
      
      // Mostrar el mensaje de confirmación
      document.getElementById("message").style.display = "block";
    }
  </script>