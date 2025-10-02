<style>
    .table {
        color: #5a3921;
        font-weight: bold;
        font-family: 'Raleway', sans-serif;
    }

    .table thead {
        background-color: #8b4513;
        color: #f9f5f0;
    }

    .table tbody {
        background-color: #f9f5f0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f0e6d8;
    }

    .table-hover tbody tr:hover {
        background-color: #e8d9c8;
        transform: translateY(-2px);
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(139, 69, 19, 0.2);
    }

    .table-bordered {
        border: 2px solid #cd853f !important;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #cd853f !important;
    }

    .shadow-lg {
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2) !important;
    }

    .rounded {
        border-radius: 8px !important;
        overflow: hidden;
    }
</style>

<div class="container my-4">
    <button class="btn" style="background-color: #8b4513; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(139, 69, 19, 0.3); transition: background-color 0.3s, transform 0.3s;"
        onclick="window.history.back();"
        onmouseover="this.style.backgroundColor='#a0522d'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.backgroundColor='#8b4513'; this.style.transform='scale(1)';">
        <i class="fas fa-arrow-left me-2"></i> Volver Atrás
    </button>
</div>

<div class="col-12 container mt-4">
    <div class="d-flex align-items-center mb-3">
        <i class="fas fa-tshirt me-2" style="color: #8b4513; font-size: 24px;"></i>
        <h3 class="mb-0" style="color: #5a3921; font-family: 'Playfair Display', serif;">Inventario de Productos - STILOS</h3>
    </div>
    
    <table class="table table-bordered table-striped table-hover table-sm shadow-lg rounded">
        <thead class="text-center">
            <tr>
                <th>Nro</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_producto" class="text-center">
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> -->
        </tbody>
    </table>
</div>

<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>