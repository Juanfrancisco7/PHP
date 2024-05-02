<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Edad</title>
</head>
<body>
    <form method="post">
        <label for="edad">Introduce tu edad:</label>
        <input type="text" id="edad" name="edad">
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Verificar si se ha enviado el formulario y la edad está definida
    if (isset($_POST['edad'])) {
        // Obtener la edad del formulario
        $edad = intval($_POST['edad']);

        // Verificar la edad y mostrar el mensaje correspondiente
        if ($edad > 20) {
            echo "Eres mayor de 20 años.";
        } elseif ($edad < 20) {
            echo "Eres menor de 20 años.";
        } else {
            echo "Tienes 20 años.";
        }
    }
    ?>
</body>
</html>