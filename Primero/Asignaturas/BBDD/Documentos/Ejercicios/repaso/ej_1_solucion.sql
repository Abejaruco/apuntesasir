/*Crear las siguientes tablas*/
DROP TABLE equipo;
DROP TABLE ciclista;
DROP TABLE etapa;
DROP TABLE puerto;
DROP TABLE mallot;
DROP TABLE llevar;
CREATE TABLE equipo (
	nomeq VARCHAR(20) PRIMARY KEY, director VARCHAR(50)
	);
CREATE TABLE ciclista (
	dorsal INT PRIMARY KEY, nombre VARCHAR(50), edad INT, nomeq  VARCHAR(20),
	FOREIGN KEY (nomeq) REFERENCES equipo(nomeq)
	);
CREATE TABLE etapa (
	netapa INT PRIMARY KEY, km INT, salida VARCHAR(20), llegada VARCHAR(20), dorsal INT,
	FOREIGN KEY (dorsal) REFERENCES ciclista(dorsal)
	);
CREATE TABLE puerto (
	nompuerto VARCHAR(20) PRIMARY KEY, altura INT, categoria VARCHAR(1), 
	pendiente INT, netapa INT, dorsal INT,
	FOREIGN KEY (netapa) REFERENCES etapa(netapa), 
	FOREIGN KEY (dorsal) REFERENCES ciclista(dorsal)
	);
CREATE TABLE maillot (
	codigo VARCHAR(3) PRIMARY KEY, tipo VARCHAR(20), color VARCHAR(20), premio INT
	);

CREATE TABLE llevar (
	dorsal INT, netapa INT, codigo VARCHAR(3),
	PRIMARY KEY (dorsal, netapa, codigo), 
	FOREIGN KEY (dorsal) REFERENCES ciclista(dorsal),
	FOREIGN KEY (netapa) REFERENCES etapa(netapa),
	FOREIGN KEY (codigo) REFERENCES maillot(codigo)
	);
