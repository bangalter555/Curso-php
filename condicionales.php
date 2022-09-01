<?php

$hora = 17;

if ($hora >= 7 && $hora <= 12) {
  echo "Hola, buenos dias";
} elseif ($hora > 13 && $hora <= 18) {
  echo "Hola, buenas tardes";
} else {
  echo "Hola, buenas noches"; 
}

?>