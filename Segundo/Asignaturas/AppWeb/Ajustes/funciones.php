<?php
ini_set('display_errors', '1');
$resolucion_horizontal = 1280;
//$resolucion_horizontal = $_COOKIE['resolucion_horizontal'];
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

function txt_to_array($archivo){
	if($file = fopen($archivo, "r")){
		while(!feof($file)){
			 $texto[]=fgets($file);
		}
		fclose($file);		
	} else{
		$texto = null;
	}
	return $texto;
}

function incluir_ejemplo(){
	global $ejemplo_numero;
	global $total_ejemplos;
	//$total_ejemplos++;
	//$ejemplo = $total_ejemplos;
	global $resolucion_horizontal;
	$n= $ejemplo_numero;
	$ejemplo_numero++;
	$texto= "<h3>Ejemplo ".$n."</h3>";
	$texto.= "<div class='ejemplos'>";
	$dir = './ejemplos/ejemplo_'.$n;
	if ($handle = opendir($dir)) {
	/*
	while (false != ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
			$archivos[] = './ejemplos/ejemplo_'.$n.'/'.$entry;
		}
	}
	print_r($archivos);
	*/
    while (false != ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
			$total_ejemplos++;
			$ejemplo = $total_ejemplos;
            $Archivo = './ejemplos/ejemplo_'.$n.'/'.$entry;
            $Texto = txt_to_array($Archivo);
			$resolucion = $resolucion_horizontal;
			$resolucion2 = $resolucion_horizontal-100;
			$columnas = 0.16598778*$resolucion-10.6109979633;
			$filas = 3;
			$texto2 = "";
			foreach($Texto as $filan){
				$texto2.= $filan;
				$nuevas_filas = floor(count($filas)/$columnas);
				$filas+=$nuevas_filas+1;
			}
			//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
			
			$texto.= "<h4><button id='boton_ejemplo_$ejemplo' onclick=\"mostrar_ocultar('ejemplo_$ejemplo','boton_ejemplo_$ejemplo',1)\">+</button>$entry </h4>";
			$texto.= "<div id='ejemplo_$ejemplo' style=\"display: none\">";
			$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
			$texto.= $texto2;
			$texto.=  "</textarea>";
			$texto.=  "<p><a href=\"".$Archivo."\" target=\"_blank\"><button>Ver resultado</button></a></p>";
			$texto.=  "<div id=\"texto$n\" class=\"resultado\"></div>";
			$texto.= "</div>";
        }
    }
	}
	$texto.= "</div>";
    return $texto;
    closedir($handle);
}