INSERT INTO equipo VALUES ('Amore Vita', 'Ricardo Padacci');
INSERT INTO equipo VALUES ('Banesto', 'Miguel Echevarría');
INSERT INTO equipo VALUES ('Bresciali-Refin', 'Pietro Armani');
INSERT INTO equipo VALUES ('Carrera', 'Luigi Petroni');
INSERT INTO equipo VALUES ('Gatorade', 'Gian Luca Pacceli');
INSERT INTO equipo VALUES ('Kelme', 'Álvaro Pino');
INSERT INTO equipo VALUES ('Mapei-Clas', 'Juan Fernández');
INSERT INTO equipo VALUES ('Navigare', 'Lorenzo Sciacci');
INSERT INTO equipo VALUES ('Telecom', 'Morgan Reikacrd');
INSERT INTO equipo VALUES ('TVM', 'Steevens Henk');
INSERT INTO ciclista VALUES (1, 'Miguel Indurain', 21, 'Banesto');
INSERT INTO ciclista VALUES (2, 'Pedro Delgado', 29, 'Banesto');
INSERT INTO ciclista VALUES (3, 'Alex Zulle', 20, 'Navigare');
INSERT INTO ciclista VALUES (4, 'Alessio Di Basco', 30, 'TVM');
INSERT INTO ciclista VALUES (5, 'Armand', 17, 'Amore Vita');
INSERT INTO ciclista VALUES (8, 'Jean Van Poppel', 24, 'Bresciali-Refin');
INSERT INTO ciclista VALUES (9, 'Maximo Podel', 17, 'Telecom');
INSERT INTO ciclista VALUES (10, 'Mario Cipollini', 31, 'Carrera');
INSERT INTO ciclista VALUES (11, 'Eddy Seigneur', 20, 'Amore Vita');
INSERT INTO ciclista VALUES (12, 'Alessio Di Basco', 34, 'Bresciali-Refin');
INSERT INTO ciclista VALUES (13, 'Gianni Bugno', 24, 'Gatorade');
INSERT INTO ciclista VALUES (15, 'Jesús Montoya', 25, 'Amore Vita');
INSERT INTO ciclista VALUES (16, 'Dimitri Konishev', 27, 'Amore Vita');
INSERT INTO ciclista VALUES (17, 'Bruno Lealli', 30, 'Amore Vita');
INSERT INTO ciclista VALUES (20, 'Alfonso Gutiérrez', 27, 'Navigare');
INSERT INTO ciclista VALUES (22, 'Giorgio Furlan', 22, 'Kelme');
INSERT INTO ciclista VALUES (26, 'Mikel Zarrabeitia', 30, 'Carrera');
INSERT INTO ciclista VALUES (27, 'Laurent Jalabert', 22, 'Banesto');
INSERT INTO ciclista VALUES (30, 'Melchor Mauri', 26, 'Mapei-Clas');
INSERT INTO ciclista VALUES (31, 'Per Pedersen', 33, 'Banesto');
INSERT INTO ciclista VALUES (32, 'Tony Rominger', 31, 'Kelme');
INSERT INTO ciclista VALUES (33, 'Stefenao della Sveitia', 26, 'Amore Vita');
INSERT INTO ciclista VALUES (34, 'Clauido Chiapucci', 23, 'Amore Vita');
INSERT INTO ciclista VALUES (35, 'Gian Mateo Faluca', 34, 'TVM');
INSERT INTO etapa VALUES (1, 35, 'Valladolid', 'Ávila', 1);
INSERT INTO etapa VALUES (2, 70, 'Salamanca', 'Zamora', 2);
INSERT INTO etapa VALUES (3, 150, 'Zamora', 'Almendralejo', 1);
INSERT INTO etapa VALUES (4, 330, 'Córdoba', 'Granada', 1);
INSERT INTO etapa VALUES (5, 150, 'Granada', 'Almería', 3);
INSERT INTO puerto VALUES ('Puerto Alfa', 2489, '1', 34, 2, 3);
INSERT INTO puerto VALUES ('Puerto Beta', 2789, '1', 44, 4, 3);
INSERT INTO puerto VALUES ('Puerto Efe', 2500, 'E', 17, 4, 2);
INSERT INTO puerto VALUES ('Puerto Triple', 2500, 'E', 17, 4, 2);
INSERT INTO puerto VALUES ('Puerto Nuevo', 2500, 'a', 17, 4, 1);
INSERT INTO puerto VALUES ('Puerto Otro', 2500, 'E', 17, 4, 1);
INSERT INTO puerto VALUES ('Puerto Uno', 2500, 'E', 23, 1, 2);
INSERT INTO maillot VALUES ('MGE', 'General', 'Amarillo', 1000000);
INSERT INTO maillot VALUES ('MMO', 'Montaña', 'Blanco y rojo', 500000);
INSERT INTO maillot VALUES ('MMS', 'Más sufrido', 'Estrellitas rojas', 400000);
INSERT INTO maillot VALUES ('MMV', 'Metas volantes', 'Rojo', 400000);
INSERT INTO maillot VALUES ('MRE', 'Regularidad', 'Verde', 300000);
INSERT INTO maillot VALUES ('MSE', 'Sprint especial', 'Rosa', 300000);
INSERT INTO llevar VALUES (1, 3, 'MGE');
INSERT INTO llevar VALUES (1, 4, 'MGE');
INSERT INTO llevar VALUES (2, 2, 'MGE');
INSERT INTO llevar VALUES (3, 1, 'MGE');
INSERT INTO llevar VALUES (3, 1, 'MMV');
INSERT INTO llevar VALUES (3, 4, 'MRE');
INSERT INTO llevar VALUES (4, 1, 'MMO');
INSERT INTO llevar VALUES (5, 2, 'MMO');
/*Ejercicios*/
/*-- 1)Obtener el código, el tipo, el color y el premio de todos los maillots que hay. */
SELECT DISTINCT codigo, tipo, color, premio FROM maillot;
/*-- 2) Obtener el dorsal y el nombre de los ciclistas cuya edad sea menor o igual que 25 años. */
SELECT dorsal, nombre, edad FROM ciclista WHERE edad <= 25;
/*-- 3) Obtener el nombre y la altura de todos los puertos de categoría 'E' (Especial). */
SELECT nompuerto, altura FROM puerto WHERE categoria = 'E';
/*-- 4) Obtener el valor del atributo netapa de aquellas etapas con salida y llegada en la misma ciudad. */
SELECT netapa FROM etapa WHERE salida = llegada;
/*-- 5) ¿Cuántos ciclistas hay? */
SELECT COUNT(*) FROM ciclista;
/*-- 6) ¿Cuántos ciclistas hay con edad superior a 25 años? */
SELECT COUNT(*) FROM ciclista WHERE edad > 25;
/*-- 7) ¿Cuántos equipos hay? */
SELECT COUNT(*) FROM equipo;
/*-- 8) Obtener la media de edad de los ciclistas. */
SELECT ROUND(AVG(edad),2) FROM ciclista;
/*-- 9) Obtener la altura mínima y máxima de los puertos de montaña. */
SELECT MIN(altura), MAX(altura) FROM puerto;
/*-- 10) Obtener el nombre de cada ciclista junto con el nombre del equipo al que pertenece */
SELECT nombre,nomeq FROM ciclista;
/*-- 11) Obtener el nombre de los ciclistas que sean de Banesto.*/
SELECT nombre FROM ciclista WHERE nomeq = 'Banesto';
/*-- 12) ¿Cuántos ciclistas pertenecen al equipo Amore Vita? */
SELECT COUNT(*) FROM ciclista WHERE nomeq='Amore Vita';
/*-- 13) Edad media de los ciclistas del equipo TVM. */
SELECT AVG(edad) FROM ciclista WHERE nomeq= 'TVM';
/*-- 14) Nombre de los ciclistas que pertenezcan al mismo equipo que Miguel Indurain */
SELECT nombre FROM ciclista WHERE nomeq = (
	SELECT nomeq FROM ciclista WHERE nombre = 'Miguel Indurain');
