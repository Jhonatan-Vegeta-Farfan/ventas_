<style>
    .table {
        color: #5a3921;
        font-weight: bold;
        font-family: 'Raleway', sans-serif;
    }

    .table tbody {
        background-color: #f9f5f0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f0e6d9;
    }

    .table-hover tbody tr:hover {
        background-color: #e8d5c4;
    }

    .table-dark {
        background-color: #8b4513 !important;
        color: #f9f5f0;
    }
</style>
<div class="container my-4">
    <button class="btn" style="background-color: #8b4513; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(139, 69, 19, 0.3); transition: background-color 0.3s, transform 0.3s;"
        onclick="window.history.back();"
        onmouseover="this.style.backgroundColor='#a0522d'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.backgroundColor='#8b4513'; this.style.transform='scale(1)';">
        <i class="fas fa-arrow-left me-1"></i> Volver Atrás
    </button>
</div>

<div class="col-12 container mt-4">
    <div class="card shadow-lg rounded border-0 mb-4">
        <div class="card-header text-center" style="background-color: #8b4513; color: white; border-bottom: 3px solid #cd853f;">
            <h3 class="mb-0">
                <i class="fas fa-users me-2"></i> Lista de Personas - STILOS
            </h3>
            <p class="mb-0 mt-1" style="font-size: 0.9rem; opacity: 0.9;">
                <i class="fas fa-map-marker-alt me-1"></i> Huanta, Ayacucho
            </p>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped table-hover table-sm mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Nro</th>
                        <th>DNI</th>
                        <th>Razón social</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Departamento</th>
                        <th>Código postal</th>
                        <th>Dirección</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tbl_persona" class="text-center">
                    <!--<tr>
                       <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL ?>views/js/functions_persona.js"></script>