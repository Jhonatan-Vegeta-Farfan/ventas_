async function iniciar_sesion() {
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#password');
    if (usuario=="" || password ==""){
        alert('campos vacios');
        return;
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(loginForm);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Login.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cahe: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status){
            //swal("Iniciar Sesion", json.mensaje, "success");
            location.replace(base_url+"producto");
        }else{
            swal("Iniciar Sesion", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops ocurrio un error"+e);
    }
}

if (document.querySelector('#loginForm')){
    //evita que se envie el forulario
    let frm_iniciar_sesion = document.querySelector('#loginForm');
    frm_iniciar_sesion.onsubmit = function (e){
        e.preventDefault();
        iniciar_sesion();
    }
}

async function cerrar_sesion() {
    try {
        let respuesta = await fetch(base_url + 'controller/login.php? tipo=cerrar_sesion',{
            method: 'POST',
            mode: 'cors',
            cahe: 'no-cache'
        });
        json = await respuesta.json();
        if (json.status){
            location.replace(base_url+'login');
        }
    } catch (error) {
        console.log('Ocurrio un error '+error);
    }
    
}