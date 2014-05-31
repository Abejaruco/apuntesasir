Trabajamos con la tablas "libros" y "editoriales" de una librería.
Eliminamos las tablas:
 drop table libros;
 drop table editoriales;*/
 drop table libros;
 drop table editoriales;
/*Creamos las tablas:
 create table editoriales(
  codigo number(3),
  nombre varchar2(30),
  primary key(codigo)
 );*/
 create table editoriales(codigo number(3), nombre varchar2(30),
				constraint PK_editoriales primary key(codigo));

/* create table libros(
  titulo varchar2(40),
  editorial number(3),
  autor varchar2(30),
  precio number(4),
  constraint FK_libros_editorial
   foreign key(editorial)
   references editoriales(codigo)
 );*/
create table libros(titulo varchar2(40), editorial number(3), autor varchar2(30), precio number(4),
  constraint FK_libros_editorial foreign key(editorial) references editoriales(codigo));
/*Modificamos el campo precio para que tome valores de 6 dígitos incluyendo 2 decimales 
y acepte valores nulos:*/
 alter table libros modify precio number(6,2) not null;
/*Verificamos el cambio viendo la estructura de la tabla:
 describe libros;*/
describe libros;
/* Ingresamos algunos registros:
 insert into editoriales values(1, 'Emece');*/
insert into editoriales values(1, 'Emece');
 /*insert into libros values('Uno',1,'Richard Bach',24.6);*/
insert into libros values('Uno',1,'Richard Bach',24.6);
/*Intentamos modificar el campo "precio" a "varchar(8)":*/
alter table libros modify precio number(8);
/*ERROR en línea 1:
ORA-01440: la columna que desea  modificar debe estar vacía para disminuir la
precisión o escala*/
/*No lo permite, porque existe un registro con un valor numérico en tal campo.
Intentamos modificar el campo "codigo" de "editoriales" a "varchar2(3)":*/
alter table editoriales modify codigo varchar2(3);
/*ERROR en línea 1:
ORA-02267: tipo de columna incompatible con tipo de columna a la que se hace
referencia*/
/*No lo permite porque tal campo es referenciado por una clave externa.
Modificamos un atributo del campo "codigo" de "editoriales":
Oracle permite el cambio pues no afecta a la restricción.
Intentamos redefinir como nulo el campo "codigo" de "editoriales":*/
alter table editoriales modify codigo null;
/*Si verificamos la estructura de la tabla veremos que continua siendo "not null", ya que es clave primaria:*/
desc editoriales
/*Redefinimos el campo "precio" como number(6,2), con un valor por defecto 0:*/
alter table libros modify precio number(6,2) default 0;
/*Oracle permite modificar el campo "precio" a "char(8)". Si luego ingresamos un registro sin valor para "precio",
 guardará el valor por defecto (0) convertido a cadena ('0'):*/
insert into libros values('El aleph',1,'Borges',default);
select *from libros;
/*Redefinimos el valor por defecto del campo "precio" (que ahora es de tipo char) a "cero":*/

/*no permite modificar el campo "precio" a "number(8,2)" porque si luego ingresamos un registro 
sin valor para tal campo, el valor por defecto ('cero') no podrá convertirse a número:*/ 
/*Mensaje de error.*/
/*Modificamos el valor por defecto para que luego pueda ser convertido:*/
 
/*Vaciamos la tabla:*/
 
/*Oracle permite modificar el campo "precio" a "number(8,2)" porque si luego ingresamos un registro 
sin valor para tal campo, el valor por defecto ('0') podrá convertirse a número (0):*/
 
/*Oracle permite modificar el campo "precio" a "char(8)". Si luego ingresamos un registro sin valor 
para "precio", guardará el valor por defecto (0) convertido a cadena ('0'):*/
insert into libros values('El aleph',1,'Borges',default);
select *from libros; */
/*Fin ejercicio*/
