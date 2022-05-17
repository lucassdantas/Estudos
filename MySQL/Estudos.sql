create table  if not exists funcionarios(
nome varchar(20) not null unique,
nascimento date, 
sexo enum("H","M"), 
salario float(7,2) unsigned,
funcao varchar(30) 
) default charset = utf8;

alter table funcionarios add column frase text ;

select * from funcionarios;
alter table funcionarios drop nome;
alter table funcionarios add column id int not null first;
alter table funcionarios add nome varchar(20) after id;
alter table funcionarios add primary key(id);

INSERT INTO funcionarios (id, NOME, NASCIMENTO, SEXO, SALARIO, FUNCAO, FRASE)
values 
("3", "LUCAS", "2002-01-07", "M", "2000", "dev web", "Viva Cristo Rei!!!");
