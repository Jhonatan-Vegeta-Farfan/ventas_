<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso - STILOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            background-color: rgba(255, 253, 250, 0.95);
            border: 1px solid #cd853f;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
            padding: 30px;
            margin-top: 100px;
            position: relative;
            max-width: 600px;
        }

        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #8b4513, #cd853f, #8b4513);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #8b4513;
            margin-bottom: 20px;
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

        .logo-container {
            margin-bottom: 20px;
        }

        .store-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #8b4513;
            font-size: 1.8rem;
            margin-top: 10px;
        }

        .location {
            font-style: italic;
            color: #cd853f;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .embroidery-icon {
            color: #8b4513;
            margin: 0 5px;
        }

        .success-icon {
            font-size: 4rem;
            color: #8b4513;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="logo-container">
            <i class="fas fa-tshirt fa-3x embroidery-icon"></i>
            <h1 class="store-name">STILOS</h1>
            <p class="location">Huanta, Ayacucho</p>
        </div>
        
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        
        <h1>Registro Exitoso</h1>
        <p>Gracias por registrarte. Ya puedes iniciar sesión.</p>
        <a href="login.php" class="btn btn-primary">
            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
        </a>
    </div>
</body>

</html>