<?php
/*
*   CORTAR CICLOS DE REPETICIÓN
*   Todo ciclo de repetición se puede interrumpir con las instrucciones de break y continue:
*   - Continue, corta la repetición actual (en el lugar del script donde se escriba) y si quedan iteraciones pendientes, pasan
*   a la siguiente
*   - Break corta la iteración actual y todas las demás
*   Desde PHP7 se acepta que el break indique cuantos ciclos debe cortar, solo si tenemos estructuras anidadas.
*   Cualquier número después del break indica cuántos niveles debe "salir" y corta ese ciclo en particular
*/

for ($i=1; $i <=100 ; $i++) { 
    echo "<h1>Estoy en el número $i</h1>";
    $esPar = $i % 2 == 0;
    if($i == 50){
        break;
    }
    if( $i % 5 == 0){
        continue;
    }
    if ($esPar) {
        echo "$i es múltiplo de 2";
    } else {
        echo "$i NO es múltiplo de 2";
    }
}