<?php  

	$destino= "santa.ana@grupodionys.com.pe";
	$nombre=$_POST["name"];
	$correo=$_POST["email"];
	$mensaje=$_POST["comments"];
	$contenido = "Nombre: " . $nombre .  "\nCorreo: " . $correo . "\nComentario: " . $mensaje;

	mail($destino, "WEB TOBOGANES", $contenido);
	header("Location:index.html");
 ?>

