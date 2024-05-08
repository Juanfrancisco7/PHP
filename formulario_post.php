<!DOCTYPE html>
<html>
<head>
    <title>Formulario con Comentarios HTML</title>
</head>
<body>

<h2>Deja tu comentario:</h2>

<form action="procesar_post.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>
    
    <label for="comentario">Comentario:</label><br>
    <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea><br><br>
    
    <input type="submit" value="Enviar Comentario">
</form>

<!-- Este es un comentario en HTML que no será visible en la página -->
<p>Este párrafo no se muestra en la página pero está presente en el código fuente.</p>

</body>
</html>