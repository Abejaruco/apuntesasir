drop table TipoProyecto;

create table TipoProyecto(CodTipoPr Varchar2(3),DesTipoPr Varchar2(30),
             constraint PK_TIPOPROYECTO PRIMARY KEY (CodTipoPr));

drop table Proyecto;

create table  Proyecto(CodProyecto Varchar2(5),	NomProyecto Varchar2(20),DesProyecto Varchar2(50),
             FechaIni Date,FechaFin Date,CodTipoPr Varchar2(3),
             constraint PK_PROYECTO PRIMARY KEY (CodProyecto),
             constraint FK_PROY_TIPOPROY FOREIGN KEY (CodTipoPr) REFERENCES TipoProyecto(CodTipoPr));

drop table Categoria;

create table Categoria(CodCategoria Varchar2(3),DesCategoria Varchar2(30),SalarioBase Number(8),
		 constraint PK_Categoria PRIMARY KEY (CodCategoria));

drop table Profesional;

create table Profesional(CodProf Varchar2(5),NomProf Varchar2(20),ApelProf Varchar2(60),CodCategoria Varchar2(3),
		constraint PK_Profesional PRIMARY KEY (CodProf),
             	constraint FK_PROF_CATE FOREIGN KEY (CodCategoria) REFERENCES Categoria(CodCategoria));

drop table ProyProf;

create table  ProyProf(CodProy Varchar2(5),CodProf Varchar2(5),
		constraint PK_ProyProf PRIMARY KEY (CodProy,CodProf),
             	constraint FK_PROYPROF_PROY FOREIGN KEY (CodProy) REFERENCES Proyecto(CodProyecto),
		constraint FK_PROYPROF_PROF FOREIGN KEY (CodProf) REFERENCES Profesional(CodProf));

insert into TipoProyecto values(1,'Llave en mano');
insert into TipoProyecto values(2,'Mantenimiento');
insert into TipoProyecto values(3,'Consultoria');

insert into Proyecto values(1,'BanEc','Banca electrónica','01/01/10','31/12/15',2);
insert into Proyecto values(2,'Sem13','Semaforos Urbanos','02/02/13','31/08/13',1);
insert into Proyecto values(3,'Tefmov','Telefonía móvil','08/03/13','16/03/13',3);

insert into Categoria values(1,'Programador1',15000);
insert into Categoria values(2,'Programador2',18000);
insert into Categoria values(3,'Analista-Programador1',21000);
insert into Categoria values(4,'Analista-Programador1',24000);
insert into Categoria values(5,'Analista1',27000);
insert into Categoria values(6,'Analista2',30000);
insert into Categoria values(7,'Jefe Proyecto',33000);


insert into Profesional values(1,'Jon','Gomez',1);
insert into Profesional values(2,'Luis','Lopez',1);
insert into Profesional values(3,'Amaya','Garcia',2);
insert into Profesional values(4,'Jone','Perez',2);
insert into Profesional values(5,'Iñaki','Bravo',2);
insert into Profesional values(6,'Rafael','Diaz',3);
insert into Profesional values(7,'German','Fernandz',4);


insert into ProyProf values(1,1);
insert into ProyProf values(1,2);
insert into ProyProf values(1,4);
insert into ProyProf values(2,1);
insert into ProyProf values(2,3);
insert into ProyProf values(2,4);
insert into ProyProf values(2,7);
insert into ProyProf values(3,2);
insert into ProyProf values(3,5);
insert into ProyProf values(3,6);

