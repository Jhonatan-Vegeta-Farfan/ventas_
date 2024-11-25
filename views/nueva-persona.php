<<<<<<< HEAD
<div class="container mt-5">
    <h2 class="mb-4">Registro De Personas</h2>
    <form id="frmRegistrar">
        <div class="mb-3">
            <label for="nro_identidad" class="form-label">Número de Identidad</label>
            <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" maxlength="20" required>
        </div>
        <div class="mb-3">
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="15" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="departamento" name="departamento" required>
        </div>
        <div class="mb-3">
            <label for="provincia" class="form-label">Provincia</label>
            <input type="text" class="form-control" id="provincia" name="provincia" required>
        </div>
        <div class="mb-3">
            <label for="distrito" class="form-label">Distrito</label>
            <input type="text" class="form-control" id="distrito" name="distrito" required>
        </div>
        <div class="mb-3">
            <label for="cod_postal" class="form-label">Código Postal</label>
            <input type="text" class="form-control" id="cod_postal" name="cod_postal" maxlength="10" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select id="rol" name="rol" class="form-control">
                <option value="1">administrador</option>
                <option value="0">usuario</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha_reg" class="form-label">Fecha de Registro</label>
            <input type="date" class="form-control" id="fecha_reg" name="fecha_reg" required>
        </div>
        
        <button type="button" class="btn btn-success col-6 mx-2" onclick="registrarPersona();">Enviar</button>
    </form>
</div>
=======
<h1 style="text-align: center;">Formulario de Registro de Persona</h1>
<div>
<form action="POST" id="frmRegistrar">
    <div>
        <label for="nro_identidad">Número de Identidad:</label>
        <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" required>
    </div>
    <div>
        <label for="razon_social">Razón Social:</label>
        <input type="text" id="razon_social" name="razon_social" class="form-control" required>
    </div>
    <div>
     <div>
            <label for="">Numero de Telefono</label>
            <input type="text" class="form-control" required id= "telefono" name="telefono">
     </div>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" class="form-control" required>
    </div>
    <div>
        <label for="departamento">Departamento:</label>
        <input type="text" id="departamento" name="departamento" class="form-control" required>
    </div>
    <div>
        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia" class="form-control" required>
    </div>
    <div>
        <label for="distrito">Distrito:</label>
        <input type="text" id="distrito" name="distrito" class="form-control" required>
    </div>
    <div>
        <label for="cod_postal">Código Postal:</label>
        <input type="number" id="cod_postal" name="cod_postal" class="form-control" required>
    </div>
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="form-control" required>
    </div>
    <div>
        <label for="">Rol: </label>
        <input type="text" class="form-control" required id="rol" name="rol">
    </div>
    <button type="button" class="btn btn-success" onclick="registrarPersona()">Registrar</button>
</form>
>>>>>>> a6d149b5d612e78169f1d6c983037a54bff4812c

<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>