<!-- Espacio para el header (100px) -->
<div style="height: 100px;"></div>

<div class="container">
    <button class="btn btn-stilos-back" onclick="window.history.back();">
        <i class="fas fa-arrow-left me-2"></i> Volver
    </button>
</div>

<div class="container mt-4" style="margin-bottom: 80px;">
    <h1 class="text-center mb-4 title-stilos">Editar Cliente STILOS</h1>

    <div class="stilos-form-container">
        <form action="" class="form-stilos" id="formActualizarPer">
            <input type="hidden" name="id_persona" id="id_persona">
            
            <div class="mb-4">
                <label for="nro_identidad" class="stilos-label">DNI:</label>
                <input type="text" id="nro_identidad" name="nro_identidad" class="stilos-input" disabled>
            </div>
            
            <div class="mb-4">
                <label for="razon_social" class="stilos-label">Nombre Completo:</label>
                <input type="text" id="razon_social" name="razon_social" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="telefono" class="stilos-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="correo" class="stilos-label">Correo Electrónico:</label>
                <input type="text" id="correo" name="correo" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="departamento" class="stilos-label">Departamento:</label>
                <input type="text" id="departamento" name="departamento" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="provincia" class="stilos-label">Provincia:</label>
                <input type="text" id="provincia" name="provincia" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="distrito" class="stilos-label">Distrito:</label>
                <input type="text" id="distrito" name="distrito" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="cod_postal" class="stilos-label">Código Postal:</label>
                <input type="number" id="cod_postal" name="cod_postal" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="direccion" class="stilos-label">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="stilos-input" required>
            </div>
            
            <div class="mb-4">
                <label for="rol" class="stilos-label">Tipo de Cliente:</label>
                <select id="rol" name="rol" class="stilos-input" required>
                    <option value="" disabled selected>Seleccione un tipo</option>
                    <option value="proveedor">Proveedor</option>
                    <option value="trabajador">Cliente Minorista</option>
                    <option value="trabajador">Cliente Mayorista</option>
                </select>
            </div>
            
            <button type="button" class="btn-stilos" onclick="actualizarPersona();">
                <i class="fas fa-sync-alt me-2"></i> Actualizar Información
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
        background-color: #f9f5f0;
        border-radius: 12px;
        padding: 2.5rem;
        border: 1px solid #cd853f;
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.15);
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
        background-color: #fff;
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
    }
    
    select.stilos-input {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%235a3921'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 20px;
        background-color: #fff;
    }
    
    /* Bordado decorativo */
    .stilos-form-container::after {
        content: "";
        position: absolute;
        bottom: 10px;
        right: 10px;
        width: 20px;
        height: 20px;
        border: 2px solid #cd853f;
        border-radius: 50%;
        opacity: 0.6;
    }
</style>

<script src="<?php echo BASE_URL ?>views/js/functions_persona.js"></script>
<script>
    //http://localhost/ventas_/editar-persona/1
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_persona(id_p);
</script>