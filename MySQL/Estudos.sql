create database if not exists escola default character set utf8 default collate utf8_general_ci;
use escola;
create table if not exists turma_1001(
numero int not null auto_increment, 
aluno varchar(60) not null,
media_nota decimal(5,2),
sexo enum("H", "M"),
nascimento date,
primary key (numero)
)default charset = utf8;
insert into turma_1001(
aluno, sexo, nscimento) 
values
("Lucas", "H", "0502-01-07");

update turma_1001
set nascimento = "2002-01-07" where aluno = "lucas" limit 1;