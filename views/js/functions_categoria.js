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