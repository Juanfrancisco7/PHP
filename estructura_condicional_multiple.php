<?php

// Definimos una variable que representa el día de la semana
$dia = "lunes";

// Usamos la estructura switch para evaluar diferentes casos según el valor de la variable $dia
switch ($dia) {
    case "lunes":
        echo "Hoy es lunes. Es el primer día laboral de la semana.";
        break;
    case "martes":
        echo "Hoy es martes. A mitad de camino de la semana.";
        break;
    case "miércoles":
        echo "Hoy es miércoles. Se acerca el fin de semana.";
        break;
    case "jueves":
        echo "Hoy es jueves. Mañana es viernes.";
        break;
    case "viernes":
        echo "Hoy es viernes. ¡Fin de semana cerca!";
        break;
    default:
        echo "Hoy no es un día de la semana válido.";
}

//tambien con if-ifelse

// Definimos una variable que representa el día de la semana
$dia = "lunes";

// Evaluamos la variable $dia usando if y elseif para determinar el mensaje a imprimir
if ($dia == "lunes") {
    echo "Hoy es lunes. Es el primer día laboral de la semana.";
} elseif ($dia == "martes") {
    echo "Hoy es martes. A mitad de camino de la semana.";
} elseif ($dia == "miércoles") {
    echo "Hoy es miércoles. Se acerca el fin de semana.";
} elseif ($dia == "jueves") {
    echo "Hoy es jueves. Mañana es viernes.";
} elseif ($dia == "viernes") {
    echo "Hoy es viernes. ¡Fin de semana cerca!";
} else {
    echo "Hoy no es un día de la semana válido.";
}
