<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php
include "funciones.php";
if(!sesionAbierta()){
	header('Location: carrito.php');
	exit();
}
print "<h1>Catálogo de Móviles</h1>\n";
$Catalogo = getCatalogo(true, false);
print "<table border=1>\n";
foreach ($Catalogo as $clave => $producto) {
	if($clave != 0){
		print "\t<form name='articulo".$producto['id_articulo']."' action='anadirArticulo.php' method='POST'>\n";
		print 	"\t\t<tr>\n";
		print 		"\t\t\t<td rowspan=3>\n";
		print 			"\t\t\t\t<image src='".$producto['foto']."' width=100px>\n";
		print 		"\t\t\t</td>\n";
		print 		"\t\t\t<td>".$producto["nombre"]."</td>\n";
		print 	"\t\t</tr>\n";
		print 	"\t\t<tr>\n";
		print 		"\t\t\t<td>";
		print 		$producto["descripcion"];
		print 		"\t\t\t</td>\n";
		print 	"\t\t</tr>\n";
		print 	"\t\t<tr>\n";
		print 		"\t\t\t<td>";
		print 		"Precio: ".$producto["precio"]." €. ";
		print 		" Cantidad: <input type='number' min=1 name='cantidad' value='1' />";
		print 		"<input type='hidden' name='articulo' value='".$producto['id_articulo']."''/>";
		print 		"<a href='#' onClick='articulo".$producto['id_articulo'].".submit();'>";
		print 			"<image src='imagenes/carrito_mas.png' width=30px>";
		print 		"</a>";
		print 		"\t\t\t</td>\n";
		print 	"\t\t</tr>\n";


		/*
		print 	"\t\t<tr>\n";
		print 		"\t\t\t<td>\n";

		print 		"\t\t\t</td>\n";
		print 	"\t\t</tr>\n";
		*/
		print "\t</form>\n";
	}
}
print "</table>";
?>
<center><a href="mostrarCarrito.php"><img src="imagenes/carrito_ver.png"></a></center>