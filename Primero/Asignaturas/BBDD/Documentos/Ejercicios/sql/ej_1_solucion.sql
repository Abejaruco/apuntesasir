/*Crear una tabla con un valor con defecto*/
create table prueba(codigo number(3),
		descripcion varchar2(30) DEFAULT 'Escribir descripción');
		
insert into prueba values(1,'Descripción 1');
