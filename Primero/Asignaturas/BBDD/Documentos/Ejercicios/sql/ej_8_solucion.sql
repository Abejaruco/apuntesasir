/*Ejercico con alter table
Crear una tabla alumunos con los campos cod_alumno numero(5), nombre varchar2(20),
 apellidos varchar2(50)*/
create table alumnos(cod_alumno number(5), nombre varchar2(20), apellidos varchar2(20));
/*nos hemos confundido al crear el nombre de la tabla. Para cambiarlo hay que
usar rename to junto con alter table*/
alter table alumnos rename to aluaca;
