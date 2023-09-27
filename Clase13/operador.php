<?php 

$numero = 40;
var_dump($numero);

echo "<h1>Con If</h1>";

if ($numero > 5 && $numero < 100) {
    echo "El número $numero está dentro del rango 6-99";
} else {
    echo "El número $numero está fuera del rango esperado";
}


echo "<h1>Con Switch</h1>";

switch ($numero) {
    case 6:
    case 7:
    case 8: //Debemos escribir cada case hasta el 99
        echo "El número $numero está dentro del rango 6-99";
        break;
    
    default:
        echo "El número $numero está fuera del rango esperado";
        break;
}

?>