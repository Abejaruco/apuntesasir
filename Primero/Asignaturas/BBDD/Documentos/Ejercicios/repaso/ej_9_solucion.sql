/*Código de creación de las tablas*/
drop table registra;
drop table distribuye;
drop table desarrolla;
drop table cliente;
drop table comercio;
drop table programa;
drop table fabricante;
CREATE TABLE fabricante(
  id_fab INTEGER PRIMARY KEY,
  nombre VARCHAR(50),
  pais   VARCHAR(30)
);

CREATE TABLE programa(
  codigo INTEGER PRIMARY KEY,
  nombre VARCHAR(50),
  version VARCHAR(50)
);

CREATE TABLE comercio(
  cif INTEGER PRIMARY KEY,
  nombre VARCHAR(50),
  ciudad VARCHAR(50)
);

CREATE TABLE cliente(
  dni INTEGER PRIMARY KEY,
  nombre VARCHAR(50),
  edad INTEGER
);

CREATE TABLE desarrolla(
  id_fab INTEGER,
  codigo INTEGER,
  PRIMARY KEY (id_fab, codigo),
  FOREIGN KEY (id_fab) REFERENCES fabricante(id_fab),
  FOREIGN KEY (codigo) REFERENCES programa(codigo)
);

CREATE TABLE distribuye(
  cif INTEGER,
  codigo INTEGER,
  cantidad INTEGER,
  PRIMARY KEY (cif, codigo),
  FOREIGN KEY (cif) REFERENCES comercio(cif),
  FOREIGN KEY (codigo) REFERENCES programa(codigo)
);

CREATE TABLE registra(
  cif INTEGER,
  dni INTEGER,
  codigo INTEGER,
  medio VARCHAR(20),
  PRIMARY KEY (cif, dni, codigo),
  FOREIGN KEY (cif) REFERENCES comercio(cif),
  FOREIGN KEY (dni) REFERENCES cliente(dni),
  FOREIGN KEY (codigo) REFERENCES programa(codigo)
);


/*Inserción de datos*/

INSERT INTO fabricante VALUES (1,'Oracle','Estados Unidos');
INSERT INTO fabricante VALUES (2,'Microsoft','Estados Unidos');
INSERT INTO fabricante VALUES (3,'IBM','Estados Unidos');
INSERT INTO fabricante VALUES (4,'Dinamic','Espa�a');
INSERT INTO fabricante VALUES (5,'Borland','Estados Unidos');
INSERT INTO fabricante VALUES (6,'Symantec','Estados Unidos');

INSERT INTO programa VALUES (1,'Application Server','9i');
INSERT INTO programa VALUES (2,'Oracle Database','8i');
INSERT INTO programa VALUES (3,'Database','9i');
INSERT INTO programa VALUES (4,'Database','10g');
INSERT INTO programa VALUES (5,'Developer','6i');
INSERT INTO programa VALUES (6,'Access','97');
INSERT INTO programa VALUES (7,'Access','2000');
INSERT INTO programa VALUES (8,'Access','XP');
INSERT INTO programa VALUES (9,'Windows','98');
INSERT INTO programa VALUES (10,'Windows','XP Professional');
INSERT INTO programa VALUES (11,'Windows','XP Home Edition');
INSERT INTO programa VALUES (12,'Windows','2003 Server');
INSERT INTO programa VALUES (13,'Norton Internet Security','2004');
INSERT INTO programa VALUES (14,'Freddy Hardest',NULL);
INSERT INTO programa VALUES (15,'Paradox','2');
INSERT INTO programa VALUES (16,'C++ Builder','5.5');
INSERT INTO programa VALUES (17,'DB/2','2.0');
INSERT INTO programa VALUES (18,'OS/2','1.0');
INSERT INTO programa VALUES (19,'JBuilder','X');
INSERT INTO programa VALUES (20,'La prisi�n','1.0');

