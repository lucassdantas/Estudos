<?php
#letras d, m e y = numero e ano com 2 digitos
#letras D, M E Y = dia e mes escrito e ano com 4 digitos
#l é o dia da semana
#h = hora em formato de 12 h
#H = HORA EM FORMATO DE 24 H
# i = minutos
# s = segundos
# A = p.m ou a.m

#define o timezone
date_default_timezone_set("America/Sao_Paulo");
echo date("d/m/Y H:i");

echo "<hr>";

#como armazenar datas no banco de dados
#o banco de dados possui 2 colunas para data: date e datetime
$date = date("Y-m-d"); #FORMATO DATE 
$datetime = date("y-m-d H:i:s"); #FORMATO DATETIME

echo "<br>";

#time retorna a quantidade de segundosde 1970 até agr
$time = time();
#como formatar o time
echo date("d/m/Y", $time);
echo "<br>";

#mk time trabalha comd atas passadas ou futuras
#parametros: hora, minuto, segundo, mês, dia, ano
$data_pagamento = mktime(15, 30, 00, 02, 01, 2023);
echo $data_pagamento;
echo "<br> <p>mk time formatado:</p>";
#formatar o mktime
echo date("d/m/y H:m", $data_pagamento);

#STRTTOTIME CONVERTE DE STRING PARA TIEM
echo "<hr>";
$data = "2019-04-10 15:30:00";
$data = strtotime($data);

echo date("d/m/y", $data);
?>