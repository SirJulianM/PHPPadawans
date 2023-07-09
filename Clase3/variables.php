<?php 

echo("Aquí van las variables");
echo("<br />");

/* 

* Las variables deben tener ciertas reglas sintácticas
* 1) No aceptan espacios, tildes ni eñes. Solo letras, números y guión bajo ( _ )
* 2) No puede ser una palabra reservada del lenguaje
* 3) El primer signo debe ser el signo dólar/pesos ( $ )
* 4) El segundo carácter no puede ser un número
* 5) Toda variable se genera en memoria desde el momento en que se le asigna un valor
* 6) El operador de asignación es el signo igual
* 7) Las variables no tienen tipo de dato, el tipo de dato va mutando según cambiamos los valores de la variable

*/

$nombre = "Edward";
$apellido = "Madrid";
$email = "eddforce1@hotmail.com";
$edad = 10;

echo("Mi nombre es ".$nombre." ".$apellido.", tengo ".$edad." años y mi correo electrónico es ".$email);
echo "<hr />";
/*echo($nombre);
echo(" ");
echo($apellido);
echo(" ");
echo($edad);
echo(" ");
echo($email);*/

$nombre = 100;

echo("Nombre ha cambiado de valor: ");
echo($nombre);

?>