INSERT INTO comercio VALUES (1,'El Corte Ingl�s','Sevilla');
INSERT INTO comercio VALUES (2,'El Corte Ingl�s','Madrid');
INSERT INTO comercio VALUES (3,'Jump','Valencia');
INSERT INTO comercio VALUES (4,'Centro Mail','Sevilla');
INSERT INTO comercio VALUES (5,'FNAC','Barcelona');

INSERT INTO cliente VALUES (1,'Pepe P�rez',45);
INSERT INTO cliente VALUES (2,'Juan Gonz�lez',45);
INSERT INTO cliente VALUES (3,'María G�mez',33);
INSERT INTO cliente VALUES (4,'Javier Casado',18);
INSERT INTO cliente VALUES (5,'Nuria S�nchez',29);
INSERT INTO cliente VALUES (6,'Antonio Navarro',58);

INSERT INTO desarrolla VALUES (1,1);
INSERT INTO desarrolla VALUES (1,2);
INSERT INTO desarrolla VALUES (1,3);
INSERT INTO desarrolla VALUES (1,4);
INSERT INTO desarrolla VALUES (1,5);
INSERT INTO desarrolla VALUES (2,6);
INSERT INTO desarrolla VALUES (2,7);
INSERT INTO desarrolla VALUES (2,8);
INSERT INTO desarrolla VALUES (2,9);
INSERT INTO desarrolla VALUES (2,10);
INSERT INTO desarrolla VALUES (2,11);
INSERT INTO desarrolla VALUES (2,12);
INSERT INTO desarrolla VALUES (6,13);
INSERT INTO desarrolla VALUES (4,14);
INSERT INTO desarrolla VALUES (5,15);
INSERT INTO desarrolla VALUES (5,16);
INSERT INTO desarrolla VALUES (3,17);
INSERT INTO desarrolla VALUES (3,18);
INSERT INTO desarrolla VALUES (5,19);
INSERT INTO desarrolla VALUES (4,20);

INSERT INTO distribuye VALUES (1,1,10);
INSERT INTO distribuye VALUES (1,2,11);
INSERT INTO distribuye VALUES (1,6,5);
INSERT INTO distribuye VALUES (1,7,3);
INSERT INTO distribuye VALUES (1,10,5);
INSERT INTO distribuye VALUES (1,13,7);
INSERT INTO distribuye VALUES (2,1,6);
INSERT INTO distribuye VALUES (2,2,6);
INSERT INTO distribuye VALUES (2,6,4);
INSERT INTO distribuye VALUES (2,7,7);
INSERT INTO distribuye VALUES (3,10,8);
INSERT INTO distribuye VALUES (3,13,5);
INSERT INTO distribuye VALUES (4,14,3);
INSERT INTO distribuye VALUES (4,20,6);
INSERT INTO distribuye VALUES (5,15,8);
INSERT INTO distribuye VALUES (5,16,2);
INSERT INTO distribuye VALUES (5,17,3);
INSERT INTO distribuye VALUES (5,19,6);
INSERT INTO distribuye VALUES (5,8,8);

INSERT INTO registra VALUES (1,1,1,'Internet');
INSERT INTO registra VALUES (1,3,4,'Tarjeta postal');
INSERT INTO registra VALUES (4,2,10,'Tel�fono');
INSERT INTO registra VALUES (4,1,10,'Tarjeta postal');
INSERT INTO registra VALUES (5,2,12,'Internet');
INSERT INTO registra VALUES (2,4,15,'Internet');

