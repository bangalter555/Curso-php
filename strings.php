<?php
// Funciones para strings
$presentacion = "Hola! Me llamo Esteban, tengo 30 anos y quiero aprender PHP";

// Longitud - cuantos caracteres tiene la cadena 'strlen(str)'
echo strlen($presentacion);
echo "<br>";

// Numero de palabras - cuantas palabras tiene una cadena 'str_word_count(str)'
echo str_word_count($presentacion);
echo "<br>";

// Reverse - funcion util para ivnertir textos (buscar el palindromo) 'strrev(str)'
echo strrev($presentacion);
echo "<br>";

/* Encontrar textos - funcion para encontrar posiciones 'strpos(str, palabra)'. Acepta dos parametros: la cadena y la palabra que queremos buscar. FUNCION UTIL PARA VALIDAR CAMPOS, ESPECIALMENTE FORMULARIOS*/
echo strpos($presentacion, "quiero");
echo "<br>";

// Reemplazar textos- funcion para reemplazar texto dentro de una cadena 'str_replace(word,replacement,str)'- muy util para cambiar patrones.
echo str_replace("Esteban","Gustavo", $presentacion);
echo "<br>";

// Convertir a minusculas 'strtolower(str)'
echo strtolower($presentacion);
echo "<br>";

// Convertir a mayusculas 'strtoupper(str)'
echo strtoupper($presentacion);
echo "<br>";

// Comparar cadenas 'strcmp(str1,str2)' - 
echo strcmp($presentacion, "Hola me llamo wacho tengo dos perros y quiero jugar a la pelota");
echo "<br>";

/* Substraer cadenas - substr(str,from,opt) - esta funcion tiene un tercer parametro opcional para explicitar cuanto texto queremos extraer*/
echo substr($presentacion,23,10);
echo "<br>";

/* Remover espacios en blanco - esta funcion es muy util para cuando recibimo informacion con un formato poco legible - trim(str)  */ 
echo trim("            holas       que hubo                ");




?>