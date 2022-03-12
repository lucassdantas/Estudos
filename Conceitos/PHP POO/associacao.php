<?php

class Cliente {
   public $nome;
   public $idade;
}
class Produto{
    public $quantidade;
    public $destinatario;
}

$cliente = new Cliente();
$cliente->nome = "Lucas";
$cliente05= new Cliente();
$cliente05->nome = "Fernando";
$produto = new Produto();
$produto->destinatario = $cliente;

$dados = array(
    "nome_destinatário" => $produto->destinatario->nome,

);
echo $dados["nome_destinatário"];
