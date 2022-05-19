insert into turma_1001
(aluno,media_nota,sexo,nascimento) values(
"lucas","5","M","2002-01-07"),
("Gustavo","9","M","2002-01-07"),
("pedro","3","M","2005-01-05"),
("Jennifer","10","M","2001-01-02");

use escola;
select*from turma_1001
order by aluno;

update turma_1001
set sexo = "M" where aluno = "Jennifer" limit 1;

select * from turma_1001 where numero > 1 order by aluno desc limit 2  ;

delete from turma_1001 where numero = 5;
update turma_1001 set sexo = "H" where aluno != "J%" limit 3;