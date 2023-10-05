<?php

/*
*   ERRORES EN LA FECHA
*   Cuando trabajamos con fechas en PHP, podemos notar una diferencia horaria entre nuestra PC y el valor que ofrece PHP
*   Esto sucede porque PHP asume la hora según UTC (Universal Time Center que es el estándar que se basa en la hora de Greenwich)
*   
*   DEFINIR LA ZONA HORARIA
*   Para que PHP muestre las horas bien, hay que indicar nuestra ubicación geográfica por defecto. Esta configuración afecta a 
*   todas las funciones de fecha que hemos aprendido. Esto se establece con la función date_default_timezone_set()
*   Recibe una cadena de texto con la ruta de: Continente / Pais / Zona (departamento o provincia)  
*/

date_default_timezone_set("America/Bogota");
echo date('Y-m-d H:i:s');