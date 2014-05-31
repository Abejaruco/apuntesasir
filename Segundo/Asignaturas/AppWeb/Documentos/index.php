<?php include("../../../../php/paypal.php");?>
<!DOCTYPE html>
<HTML>
	<!-- ------------------------------------------------ C   A   B   E   C   E   R   A -------------------------------------------------------------- -->
	<HEAD>
		<TITLE>ASIR2: IMPLANTACIÓN DE APLICACIONES WEB</TITLE> <!-- Establece el título de mi web -->
		<!-- Diferentes opciones del tag META <META HTTP-EQUIV= 
		"Refresh" CONTENT="10"> --><!-- Establece que mi web se 
		actualice cada 10 segundos -->
		<META NAME="keywords" CONTENT="HTML, internet "> <!-- Palabras clave para que los grandes 
		buscadores como Google, puedan identificar mi web --> 
		<META NAME="description" CONTENT="Manual para escribir HTML.">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!-- Una breve descripción que los buscadores mostrarán -->
		<LINK REL=StyleSheet HREF="../../../../estilos/menu_principal.css" TYPE="text/css">
		<LINK REL=StyleSheet HREF="../Ajustes/estilos.css" TYPE="text/css">
		<script type="text/javascript" src="../Ajustes/scripts.js"></script>
		<script type="text/javascript" src="../../../../estilos/scripts.js"></script>
		<?php include('../Ajustes/funciones.php');?>
		<?php #$ejemplo_html_numero = 1;?>
		<?php #$ejemplo_php_numero = 1;?>
		<?php $ejemplo_numero = 1;?>
</HEAD>
<!----------------------------------------------------------------------
CUERPO
----------------------------------------------------------------------->
<BODY>
<!----------------------------------------------------------------------
MENUS
----------------------------------------------------------------------->
<div class="menus">
	<div class="menu_principal">
		<ul class="menu">
			<li><a href="../../../../">ASIR</a></li>
			<li><a href="../../../">SEGUNDO</a></li>
			<li><a href="../../">ASIGNATURAS</a></li>
			<li>IMPLANTACIÓN DE APLICACIONES WEB</li>
			<?=paypal()?>
		</ul>
	</div>
	<div class="menu_asignatura">
		<ul class="menu">
			<li><a href="../">Índice</a></li>
		</ul>
	</div>
</div>
<!----------------------------------------------------------------------
FIN MENUS
----------------------------------------------------------------------->
<div class="contenido">
<!----------------------------------------------------------------------
TEMA N
-----------------------------------------------------------------------
<a name="teman"></a>
<div class="tema">
<H1>N. Título</H1>

</DIV>
----------------------------------------------------------------------
FIN TEMA N
----------------------------------------------------------------------->

<!----------------------------------------------------------------------
TEMA 1 
----------------------------------------------------------------------->
<!------ INSERTAR EJEMPLOS------------------------------------------
	<?php #echo incluir_ejemplo_html(null);?>
	<?php #echo incluir_ejemplo_php(null);?>
---------------------------------------------------------------------->

<a name="tema1"></a>
<div class="tema">
	<H1>TEMA 1: INTRODUCCIÓN</H1> 
		<h2>SENTENCIAS DE CONTROL EN PHP</h2>
			<UL>
				<LI>Condiciones: IF:
					<p>La condición a evaluar va entre paréntesis () y la acción a realizar va entre {}.<br>
					Si se cumple la condición se ejectuta el contenido.<br>Si no se cumple se puede usar ELSE para ejecutar lo que tenga 
					entre {}</p>
				</LI>
				<LI>Operaciones:
					<ul>
						<li>+</li>
						<li>-</li>
						<li>*</li>
						<li>/</li>
					</ul>
					<p>Devuelve un número.</p>
				</LI>
				<li>comparaciones:
					<ul>
						<li>></li>
						<li>>=</li>
						<li><</li>
						<li><=</li>
						<li>==</li>
						<li>!=</li>
						<li>% -> Devuelve el resto de una división.</li>
					</ul>
					<p>Devuelve true o false</p>
					</li>
				<li>Bucles:
					<p>Ejectuta una serie de acciones que están entre {} siempre que se cumpla la condición que está entre ().</p>
					<ul>
						<li>while(condicion){acciones}</li>
						<li>for(condicion inicial, condicion final, incremento){acciones}</li>
					</ul>
				
				</li>
			</UL>
			<?php echo incluir_ejemplo();?>
			<?php echo incluir_ejemplo();?>
			<?php echo incluir_ejemplo();?>
			<?php echo incluir_ejemplo();?>

			
</div>
<a name="edicion"></a>
<font color=red>Editando...</font>
</div>
	</BODY>
</HTML>
