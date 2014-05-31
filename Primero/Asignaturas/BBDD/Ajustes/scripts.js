function mostrar_ocultar(ejid,btid,tipo){
	if(tipo == null) {
		texto1 = 'Ocultar solución';
		texto2 = 'Mostrar solución';
	}
	if(tipo == 1) {
		texto1 = '-';
		texto2 = '+';
	}
	elemento = document.getElementById(ejid);
	boton = document.getElementById(btid);
	if(elemento.style.display == 'none'){
		elemento.style.display = 'block';
		boton.innerHTML = texto1;
	}else{
		elemento.style.display = 'none';
		boton.innerHTML = texto2;
	}
}
function mostrar(ejid,btid,tipo){
	if(tipo == null) {
		texto1 = 'Ocultar solución';
//		texto2 = 'Mostrar solución';
	}
	if(tipo == 1) {
		texto1 = '-';
//		texto2 = '+';
	}
	elemento = document.getElementById(ejid);
	boton = document.getElementById(btid);
	elemento.style.display = 'block';
	boton.innerHTML = texto1;
}
function ocultar(ejid,btid,tipo){
	if(tipo == null) {
//		texto1 = 'Ocultar solución';
		texto2 = 'Mostrar solución';
	}
	if(tipo == 1) {
//		texto1 = '-';
		texto2 = '+';
	}
	elemento = document.getElementById(ejid);
	boton = document.getElementById(btid);
	elemento.style.display = 'none';
	boton.innerHTML = texto2;
}

function mostrar_todo(numEjer,numEjem,numSQL){
	boton = document.getElementById('mostrar_todo');
	if(boton.innerHTML == 'Expandir todo'){
		boton.innerHTML = 'Contraer todo';
		for (var i=0; i<numEjer; i++){
			n=i+1
			mostrar('enunciado'+n,'botonenunciado'+n,1);
			mostrar('ej'+n,'bt'+n);
		}
		for (var i=0; i<numEjem; i++){
			n=i+1
			mostrar('ej_sql_'+n,'boton_sql_'+n,1);
		}
		for (var i=0; i<numSQL; i++){
			n=i+1
			mostrar('enunciado_sql_'+n,'botonenunciado_sql_'+n,1);
			mostrar('sol_sql_'+n,'bt_sql_'+n);
		}
	}else{
		boton.innerHTML = 'Expandir todo';
		for (var i=0; i<numEjer; i++){
			n=i+1
			ocultar('enunciado'+n,'botonenunciado'+n,1);
			ocultar('ej'+n,'bt'+n);
		}
		for (var i=0; i<numEjem; i++){
			n=i+1
			ocultar('ej_sql_'+n,'boton_sql_'+n,1);
		}
		for (var i=0; i<numSQL; i++){
			n=i+1
			ocultar('enunciado_sql_'+n,'botonenunciado_sql_'+n,1);
			ocultar('sol_sql_'+n,'bt_sql_'+n);
		}
	}
/*	
	for (var i=0; i<num; i++){
		n=i+1
		mostrar_ocultar('enunciado'+n,'botonenunciado'+n,1);
		mostrar_ocultar('ej'+n,'bt'+n);
	}
*/
}
function mostrar_todos_ejemplos(){
	numeroejemplos = document.getElementById('total_ejemplos').innerHTML;
	for (var i=0; i<numeroejemplos; i++){
		n=i+1;
		texto = '-';
		ejid = 'ejemplo_'+n;
		btid = 'boton_ejemplo_'+n;
		ejemplo = document.getElementById(ejid);
		botonejemplo = document.getElementById(btid);
		ejemplo.style.display = 'block';
		botonejemplo.innerHTML = texto;
	}
}
function ocultar_todos_ejemplos(){
	total_ejemplos = document.getElementById('total_ejemplos').innerHTML;
	for (var i=0; i<total_ejemplos; i++){
		n=i+1;
		texto = '+';
		ejid = 'ejemplo_'+n;
		btid = 'boton_ejemplo_'+n;
		ejemplo = document.getElementById(ejid);
		botonejemplo = document.getElementById(btid);
		ejemplo.style.display = 'none';
		botonejemplo.innerHTML = texto;
	}
}
function mostrar_todos_ejercicios(){
	total_ejercicios = document.getElementById('total_ejercicios').innerHTML;
	for (var i=0; i<total_ejercicios; i++){
		n=i;
		texto = '-';
		ejid = 'enunciado_'+n;
		btid = 'botonenunciado_'+n;
		enunciado = document.getElementById(ejid);
		botonenunciado = document.getElementById(btid);
		enunciado.style.display = 'block';
		botonenunciado.innerHTML = texto;
		texto1 = 'Ocultar solución';
		solid = 'solucion_'+n;
		btsolid = 'botonsolucion_'+n;
		solucion = document.getElementById(solid);
		botonsolucion = document.getElementById(btsolid);
		solucion.style.display = 'block';
		botonsolucion.innerHTML = texto1;
	}
}
function ocultar_todos_ejercicios(){
	total_ejercicios = document.getElementById('total_ejercicios').innerHTML;
	for (var i=0; i<total_ejercicios; i++){
		n=i;
		texto = '+';
		ejid = 'enunciado_'+n;
		btid = 'botonenunciado_'+n;
		enunciado = document.getElementById(ejid);
		botonenunciado = document.getElementById(btid);
		enunciado.style.display = 'none';
		botonenunciado.innerHTML = texto;
		texto1 = 'Mostrar solución';
		solid = 'solucion_'+n;
		btsolid = 'botonsolucion_'+n;
		solucion = document.getElementById(solid);
		botonsolucion = document.getElementById(btsolid);
		solucion.style.display = 'none';
		botonsolucion.innerHTML = texto1;
	}
}
function mostrar_ocultar_todo(){
	boton = document.getElementById('mostrar_todo');
	if(boton.innerHTML == 'Expandir todo'){
		boton.innerHTML = 'Contraer todo';
		mostrar_todos_ejemplos();
		mostrar_todos_ejercicios();

	}else{
		boton.innerHTML = 'Expandir todo';
		ocultar_todos_ejemplos();
		ocultar_todos_ejercicios();
	}
}

