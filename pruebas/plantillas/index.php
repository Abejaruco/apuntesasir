<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<?php include("./datos_pagina.php");?>
<head>
	<title><?php echo $titulo;?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
	<LINK REL=StyleSheet HREF="<?echo $estilos;?>" TYPE="text/css">
	<?php if(opendir("./CSS")){ ?>
	<LINK REL=StyleSheet HREF="CSS/estilos.css" TYPE="text/css">
	<?php } ?>
</head>
<body>
	<!------------------------------------------------------------------
	MENUS
	------------------------------------------------------------------->
	<div class="menus">
		<?php include("./menus.php");?>
	</div>
	<!------------------------------------------------------------------
	CONTENIDO
	------------------------------------------------------------------->
	<div class="contenido">
		<?php $directorio_bloques=opendir("./contenido"); 
			while ($bloque = readdir($directorio_bloques)){
				if($bloque != "." && $bloque != ".."){?>
					<?php include("./contenido/$bloque/datos_bloque.php");?>
						<div class="bloque">
						<h1><?php echo $titulo_bloque;?></h1><?php
						$directorio_temas=opendir("./contenido/$bloque");
						while ($tema = readdir($directorio_temas)){
							if($tema != "." && $tema != ".." && $tema != "datos_bloque.php"){?>
								<div class="tema"><?php
								include("./contenido/$bloque/$tema");?>
								</div><?php
							}
						}
						closedir($directorio_temas);?>
						</div><?php
				}
			}
			closedir($directorio_bloques); 
		?>
	</div>
</body>

</html>
