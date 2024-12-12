<div class="container my-4">
    <button class="btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s, transform 0.3s;"
        onclick="window.history.back();"
        onmouseover="this.style.backgroundColor='darkred'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.backgroundColor='red'; this.style.transform='scale(1)';">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Productos</h1>
    <form action="" class="from-control" id="frmActualizar">
        <input type="hidden" name="id_producto" id="id_producto">
        <input type="hidden" name="img" id="img">
        <div class="mb-3">
            <label for="">Codigo: </label>
            <input type="text" id="codigo" name="codigo" class="form-control" disabled>
        </div>
        <div class="mb-3">
            <label for="">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Detalle:</label>
            <input type="text" id="detalle" name="detalle" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Precio: </label>
            <input type="number" id="precio" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control" required>
                <option>Seleccione</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Imagen: </label>
            <input type="file" id="imagen" name="imagen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Proveedor: </label>
            <select id="proveedor" name="proveedor" class="form-control" required>
                <option>Seleccione</option>
            </select>
        </div>
        <button type="button" class="mb-3 btn btn-outline-info" onclick="actualizar_producto();"><i class="bi bi-check-circle"></i>Actualizar</button>
    </form>
</div>


<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>

<script>
    listar_categorias();
</script>
<script>
    listarProveedor();
</script>
<script>
    //http://localhost/ventas_/editar-persona/1
    const id_p = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1']; ?>;
    ver_producto(id_p);
</script>