<?php

/* 
*   SINTAXIS ALTERNATIVA
*   Al anidar estructuras terminamos con una llave adentro de otra llave, lo cual - a mediano o corto plazo - se vuelve inentendible 
*   hasta para nosotros.
*   Por eso, PHP ofrece como alternativa que, en lugar de abrir llaves, el bloque de código se agrupe con dos puntos - if (condicion): -
*   Luego, en lugar de cerrar llaves, se cierra el bloque con endestructura (sin espacio entre el end y la estructura). endif;
*   La única estructura que no lo acepta, es el do porque obligatoriamente debe cerrar la condición de la mano del while
*   

*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 350px;
            border-collapse: collapse;
        }

        td, th{
            border: 1px solid #000;
        }

        .feriado{
            background-color: pink;
            color: darkred;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Dom</th>
            <th>Lun</th>
            <th>Mar</th>
            <th>Mie</th>
            <th>Jue</th>
            <th>Vie</th>
            <th>Sat</th>
        </tr>
        <tr>
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<td";
                    switch ($i) {
                        case '6':
                        case '25':
                        case '29':
                            echo " class='feriado'>$i</td>";
                            break;
                        
                        default:
                            echo ">$i</td>";
                            break;   
                    }
                    if ($i % 7 == 0) {
                        echo "<tr></tr>";
                    }
                }
            ?>
        </tr>
    </table>
</body>

</html>