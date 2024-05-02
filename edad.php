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
        /* $_POST es una superglobal en PHP que se utiliza para recoger datos enviados
         a un script PHP desde un formulario HTML utilizando el método HTTP POST. 
         Cuando un formulario HTML se envía utilizando el método POST, los datos
          del formulario se envían al servidor y se almacenan en el array asociativo
           $_POST en PHP.
         /*
    }
    ?>

    
</body>
</html>