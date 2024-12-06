async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                <td>
                    <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </td>
        `;
        document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron categorias.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_categoria')) {
    listar_categorias();
}


async function registrar_categoria(){
    let nombre = document.getElementById('nombre').values;
    let detalle = document.querySelector('#detalle').value;
    if (nombre=="" || detalle=="") {
        alert("Error, campos vacios");
        return; 
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar', { //await es una promesa que si o si espera una respuesta
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
        console.log("Oops, ocurrio un error categoria"+e);
       }
    }

    async function actualizar_categoria(id_categoria) {
        let nombre = document.getElementById('nombre').value; // Asegúrate de que el ID sea correcto
        let detalle = document.getElementById('detalle').value; // Asegúrate de que el ID sea correcto
    
        if (nombre == "" || detalle == "") {
            alert("Error, campos vacíos");
            return;
        }
    
        try {
            const datos = new FormData();
            datos.append('id_categoria', id_categoria);
            datos.append('nombre', nombre);
            datos.append('detalle', detalle);
    
            let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=actualizar', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: datos
            });
    
            let json = await respuesta.json();
            if (json.status) {
                swal("Actualización", json.mensaje, "success");
                listar_categorias(); // Actualiza la lista de categorías
            } else {
                swal("Actualización", json.mensaje, "error");
            }
    
            console.log(json);
        } catch (e) {
            console.log("Oops, ocurrió un error al actualizar la categoría: " + e);
        }
    }
    
    async function eliminar_categoria(id_categoria) {
        if (confirm("¿Estás seguro de que deseas eliminar esta categoría?")) {
            try {
                const datos = new FormData();
                datos.append('id_categoria', id_categoria);
    
                let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=eliminar', {
                    method: 'POST',
                    mode: 'cors',
                    cache: 'no-cache',
                    body: datos
                });
    
                let json = await respuesta.json();
                if (json.status) {
                    swal("Eliminación", json.mensaje, "success");
                    document.querySelector('#fila' + id_categoria).remove(); // Elimina la fila de la tabla
                } else {
                    swal("Eliminación", json.mensaje, "error");
                }
    
                console.log(json);
            } catch (e) {
                console.log("Oops, ocurrió un error al eliminar la categoría: " + e);
            }
        }
    }