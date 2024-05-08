<!DOCTYPE html>
<html>
<head>
    <title>Procesando Método GET</title>
</head>
<body>
    <?php
    // Obtener los datos enviados por el formulario GET
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];

    // Mostrar los datos
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    ?>
</body>
</html>