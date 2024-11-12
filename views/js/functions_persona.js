async function registrarPersona() {
    let nro_identidad = document.querySelector('#nro_identidad').value;
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

    if (!nro_identidad || !razon_social || !telefono || !correo || !departamento || !provincia || !distrito || !cos_postal || !direccion || !rol || !password || !estado || !fecha_reg) {
        alert("Error, campos vacíos");
        return; 
    }

    try {
        const datos = new FormData(document.querySelector('#frmRegistrar'));
        let respuesta = await fetch('controller/persona.php?tipo=registrar', {
            method: 'POST',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}