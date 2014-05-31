<?php
	if(!isset($_POST["sexo"])){
?>
<p><b>Elige el sexo de las personas que quieres listar:</b></p>
<form action='listado_sexo.php' method='POST'>
	<select name="sexo">
		<option value="m">Hombre</option>
		<option value="f" selected>Mujer</option>
	</select>
	<input type="submit" value="Envíar">
</form>
<?php
} else {
	//print_r($_POST);
	$sexo = $_POST["sexo"];
	if(!$cn = @mysql_connect("localhost", "appweb", "Almi123")){
		//ERROR	
		print("<p><b><font color='red'>Error al conectar con el servidor</font></b></p>");
	}else{
		if(!($bd=mysql_select_db("asir2", $cn))){
			print "<p><b><font color='red'>Error. No se puede acceder a la base de datos</font></b></p>";
		}else{
			$consulta = "SELECT * FROM usuarios WHERE Sexo='$sexo'";
			//print $consulta;
			$resultado = mysql_query($consulta, $cn);
			if(!$resultado){
				print "<p><b><font color='red'>Error al realizar la consulta</font></b></p>";
			}else{
				if($sexo == "m"){
					$usuarioa = "Usuarios encontrados";
					$Usuario = "Usuario";
					$sexo_ = "Masculino";
				} else {
					$usuarioa = "Usuarias encontradas";
					$Usuario = "Usuaria";
					$sexo_ = "Femenino";
				}
				print "<p><b>$usuarioa en la Base de Datos:</b></p>";
				print "<table border='2'><tr><th>$Usuario</th><th>Nombre</th><th>Año Nacimiento</th><th>Sexo</th><th>Comentarios</th></tr>";
				while($datos = mysql_fetch_assoc($resultado)){
					$usuario = $datos['usuario'];
					$nombre = $datos['Nombre'];
					$anioNac = $datos['AnioNac'];
					$comentarios = $datos['Comentarios'];
					print "<tr><td>$usuario</td><td>$nombre</td><td>$anioNac</td><td>$sexo_</td><td>$comentarios</td></tr>";
				}
				print "</table>";
			}
		}
		mysql_close($cn);
	}
}
