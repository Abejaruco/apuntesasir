/*Tablas: 
Vendedores (Num.Emp, Nombre, Apellido, Salario, Poblacion_concesionario, Comision). Clave: Num.Emp
Vehiculos (Id, Modelo, precio, Num.Emp). Clave: Id.
Extras (Id, Nombre, precio). Clave: Id.
Añadido (Id_vehiculo, Id_extra). Claves: Id_vehiculo, Id_extra.
*/
/*4 Crear las tablas resultantes en Oracle, estableciendo las relaciones necesarias para asegurar la integridad referencial */
CREATE TABLE vendedores(numemp number(5), nombre varchar2(20), apellido varchar2(20), poblacion varchar2(20),			salario number(5), comision number(5),
			CONSTRAINT PK_vendedores PRIMARY KEY (numemp));
CREATE TABLE vehiculos (id number(10), modelo varchar2(20), precio number(5), numemp number(5),
			CONSTRAINT PK_vehiculos PRIMARY KEY (id),
			CONSTRAINT FK_vendedores FOREIGN KEY (numemp) REFERENCES vendedores(numemp));
CREATE TABLE extras (id number(5), nombre varchar2(20), precio number(5),
			CONSTRAINT PK_extras PRIMARY KEY (id));
CREATE TABLE instalado (id_vehiculo number(10), id_extra number(5),
			CONSTRAINT PK_instalado PRIMARY KEY (id_vehiculo, id_extra),
			CONSTRAINT FK_vehiculo FOREIGN KEY (id_vehiculo) REFERENCES vehiculos(id),
			CONSTRAINT FK_extras FOREIGN KEY (id_extra) REFERENCES extras(id));
/*5 Lanzar las siguientes inserciones para la tabla vendedor */
INSERT INTO vendedores VALUES (1,'Juan','Lopez','Bilbao', 21000, 200); 
INSERT INTO vendedores VALUES (2,'Javier','Garcia','Bilbao', 22000, 300); 
INSERT INTO vendedores VALUES (3,'Iñaki','Bilbao','Barakaldo', 23000, 400); 
INSERT INTO vendedores VALUES (4,'Koldo','Zubiaurre','Gernika', 21500, 100); 
INSERT INTO vendedores VALUES (5,'Miren','Gil','Bilbao', 22500, 150); 
INSERT INTO vendedores VALUES (6,'Ane','Fernandez','Bilbao', 23500, 160); 
INSERT INTO vendedores VALUES (7,'Luis','Hernandez','Santurtzi', 21000, 170); 
INSERT INTO vendedores VALUES (8,'Maria','Garcia','Santurtzi', 22200, 100); 
INSERT INTO vendedores VALUES (9,'Juan','Romero','Bilbao', 23000, 200); 
INSERT INTO vendedores VALUES (10,'Alfonso','Etxebarria','Bilbao', 26700, 250); 
INSERT INTO vendedores VALUES (11,'Alberto','Ormaetxea','Gernika', 27000, 500); 
INSERT INTO vendedores VALUES (12,'Nerea','Sanz','Bermeo', 21300, 300); 
INSERT INTO vendedores VALUES (13,'Sonia','Gutierrez','Gernika', 21400, 300); 
INSERT INTO vendedores VALUES (14,'Koldo','Solaun','Bilbao', 24000, 200); 
INSERT INTO vendedores VALUES (15,'Jose','Sanchez','Bermeo', 24000, 200); 
INSERT INTO vendedores VALUES (16,'Mikel','Sangroniz','Bilbao', 23400, 260); 
INSERT INTO vendedores VALUES (17,'Markel', 'Lopez','Galdakao', 21700, 270); 
INSERT INTO vendedores VALUES (18,'Koldo','Bergara','Bilbao', 27000, 400); 
INSERT INTO vendedores VALUES (19,'Manuel','Iraola','Bilbao', 21400, 100); 
INSERT INTO vendedores VALUES (20,'Paula','Martinez','Galdakao', 21500, 400); 
INSERT INTO vendedores VALUES (21,'Jon','Saenz','Bilbao', 23000, 500); 
/*1. Modificar el valor de la Población_concesionario para todos aquellos que tengan el valor Bilbao y ponérselo a 'Bilbo' */
UPDATE vendedores SET poblacion='Bilbo' WHERE poblacion='Bilbao';
/*2. Modificar el valor del campo Comisión a todos aquellos cuya comisión se superior a 450 y poner el valor de comisión a 480 */
UPDATE vendedores SET comision=480 WHERE comision>450;
/*3. Confirmar los cambios */
COMMIT;
/*4. Eliminar toda la información de la tabla empleados.*/
DELETE vendedores;
/*5. Recuperar la información */
ROLLBACK;
/*6. Mostrar el nombre, el apellido y población_concesionario de todos los vendedores que trabajen en el concesionario de Galdakao */
SELECT nombre, apellido, poblacion FROM vendedores WHERE poblacion='Galdakao';
/*7. Mostrar el nombre, el apellido y el salario de todos los vendedores que ganen entre 21000 y 22000 euros, incluyendo estos valores, ordenado por salario */
SELECT nombre,apellido,salario FROM vendedores WHERE salario BETWEEN 21000 AND 22000;
/*8. Mostrar el nombre, el apellido y el salario de todos los vendedores que ganen mas de 21000 y menos de 22000, ordenados por salario */
SELECT nombre,apellido, salario FROM vendedores WHERE salario > 21000 AND salario < 22000 ORDER BY salario;
/*9. Mostrar el nombre, el apellido de todos los vendedores de la forma "Apellido, Nombre", en una sola columna llamada "Vendedor" */
SELECT apellido||', '||nombre as Vendedor FROM vendedores;
/*10. Mostrar el nombre, el apellido y el salario y comisión de aquellos vendedores cuyo nombre empiece por "A" */
SELECT nombre,apellido,salario,comision FROM vendedores WHERE nombre LIKE 'A%';
/*11. Mostrar el nombre, el apellido y el salario y comisión de todos los vendedores cuyo salario sea superior a 23500 euros o su comisión sea igual o menor que 100 */
SELECT nombre,apellido,salario,comision FROM vendedores WHERE salario > 23500 OR comision <= 100;
/*12. Mostrar las distintas poblaciones donde hay concesionarios */
SELECT DISTINCT poblacion FROM vendedores;
/*13. Modificar el valor del campo comisión y poner el valor 0 para aquellos cuya comisión es menor de 150 */
UPDATE vendedores SET comision=0 WHERE comision< 150;
/*14. Modificar el valor del campo comisión, incrementándolo en un 5%, para todos los vendedores */
UPDATE vendedores SET comision=comision*1.05;
/*15. Confirmar los cambios */
COMMIT;
/*16. Eliminar todos los vendedores cuya comisión se nula */
DELETE FROM vendedores WHERE comision=null;
/*17. Eliminar todos los vendedores cuya comisión sea 0 */
DELETE FROM vendedores WHERE comision=0;
/*18. Mostrar el nombre, el apellido de todos los vendedores cuyo apellido acabe en 's' */
SELECT nombre,apellido FROM vendedores WHERE apellido LIKE '%s';
/*19. Mostrar el nombre y el apellido y población_concesionario de todos los vendedores que no son de Bilbo */
SELECT nombre,apellido,poblacion FROM vendedores WHERE NOT poblacion='Bilbo';
/*20. Mostrar el nombre, el apellido y población_concesionario de todos los vendedores que no son ni de Gernika, ni de Bermeo */
SELECT nombre,apellido,poblacion FROM vendedores WHERE NOT poblacion='Gernika' AND NOT poblacion='Bermeo';
