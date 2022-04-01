<?php
session_start();
require_once "db_connect.php";
if(isset($_POST["btn-editar"])){
    if((filter_var($email, FILTER_VALIDATE_EMAIL)) && (filter_var($idade, FILTER_VALIDATE_INT)))  {
        $nome = mysqli_escape_string($connect, $_POST["nome"]);
        $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
        $email = mysqli_escape_string($connect, $_POST["email"]);
        $idade = mysqli_escape_string($connect, $_POST["idade"]);
        $id = mysqli_escape_string($connect, $_POST["id"]);
        $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";
        $_SESSION["mensagem"] = "Atualizado com sucesso";
        header('Location: ./index.php?');
    }
    else{
        $_SESSION["mensagem"] = "Erro ao aualizar";
        header('Location: ./index.php?');
    }
    #não é necessário inserir o ID pois ele é auto_increment
}
?>