<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('header_stilos.php'); ?>
    
    <title>Editar Producto - STILOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --stilos-primary: #8B4513;
            --stilos-secondary: #CD853F;
            --stilos-accent: #A0522D;
            --stilos-danger: #D2691E;
            --stilos-bg: #F9F5F0;
        }
        
        body {
            background-color: var(--stilos-bg);
            color: #5A3921;
            font-family: 'Raleway', sans-serif;
            padding-top: 80px;
            padding-bottom: 120px;
            min-height: 100vh;
            position: relative;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(139, 69, 19, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(205, 133, 63, 0.05) 0%, transparent 20%);
        }
        
        .btn-stilos {
            background-color: var(--stilos-primary); 
            color: white; 
            border: none; 
            padding: 12px 25px;
            font-size: 16px; 
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
            transition: all 0.3s;
            letter-spacing: 1px;
            margin-bottom: 30px;
            font-family: 'Raleway', sans-serif;
        }
        
        .btn-stilos:hover {
            background-color: var(--stilos-accent);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.4);
        }
        
        .main-content {
            margin: 40px auto;
            max-width: 900px;
        }
        
        .container-form {
            background: rgba(255, 253, 250, 0.95);
            border: 1px solid var(--stilos-secondary);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(139, 69, 19, 0.2);
            padding: 2.5rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }
        
        .container-form::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--stilos-primary), var(--stilos-secondary), var(--stilos-primary));
        }
        
        h1 {
            color: var(--stilos-primary);
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 2rem !important;
            padding-top: 20px;
            font-family: 'Playfair Display', serif;
            text-align: center;
        }
        
        .form-control, .form-select {
            background-color: rgba(255, 253, 250, 0.9);
            border: 1px solid var(--stilos-secondary);
            color: #5A3921;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 1.5rem;
            font-family: 'Raleway', sans-serif;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--stilos-primary);
            box-shadow: 0 0 5px rgba(139, 69, 19, 0.3);
            background-color: white;
        }
        
        .btn-outline-stilos {
            color: var(--stilos-primary);
            border-color: var(--stilos-primary);
            letter-spacing: 1px;
            padding: 12px 25px;
            margin-top: 20px;
            font-weight: bold;
            font-family: 'Raleway', sans-serif;
            transition: all 0.3s;
        }
        
        .btn-outline-stilos:hover {
            background-color: var(--stilos-primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--stilos-accent);
            margin-bottom: 0.5rem;
            font-family: 'Raleway', sans-serif;
        }
        
        .store-brand {
            font-family: 'Playfair Display', serif;
            color: var(--stilos-primary);
            font-weight: 700;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .location {
            font-style: italic;
            color: var(--stilos-secondary);
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .embroidery-decoration {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 2px solid var(--stilos-secondary);
            border-radius: 50%;
            opacity: 0.7;
        }
        
        .embroidery-decoration.top-left {
            top: 15px;
            left: 15px;
        }
        
        .embroidery-decoration.bottom-right {
            bottom: 15px;
            right: 15px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Contenido principal con márgenes amplios -->
    <div class="main-content">
        <div class="text-start">
            <button class="btn-stilos" onclick="window.history.back();">
                <i class="bi bi-arrow-left-circle me-2"></i>VOLVER AL CATÁLOGO
            </button>
        </div>

        <div class="container-form">
            <div class="embroidery-decoration top-left"></div>
            <div class="embroidery-decoration bottom-right"></div>
            
            <div class="store-brand">
                <i class="bi bi-tshirt me-2"></i>STILOS<i class="bi bi-tshirt ms-2"></i>
            </div>
            <div class="location">Huanta, Ayacucho</div>
            
            <h1>EDITAR PRODUCTO</h1>
            
            <form id="frmActualizar" class="border-0 bg-transparent">
                <input type="hidden" name="id_producto" id="id_producto">
                <input type="hidden" name="img" id="img">
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">CÓDIGO DEL PRODUCTO</label>
                        <input type="text" id="codigo" class="form-control" disabled>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">NOMBRE DEL PRODUCTO</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label">DESCRIPCIÓN</label>
                        <input type="text" id="detalle" name="detalle" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">PRECIO (S/)</label>
                        <input type="number" id="precio" name="precio" class="form-control" required step="0.01">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">CATEGORÍA</label>
                        <select id="categoria" name="categoria" class="form-select" required>
                            <option value="">SELECCIONE CATEGORÍA</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">IMAGEN DEL PRODUCTO</label>
                        <input type="file" id="imagen" name="imagen" class="form-control">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">PROVEEDOR</label>
                        <select id="proveedor" name="proveedor" class="form-select" required>
                            <option value="">SELECCIONE PROVEEDOR</option>
                        </select>
                    </div>
                    
                    <div class="col-12 text-center mt-4">
                        <button type="button" onclick="actualizar_producto()" class="btn btn-outline-stilos px-5 py-3">
                            <i class="bi bi-check-circle me-2"></i>ACTUALIZAR PRODUCTO
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('footer_stilos.php'); ?>

    <script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            listar_categorias();
            listarProveedor();
            
            const id_p = <?php $pagina = explode("/", $_GET['views']);
                         echo $pagina['1']; ?>;
            ver_producto(id_p);
        });
    </script>
</body>
</html>