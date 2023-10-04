<?php 

$nombre = 'Julián';
$curso = 'PHP'; 

$rta = $nombre == 'Chepe' || $curso == 'PHP';
//Necesitamos que ambas partes sean verdadero, para que sea true. Con solo una respuesta falsa, da false
$rta2 = $nombre == 'Chepe' && $curso == 'PHP';
//Con una sola respuesta que sea true, toda la sentencia da true, Solo si todo da falso, devuelve false
$rta3 = !($nombre == 'Julián');
//$rta2 = $curso == 'PHP';

var_dump($rta);
echo "<br />";
var_dump($rta2);
echo "<br />";
var_dump($rta3);
echo "<br />";
var_dump($rta && $rta2); //False y true;
echo "<br />";
var_dump($rta || $rta2) //False o true;

?>