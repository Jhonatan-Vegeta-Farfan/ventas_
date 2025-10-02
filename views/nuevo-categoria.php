<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Categorías - STILOS</title>
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

        .btn-secondary {
            background-color: #cd853f;
            color: #fff;
            border: 1px solid #cd853f;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary:hover {
            background-color: #b5651d;
            color: #fff;
            border-color: #b5651d;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        }

        .btn-outline-info {
            color: #8b4513;
            border-color: #8b4513;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-outline-info:hover {
            background-color: #8b4513;
            color: #fff;
            border-color: #8b4513;
            transform: translateY(-2px);
        }

        .store-header {
            background: linear-gradient(to right, #8b4513, #cd853f);
            color: white;
            padding: 15px 0;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.8rem;
            text-align: center;
            margin: 0;
        }

        .location {
            font-style: italic;
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .embroidery-icon {
            color: #8b4513;
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <button class="btn btn-secondary" onclick="window.history.back();">
            <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
        </button>
    </div>

    <div class="container mt-4">
        <div class="card p-4">
            <div class="store-header">
                <h1 class="store-name">
                    <i class="fas fa-tshirt"></i> STILOS <i class="fas fa-tshirt"></i>
                </h1>
                <p class="location mb-0">Huanta, Ayacucho</p>
            </div>
            
            <h2 class="text-center mb-4">Registrar Categorías</h2>

            <form action="" class="from-control" id="frmRegistrar">
                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        <i class="fas fa-tag embroidery-icon"></i> Nombre de Categoría:
                    </label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required 
                           placeholder="Ej: Camisetas, Pantalones, Accesorios...">
                </div>
                <div class="mb-3">
                    <label for="detalle" class="form-label">
                        <i class="fas fa-align-left embroidery-icon"></i> Detalle:
                    </label>
                    <input type="text" id="detalle" name="detalle" class="form-control" required 
                           placeholder="Descripción de la categoría...">
                </div>
                <div class="d-grid">
                    <button type="button" class="btn btn-primary" onclick="registrar_categoria();">
                        <i class="bi bi-check-circle me-1"></i> Registrar Categoría
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="container my-4">
        <button class="btn btn-secondary" onclick="window.history.back();">
            <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
        </button>
    </div>

    <script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>