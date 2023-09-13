<?php 

$numero = "5";

$rta3 = $numero === 5; 
//Comparamos, $rta3 será verdadero o falso, pero también se fija en los tipo de dato (dónde un string no es lo mismo que un Number)

$rta2 = $numero == 5; 
//Comparamos, $rta2 será verdadero o falso según los valores de $numero y el 5

$rta1 = $numero = 5; 
//Solo asignó valor... $numero almacenó 5 ... y $rta1 almacenó $numero (que era 5)

echo("<br> Respuesta 1 tiene un solo igual, guarda 5 dentro de número y adentro de rta1 <br>");

var_dump($rta1);

echo("<br> Respuesta 2 Compara con dos iguales... guarda true o false, según sean el mismo valor o no (no diferencia tipo de datos) <br>");

var_dump($rta2);

echo("<br> Respuesta 3 Compara contres iguales.. guarda true o false evaluando valor y tipo de datos donde 5 number no es igual a 5 string<br >");

var_dump($rta3);

?>