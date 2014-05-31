<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: 04_acceso.php');
	exit();
}
print "<h1>Lista de usuarios de ASIR2</h1>";
$listaUsuarios = getListadoUsuarios();
//imprimirArray($listaUsuarios);
$tabla = generarTabla($listaUsuarios,"eliminar");
print $tabla;
?>