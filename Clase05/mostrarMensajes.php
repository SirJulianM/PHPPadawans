<?php 

/*
* Mostrar mensajes
* Para mostrar mensajes, PHP nos ofrece dos comandos: echo y print. No existe diferencias funcionales entre ambos
* echo "Una cadena de texto
* print $una_variable //Para mostrar la variable se antepone el $
* echo UNA_CONSTANTE
*/

$usuario = 'Julián';
$email = "julian@email.com";

define('WEBSITE', 'Bit Blog');


echo("Esto fue impreso con el comando echo: ");
echo $usuario;
echo "<hr />";
print "Esto fue impreso con el comando print: ";
print $usuario;
echo "<hr />";
echo "Constante impresa con echo: ";
echo WEBSITE;
echo "<hr />";
print "Constante impresa con print: ";
print WEBSITE;

?>