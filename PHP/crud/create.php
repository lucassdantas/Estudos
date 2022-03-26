<?php
require_once "./db_connect.php";
if(isset($_POST["btn-cadastrar"])){
    $nome = mysqli_escape_string($connect, $_POST["nome"]);
    $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
    $email = mysqli_escape_string($connect, $_POST["email"]);
    $idade = mysqli_escape_string($connect, $_POST["idade"]);

    #não é necessário inserir o ID pois ele é auto_increment
    $sql = "INSERT INTO clientes (nome, sobrenonme, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if(mysqli_query($connect, $sql)){
        header('Location: ../index.php?sucesso');
    }
    else{header('Location: ../index.php?fracasso');
    }
}
?>