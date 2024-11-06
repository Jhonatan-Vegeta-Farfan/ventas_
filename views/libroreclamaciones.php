<?php
// Inicializar una variable para manejar el estado del formulario
$submitted = false;

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí puedes procesar los datos del formulario, como enviar un correo
    // o guardarlos en una base de datos (ejemplo básico sin validaciones)

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Lógica para enviar el mensaje (por ejemplo, usar mail() en PHP)
    // mail($email, "Reclamación recibida", $message);

    // Cambiar el estado a enviado
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones</title>
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
        }
        .container {
            background-color: #ff0000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        h2 {
            color: #ffffff;
            font-weight: bold;
        }
        .form-control {
            background-color: #000000;
            color: #ffffff;
            border-color: #ffffff;
        }
        .btn-primary {
            background-color: #000000;
            color: #ff0000;
            border-color: #ffffff;
        }
        .btn-primary:hover {
            background-color: #ff0000;
            color: #ffffff;
        }
        .modal-content {
            background-color: #000000;
            color: #ffffff;
            border-color: #ffffff;
        }
        .modal-title {
            color: #ffffff;
        }
        .modal-body, .modal-footer {
            color: #ffffff;
        }
        .img-logo {
            max-height: 50px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="text-center mb-4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Dragon_Ball_Z_Logo_A.png" alt="Dragon Ball Z Logo" class="img-fluid img-logo">
    </div>
    <h2 class="text-center mb-4">LIBRO DE RECLAMACIONES</h2>
    <form id="contact-form" method="POST" action="">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escriba su Nombre Completo..." required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su Correo Electronico..." required>
        </div>
        <div class="form-group">
            <label for="message">Escriba su reclamacion:</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Escriba su reclamo..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php if ($submitted): ?>
<!-- Modal -->
<div class="modal fade show" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Mensaje enviado con éxito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Gracias por elegir nuestra tienda. Nos pondremos en contacto con usted a la brevedad.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" data-dismiss="modal">Volver a la Pagina Principal</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Cerrar modal al hacer clic fuera de él
    $(document).on('click', '[data-dismiss="modal"]', function() {
        $('#successModal').modal('hide');
    });
</script>

</body>
</html>