<style>
        .table {
            color: white;
            font-weight: bold;
        }
        .table tbody {
            background-color: #495057;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #6c757d;
        }
        .table-hover tbody tr:hover {
            background-color: #6c757d;
        }
    </style>

<div class="container my-4">
    <button class="btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s, transform 0.3s;" 
        onclick="window.history.back();" 
        onmouseover="this.style.backgroundColor='darkred'; this.style.transform='scale(1.05)';" 
        onmouseout="this.style.backgroundColor='red'; this.style.transform='scale(1)';">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>

<div class="col-12 container mt-4">
<table class="table table-bordered table-striped table-hover table-sm shadow-lg rounded">
        <thead class="table-dark text-center">
            <tr>
                <th>Nro</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>categoria</th>
                <th>Proveedor</th>
                <th >Acciones</th>
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