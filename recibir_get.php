<?php
// Imprimimos la variable global $_GET
print_r($_GET);
echo "<br>";

$usuario = $_GET["tipo_usuario"];
echo $usuario;
echo "<br>";

$navegador = $_GET["navegador"];
echo $navegador;
?>