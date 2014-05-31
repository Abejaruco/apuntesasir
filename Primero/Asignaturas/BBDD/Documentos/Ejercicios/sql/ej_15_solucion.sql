/*Tablas:
TIPO (Codigo, Nombre, Características) Clave: Codigo.
FABRICANTE (CIF, Domicilio) Clave: CIF.
APARATO (Codigo, Descripcion, codigo_tipo) Clave: Codigo
COMPONENTES (Codigo, Nombre, Especificaciones, codigo_fabricante) Clave: Codigo.
APARATO_COMPONENTES (codigo_aparato, codigo_componente, NUnidades) Claves: codigo_aparato, codigo_componente.
*/
/*
Repaso Create/Alter/Drop Table 

Crear las siguientes tablas 
Tabla Autobus 
Campos: 
CodBus number(4) 
Marca Varchar2(40) 
NPlazas Varchar(2) 
Modelo Varchar2(50) 
Restricciones 
Clave Principal : CodBus 
Campos no nulos: Marca y Nplazas 
*/
CREATE TABLE autobus (codbus number(4), marca varchar2(40) NOT NULL,nplazas varchar2(2) NOT NULL,modelo varchar2(50),
			CONSTRAINT PK_autobus PRIMARY KEY (codbus));
/*
Tabla Recorridos 
Campos: 
CodRecorrido Number(4) 
DescRecorrido Varchar(10) 
Festivo Number(1) 
Restricciones 
Clave Principal : CodRecorrido 
Check El campo festivo solo debe aceptar los valores 0 o 1. 
Festivo debe tener el valor 0 por defecto 
*/
CREATE TABLE recorridos (codrecorrido number(4), descrecorrido varchar2(10), festivo number(1) DEFAULT (0),
			CONSTRAINT PK_recorridos PRIMARY KEY (codrecorrido),
			CONSTRAINT CK_festivo_recorridos CHECK (festivo BETWEEN 0 AND 1));
/*
Tabla RecorridoBus 
Campos 
CodRecorrido Number(4) 
CodBus Number(4) 
Restricciones 
Clave Principal: CodRecorrido,CodBus 
Claves Foraneas: CodRecorrido con la tabla Recorrido 
Cod Bus con la tabla CodBus 
*/
CREATE TABLE recorridobus (codrecorrido number(4),codbus number(4),
		CONSTRAINT PK_recorridobus PRIMARY KEY (codrecorrido,codbus),
		CONSTRAINT FK_recorridobus_codrecorrido FOREIGN KEY (codrecorrido) REFERENCES recorridos(codrecorrido),
		CONSTRAINT FK_recorridobus_codbus FOREIGN KEY (codbus) REFERENCES autobus(codbus));
/*
1. Eliminar el campo modelo de la tabla Autobus*/
ALTER TABLE autobus DROP COLUMN modelo;
/*2. Modificar el campo Nplazas de la tabla autobus para que se un Number(2) */
ALTER TABLE autobus MODIFY nplazas number(2);
/*3. Modicficar el campos DescRecorrido de la tabla recorrdos para que se un varchar(50) */
ALTER TABLE recorridos MODIFY descrecorrido varchar2(50);
/*4. Insertar un registro en la tabla Recorrido con los valores 
a. CodRecorrido:1 
b. DescRecorrido:”Bilbao-Vitoria” 
c. Festivo:2 */
INSERT INTO recorridos VALUES (1,'Bilbao-Vitoria',2);
/*5. ¿Por qué ha fallado?
ERROR en línea 1:
ORA-02290: restricción de control (ASIR1.CK_FESTIVO_RECORRIDOS) violada
Ha fallado porque festivos tiene que ser 0 ó 1*/
/*6. Eliminar la restricción check de de la tabla Recorridos */
ALTER TABLE recorridos DROP CONSTRAINT CK_festivo_recorridos;
/*7. Insertar el registro anterior */
INSERT INTO recorridos VALUES (1,'Bilbao-Vitoria',2);
/*8. Añadir el campo Vuelta Varcahr2(2) en la Recorrido */
ALTER TABLE recorridos ADD vuelta varchar2(2);
/*9. Añadir una restricción de tipo check en la tabla recorrido par el campo vuelta, este campo solo puede tomar los valores SI o NO. */
ALTER TABLE recorridos ADD CONSTRAINT CH_vuelta_recorridos CHECK (vuelta='si' OR vuelta='NO');
/*10. Cambiar el nombre de la tabla RecorridoBus a RecorBus */
ALTER TABLE recorridobus RENAME TO recorbus;
/*11. Eliminar la tabla Autobus, si no es posible eliminar las restricciones que no permiten su borrado y eliminarla */
DROP TABLE autobus;
/*ERROR en línea 1:
ORA-02449: claves únicas/primarias en la tabla referidas por claves ajenas*/
ALTER TABLE recorbus DROP CONSTRAINT FK_recorridobus_codbus;
DROP TABLE autobus;
