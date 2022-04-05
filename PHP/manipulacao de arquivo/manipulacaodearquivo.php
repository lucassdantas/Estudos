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

 #abre o arquivo, o 2° parametro é referente ao modo em que ser´aberto (leitura, ediçao, leitura e ediçao)
 #a para edição, r para leitura
$arquivoaberto = fopen($arquivo, "r");

#fwrite($arquivoaberto, $conteudo); #1° parametro é o arquivo aberto eo 2° é o conteudo qu será inserido
$tamanhodoarquivo = filesize($arquivo);

#feof é o final do arquivo
while(!feof($arquivoaberto)){
    #fget 1° parametro = arquivo, 2° = tamanho limite para leitura
    $linha = fgets($arquivoaberto, $tamanhodoarquivo);
    echo $linha."<br>";
}

fclose($arquivoaberto);


?>