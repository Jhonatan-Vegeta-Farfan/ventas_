async function registrarUsuario() {
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cos_postal = document.querySelector('#cos_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_reg = document.querySelector('#fecha_reg').value;

    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || 
        departamento == "" || provincia == "" || distrito == "" || cos_postal == "" || 
        direccion == "" || rol == "" || password == "" || estado == "" || fecha_reg == "") {
        alert("Error, campos vacíos");
        return; 
    }

    try {
        // Capturamos datos del formulario HTML
        const datos = new FormData(frmRegistrar);
        // Enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Usuario.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}

async function listarDepartamentos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Departamento.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#departamento').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));
            });
        }
    } catch (e) {
        console.log("Error al cargar departamentos: " + e);
    }
}

async function listarProvincias() {
    try {
        let respuesta = await fetch(base_url + 'controller/Provincia.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccionar</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('provincia').innerHTML = contenido_select;
        }
    } catch (e) {
        console.log("Error al cargar provincias: " + e);
    }
}

async function listarDistritos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Distrito.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccionar</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('distrito').innerHTML = contenido_select;
        }
    } catch (e) {
        console.log("Error al cargar distritos: " + e);
    }
}