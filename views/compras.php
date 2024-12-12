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
<div class="col-12 container mt-4">
<table class="table table-bordered table-striped table-hover table-sm shadow-lg rounded">
        <thead class="table-dark text-center">
            <tr>
                <th>Nro</th>
                <th>Producto</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>Trabajador</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_compras" class="text-center">
            <!--<tr>
                <th>Nro</th>
                <th>1</th>
                <th>1</th>
                <th>50</th>
                <th>2</th>
                <th >Acciones</th>
            </tr> -->
        </tbody>
    </table>
</div>
<div class="container my-4">
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>