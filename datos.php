<?php

// Tipos de datos en PHP

// Caracter
$letra = "c";

// Entero
$numero = 45;

// Cadena
$palabra = "Hola mundo";

// Booleano - son valores con palabras reservadas 'true' y 'false' 
$verdadero = true;
$falso= false;

// Flotante
$decimal = 5.43;

// Arreglo - coleccion de datos 'array("")'
$arrayDePalabras = array("Hola","Chau"); 
$arrayDeNums = array(5,6,7,8);

// nulos
$nada = null;

// Como imprimir un array
// No podemos utilizar 'echo'. Utilizamos 'print_r()'
print_r($arrayDePalabras);
echo "<br>";
print_r($arrayDeNums);
?>