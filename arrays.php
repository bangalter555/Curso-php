<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
  <style>
    :root {
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}
body {
  background-color: thistle;
  font-size: 2rem;
  padding: 40px;
}
  </style>
</head>
<body>
  <?php
  // ARRAYS
  $frutas = array("banana","manzana","uvas","fresas");

  print_r($frutas);
  echo $frutas[2];
  // echo $frutas[4];
  echo "<br>";


 // ITERAR SOBRE ARRAYS
  // Utilizamos 'count()' para saber cuantos elementos tiene unn arreglo - Es el equivalente a la propiedad 'length' en JS.
  
  echo count($frutas) . " elementos";
  echo "<br>";
  for($i= 0; $i <count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
  }
echo "<br>";


// ARRAYS MAS COMPLEJOS - ARRAYS CON PARES DE CLAVE-VALOR
$personas = array("Esteban" => 30, "Matias" => 28, "Olivia" => 19);
// Utilizamos el metodo 'foreach()' para iterar sobre arrays mas complejos
foreach($personas as $clave => $valor) {
  echo "$clave tiene $valor años" . "<br>";
}

  ?>
</body>
</html>