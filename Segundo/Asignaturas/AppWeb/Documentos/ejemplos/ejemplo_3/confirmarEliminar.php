<?php
require_once "funciones.php";
if(!sesionAbierta()){
	header('Location: 04_acceso.php');
	exit();
}
//imprimirArray($_POST);
$n_eliminados = eliminarUsuarios($_POST['ids']);
print "<p>Número de usuarios eliminados: $n_eliminados";
?>