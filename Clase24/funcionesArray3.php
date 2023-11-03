<?php

$colores = ['rojo','amarillo', 'azul', 'verde'];

/*foreach ($colores as $color) {
    echo "$color -";
}

echo "<hr />";*/

$color = implode(' / ', $colores);

echo $color;

echo "<hr />";

$paises = "México,Brasil,Argentina,Uruguay,Chile,Colombia,Ecuador";
var_dump($paises);
$array_paises = explode(",",$paises);
var_dump($array_paises);

echo "<hr />";

sort($array_paises);
var_dump($array_paises);
$azar = rand(0, count($array_paises) -1);
var_dump($azar);
echo "<br/>$array_paises[$azar]";

$azar2 = array_rand($array_paises);
var_dump($azar2);
echo "<br/>$array_paises[$azar2]";
