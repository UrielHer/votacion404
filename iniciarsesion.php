<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicia Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloiniciasesion.css">
</head>
<body>
	<section>
	<div class="cabecera">
		<ul>
			<li><a href="index.php">Inicio</a></li>
		</ul>
		<nav class="opciones">
			<a id="" href="registro.html">Registrate</a>
		</nav>
	</div>
	</section>

	<!--<form>
		<h2>Inicia Sesión</h2>
		<br>
			Correo: <input type="text" name="nombre" id="nombre" size="10"/>
		<br>
			Contraseña: <input type="password" name="contraseña" size="10"/>
		<br/>
			
		<br/>
			<input type="button" value="REGISTRAR" id="botonE" onclick="recuperarDatosFormulario();" />
	</form>-->

	<section>
		<form action="controlsesion.php" method="post">
			<input type="text" name="nombre" placeholder="Usuario"><br>
			<input type="submit" name="btnGuardar" value="Guardar">
		</form>

		<!--<?php
			if (isset($_SESSION['nombreU'])and $_SESSION['nombreU']!='') {
				echo "Hola ".$_SESSION['nombreU']. " usted es ".$_SESSION['perfil'];
			}else{
				echo '';
			}
		?>

		<br><a href="controlsesion.php?opcion=Cerrar">Cerrar Sesion</a>-->
	</section>
</body>
</html>