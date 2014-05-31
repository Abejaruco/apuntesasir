<?php
	include "funciones.php";
	if(!isset($_GET['tipo'])){
		print "<h3>Pincha en un enlace de la izquierda</h3>";
	}else{
		$tipo = $_GET['tipo'];
		$titulo = ucwords($tipo);
		print "<h1>$titulo</h1>";
		$listaFotos=getListaFotos($tipo);
		$fotos = getFotos($listaFotos);
		print $fotos;
	}
?>