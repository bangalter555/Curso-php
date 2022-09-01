<?php
// OPERADORES

$a = 35;
$b = 10;
echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";

$a = $b;
echo $a;
echo "<br>";

$c = 20;
$d = 46;

// la expresion var_dump() sirve para evaluar el valor de una expresion 
var_dump($c === $d);
echo "<br>";
var_dump($c <> $d);
echo "<br>";
var_dump($c >= $d);
echo "<br>";
var_dump($c != $d);
echo "<br>";
?>