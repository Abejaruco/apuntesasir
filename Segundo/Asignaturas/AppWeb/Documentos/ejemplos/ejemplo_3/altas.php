<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: 04_acceso.php');
	exit();
}
	include("05_registro.php");
?>