/*Crear las siguientes tablas
empleados 
    id_empleado number(3) PRIMARY KEY
    nombre VARCHAR2(64),
    id_funcion number(3)
    id_sector number(3)
    id_localidad number(3)*/
DROP TABLE empleados;
CREATE TABLE empleados (id_empleado number(3) PRIMARY KEY, nombre VARCHAR2(64),
			    id_funcion number(3), id_sector number(3), id_localidad number(3));
/*
funciones (
    id_funcion number(3)  PRIMARY KEY,
    nombre VARCHAR2(128)
*/
DROP TABLE funciones;
CREATE TABLE funciones (id_funcion number(3)  PRIMARY KEY, nombre VARCHAR2(128));
/*
sectores (
    id_sector number(3)  PRIMARY KEY,
    nombre VARCHAR2(128)
*/
DROP TABLE sectores;
CREATE TABLE sectores (id_sector number(3)  PRIMARY KEY, nombre VARCHAR2(128));
/*       
localidades (
    id_localidad number(3)  PRIMARY KEY,
    nombre VARCHAR2(128)
);*/
DROP TABLE localidades;
CREATE TABLE localidades (id_localidad number(3)  PRIMARY KEY, nombre VARCHAR2(128));

INSERT INTO empleados VALUES ( 1, 'Marcos Aguirre', 1, 1 , 3);
INSERT INTO empleados VALUES ( 2, 'Esteban Quito', 2, 4 , 2);
INSERT INTO empleados VALUES ( 3, 'Daniel Perez', 1, 2 , 1);
INSERT INTO empleados VALUES ( 4, 'Carlos Molina', 1, 1 , 3);
INSERT INTO empleados VALUES ( 5, 'Marcos Aguirre', 4, 1 , 1);
INSERT INTO sectores VALUES ( 1, 'Mantenimiento' );
INSERT INTO sectores VALUES ( 2, 'Ingenieria' );
INSERT INTO sectores VALUES ( 3, 'Costos' );
INSERT INTO funciones VALUES ( 1, 'Programador' );
INSERT INTO funciones VALUES ( 2, 'Analista funcional' );
INSERT INTO funciones VALUES ( 3, 'Administración' );
INSERT INTO localidades VALUES ( 1, 'Maldonado' );
INSERT INTO localidades VALUES ( 2, 'Salto' );
INSERT INTO localidades VALUES ( 3, 'Federación' );

/*Hacer una select que para cada empleado me devuelva su id_empleado, nombre, id_funcion y nombre funcion*/
SELECT e.id_empleado,e.nombre,f.id_funcion,f.nombre FROM empleados e,funciones f 
	WHERE e.id_funcion=f.id_funcion;

SELECT e.id_empleado,SUBSTR(e.nombre,1,15) AS nombre,f.id_funcion,SUBSTR(f.nombre,1,15) AS funcion
 FROM empleados e,funciones f WHERE e.id_funcion=f.id_funcion;

SELECT e.id_empleado,SUBSTR(e.nombre,1,15) AS Empleado,f.id_funcion,SUBSTR(f.nombre,1,15) AS Funcion,e.id_sector,
	SUBSTR(s.nombre,1,15) AS Sector,l.id_localidad,l.nombre AS Localidad
	FROM empleados e,funciones f, sectores s, localidades l
	WHERE e.id_funcion=f.id_funcion AND e.id_sector=s.id_sector AND e.id_localidad=l.id_localidad;

SELECT e.id_empleado,SUBSTR(e.nombre,1,15) AS nombre,f.id_funcion,SUBSTR(f.nombre,1,15) AS funcion
	FROM empleados e CROSS JOIN funciones f;

ALTER TABLE funciones RENAME COLUMN nombre TO nombre_funcion;

SELECT e.id_empleado,SUBSTR(e.nombre,1,15) AS nombre,id_funcion,SUBSTR(f.nombre_funcion,1,15) AS funcion
	FROM empleados e NATURAL JOIN funciones f;
	
SELECT e.id_empleado,SUBSTR(e.nombre,1,15) AS nombre,id_funcion,SUBSTR(f.nombre_funcion,1,15) AS funcion
	FROM empleados e JOIN funciones f USING(id_funcion);
	
SELECT e.id_empleado,SUBSTR(e.nombre,1,15) AS nombre,id_funcion,
	SUBSTR(f.nombre_funcion,1,15) AS funcion, SUBSTR(s.nombre,1,15) AS sector
	FROM empleados e 	JOIN funciones f USING(id_funcion)
						JOIN sectores s USING(id_sector);
	
SELECT SUBSTR(e.nombre,1,15) AS nombre, e.id_funcion, SUBSTR(f.nombre_funcion,1,15) AS funcion
	FROM empleados e JOIN funciones f ON(e.id_funcion=f.id_funcion AND f.nombre_funcion='Programador');

SELECT SUBSTR(e.nombre,1,15) AS nombre, e.id_funcion, SUBSTR(f.nombre_funcion,1,15) AS funcion
	FROM empleados e 	JOIN funciones f ON(e.id_funcion=f.id_funcion AND f.nombre_funcion='Programador')
						JOIN sectores s ON (e.id_sector=s.id_sector);

SELECT SUBSTR(e.nombre,1,15) AS nombre, e.id_funcion, SUBSTR(f.nombre_funcion,1,15) AS funcion
	FROM empleados e LEFT OUTER JOIN funciones f ON(e.id_funcion=f.id_funcion);

SELECT SUBSTR(e.nombre,1,15) AS nombre, e.id_funcion, NVL(SUBSTR(f.nombre_funcion,1,15),'SIN FUNCION') AS funcion
	FROM empleados e LEFT OUTER JOIN funciones f ON(e.id_funcion=f.id_funcion);

SELECT SUBSTR(e.nombre,1,15) AS nombre, e.id_funcion, NVL(SUBSTR(f.nombre_funcion,1,15),'SIN FUNCION') AS funcion
	FROM empleados e, funciones f WHERE e.id_funcion=f.id_funcion(+);

INSERT INTO funciones VALUES(5,'Analista Orgánico');

SELECT SUBSTR(e.nombre,1,15) AS nombre, e.id_funcion, NVL(SUBSTR(f.nombre_funcion,1,15),'SIN FUNCION') AS funcion
	FROM empleados e FULL OUTER JOIN funciones f ON(e.id_funcion=f.id_funcion);
