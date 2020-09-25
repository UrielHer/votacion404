<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloindex.css">
</head>
<body>
	<div class="cabecera">
		<header>
			<ul>
				<li><a href="index.php">Inicio</a></li>
			</ul>
			<nav class="opciones">
				<!--<a id="" href="registro.html">Registrate / </a>-->
				<a id="" href="iniciarsesion.php">Inicia Sesión</a>
			</nav>
		</header>
	</div>

	<div class="col-sm-4">        
		<div class="thumbnail">          
			<img src="imagenes/rojo.jpeg" alt="San Francisco" width="300" height="300">          
			<p><strong>Rojo</strong></p>          
			<p>Votos: <?php                   
				if(isset($_SESSION['rojo'])){ 
					echo $_SESSION['rojo']; 
				}                  
				else{              
				$votos='';  echo $votos; 
				} ?>          
			</p>          
			<a href="fotocontroler.php?v1=1" class="btn">Votar</a>        
		</div>      
	</div>

	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="imagenes/azul.jpeg" alt="San Francisco" width="300" height="300">
			<p><strong>Azul</strong></p>          
			<p>Votos: <?php
				if(isset($_SESSION['azul'])){ 
					echo $_SESSION['azul']; 
				}                  
				else{              
				$votos='';  echo $votos; 
				} ?>          
			</p>          
			<a href="fotocontroler.php?v2=1" class="btn">Votar</a>        
		</div>      
	</div>

	<div class="col-sm-4">        
		<div class="thumbnail">          
			<img src="imagenes/verde.jpeg" alt="San Francisco" width="300" height="300">          
			<p><strong>Verde</strong></p>          
			<p>Votos: <?php                   
				if(isset($_SESSION['verde'])){ 
					echo $_SESSION['verde']; 
				}                  
				else{              
				$votos='';  echo $votos; 
				} ?>          
			</p>          
			<a href="fotocontroler.php?v3=1" class="btn">Votar</a>        
		</div>      
	</div>

</body>
</html>