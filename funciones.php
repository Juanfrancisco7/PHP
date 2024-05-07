<?php

function promedio_alumno($nota_1,$nota_2,$nota_3){
    $promedio=($nota_1+$nota_2+$nota_3)/3;
    return $promedio;
}
echo "El promedio es: "promedio_alumno(7,9,6);
echo "<br>":
echo "El promedio es: "promedio_alumno(8,1,6);
echo "<br>"
echo "El promedio es: "promedio_alumno(7,4,6);
echo "<br>"
echo "El promedio es: "promedio_alumno(2,9,6);
echo "<br>"
echo "El promedio es: "promedio_alumno(7,9,3);
