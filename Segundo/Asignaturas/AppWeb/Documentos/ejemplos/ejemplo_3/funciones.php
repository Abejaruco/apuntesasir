<?php
$dominio = $_SERVER['HTTP_HOST'];
if($dominio == "apuntesasir.tk"){
	$SQL_SERVER = "mysql.hostinger.es";
} else {
	$SQL_SERVER = "localhost";
}
	function imprimirArray($array){
		print "<pre>";
		print_r($array);
		print "</pre>";
	}
	function sesionAbierta(){
		session_start();
		if(isset($_SESSION["usuario"])){
			return true;
		} else {
			return false;
		}
	}
	function selecDB($basedatos){
		if(!$cn = @mysql_connect("$SQL_SERVER, "u468704361_empre", "Almi123"")){
					//ERROR	
					print "Error servidor";
					return false;
		}else{
			//seleccionar la bd
			if(!($bd=mysql_select_db($basedatos, $cn))){
				print "Error base de datos";
				return false;
			}else{
				return $cn;
			}
		}
	}
	function eliminarUsuarios($listaUsuarios){
		if ($cn = selecDB('asir2')){
			$usuariosTexto = "'".implode("','", $listaUsuarios)."'";
			$consulta="DELETE FROM usuarios WHERE usuario IN ($usuariosTexto)";
			$result = mysql_query($consulta, $cn);
			$n_borrados = mysql_affected_rows();
			mysql_close($cn);
			return $n_borrados;
		} else {
			mysql_close($cn);
			return false;
		}
	}
	function tipoUsuario($nombreUsuario){
		if ($cn = selecDB('asir2')){
			$consulta="SELECT TipoUsuario FROM usuarios WHERE usuario = '$nombreUsuario'";
			$result = mysql_query($consulta, $cn);
			mysql_close($cn);
			return mysql_result($result, 0, "TipoUsuario");
		} else {
			mysql_close($cn);
			return false;
		}
	}
	function getListadoUsuarios(){
		//coger de la BD usuario, nombre, apellidos, Año nacimeitnno, sexo y tupo usuario
		if ($cn = selecDB('asir2')){
			$consulta="SELECT  usuario,Nombre,Apellidos,AnioNac,Sexo,TipoUsuario FROM usuarios";
			$result = mysql_query($consulta, $cn);
			$listaUsuarios = array();
			$cabezera = array();
			//print "<p>".mysql_num_fields($result)."</p>";
			for($i = 0; $i < mysql_num_fields($result); $i++){
				$cabezera[]= mysql_field_name($result, $i);
			}
			$listaUsuarios[] = $cabezera;
			while($fila = mysql_fetch_assoc($result)){
				$listaUsuarios[] = $fila;
			}
			mysql_close($cn);
			return $listaUsuarios;
		} else {
			mysql_close($cn);
			return false;
		}
	}
	function generarTabla($arrayBidireccional, $accion){
		$tabla = "";
		if ($accion == "eliminar"){
			$tabla .= "\n<form action=\"eliminar.php\" method='POST'>\n";	
		}
		$tabla .= "<table border='1px'>\n";
		$i=0;
		$checkbox = "";
		//Recorremos las filas
		foreach ($arrayBidireccional as $fila) {
			//Si hay que eliminar creamos el checkbox si no es la fila de encabezados
			if ($accion == "eliminar" && $i != 0) {
				$checkbox = "<input type=\"checkbox\" name=\"ids[]\" value=\"".$fila["usuario"]."\">";
			}
			//Creamos los tags de inicio y final
			if ( $i == 0){ //Si es la fila de encabezados ponemos <TH>
				$tagInicio = "<th>";
				$tagFinal = "</th>";
				if ( $accion == "eliminar"){
					$fila[] = "Eliminar";
				}
			}else { //Si no ponemos <TD>
				$tagInicio = "<td>";
				$tagFinal = "</td>";
				if ( $accion == "eliminar"){
					$fila[] = $checkbox;
				}
			}
			$i++;
			//Recorremos las Columnas solo si no es el usuario
			if(!isset($fila['usuario']) || $fila['usuario'] != $_SESSION['usuario']){
				$tabla .= "\t<tr>\n\t\t";
				foreach ($fila as $columna => $valor) {
					$campo = $tagInicio.$valor.$tagFinal;
					$tabla.= "$campo";
				}
				//Fin recorrido columnas
				$tabla .= "\n\t</tr>\n";
			}
		}
		//Fin recorrido de Filas
		$tabla .= "</table>";
		if ($accion == "eliminar"){
			$tabla .= "<input type='submit' name='Eliminar' value='Eliminar'>";
			$tabla .= "\n</form>\n";	
		}
		return $tabla;
	}
	
?>
