<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>
<body>
    <h3>Subir archivo</h3>
<form action="carga.php" method="POST" enctype="multipart/form-data"
class="FormularioAjax">
    <input type="file" name="fichero">
    <br> <br>
    <button type="submit">Enviar</button>
</form>
<script src="ajax.js"></script>
</body>
</html>