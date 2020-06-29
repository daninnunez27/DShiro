<?php
$destino= "daninnunez27@gmail.com";
$correo= $_POST["correo"];
$comentario= $_POST["comentario"];
$contenido = "Correo: " . $correo . "\nComentario: " . $comentario;
mail($destino, "Contacto", $contenido);
?>