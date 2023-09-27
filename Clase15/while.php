<?php

/*
*   CICLOS ABIERTOS
*   Estos ciclos no nos permiten saber de antemano cuantas veces se van a iterar. Y, dentro de este conjunto, tenemos las estructuras
*   while y do 
*   
*   while{
*   //Acciones a repetir en cada vuelta
*   }
*
*   do{
*   //Acciones a repetir en cada vuelta    
*   } while(condicion)
*
*   Estos ciclos requieren una condición o expresión booleana, que en cada iteración se evaluará y de ser verdadera, pasará a la
*   siguiente vuelta
*   La condición SIEMPRE es motivo del while y en el caso del do, SIEMPRE cierra con un while que lleva la condición 
*
*   LA SUTIL DIFERENCIA
*   La diferencia entre las estructuras while y do está a la vista, en el lugar en que sucede la evaluación del booleano
*   El while primero evalúa la condición y solo de ser verdadera ingresa al ciclo. El do primero realiza las acciones y luego verifica
*   si debe hacer una vuelta más. En consecuencia, el do siempre realiza al menos una iteración, aunque tenga un valor inválido para la
*   condición desde el principio

*/

$num = 10;
var_dump($num);
echo "<br /> Con while";
echo "<hr />";

while ($num < 15) {
    echo "$num es menor que 15 <br />";
    $num++;
}

echo "<hr />";
var_dump($num);

?>
