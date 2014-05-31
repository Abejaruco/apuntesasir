<?php
// En versiones de PHP anteriores a 4.1.0, $HTTP_POST_FILES debe utilizarse en lugar
// de $_FILES.
$fich = $_FILES['archivo']['name'];
$fich_temp = $_FILES['archivo']['tmp_name'];
$uploaddir = './uploads/';
$uploadfile = $uploaddir . basename($fich);
//si no es el tipo correcto. solo: PNG, GIF, JPG, BMP -> Error
$info= new SplFileInfo($fich);
$ext = $info->getExtension();
if($ext == 'jpg' || $ext=='png' || $ext=='gif' || $ext=='bmp'){
	if (move_uploaded_file($fich_temp, $uploadfile)) {
		print "<p>Fichero subido con éxito.\n</p>";
	} else {
		print "<p>Error al subir el archivo\n</p>";
	}
	print "<p>Aquí hay más información de depurado:</p>";
	print "<pre>";
	print_r($_FILES);
	print "</pre>";
}else{
	print "<p>Sólo se pueden subir archivos de los formatos: PNG, GIF, JPG, BMP </p>";
}
?>
