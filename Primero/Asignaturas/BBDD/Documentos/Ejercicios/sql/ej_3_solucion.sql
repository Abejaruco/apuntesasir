/*Crear una tabla con un valor no nulo y único*/
create table prueba(codigo number(3) NOT NULL UNIQUE,
		descripcion varchar2(30) DEFAULT 'Escribir descripción');
