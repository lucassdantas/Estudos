<?php

$nomes = ["zero" => "Lucas", "Outro nome"];
$nomes02 = array("nome01", "nome02");
$nomes03 = array("um dnv", "dois dnv");
#Verífica se o valor está no array;
echo in_array("Lucas", $nomes);
echo "<br>";
#Faz um array em  que apenas os indices do array
#selecionado virem os elementos deste novo array
$x = array_keys($nomes);
print_r($x);

echo "<br>";
#cria um array que agrega o conteudo de 2 arrays
#também dá pra colocar mais de 2
#arrays
$z = array_merge($nomes, $nomes02, $nomes03 );
print_r($z);