SELECT c1.nombre FROM ciclista c1 JOIN ciclista c2 ON c1.nomeq=c2.nomeq
	WHERE c2.nombre='Miguel Indurain';
/*-- 15) Nombre de los ciclistas que han ganado alguna etapa. */
SELECT DISTINCT nombre FROM ciclista,etapa WHERE ciclista.dorsal = etapa.dorsal;
SELECT DISTINCT nombre FROM ciclista JOIN etapa ON (ciclista.dorsal = etapa.dorsal);
SELECT nombre FROM ciclista WHERE dorsal IN (
	SELECT dorsal FROM etapa);
/*-- 16) Nombre de los ciclistas que han llevado el maillot General. */
SELECT nombre FROM ciclista WHERE dorsal IN (
	SELECT dorsal FROM llevar WHERE codigo = (
		SELECT codigo FROM maillot WHERE tipo = 'General'));
SELECT DISTINCT nombre FROM ciclista, llevar, maillot WHERE ciclista.dorsal = llevar.dorsal
	AND llevar.codigo = maillot.codigo AND tipo = 'General';
/*-- 17) Obtener el nombre del ciclista más joven */
SELECT nombre FROM ciclista WHERE edad = (SELECT MIN(edad) FROM ciclista);
/*-- 18) Obtener el número de ciclistas de cada equipo. */
SELECT COUNT(*) AS Ciclistas,nomeq FROM ciclista GROUP BY nomeq;
/*-- 19) Obtener el nombre de los equipos que tengan más de 5 ciclistas. */
SELECT COUNT(*) AS Ciclistas,nomeq FROM ciclista GROUP BY nomeq HAVING COUNT(*) > 5 ;
/*-- 20) Obtener el número de puertos que ha ganado cada ciclista. */
SELECT nombre,COUNT(*) AS Puertos FROM ciclista,puerto 
	WHERE ciclista.dorsal = puerto.dorsal 
		GROUP BY nombre;
/*-- 21) Obtener el nombre de los ciclistas que han ganado más de un puerto. */
SELECT nombre,COUNT(*) AS Puertos FROM ciclista,puerto 
	WHERE ciclista.dorsal = puerto.dorsal 
		GROUP BY nombre HAVING COUNT(*) > 1;
/*-- 22) Obtener el nombre y el director de los equipos a los que pertenezca algún ciclista mayor de 33 años. */
SELECT ciclista.nomeq,director,nombre,edad FROM ciclista,equipo 
	WHERE ciclista.nomeq = equipo.nomeq AND edad > 33;
/*-- 23) Nombre de los ciclistas que no pertenezcan a Kelme */
SELECT nombre,nomeq FROM ciclista 
	WHERE NOT nomeq = 'Kelme';
SELECT nombre,nomeq FROM ciclista 
	WHERE nomeq <> 'Kelme';
/*-- 24) Nombre de los ciclistas que no hayan ganado ninguna etapa. */
SELECT nombre,dorsal FROM ciclista 
	WHERE dorsal NOT IN (SELECT dorsal FROM etapa);
/*-- 25) Nombre de los ciclistas que no hayan ganado ningún puerto de montaña. */
SELECT nombre,dorsal FROM ciclista
	WHERE dorsal NOT IN (SELECT dorsal FROM puerto);
/*-- 26) Nombre de los ciclistas que hayan ganado más de un puerto de montaña. */
SELECT nombre,COUNT(*) AS Puertos FROM ciclista,puerto 
	WHERE ciclista.dorsal = puerto.dorsal 
		GROUP BY nombre HAVING COUNT(*) > 1;
SELECT nombre,COUNT(*) AS Puertos FROM ciclista JOIN puerto 
	ON ciclista.dorsal = puerto.dorsal 
		GROUP BY nombre HAVING COUNT(*) > 1;
