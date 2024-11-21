async function listar_productos() {
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
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
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                <td>${item.proveedor.razon_social}</td>
                <td></td>
        `;
        document.querySelector('#tbl_producto').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }
}
if (document.querySelector('#tbl_producto')) {
    listar_productos();
}

async function registrarProducto(){
    let codigo = document.getElementById('codigo').values;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#idCategoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#idProveedor').value;
    if (codigo=="" || nombre=="" || detalle=="" || precio=="" || stock=="" || categoria=="" || imagen=="" || proveedor=="") {
        alert("Error, campos vacios");
        return; 
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cahe: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status){
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error"+e);
    }

}

async function listar_categorias(){
    try{
        let respuesta =await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            datos.forEach(element => {
                $('#idCategoria').append($('<option />',{
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));
            });
            document.getElementById('Categoria').innerHTML = contenido_select;
            
        }

    } catch (e){
        console.log("Error al cargar categoria"+e);
    }
    }
   

    async function listar_personas() {
        try {
            let respuesta = await fetch(base_url+'controller/Proveedor.php?tipo=listar');
            json = await respuesta.json();
            if (json.status) {
                let datos = json.contenido;
                let contenido_select = '<option value="">Seleccionar</option>';
                datos.forEach(element => {
                    contenido_select += '<option value="'+ element.id +'">'+element.razon_social+'</option>';
                 /* $('#idCategoria').append($('<option/>',{
                      text: ${element.Nombre},
                      value: ${element.Id},
                    }));    */
                });
                document.getElementById('idProveedor').innerHTML = contenido_select;
            }
    
            console.log(respuesta);
        } catch (e) {
            console.log("Error al cargar personas" + e);
        }
    }