use cadastro;
select * from cursos;
select ano, count(*) from cursos;
select ano, count(*) from cursos
group by ano;

select ano, count(8) from cursos group by ano having ano < 2014  order by count(*) desc;

select avg(carga), ano from cursos group by ano;

select carga, count(*) from cursos 
where ano > 2015
group by carga
having carga > 10;

select carga, count(*) from cursos where ano > 2015 
group by carga having carga > (select avg(carga) from cursos);