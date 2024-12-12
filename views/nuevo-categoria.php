

<div class="container mt-5">
<h1 class="text-center mb-4 ">Registrar categorias</h1>

<form action="" class="from-control" id="frmRegistrar">
<div class="mb-3">
        <label for="">Nombre: </label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Detalle: </label>
        <input type="text" id="detalle" name="detalle" class="form-control" required>
    </div>
    <button type="button" class="mb-3 btn btn-outline-info" onclick="registrar_categoria();"><i class="bi bi-check-circle"></i>Registrar</button>
</form>
</div>

<div class="container my-4">
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
