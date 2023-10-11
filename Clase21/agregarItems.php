<?php 

$nombre = 'Julián';

$cursos = array('frontend', 'backend', 'javascript'); //Esta manera existe en todas las versiones de PHP
$tecnologias = ['php', 'mysql', 'html', 'css']; //Esta manera de crear un array solo existe a partir de PHP en su versión 7 en adelante

$ficha = array($nombre, 36, true, 'YouLauss');

$tecnologias[4] = 'linux';
array_push($tecnologias, 'vue', '.net', 'react');
$tecnologias[]='javascript';
$tecnologias[]='angular';
$tecnologias[]='bash';
var_dump($ficha);
echo "<hr /><pre>";
print_r($tecnologias);
echo "</pre> $nombre";  //Muestra tipo de dato y largo por cada item del array. Sirve para cualquier tipo de dato