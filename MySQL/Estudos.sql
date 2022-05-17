create database cadastro default character set utf8 default collate utf8_general_ci;
use cadastro;
CREATE TABLE tabela (
id int not null auto_increment,
nome varchar(50) not null,
nascimento date, 
sexo enum("F", "M"),
peso decimal(5,3),
altura decimal(3,2),
nacionalidade varchar(20) default "Brasileiro",
primary key(id)
) default charset = utf8;

create database clientes02 default character set utf8 default collate utf8_general_ci; 
create table tabela_cliente(
id int not null auto_increment,
nome varchar(30) not null,
peso decimal(5,2),
nascimento date,
velho enum("Y","N"),

 default charset utf8;
