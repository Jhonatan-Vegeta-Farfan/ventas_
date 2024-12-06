async function listar_compras() {
    try {
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id; // id anuevo asignado-------------id de la BD
                cont+=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th> 
                <td>${item.producto.nombre}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.trabajador.razon_social}</td>
                <td>${item.options}</td>
        `;
        document.querySelector('#tbl_compras').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron compras.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_compras')) {
    listar_compras();
}


async function registrar_compra(){
    let producto = document.querySelector('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let trabajador = document.querySelector('#trabajador').value;
    if (producto == "" || cantidad == "" ||precio == ""  || trabajador == "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        //capturamos datos del formulario html nuevo-producto
        const datos = new FormData(formRegistrarCompras);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url +'controller/Compra.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if(json.status){
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }
    
        console.log(json);
       } catch (e){
        console.log("Oops, ocurrio un error"+e);
       }
    }

async function listar_productos() {
    try {
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url +'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>'
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
               
            });
            document.getElementById('id_producto').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.e("Error al cargar producto" + e);
    }
}
// Listar proveedores
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=listar_trabajador');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +'">'+ element.razon_social + '</option>';
            
            });
            document.getElementById('trabajador').innerHTML = contenido_select;
        }

        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar trabajador " + e);
    }
}

async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id); 
    try {
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#trabajador').value = json.contenido.id_trabajador;
        }else{
            window.location = base_url+"compra";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error al editar compra"+error)
    }
}

async function actualizar_producto() {
    let id_compra = document.querySelector('#id_compra').value; // Asegúrate de tener un campo oculto o similar para el ID
    let producto = document.querySelector('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let trabajador = document.querySelector('#trabajador').value;

    if (producto == "" || cantidad == "" || precio == "" || trabajador == "") {
        alert("Error!!, Campos vacíos");
        return;
    }

    const formData = new FormData();
    formData.append('id_compra', id_compra);
    formData.append('id_producto', producto);
    formData.append('cantidad', cantidad);
    formData.append('precio', precio);
    formData.append('id_trabajador', trabajador);

    try {
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Actualización", json.mensaje, "success");
            listar_compras(); // Actualiza la lista después de actualizar
        } else {
            swal("Actualización", json.mensaje, "error");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error al actualizar compra " + error);
    }
}

async function eliminar_producto(id) {
    const formData = new FormData();
    formData.append('id_compra', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=eliminar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Eliminación", json.mensaje, "success");
            document.querySelector('#fila' + id).remove(); // Elimina la fila de la tabla
        } else {
            swal("Eliminación", json.mensaje, "error");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error al eliminar compra " + error);
    }
}