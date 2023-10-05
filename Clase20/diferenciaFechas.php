<?php

/*
*   DIFERENCIA DE FECHAS
*   Podemos pedirle a php que calcule una fecha en relación a otra (que día es mañana o que cayó un mes atrás)
*   La función strtotime(), recibe dos argumentos
*   -   El primero es una cadena de texto con los días/meses/hora/minutos que se quieren sumar o restar
*   -   El segundo, es un valor EPOCH de la fecha a modificar
*   Esto devuelve también un resultado en el formato EPOCH
*/

$ahora = time();
$limite = strtotime("-10 days", $ahora);
$ahora_spa = date("d-m-Y H:i:s", $ahora);
$limite_spa = date("d-m-Y H:i:s", $limite);

echo $ahora.' '.$ahora_spa."<hr />".$limite.' '.$limite_spa;