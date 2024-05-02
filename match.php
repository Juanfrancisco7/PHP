<?php

// Definimos una variable que representa el día de la semana
$dia = "martes";

// Usamos la expresión match para evaluar diferentes casos según el valor de la variable $dia
$mensaje = match($dia) {
    'lunes' => "Hoy es lunes. Es el primer día laboral de la semana.",
    'martes', 'miércoles', 'jueves' => "Hoy es $dia. A mitad de camino de la semana.",
    'viernes' => "Hoy es viernes. ¡Fin de semana cerca!",
    default => "Hoy no es un día de la semana válido."
};

// Imprimimos el mensaje correspondiente al día de la semana
echo $mensaje;
