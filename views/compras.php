<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras - STILOS Huanta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Estilos específicos para la página de compras */
        .compras-section {
            background-color: rgba(255, 253, 250, 0.95);
            border-radius: 10px;
            border: 1px solid #cd853f;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            padding: 25px;
            margin-top: 30px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .compras-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }

        .compras-title {
            color: #8b4513;
            margin-bottom: 25px;
            font-weight: bold;
            text-align: center;
            padding-bottom: 15px;
            border-bottom: 1px solid #cd853f;
            font-family: 'Playfair Display', serif;
        }

        /* Estilos de tabla adaptados al tema */
        .table-compras {
            background-color: rgba(255, 253, 250, 0.9);
            color: #5a3921;
            border-color: #cd853f;
            font-weight: 500;
            margin-bottom: 0;
            font-family: 'Raleway', sans-serif;
        }

        .table-compras thead th {
            border-color: #cd853f;
            color: #8b4513;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            background-color: rgba(205, 133, 63, 0.1);
            font-family: 'Playfair Display', serif;
        }

        .table-compras td {
            border-color: #cd853f;
            vertical-align: middle;
            font-size: 0.85rem;
        }

        .table-compras tbody tr:nth-of-type(odd) {
            background-color: rgba(205, 133, 63, 0.05);
        }

        .table-compras tbody tr:hover {
            background-color: rgba(139, 69, 19, 0.1);
            box-shadow: 0 0 10px rgba(139, 69, 19, 0.1);
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
            font-family: 'Raleway', sans-serif;
        }

        .btn-back {
            background-color: #8b4513;
            color: #f9f5f0;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.3);
        }

        .btn-back:hover {
            background-color: #a0522d;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(160, 82, 45, 0.4);
            color: #f9f5f0;
        }

        .btn-new {
            background-color: #cd853f;
            color: #f9f5f0;
            box-shadow: 0 4px 15px rgba(205, 133, 63, 0.3);
        }

        .btn-new:hover {
            background-color: #d2691e;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(210, 105, 30, 0.4);
            color: #f9f5f0;
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
            background-color: #cd853f;
            color: #f9f5f0;
        }

        .btn-edit:hover {
            background-color: #a0522d;
            box-shadow: 0 0 8px rgba(205, 133, 63, 0.5);
        }

        .btn-delete {
            background-color: #8b4513;
            color: #f9f5f0;
        }

        .btn-delete:hover {
            background-color: #a52a2a;
            box-shadow: 0 0 8px rgba(139, 69, 19, 0.5);
        }

        /* Logo y elementos decorativos */
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-stilos {
            max-height: 80px;
            filter: drop-shadow(0 2px 4px rgba(139, 69, 19, 0.3));
        }

        .embroidery-corner {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 2px solid #cd853f;
            border-radius: 50%;
        }

        .embroidery-corner-tl {
            top: 10px;
            left: 10px;
        }

        .embroidery-corner-tr {
            top: 10px;
            right: 10px;
        }

        .embroidery-corner-bl {
            bottom: 10px;
            left: 10px;
        }

        .embroidery-corner-br {
            bottom: 10px;
            right: 10px;
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
            <!-- Elementos decorativos de bordado -->
            <div class="embroidery-corner embroidery-corner-tl"></div>
            <div class="embroidery-corner embroidery-corner-tr"></div>
            <div class="embroidery-corner embroidery-corner-bl"></div>
            <div class="embroidery-corner embroidery-corner-br"></div>
            
            <div class="logo-container">
                <img src="https://i.ibb.co/0Q8L8wT/stilos-logo.png" alt="STILOS - Huanta, Ayacucho" class="logo-stilos">
            </div>
            
            <h1 class="compras-title">Registro de Compras - STILOS</h1>
            
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
                            <th>PROVEEDOR</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_compras" class="text-center">
                        <!-- Ejemplo de filas (se generarán dinámicamente) -->
                        <tr>
                            <td>1</td>
                            <td class="text-start">Tela de Algodón Premium</td>
                            <td>50</td>
                            <td>1,250.00</td>
                            <td class="text-start">Textiles Andinos</td>
                            <td>
                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-start">Hilos de Bordar</td>
                            <td>120</td>
                            <td>750.50</td>
                            <td class="text-start">Artisan Threads</td>
                            <td>
                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-start">Botones Decorativos</td>
                            <td>200</td>
                            <td>320.75</td>
                            <td class="text-start">Accesorios Creativos</td>
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
            console.log('Página de compras STILOS cargada');
            
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
                                <td class="text-start">${item.proveedor}</td>
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
            if(confirm('¿Está seguro de eliminar este registro de compra?')) {
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