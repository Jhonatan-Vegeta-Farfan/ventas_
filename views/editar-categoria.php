<div class="container mt-5">
<h1 class="text-center mb-4 ">Editar categorias</h1>

<form action="" class="from-control" id="frmRegistrar">
<div class="mb-3">
        <label for="">Nombre: </label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Detalle: </label>
        <input type="text" id="detalle" name="detalle" class="form-control" required>
    </div>
    <button type="button" class="mb-3 btn btn-outline-info" onclick="registrar_categoria();"><i class="bi bi-check-circle"></i>actualizar</button>
</form>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
<script>listar_categorias</script>
<script></script>
<script>
    //captura lo que viene en el link     se captura la posicion de ese valor
    const id_c=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_c);
</script>