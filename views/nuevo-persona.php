<div class="container my-4">
    <button class="btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s, transform 0.3s;" 
        onclick="window.history.back();" 
        onmouseover="this.style.backgroundColor='darkred'; this.style.transform='scale(1.05)';" 
        onmouseout="this.style.backgroundColor='red'; this.style.transform='scale(1)';">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<div class="container mt-5"> 
<h1 class="text-center mb-4">Registrar Usuario</h1>
<form action="" class="from-control" id="frmRegistrar">
<div class="mb-3">
        <label for="">Numero de Identidad: </label>
        <input type="text" id="nro_identidad" name="nroIdentidad" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Razon social: </label>
        <input type="text" id="razon_social" name="razonSocial" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Telefono: </label>
        <input type="text" id="telefono" name="telefono" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Correo electronico: </label>
        <input type="text" id="correo" name="correo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Departamento: </label>
        <input type="text" id="departamento" name="departamento" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Provincia: </label>
        <input type="text" id="provincia" name="provincia" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Distrito: </label>
        <input type="text" id="distrito" name="distrito" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Codigo postal: </label>
        <input type="number" id="cod_postal" name="cod_postal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Direccion: </label>
        <input type="text" id="direccion" name="direccion" class="form-control" required>
    </div>
    <div class="mb-3">
    <label for="rol">Rol:</label>
    <select id="rol" name="rol" class="form-control" required>
        <option value="" disabled selected>Seleccione un rol</option>
        <option value="proveedor">Proveedor</option>
        <option value="trabajador">Trabajador</option>
        <option value="trabajador">Adimistrador</option>
    </select>
</div>
   
    <button type="button" class="mb-3 btn btn-outline-info" onclick="registrarPersona();"><i class="bi bi-check-circle"></i>Registrar</button>
</form>
</div>



<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>