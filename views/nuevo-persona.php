<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario - STILOS</title>
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

        .btn-primary, .btn-secondary, .btn-success, .btn-info {
            background-color: #8b4513;
            color: #f9f5f0;
            border: 1px solid #8b4513;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
        }

        .btn-primary:hover, .btn-secondary:hover, .btn-success:hover, .btn-info:hover {
            background-color: #a0522d;
            color: #fff;
            border-color: #a0522d;
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
            transform: translateY(-2px);
        }

        .btn-back {
            background-color: #8b4513;
            color: #f9f5f0;
            border: 1px solid #8b4513;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(139, 69, 19, 0.2);
            transition: background-color 0.3s, transform 0.3s;
            font-family: 'Raleway', sans-serif;
        }

        .btn-back:hover {
            background-color: #a0522d;
            transform: scale(1.05);
        }

        .btn-outline-info {
            color: #8b4513;
            border-color: #8b4513;
        }

        .btn-outline-info:hover {
            background-color: #8b4513;
            color: #f9f5f0;
            border-color: #8b4513;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            color: #5a3921;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #8b4513;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.2);
            letter-spacing: 1px;
        }

        .location {
            font-style: italic;
            color: #cd853f;
            font-size: 0.9rem;
        }

        .embroidery-icon {
            font-size: 1.5rem;
            margin: 0 5px;
            color: #8b4513;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border-bottom: 1px solid #cd853f;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        .logo {
            height: 80px;
            filter: drop-shadow(0 0 5px rgba(139, 69, 19, 0.3));
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

    <div class="container mt-3">
        <div class="card p-4">
            <div class="header-section">
                <div class="logo-container">
                    <img src="https://cdn-icons-png.flaticon.com/512/2452/2452496.png" alt="Logo STILOS" class="logo">
                </div>
                <h1 class="store-name">STILOS</h1>
                <p class="location">Huanta, Ayacucho</p>
                <h2 class="mb-0">Registrar Usuario</h2>
            </div>
            
            <form action="" class="from-control" id="frmRegistrar">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nro_identidad" class="form-label">
                            <i class="fas fa-id-card embroidery-icon"></i> Número de Identidad:
                        </label>
                        <input type="text" id="nro_identidad" name="nroIdentidad" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="razon_social" class="form-label">
                            <i class="fas fa-user embroidery-icon"></i> Razón Social:
                        </label>
                        <input type="text" id="razon_social" name="razonSocial" class="form-control" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telefono" class="form-label">
                            <i class="fas fa-phone embroidery-icon"></i> Teléfono:
                        </label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="correo" class="form-label">
                            <i class="fas fa-envelope embroidery-icon"></i> Correo Electrónico:
                        </label>
                        <input type="text" id="correo" name="correo" class="form-control" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="departamento" class="form-label">
                            <i class="fas fa-map embroidery-icon"></i> Departamento:
                        </label>
                        <input type="text" id="departamento" name="departamento" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="provincia" class="form-label">
                            <i class="fas fa-map-marker-alt embroidery-icon"></i> Provincia:
                        </label>
                        <input type="text" id="provincia" name="provincia" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="distrito" class="form-label">
                            <i class="fas fa-map-pin embroidery-icon"></i> Distrito:
                        </label>
                        <input type="text" id="distrito" name="distrito" class="form-control" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cod_postal" class="form-label">
                            <i class="fas fa-mail-bulk embroidery-icon"></i> Código Postal:
                        </label>
                        <input type="number" id="cod_postal" name="cod_postal" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label">
                            <i class="fas fa-home embroidery-icon"></i> Dirección:
                        </label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="rol" class="form-label">
                        <i class="fas fa-user-tag embroidery-icon"></i> Rol:
                    </label>
                    <select id="rol" name="rol" class="form-control" required>
                        <option value="" disabled selected>Seleccione un rol</option>
                        <option value="proveedor">Proveedor</option>
                        <option value="trabajador">Trabajador</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="button" class="btn btn-info" onclick="registrarPersona();">
                        <i class="bi bi-check-circle me-2"></i>Registrar Usuario
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="<?php echo BASE_URL ?>views/js/functions_persona.js"></script>
</body>

</html>