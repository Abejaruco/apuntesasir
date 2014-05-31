<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: carrito.php');
	exit();
}
/*
print "<p>_POST</p>";
imprimirArray($_POST);
print "<p>_SESSION</p>";
imprimirArray($_SESSION);
*/
$ids = array();
if (isset($_SESSION['Carrito'])){
	$Carrito = getCarrito(false, $_SESSION['Carrito']);
} else {
	$Carrito = array();
}
//imprimirArray($ids);
print "<h1>Carrito de la compra</h1>\n";
//imprimirArray($Carrito);
$tabla = generarTabla($Carrito, false);
print $tabla;
?>