/*
Resolver las suguientes sentencias
/*--1)Averigua el DNI de todos los clientes. */
select dni from cliente;
/*-- 2) Consulta todos los datos de todos los programas. */
select * from programa;
/*-- 3) Obt�n un listado con los nombres de todos los programas. */
select nombre from programa;
/*-- 4) Genera una lista con todos los comercios. */
select * from comercio;
/*-- 5) Genera una lista de las ciudades con establecimientos donde se venden 
programas, sin que aparezcan valores duplicados (utiliza DISTINCT). */
select distinct ciudad from comercio;
/*-- 6) Obt�n una lista con los nombres de programas, sin que aparezcan valores 
duplicados (utiliza DISTINCT). */
select DISTINCT nombre from programa;
/*-- 7) Obt�n el DNI m�s 4 de todos los clientes. */
select (dni+4) as dni_modificado from cliente;
/*-- 8) Haz un listado con los c�digos de los programas multiplicados por 7. */
select (codigo*7) as codigo_modificado from programa;
/*-- 9) ¿Cuáles son los programas cuyo código es inferior o igual a 10? */
select * from programa where codigo <= 10;
/*-- 10) ¿Cuál es el programa cuyo código es 11? */
select * from programa where codigo = 11;
/*-- 11) ¿Qué fabricantes son de Estados Unidos? */
select * from fabricante where pais like 'Estados Unidos';
/*-- 12) ¿Cuáles son los fabricantes no españoles? Utilizar el operador IN. */
select * from fabricante where pais not in ('Espa�a');
/*-- 13) Obtén un listado con los códigos de las distintas versiones de Windows. */
select codigo,version from programa where nombre like ('Windows');
/*-- 14) ¿En qué ciudades comercializa programas El Corte Inglés? */
select ciudad from comercio where nombre like 'El Corte Ingl�s';
/*-- 15) ¿Qué otros comercios hay, además de El Corte Inglés? Utilizar el operador IN. */
select distinct nombre from comercio where nombre not in ('El Corte Ingl�s');
/*-- 16) Genera una lista con los códigos de las distintas versiones de Windows
y Access. Utilizar el operador IN. */
select codigo,nombre,version from programa where nombre in ('Windows','Access');
/*-- 17) Obtén un listado que incluya los nombres de los clientes de edades 
comprendidas entre 10 y 25 y de los mayores de 50 años. Da una solución con 
BETWEEN y otra sin BETWEEN. */
select nombre,edad from cliente where edad BETWEEN 10 and 25 or edad > 50;
select nombre,edad from cliente where (edad >=10 and edad <= 25) or edad > 50;
/*-- 18) Saca un listado con los comercios de Sevilla y Madrid. No se admiten 
valores duplicados. */
select distinct nombre from comercio where ciudad in ('Sevilla','Madrid');
/*-- 19) ¿Qué clientes terminan su nombre en la letra "o"? */
select nombre from cliente where nombre like '%o';
/*-- 20) ¿Qué clientes terminan su nombre en la letra "o" y, además, 
son mayores de 30 años? */
select nombre,edad from cliente where nombre like '%o' and edad > 30;
/*-- 21) Obtén un listado en el que aparezcan los programas cuya versión finalice
por una letra i, o cuyo nombre comience por una A o por una W. */
select nombre,version from programa where version like '%i' or nombre like 'A%' or nombre like 'W%';
/*-- 22) Obtén un listado en el que aparezcan los programas cuya versión finalice
por una letra i, o cuyo nombre comience por una A y termine por una S. */
select nombre,version from programa where version like '%i' or nombre like 'A%s';
/*-- 23) Obtén un listado en el que aparezcan los programas cuya versión finalice
por una letra i, y cuyo nombre no comience por una A. */
select nombre,version from programa where version like '%i' and nombre not like 'A%';
/*-- 24) Obtén una lista de empresas por orden alfabético ascendente. */
select * from fabricante order by nombre;
/*-- 25) Genera un listado de empresas por orden alfabético descendente. */
select * from fabricante order by nombre desc;
/*-- 26) Obtén un listado de programas por orden de versión */
select * from programa order by version;
/*-- 27) Genera un listado de los programas que desarrolla Oracle. */
select distinct nombre from programa where codigo in 
(select codigo from desarrolla natural join fabricante where nombre ='Oracle');

select distinct p.nombre from fabricante f join desarrolla d on (f.id_fab = d.id_fab)
join programa p on (d.codigo = p.codigo)
where f.nombre ='Oracle';

