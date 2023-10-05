<?php 

/*
*   FECHA ACTUAL
*   La función time() de PHP devuelve los segundos que pasaron desde el 01/01/1970 a las 00:00:00hs.
*   Este valor se conoce como FECHA UNIX o FECHA EPOCH y es una medida de tiempo
*
*   OBTENER UNA FECHA
*   Para indicarle a PHP una fecha determinada y obtener su formato EPOCH, se usa la función mktime()
*   Recibe seis argumentos (todos numéricos): Hora, minuto, segundo, mes, día, año.
*   Si no se reciben argumentos también asume la fecha actual, pero si tenemos los errores habilitados, mostrará un warning
*
*   FORMATEAR FECHAS
*   La forma date() permite formatear una fecha para mostrarla bajo un determinado formato
*   Recibe dos argumentos:
*   El primero es una cadena de texto con el formato que se quiere aplicar
*   El segundo es un valor en formato EPOCH si no se especifica asume que debe ser ahora
*/

$ahora = time();

echo $ahora;

echo "<hr />";

$dia = mktime(15,30,00,01,01,1990);

echo $dia;

echo "<hr />";

$hoy = mktime(1);

echo $hoy;

echo "<hr />";

$ahora_formateado_dia = date("d", $ahora);

echo $ahora_formateado_dia."<hr />";

$ahora_formateado_mes = date("m", $ahora);

echo $ahora_formateado_mes."<hr />";

$ahora_formateado_anio = date("Y", $ahora);

echo $ahora_formateado_anio."<hr />";

$ahora_formateado = date("d/m/Y H:i:s", $ahora);

echo $ahora_formateado."<hr />";

echo "Este es el formato de día ".date("d/D/l")." <hr />";
echo "Este es el formato del mes ".date("m/M")." <hr />";
echo "Este es el formato de año ".date("y/Y")." <hr />";
echo date('d \d\e m \d\e\l Y', $ahora);

//Fechas de pascua

$pascuas_epoch = easter_date(2010);
$pascuas_date = date("d-m-Y", $pascuas_epoch);

$jueves_epoch = strtotime('-3 day', $pascuas_epoch);
$jueves_date = date('d-m-Y', $jueves_epoch);
$viernes_epoch = strtotime('-2 day', $pascuas_epoch);
$viernes_date = date('d-m-Y', $viernes_epoch);

echo "<hr />";
echo "Jueves santo: $jueves_date";
echo "<hr />";
echo "Viernes santo: $viernes_date";
echo "<hr />";
echo "Domingo de pascua: $pascuas_date";
echo "<hr />";