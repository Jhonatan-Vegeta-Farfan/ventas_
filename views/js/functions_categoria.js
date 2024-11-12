<<<<<<< HEAD
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
=======
document.addEventListener('DOMContentLoaded', function() {
    const listarCategorias = async () => {
        const response = await fetch('categoria.php?tipo=listar'); // Ajusta la ruta según sea necesario
        const data = await response.json();

        if (data.status) {
            const categoriasContainer = document.getElementById('listarCategorias');
            categoriasContainer.innerHTML = ''; // Limpiar el contenedor

            data.contenido.forEach(categoria => {
                const categoriaItem = document.createElement('div');
                categoriaItem.innerHTML = `
                    <div>${categoria.nombre} - ${categoria.detalle}</div>
                `;
                categoriasContainer.appendChild(categoriaItem);
            });
        } else {
            console.error('No se pudo cargar las categorías.');
        }
    };

    const agregarCategoria = async (nombre, detalle) => {
        const response = await fetch('agregar_categoria.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `nombre=${encodeURIComponent(nombre)}&detalle=${encodeURIComponent(detalle)}`
        });

        const data = await response.json();
        if (data.status) {
            listarCategorias(); // Recargar la lista de categorías
        } else {
            console.error('Error al agregar la categoría.');
        }
    };

    document.getElementById('categoria-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const nombre = document.getElementById('nombre').value;
        const detalle = document.getElementById('detalle').value;
        agregarCategoria(nombre, detalle);
    });

    listarCategorias();
});
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
