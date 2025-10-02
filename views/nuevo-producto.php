<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Productos - STILOS Huanta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        body {
            background-color: #f9f5f0;
            color: #5a3921;
            font-family: 'Raleway', sans-serif;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(139, 69, 19, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(205, 133, 63, 0.05) 0%, transparent 20%);
        }

        .container {
            max-width: 800px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #8b4513;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
            border-bottom: 2px solid #cd853f;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .card {
            background-color: rgba(255, 253, 250, 0.95);
            color: #5a3921;
            border: 1px solid #cd853f;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }

        .form-control {
            background-color: rgba(255, 253, 250, 0.9);
            color: #5a3921;
            border: 1px solid #cd853f;
            border-radius: 5px;
            font-family: 'Raleway', sans-serif;
        }

        .form-control:focus {
            background-color: rgba(255, 253, 250, 1);
            color: #8b4513;
            border-color: #8b4513;
            box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
        }

        .btn-back {
            background-color: #8b4513;
            color: #f9f5f0;
            border: 1px solid #8b4513;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-back:hover {
            background-color: #a0522d;
            color: #fff;
            border-color: #a0522d;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .btn-register {
            background-color: #cd853f;
            color: #f9f5f0;
            border: 1px solid #cd853f;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
            padding: 10px 20px;
        }

        .btn-register:hover {
            background-color: #d2691e;
            color: #fff;
            border-color: #d2691e;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .embroidery-icon {
            color: #8b4513;
            margin-right: 8px;
        }

        .store-header {
            text-align: center;
            margin-bottom: 30px;
            padding: 15px;
            border-bottom: 1px solid #cd853f;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #8b4513;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
            letter-spacing: 1px;
            margin: 0;
        }

        .location {
            font-style: italic;
            color: #cd853f;
            font-size: 0.9rem;
            margin: 0;
        }

        label {
            font-weight: 500;
            color: #5a3921;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <div class="store-header">
            <h1 class="store-name">
                <i class="fas fa-tshirt embroidery-icon"></i> STILOS <i class="fas fa-tshirt embroidery-icon"></i>
            </h1>
            <p class="location">Huanta, Ayacucho</p>
        </div>
        
        <button class="btn-back"
            onclick="window.history.back();"
            onmouseover="this.style.backgroundColor='#a0522d'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.backgroundColor='#8b4513'; this.style.transform='scale(1)';">
            <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
        </button>
    </div>

    <div class="container mt-4">
        <div class="card p-4">
            <h1 class="text-center mb-4">Registrar Productos</h1>
            <form action="" class="from-control" id="frmRegistrar">
                <div class="mb-3">
                    <label for="codigo"><i class="fas fa-barcode embroidery-icon"></i>Código: </label>
                    <input type="text" id="codigo" name="codigo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nombre"><i class="fas fa-tag embroidery-icon"></i>Nombre: </label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="detalle"><i class="fas fa-info-circle embroidery-icon"></i>Detalle:</label>
                    <input type="text" id="detalle" name="detalle" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="precio"><i class="fas fa-dollar-sign embroidery-icon"></i>Precio: </label>
                    <input type="number" id="precio" name="precio" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="stock"><i class="fas fa-boxes embroidery-icon"></i>Stock: </label>
                    <input type="number" id="stock" name="stock" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="categoria"><i class="fas fa-list embroidery-icon"></i>Categoría</label>
                    <select name="categoria" id="categoria" class="form-control" required>
                        <option>Seleccione</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="imagen"><i class="fas fa-image embroidery-icon"></i>Imagen: </label>
                    <input type="file" id="imagen" name="imagen" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="proveedor"><i class="fas fa-truck embroidery-icon"></i>Proveedor: </label>
                    <select id="proveedor" name="proveedor" class="form-control" required>
                        <option>Seleccione</option>
                    </select>
                </div>
                <div class="d-grid">
                    <button type="button" class="btn-register" onclick="registrar_producto();">
                        <i class="bi bi-check-circle me-1"></i>Registrar Producto
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>

    <script>
        listar_categorias();
    </script>
    <script>
        listarProveedor();
    </script>
</body>

</html>