use cadastro;

select profissao, count(*) from gafanhotos group by profissao;
select sexo, count(*) from gafanhotos where nascimento > "2005-01-01" group by sexo;

select nacionalidade, count(nacionalidade) from gafanhotos where nacionalidade != "Brasil" group by nacionalidade
having count(nacionalidade) > 3;

select count(*) from gafanhotos where altura > "1.66" and peso > "100";

select altura, count(*) from gafanhotos where peso > "100" group by altura having altura > (select avg(altura) from gafanhotos);
