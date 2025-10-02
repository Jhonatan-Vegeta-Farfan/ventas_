<button onclick="printReceipt()" class="btn btn-success">
  <i class="fas fa-download"></i> Descargar Boleta
</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="text-center">
      <img src="https://cdn-icons-png.flaticon.com/512/2135/2135718.png" alt="STILOS Logo" class="img-fluid mb-3" style="max-height: 80px; filter: hue-rotate(320deg) saturate(2);">
      <h2 class="text-accent">¡La boleta se ha descargado correctamente!</h2>
      <p class="location">STILOS - Huanta, Ayacucho</p>
      <button onclick="backToHome()" class="btn btn-primary mt-3">
        <i class="fas fa-home"></i> Volver al Inicio
      </button>
    </div>
  </div>
</div>

<style>
.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(139, 69, 19, 0.8);
}

.modal-content {
  background-color: #f9f5f0;
  margin: 15% auto;
  padding: 30px;
  border: 2px solid #cd853f;
  border-radius: 10px;
  width: 80%;
  max-width: 500px;
  box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
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

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-family: 'Raleway', sans-serif;
  font-weight: 500;
  transition: all 0.3s;
}

.btn-success {
  background-color: #8b4513;
  color: white;
}

.btn-success:hover {
  background-color: #a0522d;
  transform: translateY(-2px);
  box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
}

.btn-primary {
  background-color: #cd853f;
  color: white;
}

.btn-primary:hover {
  background-color: #d2691e;
  transform: translateY(-2px);
  box-shadow: 0 5px 10px rgba(205, 133, 63, 0.3);
}

.text-accent {
  color: #8b4513;
  font-family: 'Playfair Display', serif;
}

.location {
  color: #cd853f;
  font-style: italic;
  margin-bottom: 20px;
}
</style>

<script>
function printReceipt() {
  // Aquí irían las instrucciones para imprimir la boleta
  console.log("Descargando la boleta...");

  // Mostrar el modal después de la impresión
  document.getElementById("myModal").style.display = "block";
}

function backToHome() {
  // Redirigir al usuario a la página de inicio
  window.location.href = "<?php echo BASE_URL ?>producto";
}

// Cerrar modal si se hace clic fuera de él
window.onclick = function(event) {
  const modal = document.getElementById('myModal');
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>