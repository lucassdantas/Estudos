use cadastro; 
select * from gafanhotos where sexo != "M";
select * from gafanhotos where nascimento between "2000-01-01" and "2015-12-31"
order by nascimento;

select nome from gafanhotos where profissao = "programador";
select * from gafanhotos where nacionalidade ="Brasil" and nome like "J%";

select nome, nacionalidade from gafanhotos where nome like "%silva%" and nacionalidade != "Brasil" and peso < 100;
select max(altura) from gafanhotos where sexo = "M";
select avg(peso) from gafanhotos;

select min(peso) from gafanhotos where sexo = "F" and nacionalidade != "Brasil" and nascimento between "1990-01-01" and "2000-12-31" ;

select count(nome) from gafanhotos where altura > 1.90;

