<?php 

$colours = [ 'red' => 'rojo', 'yellow' => 'amarillo', 'blue' => 'azul', 'green' => 'verde'];

echo "<h2>Lista de colores</h2><br />";

echo"<ul>";
foreach ($colours as $ingles => $espanol) {
    echo "<li>$ingles -  $espanol</li>";
}
echo "</ul>";

echo "<h2>ksort() </h2><br />";

ksort($colours);
echo"<ul>";
foreach ($colours as $ingles => $espanol) {
    echo "<li>$ingles -  $espanol</li>";
}
echo "</ul>";

echo "<h2>krsort() </h2><br />";

krsort($colours);
echo"<ul>";
foreach ($colours as $ingles => $espanol) {
    echo "<li>$ingles -  $espanol</li>";
}
echo "</ul>";

echo "<h2>sort() </h2><br />";

sort($colours);
echo"<ul>";
foreach ($colours as $ingles => $espanol) {
    echo "<li>$ingles -  $espanol</li>";
}
echo "</ul>";

echo "<h2>rsort() </h2><br />";

rsort($colours);
echo"<ul>";
foreach ($colours as $ingles => $espanol) {
    echo "<li>$ingles -  $espanol</li>";
}
echo "</ul>";