function mostrar_ocultar_todos_ejercicios(){
	boton = document.getElementById('mostrar_todo_');
	total_ejercicios = document.getElementById('total_ejercicios').innerHTML;
	if(boton.innerHTML == 'Expandir todo'){
		boton.innerHTML = 'Contraer todo';
		for (var i=0; i<total_ejercicios; i++){
			n=i;
			texto = '-';
			ejid = 'enunciado_'+n;
			btid = 'botonenunciado_'+n;
			enunciado = document.getElementById(ejid);
			botonenunciado = document.getElementById(btid);
			enunciado.style.display = 'block';
			botonenunciado.innerHTML = texto;
			texto1 = 'Ocultar solución';
			solid = 'solucion_'+n;
			btsolid = 'botonsolucion_'+n;
			solucion = document.getElementById(solid);
			botonsolucion = document.getElementById(btsolid);
			solucion.style.display = 'block';
			botonsolucion.innerHTML = texto1;
		}
	}else{
		boton.innerHTML = 'Expandir todo';
		for (var i=0; i<total_ejercicios; i++){
			n=i;
			texto = '+';
			ejid = 'enunciado_'+n;
			btid = 'botonenunciado_'+n;
			enunciado = document.getElementById(ejid);
			botonenunciado = document.getElementById(btid);
			enunciado.style.display = 'none';
			botonenunciado.innerHTML = texto;
			texto1 = 'Mostrar solución';
			solid = 'solucion_'+n;
			btsolid = 'botonsolucion_'+n;
			solucion = document.getElementById(solid);
			botonsolucion = document.getElementById(btsolid);
			solucion.style.display = 'none';
			botonsolucion.innerHTML = texto1;
		}
	}
}
