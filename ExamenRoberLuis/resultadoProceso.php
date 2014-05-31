<?php
session_start();
if(!isset($_SESSION['numTarjeta']) || $_SESSION['numTarjeta'] == ""){
	$_SESSION['error'] = "Debes introducir un número de tarjeta";
	header("location: privada.php");
} else {
	$_SESSION['error'] = "";
}
include "funciones.php";
#imprimirArray($_POST);
#imprimirArray($_SESSION);
$numTarjeta = $_SESSION['numTarjeta'];
$inicioNum = substr($numTarjeta, 0,4);
if($inicioNum == "4117"){
	$imagen = "<img src='Imagenes/AmericanExpress.jpg' height='40px'>";	
}elseif ($inicioNum == "2800") {
	$imagen = "<img src='Imagenes/MasterCard.jpg' height='40px'>";
}elseif ($inicioNum == "0008") {
	$imagen = "<img src='Imagenes/Visa.jpg' height='40px'>";
}else{
	$imagen = "";
}
print "<p>Su tarjeta ha sido procesada:</p>";
print "<input type='text' value='$numTarjeta'>$imagen";