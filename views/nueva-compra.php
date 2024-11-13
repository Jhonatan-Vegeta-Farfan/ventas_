<form id="formCompra" action="">
    <h2>Agregar Compra</h2>

    <div class="form-group">
        <label for="producto">Producto:</label>
        <select class="form-control" id="producto" name="id_producto" required>
            <option value="">Selecciona un producto</option>
            <!-- Aquí se llenarán las opciones de productos -->
        </select>
    </div>

    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
    </div>

    <div class="form-group">
        <label for="precio">Precio Unitario:</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
    </div>

    <div class="form-group">
        <label for="trabajador">Trabajador que registra la compra:</label>
        <select class="form-control" id="trabajador" name="id_trabajador" required>
            <option value="">Selecciona un trabajador</option>
            <!-- Aquí se llenarán las opciones de trabajadores -->
        </select>
    </div>

    <button type="button" class="btn btn-warning" onclick="registrar_compra()">Agregar Compra</button>
</form>

<script src="<?php echo BASE_URL ?>views/js/functions_compras.js"></script>

<script>
    async function listar_productos() {
        try {
            let respuesta = await fetch('<?php echo BASE_URL; ?>/controllers/Compras.php?tipo=listarProductos');
            let json = await respuesta.json();

            if (json.status) {
                let datos = json.contenido;
                datos.forEach(element => {
                    $('#producto').append($('<option />', {
                        text: element.nombre,
                        value: element.id
                    }));
                });
            } else {
                console.error("Error al listar productos: " + json.mensaje);
            }
        } catch (error) {
            console.error("Oops, ocurrió un error al listar productos: " + error);
        }
    }

    async function listar_trabajadores() {
        try {
            let respuesta = await fetch('<?php echo BASE_URL; ?>/controllers/Compras.php?tipo=listarTrabajadores');
            let json = await respuesta.json();

            if (json.status) {
                let datos = json.contenido;
                datos.forEach(element => {
                    $('#trabajador').append($('<option />', {
                        text: element.razon_social,
                        value: element.id
                    }));
                });
            } else {
                console.error("Error al listar trabajadores: " + json.mensaje);
            }
        } catch (error) {
            console.error("Oops, ocurrió un error al listar trabajadores: " + error);
        }
    }

    function registrar_compra() {
        const id_producto = document.getElementById('producto').value;
        const cantidad = document.getElementById('cantidad').value;
        const precio = document.getElementById('precio').value;
        const id_trabajador = document.getElementById('trabajador').value;

        // Validar que todos los campos estén llenos
        if (!id_producto || !cantidad || !precio || !id_trabajador) {
            alert("Por favor, completa todos los campos.");
            return;
        }

        // Crear objeto con los datos del formulario
        const data = {
            id_producto: id_producto,
            cantidad: cantidad,
            precio: precio,
            id_trabajador: id_trabajador
        };

        // Enviar los datos al servidor usando Fetch API
        fetch('<?php echo BASE_URL; ?>/controllers/Compras.php?tipo=listarTrabajadores', { // Cambia esto por la ruta correcta a tu script PHP
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                alert(data.mensaje);
                // Aquí puedes agregar lógica para limpiar el formulario o actualizar la UI
            } else {
                alert(data.mensaje);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Ocurrió un error al registrar la compra.");
        });
    }

    // Llamar a las funciones para listar productos y trabajadores al cargar la página
    listar_productos();
    listar_trabajadores();
</script>