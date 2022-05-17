create table  if not exists funcionarios(
nome varchar(20) not null unique,
nascimento date, 
sexo enum("H","M"), 
salario float(7,2) unsigned,
funcao varchar(30) 
) default charset = utf8;
