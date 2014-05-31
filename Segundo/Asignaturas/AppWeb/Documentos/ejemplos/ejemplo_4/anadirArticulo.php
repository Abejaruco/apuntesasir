<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: carrito.php');
	exit();
}
if(isset($_POST['articulo'])){
	$_SESSION['Carrito'][$_POST['articulo']]=$_POST['cantidad'];
}
imprimirArray($_POST);
imprimirArray($_SESSION);
header('Location:lista_articulos.php');

?>