select distinct p.nombre from fabricante f, desarrolla d, programa p
where f.id_fab = d.id_fab and d.codigo = p.codigo
and f.nombre = 'Oracle';

/*-- 28) ¿Qué comercios distribuyen Windows? */
select nombre from comercio where cif in
(select cif from distribuye natural join programa where nombre = 'Windows');

select c.nombre FROM comercio c join distribuye d on (c.cif = d.cif)
join programa p on (d.codigo = p.codigo) where p.nombre ='Windows';
/*-- 29) Genera un listado de los programas y cantidades que se han distribuido
a El  Corte Inglés de Madrid. */
select nombre,cantidad from programa natural join distribuye
where cif = (select cif from comercio where nombre = 'El Corte Ingl�s' and ciudad = 'Madrid');

select p.nombre,d.cantidad from programa p join distribuye d on (p.codigo = d.codigo)
join comercio c ON (d.cif = c.cif)
where c.nombre = 'El Corte Ingl�s' and c.ciudad = 'Madrid';
/*-- 30) ¿Qué fabricante ha desarrollado Freddy Hardest? */
/*-- 31) Selecciona el nombre de los programas que se registran por Internet. */
/*-- 32) Selecciona el nombre de las personas que se registran por Internet. */
/*-- 33) ¿Qué medios ha utilizado para registrarse Pepe Pérez? */
/*-- 34) ¿Qué usuarios han optado por Internet como medio de registro? */
/*-- 35) ¿Qué programas han recibido registros por tarjeta postal? */
/*-- 36) ¿En qué localidades se han vendido productos que se han registrado por Internet? */
/*-- 37) Obtén un listado de los nombres de las personas que se han registrado por Internet, junto al nombre de los programas para los que ha efectuado el registro. */
/*-- 38) Genera un listado en el que aparezca cada cliente junto al programa que ha registrado, el medio con el que lo ha hecho y el comercio en el que lo ha adquirido.*/ 
/*-- 39) Genera un listado con las ciudades en las que se pueden obtener los productos de Oracle. */
/*-- 40) Obtén el nombre de los usuarios que han registrado el programa "Paradox" en su versión "2". */
/*-- 41) Nombre de aquellos fabricantes cuyo país es el mismo que 'Oracle'. (Subconsulta). */
/*-- 42) Nombre de aquellos clientes que tienen la misma edad que Pepe Pérez. (Subconsulta). */
/*-- 43) Genera un listado con los comercios que tienen su sede en la misma ciudad que tiene el comercio 'Centro Mail'. (Subconsulta). */
/*-- 44) Nombre de aquellos clientes que han registrado un producto de la misma forma que el cliente 'Pepe Pérez'. (Subconsulta). */
/*-- 45) Obtener el número de programas que hay en la tabla programas. */
/*-- 46) Calcula el número de clientes cuya edad es mayor de 40 años. */
/*-- 47) Calcula el número de productos que ha vendido el establecimiento cuyo CIF es 1. */
/*-- 48) Calcula la media de programas que se venden cuyo código es 7. */
/*-- 49) Calcula la mínima cantidad de programas de código 7 que se ha vendido */
/*-- 50) Calcula la máxima cantidad de programas de código 7 que se ha vendido. */
/*-- 51) ¿En cuántos establecimientos se vende el programa cuyo código es 7? */
/*-- 52) Calcular el número de registros que se han realizado por Internet. */
/*-- 53) Obtener el número total de programas que se han vendido en 'Sevilla'.*/ 
/*-- 54) Calcular el número total de programas que han desarrollado los fabricantes cuyo país es 'Estados Unidos'. */
/*-- 55) Visualiza el nombre de todos los clientes en mayúscula. En el resultado de la consulta debe aparecer también la longitud de la cadena nombre. */
/*-- 56) Con una consulta concatena los campos nombre y versión de la tabla programa. */
