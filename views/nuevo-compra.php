<div class="container my-4">
    <button class="btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s, transform 0.3s;"
        onclick="window.history.back();"
        onmouseover="this.style.backgroundColor='darkred'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.backgroundColor='red'; this.style.transform='scale(1)';">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<div class="container mt-5">
    <h1 class="text-center mb-4 ">Registrar compras</h1>

    <form action="" class="from-control" id="formRegistrarCompras">
        <div class="mb-3">
            <label for="id_producto">Producto: </label>
            <select type="text" name="id_producto" id="id_producto" class="form-control" required>
                <option class="id_proveedor">Seleccione</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="cantidad">Cantidad: </label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="trabajador">Trabajador: </label>
            <select type="text" name="trabajador" id="trabajador" class="form-control" required>
                <option class="trabajador">Seleccione</option>
            </select>
        </div>
        <br>
        <button type="button" class="mb-3 btn btn-outline-info" onclick="registrar_compra();"><i class="bi bi-check-circle"></i>Registrar</button>
    </form>
</div>



<script src="<?php echo BASE_URL; ?>views/js/functions_compras.js"></script>
<script>
    listar_productos();
</script>
<script>
    listar_trabajadores();
</script>