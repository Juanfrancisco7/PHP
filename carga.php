<?php
// Verificar si se ha enviado un archivo por el método POST tradicional
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombreArchivo = $archivo['name'];
    $rutaDestino = 'archivos/' . $nombreArchivo;

    if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
        echo "El archivo $nombreArchivo se ha subido correctamente.";
    } else {
        echo "Error al subir el archivo $nombreArchivo.";
    }
    exit(); // Salir del script
}

// Si no se ha enviado un archivo por el método POST tradicional, verificar si se ha enviado por AJAX
if (isset($_FILES["fichero"]) && $_FILES["fichero"]["error"] === UPLOAD_ERR_OK) {
    // Mover el archivo cargado al directorio "archivos"
    $nombre_archivo = $_FILES["fichero"]["name"];
    $ruta_destino = "archivos/" . $nombre_archivo;
    if (move_uploaded_file($_FILES["fichero"]["tmp_name"], $ruta_destino)) {
        echo "El archivo $nombre_archivo se ha subido correctamente.";
    } else {
        echo "Error al subir el archivo $nombre_archivo.";
    }
} else {
    echo "No se ha seleccionado ningún archivo o ha ocurrido un error durante la carga.";
}
?>

