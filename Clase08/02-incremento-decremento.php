<?php 

$numero = 10;

echo "Número tiene como valor: ".$numero;

$numero++;

echo "<br /> Después del ++, Número tiene como valor: ".$numero;

echo "<hr />";

echo "La variable nos muestra: ".$numero++; 
//El incremento pasa luego de mostrar el mensaje, por ende muestra 11 y luego genera 12

echo "<br/> ++Numero nos muestra: ".++$numero;
//El incremento pasa antes de mostrar el mensaje, por ende genera el 13 y lo muestra

echo "<hr/>";

echo "Numero+=10 nos da: ".$numero+=10;

echo "<hr />";
echo "La variable número finalizó con: ",
var_dump($numero);
?>