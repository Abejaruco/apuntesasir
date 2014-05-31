#!/bin/bash
apt-get update && apt-get upgrade -y
#export DEBIAN_FRONTEND=noninteractive
#export DEBIAN_FRONTEND=text
debconf-set-selections <<< 'slapd slapd/internal/generated_adminpw password Almi123'
debconf-set-selections <<< 'slapd slapd/password2 password Almi123'
debconf-set-selections <<< 'slapd slapd/internal/adminpw password'
debconf-set-selections <<< 'slapd slapd/password1 password'
debconf-set-selections <<< 'slapd slapd/allow_ldap_v2 boolean false'
debconf-set-selections <<< 'slapd slapd/password_mismatch note'
debconf-set-selections <<< 'slapd slapd/invalid_config boolean true'
debconf-set-selections <<< 'slapd shared/organization string Almi'
#debconf-set-selections <<< 'slapd slapd/upgrade_slapcat_failure error'
debconf-set-selections <<< 'slapd slapd/no_configuration boolean false'
debconf-set-selections <<< 'slapd slapd/move_old_database boolean true'
debconf-set-selections <<< 'slapd slapd/dump_database_destdir string /var/backups/slapd-VERSION'
debconf-set-selections <<< 'slapd slapd/purge_database boolean false'
debconf-set-selections <<< 'slapd slapd/domain string almi.com'
debconf-set-selections <<< 'slapd slapd/backend select HDB'
debconf-set-selections <<< 'slapd slapd/dump_database select when needed'

apt-get install -y slapd ldap-utils migrationtools libnss-ldap libpam-ldap nscd


{
echo "n"
echo "almi.com" ##Leer variable dominio
echo "Almi" ##Leer la organizacion
echo "Almi123" ##Leer variable contaseña administrador dominio
echo "Almi123" #Leer variable contraseña
echo "2"
echo "n"
echo "s"
echo "n"
} | dpkg-reconfigure slapd
nano /etc/migrationtools/migrate_common.ph

