<!-- Espacio para el header (100px) -->
<div style="height: 100px;"></div>

<div class="container">
    <button class="btn btn-stilos-back" 
            onclick="window.history.back();">
        <i class="fas fa-arrow-left me-2"></i> Volver
    </button>
</div>

<div class="container mt-4" style="margin-bottom: 80px;">
    <h1 class="text-center mb-4 title-stilos">
        <i class="fas fa-edit me-2"></i>Editar Compras STILOS
    </h1>

    <div class="stilos-form-container">
        <form action="" class="form-stilos" id="formACtualizarCompras">
            <input type="hidden" name="id_compra" id="id_compra">
            
            <div class="mb-4">
                <label for="id_producto" class="stilos-label">
                    <i class="fas fa-tshirt me-2"></i>Producto:
                </label>
                <select name="id_producto" id="id_producto" class="stilos-input" required>
                    <option value="">Seleccione un producto</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="cantidad" class="stilos-label">
                    <i class="fas fa-sort-amount-up me-2"></i>Cantidad:
                </label>
                <input type="number" name="cantidad" id="cantidad" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="precio" class="stilos-label">
                    <i class="fas fa-tag me-2"></i>Precio (Soles):
                </label>
                <input type="number" name="precio" id="precio" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="trabajador" class="stilos-label">
                    <i class="fas fa-user me-2"></i>Empleado:
                </label>
                <select name="trabajador" id="trabajador" class="stilos-input" required>
                    <option value="">Seleccione un empleado</option>
                </select>
            </div>
            
            <button type="button" class="btn-stilos" onclick="actualizarCompra();">
                <i class="fas fa-sync-alt me-2"></i> Actualizar Compra
            </button>
        </form>
    </div>
</div>

<!-- Espacio para el footer (80px) -->
<div style="height: 80px;"></div>

<style>
    /* Estilos STILOS consistentes */
    .btn-stilos-back {
        background-color: #8b4513;
        color: #f9f5f0;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(139, 69, 19, 0.3);
        margin: 20px 0;
        font-family: 'Raleway', sans-serif;
    }
    
    .btn-stilos-back:hover {
        background-color: #a0522d;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(139, 69, 19, 0.4);
        color: white;
    }
    
    .title-stilos {
        color: #8b4513;
        text-shadow: 0 2px 4px rgba(139, 69, 19, 0.2);
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 2rem !important;
        font-family: 'Playfair Display', serif;
    }
    
    .stilos-form-container {
        background-color: rgba(255, 253, 250, 0.95);
        border-radius: 12px;
        padding: 2.5rem;
        border: 1px solid #cd853f;
        box-shadow: 0 5px 20px rgba(139, 69, 19, 0.15);
        max-width: 800px;
        margin: 0 auto;
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
    
    .stilos-label {
        color: #5a3921;
        font-weight: 600;
        margin-bottom: 0.8rem;
        display: block;
        font-size: 1.1rem;
        font-family: 'Raleway', sans-serif;
    }
    
    .stilos-input {
        background-color: rgba(255, 253, 250, 0.9);
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
        box-shadow: 0 0 0 0.25rem rgba(139, 69, 19, 0.15);
        outline: none;
        background-color: white;
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
        width: 100%;
        font-family: 'Raleway', sans-serif;
    }
    
    .btn-stilos:hover {
        background-color: #a0522d;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.4);
        color: white;
    }
    
    select.stilos-input {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%238b4513'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 20px;
    }
    
    /* Bordados decorativos */
    .stilos-form-container::after {
        content: "✽";
        position: absolute;
        bottom: 15px;
        right: 15px;
        color: #cd853f;
        font-size: 1.2rem;
        opacity: 0.6;
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