<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('header_alien.php'); ?>
    
    <title>Editar Artefacto Alienígena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --alien-primary: #2a9d8f;
            --alien-secondary: #264653;
            --alien-accent: #e9c46a;
            --alien-danger: #e76f51;
            --alien-bg: #0d1b2a;
        }
        
        body {
            background-color: var(--alien-bg);
            color: #f8f9fa;
            font-family: 'Orbitron', sans-serif;
            padding-top: 80px; /* Espacio para header fijo */
            padding-bottom: 120px; /* Espacio para footer fijo */
            min-height: 100vh;
            position: relative;
        }
        
        .btn-alien {
            background-color: var(--alien-primary); 
            color: white; 
            border: none; 
            padding: 12px 25px;
            font-size: 16px; 
            border-radius: 8px;
            box-shadow: 0 0 15px var(--alien-primary);
            transition: all 0.3s;
            letter-spacing: 1px;
            margin-bottom: 30px; /* Más margen inferior */
        }
        
        .main-content {
            margin: 40px auto; /* Márgenes superior/inferior aumentados */
            max-width: 900px;
        }
        
        .container-form {
            background: rgba(13, 27, 42, 0.9);
            border: 1px solid var(--alien-primary);
            border-radius: 15px;
            box-shadow: 0 0 30px var(--alien-primary);
            padding: 2.5rem;
            margin-top: 3rem; /* Más espacio arriba */
            margin-bottom: 3rem; /* Más espacio abajo */
        }
        
        h1 {
            color: var(--alien-accent);
            text-shadow: 0 0 10px var(--alien-primary);
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 2rem !important;
            padding-top: 20px;
        }
        
        .form-control, .form-select {
            background-color: rgba(38, 70, 83, 0.7);
            border: 1px solid var(--alien-primary);
            color: white;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 1.5rem;
        }
        
        .btn-outline-alien {
            color: var(--alien-accent);
            border-color: var(--alien-accent);
            letter-spacing: 1px;
            padding: 12px 25px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Contenido principal con márgenes amplios -->
    <div class="main-content">
        <div class="text-start">
            <button class="btn-alien" onclick="window.history.back();">
                <i class="bi bi-arrow-left-circle me-2"></i>VOLVER A LA NAVE
            </button>
        </div>

        <div class="container-form">
            <h1 class="text-center">EDITAR ARTEFACTO INTERGALÁCTICO</h1>
            
            <form id="frmActualizar" class="border-0 bg-transparent">
                <input type="hidden" name="id_producto" id="id_producto">
                <input type="hidden" name="img" id="img">
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">CÓDIGO DE IDENTIFICACIÓN</label>
                        <input type="text" id="codigo" class="form-control" disabled>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">NOMBRE DEL ARTEFACTO</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label">COMPOSICIÓN MOLECULAR</label>
                        <input type="text" id="detalle" name="detalle" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">VALOR EN CRÉDITOS</label>
                        <input type="number" id="precio" name="precio" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">SISTEMA PLANETARIO</label>
                        <select id="categoria" name="categoria" class="form-select" required>
                            <option value="">SELECCIONE SISTEMA</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">ESCÁNER HOLOGRÁFICO</label>
                        <input type="file" id="imagen" name="imagen" class="form-control">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">COMERCIANTE</label>
                        <select id="proveedor" name="proveedor" class="form-select" required>
                            <option value="">SELECCIONE COMERCIANTE</option>
                        </select>
                    </div>
                    
                    <div class="col-12 text-center mt-4">
                        <button type="button" onclick="actualizar_producto()" class="btn btn-outline-alien px-5 py-3">
                            <i class="bi bi-stars me-2"></i>ACTUALIZAR REGISTRO
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('footer_alien.php'); ?>

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