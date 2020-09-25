<?php
	require_once 'sesionclass.php';
	//request se puede utilizar para datos por url u ocultos post o get
	extract($_REQUEST);

	$objSesion = new Sesion();
	
	if (isset($btnGuardar) and $btnGuardar == 'Guardar') {
		$objSesion->crearSesion($nombre);
		include ('sesionadministrador.php');
	}

	if (isset($opcion) and $opcion == 'Cerrar') {
		$objSesion->destruirsesion();
		include ('iniciarsesion.php');
	}
?>