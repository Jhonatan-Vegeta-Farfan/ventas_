<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Compras - STILOS</title>
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

        .btn-primary {
            background-color: #8b4513;
            color: #f9f5f0;
            border: 1px solid #8b4513;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #a0522d;
            color: #fff;
            border-color: #a0522d;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .btn-back {
            background-color: #cd853f;
            color: #f9f5f0;
            border: 1px solid #cd853f;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-back:hover {
            background-color: #b5651d;
            color: #fff;
            border-color: #b5651d;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .btn-outline-info {
            color: #8b4513;
            border-color: #8b4513;
            font-weight: 500;
        }

        .btn-outline-info:hover {
            background-color: #8b4513;
            color: #fff;
            border-color: #8b4513;
        }

        .store-header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background: linear-gradient(to right, #f9f5f0, #f0e6d6, #f9f5f0);
            border-radius: 10px;
            border: 1px solid #cd853f;
        }

        .store-logo {
            max-height: 80px;
            filter: drop-shadow(0 0 5px rgba(139, 69, 19, 0.5));
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #8b4513;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
            letter-spacing: 1px;
            margin-top: 10px;
        }

        .location {
            font-style: italic;
            color: #cd853f;
            font-size: 0.9rem;
        }

        label {
            font-weight: 500;
            color: #5a3921;
        }

        .embroidery-icon {
            color: #8b4513;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <button class="btn btn-back"
            onclick="window.history.back();">
            <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
        </button>
    </div>

    <div class="container mt-4">
        <div class="store-header">
            <img src="https://cdn-icons-png.flaticon.com/512/2454/2454273.png" alt="STILOS Logo" class="store-logo">
            <h1 class="store-name">STILOS</h1>
            <p class="location mb-0">Huanta, Ayacucho</p>
        </div>

        <h1 class="text-center mb-4">Registrar Compras</h1>

        <div class="card p-4">
            <form action="" class="from-control" id="formRegistrarCompras">
                <div class="mb-3">
                    <label for="id_producto"><i class="fas fa-tshirt embroidery-icon"></i> Producto: </label>
                    <select type="text" name="id_producto" id="id_producto" class="form-control" required>
                        <option class="id_proveedor">Seleccione</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cantidad"><i class="fas fa-sort-numeric-up embroidery-icon"></i> Cantidad: </label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="precio"><i class="fas fa-tag embroidery-icon"></i> Precio: </label>
                    <input type="number" name="precio" id="precio" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="trabajador"><i class="fas fa-user embroidery-icon"></i> Trabajador: </label>
                    <select type="text" name="trabajador" id="trabajador" class="form-control" required>
                        <option class="trabajador">Seleccione</option>
                    </select>
                </div>
                <br>
                <button type="button" class="mb-3 btn btn-primary w-100" onclick="registrar_compra();">
                    <i class="bi bi-check-circle me-2"></i>Registrar Compra
                </button>
            </form>
        </div>
    </div>

    <script src="<?php echo BASE_URL; ?>views/js/functions_compras.js"></script>
    <script>
        listar_productos();
    </script>
    <script>
        listar_trabajadores();
    </script>

    <script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
</body>

</html>