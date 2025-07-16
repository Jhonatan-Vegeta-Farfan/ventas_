<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras Intergalácticas - Tienda Alien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos específicos para la página de compras */
        .compras-section {
            background-color: rgba(10, 0, 26, 0.8);
            border-radius: 15px;
            border: 1px solid #00ff9d;
            box-shadow: 0 0 25px rgba(0, 255, 157, 0.2);
            padding: 25px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .compras-title {
            color: #00e1ff;
            text-shadow: 0 0 10px #00e1ff;
            margin-bottom: 25px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            padding-bottom: 15px;
            border-bottom: 1px solid #00ff9d;
        }

        /* Estilos de tabla adaptados al tema */
        .table-compras {
            background-color: rgba(20, 10, 40, 0.7);
            color: #00ff9d;
            border-color: #00ff9d;
            font-weight: bold;
            margin-bottom: 0;
        }

        .table-compras thead th {
            border-color: #00ff9d;
            color: #00e1ff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .table-compras td {
            border-color: #00ff9d;
            vertical-align: middle;
            font-size: 0.85rem;
        }

        .table-compras tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 255, 157, 0.1);
        }

        .table-compras tbody tr:hover {
            background-color: rgba(157, 0, 255, 0.2);
            box-shadow: 0 0 15px rgba(157, 0, 255, 0.3);
        }

        /* Botones personalizados */
        .btn-compras {
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .btn-back {
            background-color: #ff0033;
            color: white;
            box-shadow: 0 4px 15px rgba(255, 0, 51, 0.4);
        }

        .btn-back:hover {
            background-color: #ff3366;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 51, 102, 0.5);
            color: white;
        }

        .btn-new {
            background-color: #9d00ff;
            color: white;
            box-shadow: 0 4px 15px rgba(157, 0, 255, 0.4);
        }

        .btn-new:hover {
            background-color: #00e1ff;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 225, 255, 0.5);
            color: #000;
        }

        /* Botones de acción */
        .btn-action {
            padding: 5px 10px;
            margin: 0 3px;
            border-radius: 5px;
            transition: all 0.3s;
            border: none;
        }

        .btn-edit {
            background-color: #00e1ff;
            color: #000;
        }

        .btn-edit:hover {
            background-color: #00b7d4;
            box-shadow: 0 0 10px #00e1ff;
        }

        .btn-delete {
            background-color: #ff0033;
            color: #000;
        }

        .btn-delete:hover {
            background-color: #ff3366;
            box-shadow: 0 0 10px #ff0033;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .compras-section {
                padding: 15px;
            }
            
            .table-compras th, 
            .table-compras td {
                padding: 0.5rem;
                font-size: 0.8rem;
            }
            
            .btn-action {
                padding: 3px 6px;
                margin: 0 2px;
                font-size: 0.8rem;
            }
            
            .btn-compras {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container py-4">
        <section class="compras-section">
            <h1 class="compras-title">Registro de Compras Intergalácticas</h1>
            
            <div class="d-flex justify-content-between mb-4 flex-wrap">
                <button class="btn-compras btn-back me-2 mb-2" onclick="window.history.back();">
                    <i class="fas fa-arrow-left me-2"></i> Volver
                </button>
                
                <button class="btn-compras btn-new mb-2" onclick="nuevaCompra()">
                    <i class="fas fa-plus me-2"></i> Nueva Compra
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-compras table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">NRO</th>
                            <th>PRODUCTO</th>
                            <th class="text-center">CANTIDAD</th>
                            <th class="text-center">PRECIO</th>
                            <th>TRABAJADOR</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_compras" class="text-center">
                        <!-- Ejemplo de filas (se generarán dinámicamente) -->
                        <tr>
                            <td>1</td>
                            <td class="text-start">Propulsor Cuántico X-45</td>
                            <td>3</td>
                            <td>1,250.00</td>
                            <td class="text-start">Zorgon-5</td>
                            <td>
                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-start">Cristales de Energía</td>
                            <td>12</td>
                            <td>750.50</td>
                            <td class="text-start">Xylophonia</td>
                            <td>
                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>views/js/functions_compras.js"></script>
    <script>
        // Ejemplo de carga dinámica de datos
        document.addEventListener('DOMContentLoaded', function() {
            // Esta función se ejecutará cuando el DOM esté completamente cargado
            console.log('Página de compras cargada');
            
            // Aquí iría tu código para cargar los datos de compras
            // fetchCompras();
        });

        function fetchCompras() {
            /*
            fetch('<?php echo BASE_URL ?>compras/getAll')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('tbl_compras');
                    tableBody.innerHTML = '';
                    
                    data.forEach((item, index) => {
                        const row = `
                            <tr>
                                <td>${index + 1}</td>
                                <td class="text-start">${item.producto}</td>
                                <td>${item.cantidad}</td>
                                <td>${item.precio.toFixed(2)}</td>
                                <td class="text-start">${item.trabajador}</td>
                                <td>
                                    <button class="btn-action btn-edit" onclick="editCompra(${item.id})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action btn-delete" onclick="deleteCompra(${item.id})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                        tableBody.innerHTML += row;
                    });
                })
                .catch(error => console.error('Error al cargar compras:', error));
            */
        }

        function nuevaCompra() {
            // Redirigir al formulario de nueva compra
            console.log('Nueva compra');
            // window.location.href = '<?php echo BASE_URL ?>compras/nueva';
        }

        function editCompra(id) {
            // Redirigir al formulario de edición
            console.log('Editar compra:', id);
            // window.location.href = `<?php echo BASE_URL ?>compras/editar/${id}`;
        }

        function deleteCompra(id) {
            // Confirmar antes de eliminar
            if(confirm('¿Está seguro de eliminar este registro de compra intergaláctica?')) {
                console.log('Eliminar compra:', id);
                /*
                fetch(`<?php echo BASE_URL ?>compras/eliminar/${id}`, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        alert('Compra eliminada exitosamente');
                        fetchCompras(); // Recargar la tabla
                    } else {
                        alert('Error al eliminar la compra');
                    }
                })
                .catch(error => console.error('Error:', error));
                */
            }
        }
    </script>
</body>
</html>