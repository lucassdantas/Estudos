<?php
session_start();
require_once "db_connect.php";
if(isset($_POST["btn-cadastrar"])){
    if((filter_var($email, FILTER_VALIDATE_EMAIL)) && (filter_var($idade, FILTER_VALIDATE_INT)))  {
        $nome = mysqli_escape_string($connect, $_POST["nome"]);
        $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
        $email = mysqli_escape_string($connect, $_POST["email"]);
        $idade = mysqli_escape_string($connect, $_POST["idade"]);
        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
        $_SESSION["mensagem"] = "Cadastrado com sucesso";
        header('Location: ./index.php?');
    }
    else{
        $_SESSION["mensagem"] = "Erro ao cadastrar";
        header('Location: ./index.php?');
    }
    #não é necessário inserir o ID pois ele é auto_increment
}
?>