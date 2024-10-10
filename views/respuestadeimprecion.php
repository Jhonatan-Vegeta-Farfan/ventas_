<button onclick="printReceipt()">Imprimir Boleta</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <h2>La boleta se ha impreso correctamente!</h2>
    <button onclick="backToHome()">Volver al Inicio</button>
  </div>
</div>

<script>
  function printReceipt() {
    // Aquí irían las instrucciones para imprimir la boleta
    console.log("Imprimiendo boleta...");

    // Mostrar el modal después de la impresión
    document.getElementById("myModal").style.display = "block";
  }

  function backToHome() {
    // Redirigir al usuario a la página de inicio
    window.location.href = "<?php echo BASE_URL ?>producto";
  }
</script>