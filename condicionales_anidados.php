<?php

// Definimos una variable que representa el día de la semana
$dia = "martes";

// Evaluamos la variable $dia utilizando estructuras condicionales anidadas
if ($dia == "lunes") {
    echo "Hoy es lunes. Es el primer día laboral de la semana.";
} elseif ($dia == "martes" || $dia == "miércoles" || $dia == "jueves") {
    // Si el día es martes, miércoles o jueves, mostramos un mensaje específico
    if ($dia == "martes") {
        echo "Hoy es martes. A mitad de camino de la semana.";
    } elseif ($dia == "miércoles") {
        echo "Hoy es miércoles. Se acerca el fin de semana.";
    } else {
        echo "Hoy es jueves. Mañana es viernes.";
    }
} elseif ($dia == "viernes") {
    echo "Hoy es viernes. ¡Fin de semana cerca!";
} else {
    echo "Hoy no es un día de la semana válido.";
}
