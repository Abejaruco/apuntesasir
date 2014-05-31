<?php
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
function contar_archivos($carpeta,$condicion){
	if($condicion == null) $condicion = "*.*";
	$archivos=count(glob($carpeta."{".$condicion."}",GLOB_BRACE));
	return $archivos;
}
function ejercicios($carpeta,$condicion){
	$n = contar_archivos($carpeta,$condicion);
	$texto ="";
	for($i = 0; $i<$n; $i++){
		$m = $i+1;
		$archivo = $carpeta."enunciado_$m.txt";
		$enunciado = txt_to_html($archivo);
		$texto.= "<p><button onclick=\"mostrar_ocultar('ejercicio_$m','botonenunciado$m',1)\" id=\"botonenunciado$m\">";
		$texto.= "+</button>";
		$texto.= "<b>Ejercicio $m:</b></p>";
		$texto.= "<pre id='ejercicio_$m' style=\"display: none\">";
		$texto.= $enunciado;
		$texto.= "</pre>";
	}
	return $texto;
}
?>
