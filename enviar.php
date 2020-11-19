<?php
		$destino= "joaquin.tommasi@gmail.com";
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$email = $_POST["email"];
		$asunto = $_POST["asunto"];
		$mensaje = $_POST["mensaje"];
		$contenido = "nombre: " . $nombre . "\napellido: " .$apellido . "\nemail" . $email . "\nasunto" .$asunto . "\nmensaje" .$mensaje;
		mail($destino,"Contacto", $contenido);
		header("location:index.html");


		?>