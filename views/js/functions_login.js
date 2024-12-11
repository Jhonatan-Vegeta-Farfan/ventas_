document.getElementById('loginForm').addEventListener('click', function() {
    const password = document.getElementById('password');
    const icon = this.querySelector('i');
    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});

async function iniciar_sesion() {
    let usuario = document.getElementById('#usuario').value;
    let password = document.getElementById('#password').value;
    
    if (usuario == "" || password == "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }
    try {
        const datos = new FormData(document.getElementById('frm_iniciar_sesion'));
        let respuesta = await fetch(base_url + '/controller/Login.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            location.replace(base_url + "inicio");
        } else {
            //Swal.fire('Éxito', 'Has iniciado sesión correctamente','success');
            Swal.fire('Error', json.mensaje, 'error');
        }
        console.log(json);
    } catch (error) {
        console.error('Oops, ocurrió un error:', error);
        Swal.fire('Error', 'Ocurrió un error al iniciar sesión', 'error');
    }
}