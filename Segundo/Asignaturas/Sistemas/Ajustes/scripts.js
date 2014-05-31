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
function cambiar(IdCodigo,IdTextArea){
	Codigo=document.getElementById(IdCodigo);
	TextArea=document.getElementById(IdTextArea);
	Ocultar="<p><button onclick=\"ocultar('"+IdTextArea+"')\">Ocultar</button></p>";
	TextArea.innerHTML = Codigo.value+Ocultar;
}
function ocultar(IdTextArea){
	TextArea=document.getElementById(IdTextArea);
	TextArea.innerHTML ="";
}
