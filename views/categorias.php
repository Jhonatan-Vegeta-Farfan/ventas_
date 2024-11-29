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
                <th>Nombre</th>
                <th>Detalle</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_categoria" class="text-center">
            <!--<tr>
               <th>Nro</th>
                <th></th>
                <th></th>
            </tr> -->
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>