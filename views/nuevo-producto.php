<div class="container mt-5">
    <h1 class="text-center mb-4">Registrar Productos</h1>
    <form action="" class="from-control" id="frmRegistrar" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="codigo">Código: </label>
            <input type="text" id="codigo" name="codigo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="detalle">Detalle:</label>
            <input type="text" id="detalle" name="detalle" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="precio">Precio: </label>
            <input type="number" id="precio" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock">Stock: </label>
            <input type="number" id="stock" name="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="categoria">Categoría</label>
            <select name="categoria" id="categoria" class="form-control" required>
                <option value="">Seleccione</option>
                <!-- Las opciones se llenarán dinámicamente -->
            </select>
        </div>
        <div class="mb-3">
            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" name="imagen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="proveedor">Proveedor: </label>
            <select id="proveedor" name="proveedor" class="form-control" required>
                <option value="">Seleccione</option>
                <!-- Las opciones se llenarán dinámicamente -->
            </select>
        </div>
        <button type="button" class="mb-3 btn btn-outline-info" onclick="registrar_producto();"><i class="bi bi-check-circle"></i>Registrar</button>
    </form>
</div>

<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>

<script>
    // Llamadas para llenar las listas de categorías y proveedores
    listar_categorias();
    listarProveedor();
</script>