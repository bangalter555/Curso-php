<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: gray;
    }

    p {
      font-size: 20px;
      font-weight: 700;
    }

  </style>
  <title>Curso PHP</title>
</head>
<body>
  <div>
    <p>Bucle For</p>
  <?php
// Bucles
// bucle for
for($i = 0;$i < 10;$i++) {
?>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbaXrWM852qoGBf3dxIQGq397YLrERD7DxyQ&usqp=CAU" alt="img">
 <?php
}
 ?>

  </div>
  <div>
    <p>Bucle While</p>
  <?php
//  Bucle while
// utilizaremos la funcion matematica 'rand(num1,num2)' que es el equivalente a 'Math.random()' en JS
while(rand(1,10) != 5) {
  ?>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbaXrWM852qoGBf3dxIQGq397YLrERD7DxyQ&usqp=CAU" alt="img">
  </div>
  <?php
}
?>
</body>
</html>
