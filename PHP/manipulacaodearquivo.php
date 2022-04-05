<?php 
/*
fopen()
fclose()
fwrite()
feof()
fgets()
filesize*/ 
$arquivo = "arquivo.txt";
$conteudo = "conteudo de teste\r\n"; #conteudo que será inserido no arquvo
$arquivoaberto = fopen($arquivo, "a"); #abre o arquivo, o 2° parametro é referente ao modo em que ser´aberto (leitura, ediçao, leitura e ediçao)
fwrite($arquivoaberto, $conteudo); #1° parametro é o arquivo aberto eo 2° é o conteudo qu será inserido
fclose($aqruivoaberto);
?>