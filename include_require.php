<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Include y require</title>
	<style>
		#container{width: 500px; margin: 150px auto;}
		#footer{background-color: #222; padding: 10px; color: white;}
		#menu{background-color: #eee; padding: 10px;}
    .list-item{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: tomato; display: inline;}
	</style>
</head>
<body>
  <!-- Una de las caracteristicas principales de PHP o de cualquier lenguaje de programacion que trabaje del lado del servidor es que podemos incrustar codigo de otras paginas o paginas enteras para poder reutilizarlos luego. -->
	<div id="container">
    <?php
    /* Las ventajas de usar 'include()' o 'require()' es que si estamos creando un sitio web o componentes que queremos que sean reuitilizables o que se tengan que incrustar en mas de ua pagina,podemos usar estas funciones para que copie el contenido que hay en un archivo y lo pegue donde nosotros lo estamos indicando*/

  require("menu.php")
    ?>
	<h3>Contenido Principal</h3>
  <?php
  include("footer.php")
/*La diferencia principal entre 'include()' y 'require()' es que si en el primero llegase a fallar la carga de un archivo o solicita un archivo inexistente, el codigo siguiente se ejecuta de todas formas, mientras que en el segundo se detiene le ejecucion de todo el codigo */
	?>
	</div>
</body>
</html>