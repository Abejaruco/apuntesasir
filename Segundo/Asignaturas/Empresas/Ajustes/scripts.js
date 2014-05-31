function getEnter(){
	document.getElementsByTagName('body')[0].onkeypress = function(e){
		if (e.keyCode == 13){
			//document.getElementById('submit').click();
			comprobar();
		}
	}
}
function getEnterPuntuar(){
	document.getElementsByTagName('body')[0].onkeypress = function(e){
		if (e.keyCode == 13){
			//document.getElementById('submit').click();
			puntuar();
		}
	}
}
function getEnterPuntuar2(){
	document.getElementsById('8').onkeypress = function(e){
		if (e.keyCode == 13){
			//document.getElementById('submit').click();
			puntuar();
		}
	}
}
function getEnterCrearMiembro(){
	document.getElementsByTagName('body')[0].onkeypress = function(e){
		if (e.keyCode == 13){
			//document.getElementById('submit').click();
			crearMiembro();
		}
	}
}
function comprobar(){
	grupo=document.getElementById('grupo');
	grupoMensaje=document.getElementById('grupoMensaje');
	miembro=document.getElementById('miembro');
	miembroMensaje=document.getElementById('miembroMensaje');
	pass1=document.getElementById('pass1');
	pass1Mensaje=document.getElementById('pass1Mensaje');
	pass2=document.getElementById('pass2');
	iniciarSesion=document.getElementById('iniciarSesion');
	crearGrupo=document.getElementById('crearGrupo');
	crearUsuario=document.getElementById('crearUsuario');
	global=document.getElementById('global');
	globalMensaje=document.getElementById('globalMensaje');
	max=document.getElementById('max');
	maxMensaje=document.getElementById('maxMensaje');
	errores = false;
	grupoMensaje.innerHTML = "";
	miembroMensaje.innerHTML = "";
	pass1Mensaje.innerHTML = "";
	pass2Mensaje.innerHTML = "";
	if(grupo.value.trim() == ""){
		grupoMensaje.innerHTML = "Campo Obligatorio";
		errores = true;
	}
	if(miembro.value.trim() == ""){
		miembroMensaje.innerHTML = "Campo Obligatorio";
		errores = true;
	}
	if(pass1.value.trim() == ""){
		pass1Mensaje.innerHTML = "Campo Obligatorio";
		errores = true;
	}
	if (!iniciarSesion.checked){
		if(pass2.value.trim() == ""){
			pass2Mensaje.innerHTML = "Campo Obligatorio";
			errores = true;
		}
		if(pass2.value != pass1.value){
			pass1Mensaje.innerHTML = "Las contraseñas no coinciden";
			errores = true;
		}	
		if(global.value.trim() == ""){
			globalMensaje.innerHTML = "Campo Obligatorio";
			errores = true;
		}
		if(max.value.trim() == ""){
			maxMensaje.innerHTML = "Campo Obligatorio";
			errores = true;
		}
	}
	if(!errores){
		document.registro.submit();
	}
}

function mostrarpass2() {
    document.getElementById('filapass2').style.display = '';
    document.getElementById('filaglobal').style.display = '';
    document.getElementById('filamax').style.display = '';
    document.getElementById('miembroTH').innerHTML = "Administrador";
    document.getElementById('boton').value = "Crear Grupo";
}
function ocultarpass2() {
    document.getElementById('filapass2').style.display = 'none';
    document.getElementById('filaglobal').style.display = 'none';
    document.getElementById('filamax').style.display = 'none';
    document.getElementById('miembroTH').innerHTML = "Miembro";
    document.getElementById('boton').value = "Iniciar Sesión";
}
function crearMiembro(){
	
}
function puntuar(){
	document.getElementById('8').value="Cambiado";
	
}

