<?php
	session_start();
	class Sesion
	{
		public function crearSesion($nombre)
		{
			$_SESSION['nombreU'] = $nombre;
			$_SESSION['perfil'] = "Administrador";
		}

		public function destruirSesion(){
			session_destroy();
		}
	}
?>