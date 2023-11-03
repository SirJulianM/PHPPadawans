<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

//echo $_POST['Email']."<br />";

//echo $_GET['fecha'] = time(); Esto no existe, ni GET ni POST son de escritura, solo podemos leerlos

$categoriasSeleccionadas = '';
if (isset($_POST['gusto'])) {
    $categoriasSeleccionadas = implode(', ', $_POST['gusto']);
}
$nombreIngresado = 'No definido';

if(!empty($_POST['Nombre'])){
    $nombreIngresado = $_POST['Nombre'];
}

if(empty($_POST['Email'])){
    header("location: pasoDocumentos.php?rta=error");
    die();
}

$mensaje = <<<HTML
<div style="background: lightyellow; width:80%; border: 1px solid #AAA; padding: 10px; font: 12px verdana">
    <h3>Contacto</h3>
    <p>Nombre: $nombreIngresado</p>
    <p>Email: $_POST[Email]</p>
    <p>Categorías: $categoriasSeleccionadas</p>
</div>
HTML;

echo $mensaje;

ob_start();
header("location: pasoDocumentos.php?rta=ok");
die();
?>