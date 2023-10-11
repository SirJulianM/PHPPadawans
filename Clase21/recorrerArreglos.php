<?php 

$tecnologias = ['php', 'mysql', 'html', 'css'];

$tecnologias[4] = 'linux';
array_push($tecnologias, 'vue', '.net', 'react');
$tecnologias[]='javascript';
$tecnologias[]='angular';
$tecnologias[]='bash';
echo "<hr /><pre>";
var_dump($tecnologias);
echo "</pre><hr />";  //Muestra tipo de dato y largo por cada item del array. Sirve para cualquier tipo de dato

$cantidad1 = sizeof($tecnologias);
$cantidad2 = count($tecnologias);

echo $cantidad1.' - '.$cantidad2."<hr />";

echo "sizeof <br/>";
for ($i=0; $i <sizeof($tecnologias); $i++) { 
    echo $i.' -> '.$tecnologias[$i]."<br />";
}

echo "<hr /> count <br/>";
for ($i=0; $i <count($tecnologias); $i++) { 
    echo $i.' -> '.$tecnologias[$i]."<br />";
}