/*-- 27) ¿Qué ciclistas han llevado el mismo maillot que Miguel Indurain? */
SELECT DISTINCT nombre,ciclista.dorsal,maillot.codigo FROM ciclista,maillot,llevar 
	WHERE maillot.codigo = llevar.codigo AND llevar.dorsal = ciclista.dorsal 
		AND maillot.codigo IN (SELECT DISTINCT maillot.codigo FROM llevar,ciclista,maillot 
			WHERE ciclista.dorsal = llevar.dorsal AND maillot.codigo = llevar.codigo
				AND nombre = 'Miguel Indurain');
SELECT DISTINCT nombre FROM ciclista JOIN llevar
	ON (ciclista.dorsal = llevar.dorsal) JOIN maillot
		ON (llevar.codigo = maillot.codigo)
			AND tipo IN (SELECT DISTINCT tipo FROM ciclista JOIN llevar 
				ON (ciclista.dorsal = llevar.dorsal) JOIN maillot
					ON (llevar.codigo = maillot.codigo)
						AND nombre = 'Miguel Indurain');
/*-- 28) De cada equipo obtener la edad media, la máxima edad y la mínima edad. */
SELECT nomeq,AVG(edad),MAX(edad),MIN(edad) FROM ciclista GROUP BY nomeq;
/*-- 29) Nombre de aquellos ciclistas que tengan una edad entre 25 y 30 años y que no pertenezcan a los equipos Kelme y Banesto. */
SELECT nombre,edad,nomeq FROM ciclista 
	WHERE edad BETWEEN 25 AND 30 AND nomeq <> 'Kelme' AND nomeq <> 'Banesto';
SELECT nombre,edad,nomeq FROM ciclista 
	WHERE edad BETWEEN 25 AND 30 AND nomeq NOT IN ('Kelme','Banesto');
/*-- 30) Nombre de los ciclistas que han ganado la etapa que comienza en Zamora. */
SELECT nombre,netapa FROM ciclista JOIN etapa 
	ON (ciclista.dorsal = etapa.dorsal) 
		AND salida = 'Zamora';
SELECT nombre,netapa FROM ciclista,etapa 
	WHERE ciclista.dorsal = etapa.dorsal 
		AND salida = 'Zamora';
/*-- 31) Obtén el nombre y la categoría de los puertos ganados por ciclistas del equipo 'Banesto'. */
SELECT nompuerto, categoria,nomeq FROM puerto JOIN ciclista
	ON (puerto.dorsal = ciclista.dorsal) AND nomeq = 'Banesto';
SELECT nompuerto,categoria FROM puerto 
	WHERE dorsal IN (SELECT dorsal FROM ciclista WHERE nomeq='Banesto');
/*-- 32) Obtener el nombre de cada puerto indicando el número (netapa) y los kilómetros de la etapa en la que se encuentra el puerto. */
SELECT nompuerto,etapa.netapa,km FROM puerto,etapa WHERE puerto.netapa = etapa.netapa;
SELECT nompuerto,etapa.netapa,km FROM puerto JOIN etapa ON (puerto.netapa = etapa.netapa);
/*-- 33) Obtener el nombre de los ciclistas con el color de cada maillot que hayan llevado. */
SELECT DISTINCT ciclista.nombre,maillot.color FROM ciclista JOIN llevar 
	ON ( ciclista.dorsal = llevar.dorsal) JOIN maillot
		ON (llevar.codigo = maillot.codigo);
SELECT DISTINCT ciclista.nombre,maillot.color FROM ciclista,llevar,maillot	
	WHERE ciclista.dorsal = llevar.dorsal 
		AND llevar.codigo = maillot.codigo;
/*-- 34) Obtener el número de etapa y el nombre de ciclista, tal que ese ciclista haya ganado esa etapa habiendo llevado el maillot de color amarillo al menos una vez con anterioridad. 
	netapa	nombre
	4		Miguel Indurain
	5		Alex Zulle
*/
SELECT etapa.netapa,ciclista.nombre,maillot.color FROM ciclista 
	JOIN etapa ON (ciclista.dorsal = etapa.dorsal) 
		JOIN llevar	ON (ciclista.dorsal = llevar.dorsal) 
			JOIN maillot ON (maillot.codigo = llevar.codigo) 
				AND maillot.color = 'Amarillo'; 
SELECT etapa.netapa,ciclista.nombre FROM ciclista,etapa,llevar,maillot
	WHERE ciclista.dorsal = etapa.dorsal
		AND ciclista.dorsal = llevar.dorsal
			AND llevar.netapa < etapa.netapa
				AND llevar.codigo = maillot.codigo
					AND color = 'Amarillo';
