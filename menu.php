<div id="menu">
<?php
$list = array("Inicio","Servicios","Blog","Contacto");
for($i= 0;$i < count($list);$i++) {
  echo "<p class='list-item'>$list[$i]</p>" . " ";
}
?>
</div>