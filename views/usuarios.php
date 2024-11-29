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
                <th>DNI</th>
                <th>Razon social</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Codigo postal</th>
                <th>Direccion</th>
                <th>Rol</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_persona" class="text-center">
            <!--<tr>
               <th>Nro</th>
                <th>49500819</th>
                <th>jhonatan</th>
                <th>987456321</th>
                <th>vegeta@gmail.com</th>
                <th>huanta</th>
                <th>333</th>
                <th>Jr. central</th>
                <th>Proovedor</th>
            </tr> -->
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>