/*-- 35) Obtener el valor del atributo netapa de las etapas que no comienzan en la misma ciudad en que acabó la anterior etapa. 
	netapa
	1
	2
	4
*/
SELECT e1.netapa FROM etapa e1, etapa e2
	WHERE e1.netapa = e2.netapa+1
		AND e1.salida < e1.llegada;
/*-- 36) Obtener el valor del atributo netapa y la ciudad de salida de aquellas etapas que no tengan puertos de montaña.*/
SELECT etapa.netapa,etapa.salida FROM etapa 
	WHERE etapa.netapa NOT IN (SELECT netapa FROM puerto);
/*-- 37) Obtener la edad media de los ciclistas que han ganado alguna etapa. */

/*-- 38) Selecciona el nombre de los puertos con una altura superior a la altura media de todos los puertos. */
/*-- 39) Obtener el nombre de la ciudad de salida y de llegada de las etapas donde estén los puertos con mayor pendiente. */
/*-- 40) Obtener el dorsal y el nombre de los ciclistas que han ganado los puertos de mayor altura. */
/*-- 41) Obtener el nombre del ciclista más joven que ha ganado al menos una etapa. */
/*-- 42) Obtener el valor del atributo netapa de aquellas etapas tales que todos los puertos que están en ellas tienen al menos 2500 metros de altura. */
/*-- 43) Obtener el nombre y el director de los equipos tales que todos sus ciclistas son mayores de 20 años. */
/*-- 44) Obtener el dorsal y el nombre de los ciclistas tales que todas las etapas que han ganado tienen al menos 150 km (es decir que sólo han ganado etapas de más o igual a 150 km). */
/*-- 45) Obtener el nombre de los ciclistas que han ganado una etapa y algún puerto de esa misma etapa. */
/*-- 46) Obtener el nombre de los equipos tales que todos sus corredores han llevado algún maillot o han ganado algún puerto. (ninguno lo comple) */
/*-- 47) Obtener el código y el color de aquellos maillots que sólo han sido llevados por ciclistas de un mismo equipo. */
/*-- 48) Obtener el nombre de aquellos equipos tal que sus ciclistas sólo hayan ganado puertos de 1a categoría. */
/*-- 49) Obtener el valor del atributo netapa de aquellas etapas que tienen puertos de montaña indicando cuántos tiene. */
/*-- 50) Obtener el nombre de todos los equipos indicando cuántos ciclistas tiene cada uno. */
/*-- 51) Obtener el director y el nombre de los equipos que tengan más de 3 ciclistas y cuya edad media sea igual o inferior a 30 años. */
/*-- 52) Obtener el nombre de los ciclistas que pertenezcan a un equipo que tenga más de cinco corredores y que hayan ganado alguna etapa indicando cuántas etapas ha ganado. */
/*-- 53) Obtener el nombre de los equipos y la edad media de sus ciclistas de aquellos equipos que tengan la media de edad máxima de todos los equipos. */
/*-- 54) Obtener el director de los equipos cuyos ciclistas han llevado más días maillots de cualquier tipo. */
/*-- 55) Obtener el código y el color del maillot que ha sido llevado por algún ciclista que no ha ganado ninguna etapa. */
/*-- 56) Obtener el valor del atributo netapa, la ciudad de salida y la ciudad de llegada de las etapas de más de 190 km y que tengan por lo menos dos puertos. */
/*-- 57) Obtener el dorsal y el nombre de los ciclistas que no han llevado todos los maillots que ha llevado el ciclista de dorsal 2. */
/*-- 58) Obtener el dorsal y el nombre de los ciclistas que han llevado al menos un maillot de los que ha llevado el ciclista de dorsal 2. */
/*-- 59) Obtener el dorsal y el nombre de los ciclistas que no han llevado ningún maillot de los que ha llevado el ciclista de dorsal 2. */
/*-- 60) Obtener el dorsal y nombre de los ciclistas que han llevado exactamente los mismos maillots que ha llevado el ciclista de dorsal 1. */
/*-- 61) Obtener el dorsal y el nombre del ciclista que ha llevado durante más kilómetros un mismo maillot e indicar también el color de dicho maillot. */
/*-- 62) Obtener el dorsal y el nombre de los ciclistas que han llevado dos tipos de maillot menos de los que ha llevado el ciclista de dorsal 3. */
/*-- 63) Obtener el valor del atributo netapa y los km de las etapas que tienen puertos de montaña. */
