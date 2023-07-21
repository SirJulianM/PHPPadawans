<?php

/* 

*Heredoc 

* Es una manera 'alternativa' de delimitar el principio y el final de un string
* Tanto para hacer echo o guardar en una variable, se inicia con la secuencia de tres signos menores: <<<
* Junto a los <<< viene una secuencia de caracteres delimitadores a tu elección
* PHP asume que el string termina al encontrar de nuevo ese delimitador: sin los tres menores ni espacios al principio
* Adentro pueden usar comillas dobles, simples, variables, enter y tabulaciones. Ideal para generar tiempos (y "más aún" código HTML)

*/

/*  

$lista = <<<LISTA

HTML
CSS
JAVASCRIPT
PHP

LISTA;
*/

$alumno1 = 'Julián';
$alumno2 = 'Mónica';
$alumno3 = 'Edward';
$alumno4 = 'Sofía';

$lista = <<<LISTA

  <ul>
      <li>$alumno1, es el primer alumno</li>
      <li>$alumno2, es el segundo alumno</li>
      <li>$alumno3, es el tercer alumno</li>
      <li>$alumno4, es el último alumno</li>
    </ul>

LISTA;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h2>Alumnos del curso</h2>
    <?php 
    echo $lista; 
    ?>
  </body>
</html>