create database click default character set utf8 default collate utf8_general_ci;
use click;
create table funcionarios(
id int not null auto_increment,
nome varchar(50) not null,
nascimento date,
funcao varchar(20),
sala int(4) default "217",
primary key(id)
)default charset utf8;

use click;
insert into funcionarios
(id, nome, nascimento, funcao, sala)
values
(default, 'lucas', '2002-01-07', 'web developer', '217');

describe pessoas; 
desc pessoas; 
use click;
alter table funcionarios
 add column profissao varchar(10);
 
 alter table funcionarios 
 drop column profissao;
 
 alter table funcionarios add column usa_bone enum("S","N") after nome;
 alter table funcionarios drop usa_bone;
 alter table funcionarios add usa_bone varchar(30) after funcao;
