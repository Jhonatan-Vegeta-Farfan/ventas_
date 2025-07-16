<!-- Margen superior aumentado para evitar el header -->
<div class="container" style="margin-top: 100px;">
    <button class="btn btn-alien-back" 
            onclick="window.history.back();">
        <i class="fas fa-arrow-left me-2"></i> Retroceder
    </button>
</div>

<!-- Contenido principal con espacio adicional -->
<div class="container mt-5" style="margin-top: 30px; padding-bottom: 50px;">
    <h1 class="text-center mb-4 title-alien">Editar Categorías Intergalácticas</h1>

    <div class="alien-form-container">
        <form action="" class="form-alien" id="formActualizarCat">
            <input type="hidden" name="id_categoria" id="id_categoria" value="">
            
            <div class="mb-4">
                <label for="nombre" class="alien-label">Nombre de la Categoría:</label>
                <input type="text" id="nombre" name="nombre" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="detalle" class="alien-label">Descripción Dimensional:</label>
                <input type="text" id="detalle" name="detalle" class="alien-input" required>
            </div>
            
            <button type="button" class="btn-alien" onclick="actualizarCategoria();">
                <i class="fas fa-sync-alt me-2"></i> Actualizar Datos
            </button>
        </form>
    </div>
</div>

<!-- Espacio para el footer -->
<div style="height: 80px;"></div>

<style>
    /* Estilos optimizados para evitar solapamiento */
    .btn-alien-back {
        background-color: #00ff9d;
        color: #0a0a1a;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0, 255, 157, 0.3);
        margin-bottom: 20px;
    }
    
    .alien-form-container {
        background-color: #12122a;
        border-radius: 12px;
        padding: 2.5rem;
        border: 1px solid #00ff9d;
        box-shadow: 0 0 25px rgba(0, 255, 157, 0.25);
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }
    
    /* Resto de estilos permanecen iguales */
    .title-alien {
        color: #00ff9d;
        text-shadow: 0 0 10px rgba(0, 255, 157, 0.5);
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 2.5rem !important;
    }
    
    .alien-label {
        color: #00ff9d;
        font-weight: bold;
        margin-bottom: 0.8rem;
        display: block;
        font-size: 1.1rem;
    }
    
    .alien-input {
        background-color: #1a1a3a;
        border: 1px solid #2a2a5a;
        color: white;
        padding: 12px 18px;
        border-radius: 6px;
        width: 100%;
        transition: all 0.3s;
        margin-bottom: 1.5rem;
    }
    
    .btn-alien {
        background-color: #00ff9d;
        color: #0a0a1a;
        border: none;
        padding: 12px 30px;
        border-radius: 6px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0, 255, 157, 0.3);
        font-size: 1.1rem;
        margin-top: 10px;
    }
</style>

<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
<script>
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_p);
</script>