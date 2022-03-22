<?php
//Constantes são globais e invaria´veis
define("varname", "valor");
echo varname;


//Array

$nomes = array("01", "02");
echo "<br>";
print_r($nomes);
echo "br";
echo $nomes[1];
$nomes[] = "<br> novo elemento <br>";
$nomes[9] = "adiciona um elemento a posição 09";
echo $nomes[9];
echo $nomes[2];

$nomes02 = array(1 => "01", 02=>"2");
echo $nomes02[02];


$nomes03 = ["array 0", "array 1 "];
echo "<br>";
print_r($nomes03);


#FUNÇÕES ARRAY!!!!!!!!!!!!!!!!!!!!!
#count
echo count($nomes); #conta a quantia de elements;
echo "<br>";

foreach ($nomes as $subnome ) {
    echo $subnome."<br>";
}


//Array associativo;
$associativo = ["nome" => "Lucas", "peso" => 5];

print_r($associativo);
echo "<br><br>".$associativo["nome"]."<br>";

foreach($associativo as $indice => $valor){
    echo $valor.":".$valor."<br>";
    
}

//Arrays multidimensionais

$objeto = [
    "console" => array("log", "etc"),
    "window" => array("global", "console")
];

echo $objeto["console"][01];
#a primeira chave se refere
#ao array pai e a segunda ao filho;
