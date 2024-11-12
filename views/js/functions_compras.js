async function registrar_compra() {
<<<<<<< HEAD
    let id_producto = document.getElementById('producto').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let id_trabajador = document.getElementById('trabajador').value;
=======
    const id_producto = document.getElementById('producto').value;
    const cantidad = document.getElementById('cantidad').value;
    const precio = document.getElementById('precio').value;
    const id_trabajador = document.getElementById('trabajador').value;
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03

    if (id_producto === "" || cantidad === "" || precio === "" || id_trabajador === "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }

    try {
<<<<<<< HEAD
        const datos = new FormData();
        datos.append('id_producto', id_producto);
        datos.append('cantidad', cantidad);
        datos.append('precio', precio);
        datos.append('id_trabajador', id_trabajador);

        let respuesta = await fetch(base_url + '/controllers/Compras.php?tipo=registrar', {
=======
        const datos = new FormData(document.getElementById('formCompra'));

        let respuesta = await fetch(base_url + '/controllers/Controller_compras.php?tipo=registrar', {
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
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
<<<<<<< HEAD
        let respuesta = await fetch(base_url + '/controllers/Compras.php?tipo=listarProductos');
=======
        let respuesta = await fetch(base_url + '/controllers/Controller_productos.php?tipo=listar');
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#producto').append($('<option />', {
<<<<<<< HEAD
                    text: element.nombre, 
=======
                    text: element.nombre, // Corrige la interpolación de cadenas
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
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
<<<<<<< HEAD
        let respuesta = await fetch(base_url + '/controllers/Compras.php?tipo=listarTrabajadores');
        let json = await respuesta.json();
        
=======
        let respuesta = await fetch(base_url + '/controllers/Controller_persona.php?tipo=listarTrabajadores');
        let json = await respuesta.json();

>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#trabajador').append($('<option />', {
<<<<<<< HEAD
                    text: element.razon_social, 
=======
                    text: element.razon_social, // Corrige la interpolación de cadenas
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
                    value: element.id
                }));
            });
        }
    } catch (error) {
        console.error("Oops, ocurrió un error al listar trabajadores: " + error);
    }
}