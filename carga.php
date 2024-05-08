<?php

// Verificar si el directorio "archivos" no existe
if (!is_dir("archivos")) {
    // Intentar crear el directorio "archivos"
    if (!mkdir("archivos", 0777)) {
        echo "Error al crear el directorio";
        exit(); // Salir del script si no se pudo crear el directorio
    }
    // Asignar permisos al directorio "archivos"
    chmod("archivos", 0777);
}

// Verificar si se ha enviado un archivo
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
