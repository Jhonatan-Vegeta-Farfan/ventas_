<div class="container my-4">
    <button class="btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s, transform 0.3s;" 
        onclick="window.history.back();" 
        onmouseover="this.style.backgroundColor='darkred'; this.style.transform='scale(1.05)';" 
        onmouseout="this.style.backgroundColor='red'; this.style.transform='scale(1)';">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<div class="container mt-5">
<h1 class="text-center mb-4 ">Editar categorias</h1>

<form action="" class="from-control" id="formActualizarCat">
<input type="hidden" name="id_categoria" id="id_categoria" value="">
<div class="mb-3">
        <label for="">Nombre: </label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Detalle: </label>
        <input type="text" id="detalle" name="detalle" class="form-control" required>
    </div>
    <button type="button" class="btn btn-success" onclick="actualizarCategoria();">Actualizar</button>
</form>
</div>



<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
<script>
    //http://localhost/ventas_/editar-categoria/1
    //captura lo que viene en el link     se captura la posicion de ese valor
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_p);
</script>