<?php
session_start();
include "funciones.php";
#imprimirArray($_POST);
#imprimirArray($_SESSION);
if(!isset($_POST['numTarjeta']) || $_POST['numTarjeta'] == ""){
	$_SESSION['error'] = "Debes introducir un número de tarjeta";
	header("location: privada.php");
} else {
	$_SESSION['error'] = "";
}
$_SESSION['numTarjeta']=$_POST['numTarjeta'];
?>
<p>Su tarjeta ha sido procesada:</p>
<a href="resultadoProceso.php"><button>Aceptar</button></a>