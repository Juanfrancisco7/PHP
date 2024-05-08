<!DOCTYPE html>
<html>
<head>
    <title>Procesando Comentario</title>
</head>
<body>

<?php
// Verificar si se han enviado datos a través del método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    // Mostrar los datos recibidos
    echo "<h2>¡Gracias por tu comentario, $nombre!</h2>";
    echo "<p>Tu comentario:</p>";
    echo "<blockquote>$comentario</blockquote>";
} else {
    // Si no se enviaron datos a través del método POST, mostrar un mensaje de error
    echo "<h2>Error: No se han recibido datos del formulario.</h2>";
}
?>

</body>
</html>