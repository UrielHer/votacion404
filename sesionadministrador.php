<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilosesionadmin.css">
</head>
<body>
	<section class="cabecera">
		<?php
			if (isset($_SESSION['nombreU'])and $_SESSION['nombreU']!='') {
				echo "Hola ".$_SESSION['nombreU']. " usted es ".$_SESSION['perfil'];
			}else{
				echo '';
			}
		?>
	
		<a class="cerrar" href="controlsesion.php?opcion=Cerrar">Cerrar Sesion</a>

	</section>

</body>
</html>