<?php

session_start();
require_once('artista.php');
extract($_REQUEST);
$objArtista = new Artista();
if (isset($v1)and $v1==1) {
	//si no existe la variable futu1 se va incrementando, pero esto solo es para la primra foto 
	if (!isset($_SESSION['rojo'])) {
		
		$_SESSION['rojo']=1;
	}
	else {
		
		$_SESSION['rojo']++;
	}
	$id=$objArtista->obtenerId(1);
	$objArtista->actualizarVotos($id);
}
if (isset($v2)and $v2==1) {
	
	if (!isset($_SESSION['azul'])) {
		
		$_SESSION['azul']=1;
	}
	else {
		
		$_SESSION['azul']++;
	}
	$id=$objArtista->obtenerId(2);
	$objArtista->actualizarVotos($id);
}
if (isset($v3)and $v3==1) {
	 
	if (!isset($_SESSION['verde'])) {
		
		$_SESSION['verde']=1;
	}
	else {
		
		$_SESSION['verde']++;
	}
	$id=$objArtista->obtenerId(3);
	$objArtista->actualizarVotos($id);
}
include('index.php');
?>