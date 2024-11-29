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
                <td>1</td>
                <td>222</td>
                <td>polo</td>
                <td>1</td>
                <td>tpolera</td>
                <td>vegeta</td>
                <td></td>
            </tr> -->
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>