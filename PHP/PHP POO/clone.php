<?php 
class Clonado{
    public $nome;
}

$pessoa = new Clonado();
$pessoa02 = $pessoa;
$pessoa->nome = "oi";

$pessoa02->nome = "eis";

echo $pessoa->nome;

$pessoa03 = new Clonado();
$pessoa03->nome = "03";
$pessoa04 = clone $pessoa03; #cria um clone, fazendo com que o valor
#da pessoa 04 seja alterado sem alterar o valor da pessoa 03;

$pessoa04->nome="05";
echo "<br>".$pessoa04->nome;
?>