async function registrar_producto() {
    let codigo = document.getElementById('#codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.getElementById('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.getElementById('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.getElementById('#proveedor').value;
    if (codigo=="" || nombre=="" || detalle=="" || precio=="" || stock=="" || categoria=="" || imagen=="" || proveedor=="" ) {
        alert("error, campos vacios");
        return;   
    }
        try {
            //capturamos datos del formulario html
            const datos = new FormData(frmRegistrar);
            //enviar datos hacia el controlador
            let respuesta = await fetch(base_url+'controller/Producto.php?tipo=resgistrar', {
                method:'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: datos
            });
            console.log(respuesta);
        } catch (e) {
            console.log("oops, ocurrio un error"+e);
        }
    }

