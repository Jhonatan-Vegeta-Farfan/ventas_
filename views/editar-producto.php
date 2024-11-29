<div class="container mt-5">
<h1 class="text-center mb-4">Editar Productos</h1>
<form action="" class="from-control" id="frmRegistrar">
    <div class="mb-3">
        <label for="">Codigo: </label>
        <input type="text" id="codigo" name="codigo" class="form-control" required>
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

<script>listar_categorias();</script>
<script>listarProveedor();</script>
<script>
    //http://localhost/venta_mary/editar-producto/1
    //captura lo que viene en el link     se captura la posicion de ese valor
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_producto(id_p);
</script>