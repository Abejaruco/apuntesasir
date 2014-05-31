<?php
function txt_to_html($archivo){
	$texto = "";
	if($file = fopen($archivo, "r")){
		while(!feof($file)){
			 $texto.=fgets($file). "<br>";
		}
		fclose($file);		
	} else {
		$texto ="No se ha encontrado el archivo";
	}
	return $texto;
}
function ejercicio($archivo){
	global $ejercicio;
	if($archivo != null){
		$Archivo = $archivo;
		$n= $archivo;
	} else{
		$n= $ejercicio;
		$Archivo = "ejercicio_$n";
		$ejercicio++;
	}
	$enunciado = "./ejercicios/".$Archivo."_enun.txt";
	$solucion = "./ejercicios/".$Archivo."_sol.txt";
	$Enunciado = txt_to_html($enunciado);
	$codigo = "<p><b>Enunciado:</b></p>";
	$codigo.= "<div class='ejercicio'>";
	$codigo.= $Enunciado;
	$codigo.= "</div>";
	$codigo.= "<button id='boton_$n' onclick=\"mostrar_ocultar('ej_$n','boton_$n')\">Mostrar solución</button>";
	$codigo.= "<div id='ej_$n' style=\"display: none\">";
	$codigo.= "<p><b>Solución:</b></p>";
	$codigo.= "<pre class='solucion'>";
	$Solucion = txt_to_html($solucion);
	$codigo.= $Solucion;
	$codigo.= "</pre></div>";
	return $codigo;
}
function crear_lista_enlaces_archivos_directorio($directorio){
	$codigo = "";
	if ($gestor = opendir($directorio)) {
	$codigo .= "<ul>";
    while (false !== ($entrada = readdir($gestor))) {
        if ($entrada != "." && $entrada != "..") {
            $codigo.= "<li><a href='$directorio/$entrada'>$entrada</a></li>";
        }
    }
    closedir($gestor);
    $codigo.= "</ul>";
	}
	return $codigo;
}
?>
