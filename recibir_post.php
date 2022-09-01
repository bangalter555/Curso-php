<?php
// Imprimimos la variable global $_POST
print_r($_POST);
echo "<br>";
/* Esto me va a imprimir un array con dos elementos con pares de clave-valor:
por ej. Array ( [usuario] => estebamlo1975@gmail.com [password] => slslslslsl )
*/

// Podemos manipular esto asignandoles variables
$usuario = $_POST["usuario"];
echo $usuario;
echo "<br>";

$contraseña = $_POST["password"];
echo $contraseña;


?>