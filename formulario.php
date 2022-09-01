<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="formulario.php" method="POST">
    <?php
		$nombre = "";
		$password = "";
		$email = "";
		$lenguajes = array();
    // 1) Validamos que exista una variable 'nombre en POST'.
    // La funcion 'isset() me permite comprobar si existe una variable o un valor'
      if (isset($_POST["nombre"])) {

        //1.b)  capturo los valores
       $nombre = $_POST["nombre"];
       $password = $_POST["password"];
       $email = $_POST["email"];

			 	//validamos los checkbox
			if (isset($_POST["lenguajes"])) {
				$lenguajes = $_POST["lenguajes"];
			} else {
				$lenguajes = "";
			}

       //Espacio para los mensajes de error
       $campos = array();

      //1.c)  Validamos el nombre
       if ($nombre == "") {
        array_push($campos, "El campo no puede estar vacío");
        // en JS la sintaxis sería asi: 'campos.push("El campo...")'
       }
      //  Validamos la contraseña y su extension
      if ($password == "" || strlen($password) < 6) {   
        array_push($campos, "El campo no puede estar vacío, ni tener menos de 6 caracteres");
      }
      // 1.d) Validamos el email
      if ($email == "" || strpos($email, "@") === false) {
        array_push($campos, "Ingresa un correo válido");
      }
// 1.e) Validamos los checkbox
if ($lenguajes == "" || count($lenguajes) <2) {
	array_push($campos, "Selecciona al menos dos lenguajes de programacion");
}
		

      if (count($campos) > 0) {
        echo "<div class='error'>";
        for($i=0;$i < count($campos); $i++) {
          echo "<li>".$campos[$i]."</li>";
        }
      } else {
        echo "<div class='correcto'>
        Datos correctos";
      }
      echo "</div>";


    }
    ?>
	
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>
		<p>
			Lenguajes de programación <br>	
			<!-- Validamos que las elecciones queden permanentes. Como los valores estan almacenados en una variable $lenguajes que es un array, utilizamos un metodo 'in_array' que comprueba si u elemento existe en un array. Es el equivalente a array.includes() de JS -->
			<input type="checkbox" name="lenguajes[]" value="php" <?php if(in_array("php",$lenguajes)) echo "checked" ?>> PHP <br>
			<input type="checkbox" name="lenguajes[]" value="js" <?php if(in_array("js",$lenguajes)) echo "checed"?>> Javascript <br>
			<input type="checkbox" name="lenguajes[]" value="java"<?php if(in_array("java",$lenguajes)) echo "checked" ?> >> Java <br>
			<input type="checkbox" name="lenguajes[]" value="swift" <?php if(in_array("swift",$lenguajes)) echo "checked" ?> > Swift <br>
			<input type="checkbox" name="lenguajes[]" value="py" <?php if(in_array("py",$lenguajes)) echo "checked" ?> > Python <br>
		</p>



		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>