<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías de Productos - STILOS Huanta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
      :root {
        --primary-brown: #8b4513;
        --secondary-brown: #a0522d;
        --accent-orange: #cd853f;
        --light-beige: #f9f5f0;
        --dark-brown: #5a3921;
        --text-light: #f9f5f0;
      }

      body {
        background-color: var(--light-beige);
        color: var(--dark-brown);
        font-family: 'Raleway', sans-serif;
      }

      .categorias-container {
        background-color: rgba(255, 253, 250, 0.95);
        border-radius: 10px;
        border: 1px solid var(--accent-orange);
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
        padding: 2rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
      }

      .categorias-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--primary-brown), var(--accent-orange), var(--primary-brown));
      }

      /* Estilos de la tabla */
      .table {
        background-color: rgba(255, 253, 250, 0.9);
        color: var(--dark-brown);
        border-color: var(--accent-orange);
      }

      .table th {
        border-color: var(--accent-orange);
        color: var(--primary-brown);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
        font-family: 'Playfair Display', serif;
      }

      .table td {
        border-color: var(--accent-orange);
        vertical-align: middle;
        font-size: 0.85rem;
      }

      .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(205, 133, 63, 0.05);
      }

      .table-hover tbody tr:hover {
        background-color: rgba(139, 69, 19, 0.08);
        box-shadow: 0 0 10px rgba(139, 69, 19, 0.1);
      }

      .shadow-lg {
        box-shadow: 0 5px 15px rgba(139, 69, 19, 0.15) !important;
      }

      /* Estilos del botón */
      .btn-stilos {
        background-color: var(--primary-brown);
        color: var(--text-light);
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(139, 69, 19, 0.3);
        transition: all 0.3s;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-family: 'Raleway', sans-serif;
      }

      .btn-stilos:hover {
        background-color: var(--secondary-brown);
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(139, 69, 19, 0.4);
        color: var(--text-light);
      }

      .btn-stilos:active {
        transform: translateY(1px);
      }

      /* Estilos de los botones de acción */
      .btn-action {
        padding: 5px 10px;
        margin: 0 3px;
        border-radius: 5px;
        transition: all 0.3s;
        border: none;
      }

      .btn-edit {
        background-color: var(--accent-orange);
        color: var(--text-light);
      }

      .btn-edit:hover {
        background-color: #d2691e;
        box-shadow: 0 0 8px var(--accent-orange);
      }

      .btn-delete {
        background-color: #a52a2a;
        color: var(--text-light);
      }

      .btn-delete:hover {
        background-color: #c03939;
        box-shadow: 0 0 8px #a52a2a;
      }

      .page-title {
        color: var(--primary-brown);
        margin-bottom: 30px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--accent-orange);
        font-family: 'Playfair Display', serif;
        position: relative;
      }

      .page-title::before, .page-title::after {
        content: "✽";
        color: var(--accent-orange);
        margin: 0 15px;
        font-size: 1.2rem;
      }

      /* Logo y marca */
      .store-header {
        text-align: center;
        margin-bottom: 20px;
      }

      .store-logo {
        max-width: 120px;
        height: auto;
        margin-bottom: 10px;
        filter: drop-shadow(0 2px 4px rgba(139, 69, 19, 0.3));
      }

      .store-name {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--primary-brown);
        font-size: 1.8rem;
        margin-bottom: 5px;
      }

      .store-location {
        font-style: italic;
        color: var(--accent-orange);
        font-size: 0.9rem;
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
        .categorias-container {
          padding: 1rem;
        }
        
        .table th, .table td {
          padding: 0.5rem;
        }
        
        .btn-action {
          padding: 3px 6px;
          margin: 0 2px;
        }
        
        .store-name {
          font-size: 1.5rem;
        }
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container-fluid py-4">
        <div class="container">
            <div class="categorias-container">
                <div class="store-header">
                    <img src="https://i.imgur.com/4Nfz5eE.png" alt="STILOS - Tienda de Ropa" class="store-logo">
                    <h1 class="store-name">STILOS</h1>
                    <p class="store-location">Huanta, Ayacucho</p>
                </div>
                
                <h2 class="page-title">Categorías de Productos</h2>
                
                <div class="d-flex justify-content-between mb-4">
                    <button class="btn-stilos" onclick="window.history.back();">
                        <i class="fas fa-arrow-left me-2"></i> VOLVER
                    </button>
                    
                    <button class="btn-stilos" onclick="nuevaCategoria();">
                        <i class="fas fa-plus me-2"></i> NUEVA CATEGORÍA
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover shadow-lg">
                        <thead>
                            <tr>
                                <th class="text-center">NRO</th>
                                <th>NOMBRE</th>
                                <th>DETALLE</th>
                                <th class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_categoria">
                            <!-- Ejemplo de filas (deberían generarse dinámicamente) -->
                            <tr>
                                <td class="text-center">1</td>
                                <td>ROPA DE HOMBRE</td>
                                <td>Prendas de vestir para caballeros</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>ROPA DE MUJER</td>
                                <td>Prendas de vestir para damas</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>ROPA INFANTIL</td>
                                <td>Prendas de vestir para niños y niñas</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>BORDADOS ARTESANALES</td>
                                <td>Prendas con bordados tradicionales de Ayacucho</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>ACCESORIOS</td>
                                <td>Complementos y accesorios de moda</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // Aquí iría tu lógica JavaScript para cargar las categorías
        document.addEventListener('DOMContentLoaded', function() {
            // Ejemplo de cómo podrías cargar datos dinámicamente
            /*
            fetch('<?php echo BASE_URL ?>categoria/getAll')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('tbl_categoria');
                    tableBody.innerHTML = '';
                    
                    data.forEach((item, index) => {
                        const row = `
                            <tr>
                                <td class="text-center">${index + 1}</td>
                                <td>${item.nombre.toUpperCase()}</td>
                                <td>${item.detalle}</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit" onclick="editCategory(${item.id})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteCategory(${item.id})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                        tableBody.innerHTML += row;
                    });
                });
            */
        });

        function nuevaCategoria() {
            // Lógica para crear nueva categoría
            console.log('Nueva categoría');
            // window.location.href = '<?php echo BASE_URL ?>categoria/nueva';
        }

        function editCategory(id) {
            // Lógica para editar categoría
            console.log('Editar categoría:', id);
            // window.location.href = `<?php echo BASE_URL ?>categoria/editar/${id}`;
        }

        function deleteCategory(id) {
            // Lógica para eliminar categoría
            if(confirm('¿Estás seguro de eliminar esta categoría?')) {
                console.log('Eliminar categoría:', id);
                /*
                fetch(`<?php echo BASE_URL ?>categoria/eliminar/${id}`, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        alert('Categoría eliminada con éxito');
                        location.reload();
                    } else {
                        alert('Error al eliminar categoría');
                    }
                });
                */
            }
        }
    </script>
</body>
</html>