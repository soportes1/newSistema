<html> 
<head> 
	<title> Mi  formulario </title> 
</head> 
<body>

	<h3> ¡Su formulario se ha enviado correctamente! </h3>
	<p> 
		<?php 
		echo anchor ('formulario_controller/index','¡Inténtalo de nuevo!');
		?> 
	</p>

</body> 
</html>