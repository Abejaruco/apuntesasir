create view v_emp10 as select * from empleado where deptno = 10;
insert into v_emp10(empno, ename, deptno) values (8888, 'GIL',10);
update v_emp10 set empno=9999 where ename='GIL';
delete v_emp10 where empno=9999;
select * from v_emp10;
select * from empleado;

create view v_emp_rango as 
select empno,ename,sal,grade from scott.emp,scott.salgrade
where sal between losal and hisal;

insert into v_emp_rango values(9999, 'glu',850,1);
drop view v_emp_rango;