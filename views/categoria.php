<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorías</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Categorías</h2>
        <div id="categorias-list" class="mb-3"></div>

        <form id="categoria-form">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="detalle" class="form-label">Detalle de la Categoría</label>
                <input type="text" class="form-control" id="detalle" name="detalle" required>
            </div>
            <button type="submit" class="btn btn-primary col-6 mx-2">Agregar Categoría</button>
        </form>
    </div>

    <script>
        // Array to hold categories
        let categorias = [];

        // Function to list categories
        function listar_categorias() {
            const categoriasList = document.getElementById('categorias-list');
            categoriasList.innerHTML = '';
            categorias.forEach((categoria, index) => {
                categoriasList.innerHTML += `<div class="alert alert-info" role="alert">
                    <strong>${categoria.nombre}</strong>: ${categoria.detalle} 
                    <button class="btn btn-danger btn-sm float-end" onclick="eliminarCategoria(${index})">Eliminar</button>
                </div>`;
            });
        }

        // Function to add a new category
        document.getElementById('categoria-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const nombre = document.getElementById('nombre').value;
            const detalle = document.getElementById('detalle').value;

            // Add new category to the array
            categorias.push({ nombre, detalle });
            listar_categorias();

            // Clear the form
            this.reset();
        });

        // Function to delete a category
        function eliminarCategoria(index) {
            categorias.splice(index, 1);
            listar_categorias();
        }

        // Initial call to populate the list
        listar_categorias();
    </script>
</body>
</html>