<?php
//$numero_ejemplos = contar_archivos("./Ejemplos/");
//$ejemplo = 0;
$total_ejercicios=0;
$total_ejemplos=0;
function paypal(){
	$code = '<li>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="R8G8QCCWE4S3L">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donate_SM.gif" width="50" height="15" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
<!--<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">--->
</form>
</li>';
	return $code;
}
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
function leer_txt($archivo){
	$texto = "";
	if($file = fopen($archivo, "r")){
		while(!feof($file)){
			 $texto.=fgets($file);
			 
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
function ejercicios($carpeta){
	GLOBAL $total_ejercicios;
	$directorio = "./Ejercicios/".$carpeta."/";
	$numero_ejercicios = count(glob("$directorio/{*enunciado.txt}",GLOB_BRACE));
	$codigo = "<ul class='ejercicios'>";
	for ($i=0; $i< $numero_ejercicios; $i++){
		$n = $i+1;
		$archivo_enunciado = $directorio."/ej_".$n."_enunciado.txt";
		$archivo_solucion_sql = $directorio."/ej_".$n."_solucion.sql";
		$archivo_solucion_txt = $directorio."/ej_".$n."_solucion.txt";
		$patron1 = $directorio."/{ej_".$n."_solucion.png}";
		$n_imagenes_solucion = count(glob($patron1,GLOB_BRACE));
		$patron2 = $directorio."/{ej_".$n."_enunciado.png}";
		$n_imagenes_enunciado = count(glob($patron2,GLOB_BRACE));
		$imagen_solucion = null;
		$imagen_enunciado = null;
		if($n_imagenes_solucion < 2){
			$imagen_solucion[] = "./Ejercicios/".$carpeta."/ej_".$n."_solucion.png";
		} else{
			for( $j = 0; $j<$n_imagenes_solucion;$j++){
				$k= $j+1;
				$imagen_solucion[] = "./Ejercicios/".$carpeta."/ej_".$n."_solucion_$k.png";
			}
		}
		if($n_imagenes_enunciado < 2){
			$imagen_enunciado[] = "./Ejercicios/".$carpeta."/ej_".$n."_enunciado.png";
		} else{
			for( $j = 0; $j<$n_imagenes_enunciado;$j++){
				$k= $j+1;
				$imagen_enunciado[] = "./Ejercicios/".$carpeta."/ej_".$n."_enunciado_$k.png";
			}
		}
		$div_enunciado = "enunciado_".$total_ejercicios;
		$div_solucion = "solucion_".$total_ejercicios;
		$boton_enunciado = "botonenunciado_".$total_ejercicios;
		$boton_solucion = "botonsolucion_".$total_ejercicios;
		$codigo.= "<li>";
		$codigo.= 	"<button onclick=\"mostrar_ocultar('$div_enunciado','$boton_enunciado',1)\" id=\"$boton_enunciado\">";
		$codigo.= 	"+";
		$codigo.= 	"</button>";
		$codigo.= 	"Ejercicio $n: ".cabecera($archivo_enunciado);
		$codigo.= 	"</li>";
		$codigo.= "<ul  class='no-lista'>";
		$codigo.= 	"<li>";
		$codigo.= "<div class='ejercicio' id='$div_enunciado' style='display: none'>";
		foreach ($imagen_enunciado as $imagen){
			if(file_exists($imagen)){
				$codigo.= "<center><img src='$imagen'></img></center>";
			}
		}
		$codigo.= 	txt_to_html($archivo_enunciado);
		$codigo.= 	"<p><button onclick=\"mostrar_ocultar('$div_solucion','$boton_solucion')\" id='$boton_solucion'>Mostrar solución</button>";
		if(file_exists($archivo_solucion_sql)){
			$codigo.= 	"<a href='$archivo_solucion_sql'><button>Descargar archivo .sql</button></a></p>";
		}
		$codigo.= 	"<div style='display:none' id='$div_solucion' class='solucion'>";
		foreach ($imagen_solucion as $imagen){
			if(file_exists($imagen)){
				$codigo.= "<center><img src='$imagen'></img></center>";
			}
		}
		if(file_exists($archivo_solucion_txt)){
			$filas = count(file($archivo_solucion_txt))+1;
			$codigo.= "<textarea rows=$filas>";
			$codigo.= leer_txt($archivo_solucion_txt);
			$codigo.= "</textarea>";
		}
		if(file_exists($archivo_solucion_sql)){
			$filas = count(file($archivo_solucion_sql))+1;
			$codigo.= "<textarea rows=$filas>";
			$codigo.= leer_txt($archivo_solucion_sql);
			$codigo.= "</textarea>";
		}
		$codigo.= 	"</div>";
		$codigo.= "</div>";
		$codigo.= 	"</li>";
		$codigo.= "</ul>";
		$total_ejercicios++;
	}
	$codigo.= "</ul>";
	return $codigo;
}
function ejemplo(){
	global $total_ejemplos;
	$total_ejemplos++;
	$ejemplo=$total_ejemplos;
	$Archivo = "./Ejemplos/ejemplo_$ejemplo.txt";
	$texto = txt_to_html($Archivo);
	if(!file_exists($Archivo)){
	$texto.= "Falta el archivo $Archivo";
	}
	$codigo = "<div class='ejemplos'><button id='boton_ejemplo_$ejemplo' onclick=\"mostrar_ocultar('ejemplo_$ejemplo','boton_ejemplo_$ejemplo',1)\">+</button> Ejemplo...<br>";
	$codigo.= "<pre id='ejemplo_$ejemplo'  style=\"display: none\">";
	$codigo.= $texto;
	$codigo.= "</pre></div>";
	return $codigo;
}
function ejemplosql(){
	global $total_ejemplos;
	$total_ejemplos++;
	$ejemplo=$total_ejemplos;
	$Archivo = "./Ejemplos/ejemplo_$ejemplo.sql";
	$texto = txt_to_html($Archivo);
	if(!file_exists($Archivo)){
	$texto.= "Falta el archivo $Archivo";
	}
	$codigo = "<div class='ejemplos'><button id='boton_ejemplo_$ejemplo' onclick=\"mostrar_ocultar('ejemplo_$ejemplo','boton_ejemplo_$ejemplo',1)\">+</button> Ejemplo...<br>";
	$codigo.= "<pre id='ejemplo_$ejemplo'  style=\"display: none\">";
	$codigo.= $texto;
	$codigo.= "</pre></div>";
	return $codigo;
}
?>
