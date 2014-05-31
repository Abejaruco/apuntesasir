/*Crear una tabla con un valor no nulo, único y con restricción*/
create table prueba(codigo number(3) NOT NULL UNIQUE,
		descripcion varchar2(30) DEFAULT 'Escribir descripción',
		casado number(1)
		CONSTRAINT ck_casado CHECK (casado IN(0,1)));
/*ck_caso es el nombre de la restricción, CHECK es que va a chequear
que el valor de casado este en (IN) la lista de valores 0,1;*/
create table prueba(codigo number(3) NOT NULL UNIQUE,
		descripcion varchar2(30) DEFAULT 'Escribir descripción',
		casado number(1)
		CONSTRAINT ck_casado CHECK (casado BETWEEN 1 AND 2));
/*ck_caso es el nombre de la restricción, CHECK es que va a chequear
que el valor de casado este entre (BETWEEN) el rango de valores 1-2*/
