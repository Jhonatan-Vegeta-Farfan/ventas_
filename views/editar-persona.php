<!-- Espacio para el header (100px) -->
<div style="height: 100px;"></div>

<div class="container">
    <button class="btn btn-alien-back" onclick="window.history.back();">
        <i class="fas fa-arrow-left me-2"></i> Retroceder
    </button>
</div>

<div class="container mt-4" style="margin-bottom: 80px;">
    <h1 class="text-center mb-4 title-alien">Editar Ciudadano Intergaláctico</h1>

    <div class="alien-form-container">
        <form action="" class="form-alien" id="formActualizarPer">
            <input type="hidden" name="id_persona" id="id_persona">
            
            <div class="mb-4">
                <label for="nro_identidad" class="alien-label">Código de Identificación:</label>
                <input type="text" id="nro_identidad" name="nro_identidad" class="alien-input" disabled>
            </div>
            
            <div class="mb-4">
                <label for="razon_social" class="alien-label">Nombre Intergaláctico:</label>
                <input type="text" id="razon_social" name="razon_social" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="telefono" class="alien-label">Comunicador:</label>
                <input type="text" id="telefono" name="telefono" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="correo" class="alien-label">Señal de Contacto:</label>
                <input type="text" id="correo" name="correo" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="departamento" class="alien-label">Sector Galáctico:</label>
                <input type="text" id="departamento" name="departamento" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="provincia" class="alien-label">Sistema Estelar:</label>
                <input type="text" id="provincia" name="provincia" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="distrito" class="alien-label">Planeta:</label>
                <input type="text" id="distrito" name="distrito" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="cod_postal" class="alien-label">Código Universal:</label>
                <input type="number" id="cod_postal" name="cod_postal" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="direccion" class="alien-label">Coordenadas Espaciales:</label>
                <input type="text" id="direccion" name="direccion" class="alien-input" required>
            </div>
            
            <div class="mb-4">
                <label for="rol" class="alien-label">Rango:</label>
                <select id="rol" name="rol" class="alien-input" required>
                    <option value="" disabled selected>Seleccione un rango</option>
                    <option value="proveedor">Proveedor de Recursos</option>
                    <option value="trabajador">Tripulante</option>
                    <option value="trabajador">Comandante</option>
                </select>
            </div>
            
            <button type="button" class="btn-alien" onclick="actualizarPersona();">
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

<script src="<?php echo BASE_URL ?>views/js/functions_persona.js"></script>
<script>
    //http://localhost/ventas_/editar-persona/1
    const id_p = <?php $pagina = explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_persona(id_p);
</script>