<?php

$Nombre = array ( "nombre" => $_POST["nombre"], "apellido" => $_POST["apellido"] );

$imagenNombre = imagecreatetruecolor(400, 200);
$color = imagecolorallocate($imagenNombre, 10, 5, 5);
imagecolortransparent($imagenNombre, $color);
imagestring($imagenNombre, 5, 5, 5, $Nombre["nombre"], 0xFFFFFF);
imagestring($imagenNombre, 5, 5, 50, $Nombre["apellido"], 0xFFFFFF);
header("Content-type: image/png");
imagepng($imagenNombre);
imagedestroy($imagenNombre);

?>