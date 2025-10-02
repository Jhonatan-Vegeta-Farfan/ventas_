<!-- Margen superior aumentado para evitar el header -->
<div class="container" style="margin-top: 100px;">
    <button class="btn btn-stilos-back" 
            onclick="window.history.back();">
        <i class="fas fa-arrow-left me-2"></i> Retroceder
    </button>
</div>

<!-- Contenido principal con espacio adicional -->
<div class="container mt-5" style="margin-top: 30px; padding-bottom: 50px;">
    <h1 class="text-center mb-4 title-stilos">Editar Categorías de Productos</h1>

    <div class="stilos-form-container">
        <form action="" class="form-stilos" id="formActualizarCat">
            <input type="hidden" name="id_categoria" id="id_categoria" value="">
            
            <div class="mb-4">
                <label for="nombre" class="stilos-label">
                    <i class="fas fa-tag me-2"></i>Nombre de la Categoría:
                </label>
                <input type="text" id="nombre" name="nombre" class="stilos-input" placeholder="Ej: Ropa Masculina, Accesorios, etc." required>
            </div>
            
            <div class="mb-4">
                <label for="detalle" class="stilos-label">
                    <i class="fas fa-align-left me-2"></i>Descripción de la Categoría:
                </label>
                <input type="text" id="detalle" name="detalle" class="stilos-input" placeholder="Ej: Prendas de vestir para caballeros" required>
            </div>
            
            <button type="button" class="btn-stilos" onclick="actualizarCategoria();">
                <i class="fas fa-sync-alt me-2"></i> Actualizar Categoría
            </button>
        </form>
    </div>
</div>

<!-- Espacio para el footer -->
<div style="height: 80px;"></div>

<style>
    /* Estilos optimizados para evitar solapamiento */
    .btn-stilos-back {
        background-color: #8b4513;
        color: #f9f5f0;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(139, 69, 19, 0.3);
        margin-bottom: 20px;
        font-family: 'Raleway', sans-serif;
    }
    
    .btn-stilos-back:hover {
        background-color: #a0522d;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(139, 69, 19, 0.4);
    }
    
    .stilos-form-container {
        background-color: #fffdfa;
        border-radius: 12px;
        padding: 2.5rem;
        border: 1px solid #cd853f;
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.15);
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
        position: relative;
        overflow: hidden;
    }
    
    .stilos-form-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
    }
    
    /* Resto de estilos adaptados */
    .title-stilos {
        color: #8b4513;
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 2.5rem !important;
        font-family: 'Playfair Display', serif;
        text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
    }
    
    .stilos-label {
        color: #5a3921;
        font-weight: 600;
        margin-bottom: 0.8rem;
        display: block;
        font-size: 1.1rem;
        font-family: 'Raleway', sans-serif;
    }
    
    .stilos-input {
        background-color: #fffdfa;
        border: 1px solid #cd853f;
        color: #5a3921;
        padding: 12px 18px;
        border-radius: 6px;
        width: 100%;
        transition: all 0.3s;
        margin-bottom: 1.5rem;
        font-family: 'Raleway', sans-serif;
    }
    
    .stilos-input:focus {
        border-color: #8b4513;
        box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
        outline: none;
    }
    
    .stilos-input::placeholder {
        color: #a9a9a9;
        font-style: italic;
    }
    
    .btn-stilos {
        background-color: #8b4513;
        color: #f9f5f0;
        border: none;
        padding: 12px 30px;
        border-radius: 6px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(139, 69, 19, 0.3);
        font-size: 1.1rem;
        margin-top: 10px;
        font-family: 'Raleway', sans-serif;
        width: 100%;
    }
    
    .btn-stilos:hover {
        background-color: #a0522d;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(139, 69, 19, 0.4);
    }
</style>

<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
<script>
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_categoria(id_p);
</script>