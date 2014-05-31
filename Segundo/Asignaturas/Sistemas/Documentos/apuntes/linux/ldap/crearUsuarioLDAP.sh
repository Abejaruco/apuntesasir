#!/bin/bash
function comprobar_root(){
if [ "$(id -u)" != "0" ]; then
   echo "Este Script hay que ejecutarlo como ROOT" 1>&2
   sudo $0 $1
   exit 1
fi
}

function crearArchivoUsuario(){
	read -p "Dominio: " dominio
	read -p "Usuario a crear: " usuario
	reap -p "Contraseña del usuario: " userpass
	read -p "Usuario de dominio con permisos para crear usuarios: " adminUser
	IFS='.' read -a dnsservers <<< "${ns}"
	cn1=${dnsservers[0]}
	cn2=${dnsservers[1]}
}
comprobar_root $1


