<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías Intergalácticas - Tienda Alien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
      :root {
        --alien-green: #00ff9d;
        --alien-purple: #9d00ff;
        --ufo-blue: #00e1ff;
        --dark-space: #0a001a;
        --energy-pink: #ff00aa;
        --alien-red: #ff0033;
      }

      .categorias-container {
        background-color: rgba(10, 0, 26, 0.85);
        border-radius: 15px;
        border: 1px solid var(--alien-green);
        box-shadow: 0 0 25px rgba(0, 255, 157, 0.2);
        padding: 2rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
      }

      /* Estilos de la tabla */
      .table {
        background-color: rgba(20, 10, 40, 0.7);
        color: var(--alien-green);
        border-color: var(--alien-green);
      }

      .table th {
        border-color: var(--alien-green);
        color: var(--ufo-blue);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
      }

      .table td {
        border-color: var(--alien-green);
        vertical-align: middle;
        font-size: 0.85rem;
      }

      .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 255, 157, 0.05);
      }

      .table-hover tbody tr:hover {
        background-color: rgba(157, 0, 255, 0.1);
        box-shadow: 0 0 15px rgba(157, 0, 255, 0.3);
      }

      .shadow-lg {
        box-shadow: 0 0 30px rgba(0, 225, 255, 0.2) !important;
      }

      /* Estilos del botón */
      .btn-alien {
        background-color: var(--alien-purple);
        color: #000;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(157, 0, 255, 0.4);
        transition: all 0.3s;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      .btn-alien:hover {
        background-color: var(--ufo-blue);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 225, 255, 0.5);
        color: #000;
      }

      .btn-alien:active {
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
        background-color: var(--ufo-blue);
        color: #000;
      }

      .btn-edit:hover {
        background-color: #00b7d4;
        box-shadow: 0 0 10px var(--ufo-blue);
      }

      .btn-delete {
        background-color: var(--alien-red);
        color: #000;
      }

      .btn-delete:hover {
        background-color: #ff3366;
        box-shadow: 0 0 10px var(--alien-red);
      }

      .page-title {
        color: var(--ufo-blue);
        text-shadow: 0 0 10px var(--ufo-blue);
        margin-bottom: 30px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--alien-green);
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
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container-fluid py-4">
        <div class="container">
            <div class="categorias-container">
                <h1 class="page-title">Categorías Intergalácticas</h1>
                
                <div class="d-flex justify-content-between mb-4">
                    <button class="btn-alien" onclick="window.history.back();">
                        <i class="fas fa-arrow-left me-2"></i> VOLVER
                    </button>
                    
                    <button class="btn-alien" onclick="nuevaCategoria();">
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
                                <td>TRAJES ESPACIALES</td>
                                <td>Vestimenta para exploración intergaláctica</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>COMUNICADORES</td>
                                <td>Dispositivos para comunicación interestelar</td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>PROPULSORES</td>
                                <td>Sistemas de propulsión para naves espaciales</td>
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
            if(confirm('¿Estás seguro de eliminar esta categoría intergaláctica?')) {
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