<?php

class Produtos{
    
    public $name;
    public $valor;
    public function __construct($name, $valor)
    {
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Compra{
    public $gasto;
    public function calc (Produtos $valor){
        $this->gasto = $valor;
    }
    public function exibe(){
        echo $this->gasto->name;

    }
}


$teclado = new Produtos("teclado", "200");
$comprador = new Compra();
$comprador->calc($teclado);
$comprador->exibe();
echo $comprador->gasto->valor;