function incluir_ejemplo_php($ejemplo){
	global $ejemplo_php_numero;
	global $resolucion_horizontal;
	$n= $ejemplo_php_numero;
	if($ejemplo != null){
		$Ejemplo = $ejemplo;
	} else{
		$Ejemplo = "./ejemplos/ejemplo_$n/ejemplo_$n.html";
		$ejemplo_php_numero++;
	}
	$Texto = txt_to_array($Ejemplo);
	$resolucion = $resolucion_horizontal;
	$resolucion2 = $resolucion_horizontal-65;
	$columnas = 0.16598778*$resolucion-10.6109979633;
	$filas = 3;
	$texto2 = "";
	foreach($Texto as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($fila)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto= "<b>Código PHP</b>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";
	$texto.=  "<p><a href=\"".$Ejemplo."\" target=\"_blank\"><button>Ver resultado</button></a></p>";
	$texto.=  "<div id=\"texto$n\" class=\"resultado\"></div>";
	return $texto;
}
function incluir_ejemplo_html($ejemplo){
	global $ejemplo_html_numero;
	global $resolucion_horizontal;
	$n= $ejemplo_html_numero;
	if($ejemplo != null){
		$Ejemplo = $ejemplo;
	} else{
		$Ejemplo = "./ejemplos/ejemplo_$n.html";
		$ejemplo_html_numero++;
	}
	$Texto = txt_to_array($Ejemplo);
	$resolucion = $resolucion_horizontal;
	$resolucion2 = $resolucion_horizontal-65;
	$columnas = 0.16598778*$resolucion-10.6109979633;
	$filas = 3;
	$texto2 = "";
	foreach($Texto as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($fila)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto= "<b>Código HTML</b>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";
	$texto.=  "<p><button onClick=\"cambiar('codigo$n','texto$n')\">Ver resultado</button></p>";
	$texto.=  "<div id=\"texto$n\" class=\"resultado\"></div>";
	return $texto;
}
function incluir_ejemplo_css($ejemplo){
	global $ejemplo_numero;
	global $resolucion_horizontal;
	$n= $ejemplo_numero;
	if($ejemplo != null){
		$Ejemplo = $ejemplo;
	} else{
		$Ejemplo = "./ejemplos/ejemplo_$n.css";
		$ejemplo_numero++;
	}
	$Texto = txt_to_array($Ejemplo);
	$resolucion = $resolucion_horizontal;
	$resolucion2 = $resolucion_horizontal-65;
	$columnas = 0.16598778*$resolucion-10.6109979633;
	$filas = 3;
	$texto2 = "";
	foreach($Texto as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($filan)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto= "<b>Código CSS</b>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";
	/*
	$texto.=  "<p><button onClick=\"cambiar('codigo$n','texto$n')\">Ver resultado</button></p>";
	$texto.=  "<div id=\"texto$n\" class=\"resultado\"></div>";
	*/
	return $texto;
}
function incluir_ejemplo_html_css($ejemplo){
	global $ejemplo_numero;
	
	global $resolucion_horizontal;
	$n= $ejemplo_numero;
	if($ejemplo != null){
		$Ejemplo = $ejemplo;
	} else{
		$Ejemplo_html = "./ejemplos/ejemplo_$n/index.html";
		$Ejemplo_css = "./ejemplos/ejemplo_$n/estilos.css";
		$ejemplo_numero++;
	}
	$resolucion = $resolucion_horizontal;
	$resolucion2 = $resolucion_horizontal-80;
	$columnas = 0.16598778*$resolucion-10.6109979633;
	$Texto_html = txt_to_array($Ejemplo_html);
	$texto2 = "";
	$filas=0;
	foreach($Texto_html as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($filan)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto = "<h3><button id='principal$n' onClick=\"mostrar_ocultar('divprincipal$n','principal$n',1)\">+</button>Ejemplo</H3>";
	$texto.= "<div class='ejemplo_html' id='divprincipal$n' style=\"display: none\">";
	$texto.= "<b>Código HTML</b>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";

	
	$Texto_css = txt_to_array($Ejemplo_css);
	$texto2 = "";
	$filas=0;
	foreach($Texto_css as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($filan)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto.= "<b>Código CSS</b>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";

	$texto.=  "<p><button id='botontexto$n'onClick=\"mostrar_ocultar('texto$n','botontexto$n')\">Ver resultado</button></p>";
	$texto.=  "<div id=\"texto$n\" style=\"width: ".$resolucion2."px; display: none;\"><iframe src='$Ejemplo_html' style=\"width: 100%; height: 400px; background-color: white;\"></iframe>";
	$texto.= "<a href='$Ejemplo_html' target='_blank'><button>Abrir en otra página</button></a></div></div>";
	return $texto;
}
function incluir_ejemplo_XML($ejemplo){
	global $ejemplo_numero;
	global $resolucion_horizontal;
	$n= $ejemplo_numero;
	if($ejemplo != null){
		$Ejemplo = $ejemplo;
	} else{
		$Ejemplo = "./ejemplos/ejemplo_$n.xml";
		$ejemplo_numero++;
	}
	$Texto = txt_to_array($Ejemplo);
	$resolucion = $resolucion_horizontal;
	$resolucion2 = $resolucion_horizontal-65;
	$columnas = 0.16598778*$resolucion-10.6109979633;
	$filas = 3;
	$texto2 = "";
	foreach($Texto as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($fila)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto= "<p><b>Código XML</b></p>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";
	$texto.=  "<p><button onClick=\"cambiar('codigo$n','texto$n')\">Ver resultado</button></p>";
	$texto.=  "<div id=\"texto$n\" class=\"resultado\"></div>";
	return $texto;
}
function incluir_ejemplo_xml_dtd($ejemplo, $encabezado){
	global $ejemplo_numero;
	
	global $resolucion_horizontal;
	$n= $ejemplo_numero;
	if($ejemplo != null){
		$Ejemplo = $ejemplo;
	} else{
		$Ejemplo_xml = "./ejemplos/ejemplo_$n/ejemplo.xml";
		$Ejemplo_dtd = "./ejemplos/ejemplo_$n/ejemplo.dtd";
		$ejemplo_numero++;
	}
	$resolucion = $resolucion_horizontal;
	$resolucion2 = $resolucion_horizontal-80;
	$columnas = 0.16598778*$resolucion-10.6109979633;
	$Texto_xml = txt_to_array($Ejemplo_xml);
	$texto2 = "";
	$filas=0;
	foreach($Texto_xml as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($filan)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto = "<h3><button id='principal$n' onClick=\"mostrar_ocultar('divprincipal$n','principal$n',1)\">+</button>$encabezado</H3>";
	$texto.= "<div class='ejemplo_html' id='divprincipal$n' style=\"display: none\">";
	$texto.= "<p><b>Código XML</b></p>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";

	
	$Texto_dtd = txt_to_array($Ejemplo_dtd);
	$texto2 = "";
	$filas=0;
	foreach($Texto_dtd as $filan){
		$texto2.= $filan;
		$nuevas_filas = floor(count($filan)/$columnas);
		$filas+=$nuevas_filas+1;
	}
	//$texto = "<textarea id=\"codigo$n\" cols=$columnas rows=$filas>";
	$texto.= "<p><b>Código DTD</b></p>";
	$texto.= "<textarea id=\"codigo$n\" rows=$filas style=\"width:".$resolucion2."px;\">";
	$texto.= $texto2;
	$texto.=  "</textarea>";

	$texto.=  "<p><button id='botontexto$n'onClick=\"mostrar_ocultar('texto$n','botontexto$n')\">Ver resultado</button></p>";
	$texto.=  "<div id=\"texto$n\" style=\"width: ".$resolucion2."px; display: none;\"><iframe src='$Ejemplo_html' style=\"width: 100%; height: 400px; background-color: white;\"></iframe>";
	$texto.= "<a href='$Ejemplo_html' target='_blank'><button>Abrir en otra página</button></a></div></div>";
	return $texto;
}
?>
