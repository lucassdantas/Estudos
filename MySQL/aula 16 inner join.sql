select * from gafanhotos;
select * from cursos;
create table g_assistir_c(
	id int not null auto_increment,
    inscricao date,
    idcurso int,
    idgafanhoto int ,
    primary key(id),
    foreign key (idcurso) references cursos(idcurso),
    foreign key (idgafanhoto) references gafanhotos(id)
) default charset = utf8;

insert into g_assistir_c values( default, "2000-01-01", "5", "10");

select * from g_assistir_c;
select gafanhotos.id, gafanhotos.nome, g_assistir_c.idcurso, cursos.nome from gafanhotos join g_assistir_c
on gafanhotos.id = g_assistir_c.id
join cursos
on cursos.idcurso = g_assistir_c.idcurso;



