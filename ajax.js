// ajax.js

const subirArchivo = () => {
    const formulario = document.querySelector('.FormularioAjax');
    const archivoInput = formulario.querySelector('input[type="file"]');
    const archivo = archivoInput.files[0];
    const formData = new FormData();
    formData.append('archivo', archivo);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'carga.php', true);

    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    };

    xhr.send(formData);
}

document.addEventListener('DOMContentLoaded', () => {
    const botonEnviar = document.querySelector('.FormularioAjax button[type="submit"]');
    botonEnviar.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar que se envíe el formulario de forma convencional
        subirArchivo();
    });
});
