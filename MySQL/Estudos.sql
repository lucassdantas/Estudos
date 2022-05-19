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

select * from turma_1001;
select * from turma_1001 where numero > 1 order by aluno desc limit 2  ;
select * from turma_1001 where numero between 1 and 3;
select aluno, media_nota from turma_1001 where media_nota in (3, 9);
select * from turma_1001 where media_nota between 4 and 9;
select * from turma_1001 where numero >= 3;
select aluno from turma_1001 where media_nota > 5 and media_nota < 10;

select * from turma_1001 where aluno like "J%";
select* from turma_1001 where aluno like "e%";
select * from turma_1001 where aluno like "_e%";
select aluno from turma_1001 where nascimento like "%01%";


delete from turma_1001 where numero = 5;
update turma_1001 set sexo = "H" where aluno != "J%" limit 3;