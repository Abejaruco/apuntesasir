<?php
require_once "funciones.php";
if(!sesionAbierta()){
	header('Location: 04_acceso.php');
	exit();
}
//imprimirArray($_POST);
if(isset($_POST['ids'])){
	$usuarios_eliminar = $_POST['ids'];
	print "<h1>Se van a eliminar los siguientes usuarios</h1>";
	print "<form action='confirmarEliminar.php' method='POST'>";
	print "<ul>";
	foreach ($usuarios_eliminar as $usuario) {
		print "<li>$usuario</li><input type='hidden' name='ids[]' value='$usuario'>";
	}
	print "</ul>";
	print "<input type='submit' name='confirmarEliminar' value='Confirmar Eliminar'>";
	print "</form>";
}else{
	header('Location: bajas.php');
	exit();
}
?>