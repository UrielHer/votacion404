<?php
	require_once('conexion.php');
	class Artista{
		private $nombre;
		private $tipo;
		private $votos;
		private $id;

		function __construct()
		{
			$this->nombre='';
			$this->tipo='';
			$this->votos=0;

		}

		public function setNombre($nombre){
			$this->nombre=$nombre;
		}

		public function getNombre($nombre){
			return $this->nombre;
		}

		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function getTipo($tipo){
			return $this->tipo;
		}

		public function getVotos($nombre){
			return $this->votos;
		}

		public function setVotos($votos){
			$this->votos=$votos;
		}

		public function insertarArtista(){

		}

		public function actualizarArtista(){
			$sql="UPDATE artista set votos=".$this->getVotos()."WHERE id=id";
		}

		public function consultarArtista(){

		}

		public function obtenerId($id){
			$sql="SELECT id FROM artista WHERE id=$id";
			$resultado=$this->aplicarQry($sql);
			while ($row=mysqli_fetch_assoc($resultado)) {
				$this->id=$row['id'];
			}
			return $this->id;
		}

		public function actualizarVotos($id){
			switch ($id) {
				case 1: $sql="UPDATE artista set votos=".$_SESSION['rojo']." WHERE id=$id";
					break;
				case 2: $sql="UPDATE artista set votos=".$_SESSION['azul']." WHERE id=$id";
					break;
				case 3: $sql="UPDATE artista set votos=".$_SESSION['verde']." WHERE id=$id";
					break;
			}
			$resultado=$this->aplicarQry($sql);
			return $resultado;
		}

		public function aplicarQry($sql){
		 	$objConectar = new Conexion();
			$resultado = $objConectar->ejecutarConsulta($sql);
			$objConectar-> cerrarConexion();
			return $resultado;
		}
	}
?>