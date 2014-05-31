<?php
/*
function txt_to_html($archivo){
	$texto = "";
	if($file = fopen($archivo, "r")){
		while(!feof($file)){
			 $texto.=fgets($file). "<br>";
		}
		fclose($file);		
	}
	return $texto;
}
function cabecera($archivo){
	$texto = "";
	if($file = fopen($archivo, "r")){
		while(!feof($file)){
			 $Texto[]=fgets($file);
		}
		fclose($file);		
	}
	if(count($Texto) > 2){
		$texto = $Texto[0]." [...]";
	}else{
		$texto = $Texto[0];
	}
	$texto = $texto;
	return $texto;
}
function contar_archivos($carpeta){
	$ds  = opendir($carpeta);
	while (false !== ($nombre_archivo = readdir($ds))) {
	   $archivos[] = $nombre_archivo;
	}
	$total_archivos = count($archivos);
	$total = $total_archivos-2;
	return $total;
}
function ejemplo_sql($archivo){
	global $ejemplo;
	$n= $ejemplo;
	if($archivo != null){
		$Archivo = $archivo;
	} else{
		$Archivo = "./Ejemplos/ej_sql_$ejemplo.txt";
		$ejemplo++;
	}
	$texto = txt_to_html($Archivo);
	$codigo = "<div class='ejemplos'><button id='boton_sql_$n' onclick=\"mostrar_ocultar('ej_sql_$n','boton_sql_$n',1)\">+</button> Ejemplo...<br>";
	$codigo.= "<pre id='ej_sql_$n'  style=\"display: none\">";
	$codigo.= $texto;
	$codigo.= "</pre></div>";
	return $codigo;
}
*/
?>
