<?php
class Pessoa{
    private $dinheiro;

    #faz com que consiga setar atributos privados sem ter
    #que fazer uma função propria pra cada atributo
    public function __set($att, $valor){
        $this->$att = $valor;
    }

    #faz com que consiga pegar atributos privados sem ter
    #que fazer uma função propria pra cada atributo
    public function __get($valor){
        return $this->$valor;
    }

    #é executado ao tentar imprimir o objeto instanciado.
    #acho que deve ter o return
    public function __toString(){
       return "Escreveu"; 
    }


    #é executado ao executar a classe
    #cmo uma função
    public function __invoke(){
        echo "fiz função";
    }
}
    $pessoa = new Pessoa();
    $pessoa->nome = "oi";
    $pessoa->dinheiro = 500;
    echo $pessoa->dinheiro;
    $pessoa(); #executa o invoke
    echo $pessoa; #executa __tostring


?>