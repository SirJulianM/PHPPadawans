<?php 

$edad = 8;

if ($edad < 12) {
    echo "Con $edad es menor de edad";
} else {
    if ($edad < 20) {
        echo "Con $edad es un adolescente";
    } else {
        if ($edad < 60) {
            echo "Con $edad es una persona laboralmente activa";
        } else {
            echo "Con $edad es una persona con edad para jubilarse";
        }
    }
}

//https://www.youtube.com/watch?v=d6kLuxU6rw8

?>