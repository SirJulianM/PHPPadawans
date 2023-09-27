<?php 

$numero = "10";
var_dump($numero);

echo "<h1>Con If</h1>";

if ($numero === 10) {
    echo "El número $numero es númerico";
} else {
    echo "El número $numero no es numérico (string)";
}


echo "<h1>Con Switch</h1>";

switch ($numero) {
    case 10: //Debemos escribir cada case hasta el 99
        echo "El número $numero es númerico";
        break;
    
    default:
        echo "El número $numero no es numérico (string)";
        break;
}

?>