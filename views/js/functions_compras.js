async function registrar_compra() {
    let id_producto = document.getElementById('producto').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let id_trabajador = document.getElementById('trabajador').value;

    if (id_producto === "" || cantidad === "" || precio === "" || id_trabajador === "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }

    try {
        const datos = new FormData();
        datos.append('id_producto', id_producto);
        datos.append('cantidad', cantidad);
        datos.append('precio', precio);
        datos.append('id_trabajador', id_trabajador);

        let respuesta = await fetch(base_url + '/controllers/Compras.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json();

        if (json.status) {
            Swal.fire("Registro exitoso", json.mensaje, "success");
        } else {
            Swal.fire("Registro fallido", json.mensaje, "error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}

async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Compras.php?tipo=listarProductos');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#producto').append($('<option />', {
                    text: element.nombre, 
                    value: element.id
                }));
            });
        }
    } catch (error) {
        console.error("Oops, ocurrió un error al listar productos: " + error);
    }
}

async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Compras.php?tipo=listarTrabajadores');
        let json = await respuesta.json();
        
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#trabajador').append($('<option />', {
                    text: element.razon_social, 
                    value: element.id
                }));
            });
        }
    } catch (error) {
        console.error("Oops, ocurrió un error al listar trabajadores: " + error);
    }
}