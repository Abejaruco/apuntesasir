/*Utilizando SQL*Plus crear las tablas correspondientes al siguiente esquema de base
de dato relacional relativo a la gestión de los préstamos de una biblioteca:

Libro (signatura, autor, titulo, editor, clase)

Usuario (carnet, nombre, direccion)

Clase (clave, tiempo_de_prestamo)

Prestamo (signatura, carnet, fecha_inicio, fecha_fin)

Con las siguientes claves ajenas:
Libro.clase --> Clase
Prestamo.signatura --> Libro
Prestamo.carnet --> Usuario

--Agregar a la tabla Usuario el campo Fecha_Ingreso (que sea obligatorio)

--Agregar a la tabla Libro el campo Prestado (que sea obligatorio), y asignarle por defecto
el valor 1.
*/
create table clase(clave varchar2(5) not null, tiempo_de_prestamo varchar2(10),
					CONSTRAINT PK_clase PRIMARY KEY (clave));
					
create table usuario(carnet varchar2(10) not null, nombre varchar2(10), direccion varchar2(10),
					CONSTRAINT PK_usuario PRIMARY KEY (carnet));
					
create table libro(signatura varchar2(10) not null, autor varchar2(10), titulo varchar2(10),
					editor varchar2(10), clase varchar2(5),
					CONSTRAINT PK_libro PRIMARY KEY (signatura),
					CONSTRAINT FK_libro_clase FOREIGN KEY (clase) REFERENCES clase(clave));


create table prestamo(signatura varchar2(10), carnet varchar2(10), fecha_inicio date,
					fecha_fin date,
					CONSTRAINT PK_prestamo PRIMARY KEY (signatura,carnet),
					CONSTRAINT FK_prestamo_usuario FOREIGN KEY (carnet) REFERENCES usuario(carnet),
					CONSTRAINT FK_prestamo_libro FOREIGN KEY (signatura) REFERENCES libro(signatura));

alter table usuario add fecha_ingreso date not null;

alter table libro add prestado number(1) DEFAULT 1 not null;
