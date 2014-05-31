<?php
//print_r($_POST);
$usuariosRegistrados=0;

if(!$cn = @mysql_connect("localhost", "appweb", "Almi123")){
	//ERROR	
	print("<p><b><font color='red'>Error al conectar con el servidor</font></b></p>");
}else{
	//seleccionar la bd
	if(!($bd=mysql_select_db("asir2", $cn))){
		print "<p><b><font color='red'>Error. No se puede acceder a la base de datos</font></b></p>";
	}else{
		foreach($_POST as $usuario){
			if(isset($usuario[0]) && $usuario[0] != ""){
				#print "<p>$usuario[0], $usuario[1]</p>";
				$passenc=md5($usuario[1]);
				$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario[0]."'";
				//print $consulta;
				$resultado = mysql_query($consulta, $cn);
				if(!$resultado){
					print "<p><b><font color='red'>Error al realizar la consulta</font></b></p>";
				}else{
					if(mysql_affected_rows() == 1){
						print "<p><b><font color='red'>Nombre de usuario \"$usuario[0]\" ya existe en la Base de Datos</font></b></p>";
					} else {
						$consulta="INSERT INTO usuarios(usuario,Password) VALUES('$usuario[0]','$passenc')";
						if(!mysql_query($consulta,$cn)){
								print "<p><b><font color='red'>Error al intentar añadir al usuario \"$usuario[0]\" </font></b></p>";
						} else {
							print("<p><b><font color='green'>Usuario \"$usuario[0]\" registrado con éxito.</font></b></p>");
						}
					}
				}
			}
		}
	}
	mysql_close($cn);
}
?>
