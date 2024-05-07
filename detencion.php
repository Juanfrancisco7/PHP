<?php

// con while

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break; // Esto detendrá el ciclo cuando $i sea igual a 5
    }
    echo $i . "<br>";
    $i++;
}

// con for 

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break; // Esto detiene el ciclo cuando $i es igual a 5
    }
    echo $i . "<br>";
}
