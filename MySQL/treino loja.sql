create database if not exists loja default character set utf8 default collate utf8_general_ci; 
create table if not exists produtos(
sdk int not null auto_increment,
nome varchar(20),
preco decimal(7,2),
estoque int,
primary key(sdk)
) default charset = utf8;


alter table produtos
add column data_recebimento date;

insert into produtos values 
(default, "mouse", "30", "10", "2022-05-21"),
(default, "teclado", "50", "5", "2022-05-21"),
(default, "monitor", "150", "10", "2022-04-05");

update produtos set nome = "mouse-gamer" where nome = "mouse" limit 1;
update produtos set nome = "mouse" where nome ="mouse-gamer" limit 1;

create table if not exists clientes(
registro int not null auto_increment,
nome varchar(50),
nascimento date,
sexo enum("H", "F"),
primary key(registro)
) default charset = utf8;

insert into clientes values
(default, "lucas", "2002-07-01", "H"),
(default, "felipe", "2001-04-20","H"),
(default, "joão", "2000-05-10","H"),
(default, "leticia", "2005-05-03", "F");

create table if not exists compra(
protocolo int not null auto_increment,
momento date,
PSdk int not null,
CRegistro int not null,
primary key(protocolo),
foreign key(PSdk) references produtos(sdk),
foreign key(CRegistro) references clientes(registro)
) default charset = utf8;

insert into compra values
(default, "2022-05-21","1", "2"),
(default, "2022-05-21", "1", "3"),
(default, "2022-03-30", "3", "2"),
(default, "2022-01-01", "2", "1");

select produtos.nome, clientes.nome, momento from compra
join clientes on clientes.registro = CRegistro
join produtos on produtos.sdk = PSdk;

select count(clientes.registro), produtos.nome from compra
join clientes on CRegistro = clientes.registro
join produtos on PSdk = produtos.sdk
group by produtos.nome;