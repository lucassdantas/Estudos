
create  database if not exists click_internet default character set utf8 default collate utf8_general_ci;
use click_internet;
create table if not exists funcionarios(
registro int not null auto_increment,
nome varchar(50) not null,
nascimento date,
sexo enum("H","M"),
peso decimal(5,2),
funcao varchar(60),
salario decimal(7,2),
admissao date,
primary key (registro)
) default charset = utf8;

insert into funcionarios(
nome, nascimento, sexo, peso, funcao, salario, admissao)
values(
"Lucas","2002-01-07","H","70", "Desenvolvedor", "1000", "2021-12-06"); 

update funcionarios
set peso = "80" where nome = "Lucas" and admissao = "2021-12-06" limit 1;

delete from funcionarios where nome = "Lucas";

select * from funcionarios where salario > 1200 group by salario having salario > 900;

alter table 
modify
