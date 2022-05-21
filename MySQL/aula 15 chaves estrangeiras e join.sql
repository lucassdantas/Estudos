use cadastro;
alter table gafanhotos
add column curso_preferido int;

alter table gafanhotos 
add foreign key (curso_preferido)
references cursos(idcurso);

select * from cursos;
select * from gafanhotos;
update gafanhotos set curso_preferido = "1" where id = "5";
update gafanhotos set curso_preferido = "2" where id="1"; 

select gafanhotos.nome, cursos.nome from gafanhotos join cursos on cursos.idcurso = gafanhotos.curso_preferido;
select g.nome, c.nome from gafanhotos as g left outer join cursos as c on c.idcurso = g.curso_preferido order by c.nome;
select gafanhotos.nome, cursos.nome from gafanhotos right outer join cursos on gafanhotos.curso_preferido = cursos.idcurso;
select gafanhotos.nome, cursos.nome from gafanhotos left outer join cursos on gafanhotos.curso_preferido = cursos.idcurso;