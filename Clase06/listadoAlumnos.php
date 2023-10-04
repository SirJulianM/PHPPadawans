<?php

$alumno1 = 'Julián';
$alumno2 = 'Mónica';
$alumno3 = 'Edward';
$alumno4 = 'Sofía';

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
    //Lista generada, cortando las cadenas de texto y concatenando
    echo '<h2>Concatenando</h2>';
    echo '<ul><li>'.$alumno1.'</li><li>'.$alumno2.'</li><li>'.$alumno3.'</li><li>'.$alumno4.'</li></ul>';
    //Lista generada con comillas simples sin concatenar
    echo '<h2>Sin concatenar con comillas simples</h2>';
    echo '<ul><li>$alumno1</li><li>$alumno2</li><li>$alumno3</li><li>$alumno4</li></ul>';
    //Lista generada con comillas dobles sin concatenar
    echo '<h2>Sin concatenar con comillas dobles</h2>';
    $variable = "<ul><li>$alumno1</li><li>$alumno2</li><li>$alumno3</li><li>$alumno4</li></ul>";
    echo $variable;
    ?>
  </body>
</html>
