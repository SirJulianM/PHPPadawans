<?php

/*
*   FUNCIONES CON VARIABLES GLOBALES

*/

$nombre = "Julián";
$email = "julian@email.com";

function saludar2() {
    global $nombre, $email; //Esto sale de la función y busca la variable en otro lugar del script
    $mensaje = "Hola $nombre, bienvenido al sistema, vas a acceder con tu correo $email";
    echo $mensaje;
    $nombre = 'Juan';
}

saludar2();
echo "<hr />";
echo $nombre;