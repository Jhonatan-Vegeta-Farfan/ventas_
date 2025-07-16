<!-- Espacio para el header (100px) -->
<div style="height: 100px;"></div>

<div class="container">
    <button class="btn btn-alien-back" 
            onclick="window.history.back();">
        <i class="fas fa-arrow-left me-2"></i> Retroceder
    </button>
</div>

<div class="container mt-4" style="margin-bottom: 80px;">
    <h1 class="text-center mb-4 title-alien">Editar Compras Intergalácticas</h1>

    <div class="alien-form-container">
        <form action="" class="form-alien" id="formACtualizarCompras">
            <input type="hidden" name="id_compra" id="id_compra">
            
            <div class="mb-4">
                <label for="id_producto" class="alien-label">Producto:</label>
                <select name="id_producto" id="id_producto" class="alien-input" required>
                    <option value="">Seleccione un producto</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="cantidad" class="alien-label">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="precio" class="alien-label">Precio (Créditos Intergalácticos):</label>
                <input type="number" name="precio" id="precio" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="trabajador" class="alien-label">Tripulante:</label>
                <select name="trabajador" id="trabajador" class="alien-input" required>
                    <option value="">Seleccione un tripulante</option>
                </select>
            </div>
            
            <button type="button" class="btn-alien" onclick="actualizarCompra();">
                <i class="fas fa-sync-alt me-2"></i> Actualizar Datos
            </button>
        </form>
    </div>
</div>

<!-- Espacio para el footer (80px) -->
<div style="height: 80px;"></div>

<style>
    /* Estilos alienígenas consistentes */
    .btn-alien-back {
        background-color: #00ff9d;
        color: #0a0a1a;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0, 255, 157, 0.3);
        margin: 20px 0;
    }
    
    .btn-alien-back:hover {
        background-color: #00cc7d;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 255, 157, 0.4);
    }
    
    .title-alien {
        color: #00ff9d;
        text-shadow: 0 0 10px rgba(0, 255, 157, 0.5);
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 2rem !important;
    }
    
    .alien-form-container {
        background-color: #12122a;
        border-radius: 12px;
        padding: 2.5rem;
        border: 1px solid #00ff9d;
        box-shadow: 0 0 25px rgba(0, 255, 157, 0.25);
        max-width: 800px;
        margin: 0 auto;
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
    
    .alien-input:focus {
        border-color: #00ff9d;
        box-shadow: 0 0 0 0.25rem rgba(0, 255, 157, 0.25);
        outline: none;
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
        width: 100%;
    }
    
    .btn-alien:hover {
        background-color: #00cc7d;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 255, 157, 0.4);
    }
    
    select.alien-input {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2300ff9d'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 20px;
    }
</style>

<script src="<?php echo BASE_URL; ?>views/js/functions_compras.js"></script>
<script>
    listar_productos();
    listar_trabajadores();
    
    // Captura el ID de la URL
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_compra(id_p);
</script>