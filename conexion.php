<?php
//conexion a la base de datos

require_once('config.php');
class Conexion{
	public $objConectar;

	function __construct(){
		$this->objConectar = new mysqli(SERVIDOR,USUARIO,CONTRASENA,BASE_DATOS);
		if($this->objConectar->connect_errno){
			printf("Falló la conexión: %\n", $mysqli->connect_error);
			exit();
		}
	}
	public function ejecutarConsulta($consulta){
		$resultado=$this->objConectar->query($consulta);
		return $resultado;
	}
	public function cerrarConexion(){
		$this->objConectar->close();
	}
}

?>