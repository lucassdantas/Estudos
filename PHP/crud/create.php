<?php
session_start();
require_once "db_connect.php";


#defende de ataque xss
function clear ($input){
    global $connect;
    #escape string defende de sql injection
    $var = mysqli_escape_string($connect, $input);
    #defende do xss
    $var = htmlspecialchars($var);
    return $var;
}
if(isset($_POST["btn-cadastrar"])){
    $nome = clear($_POST["nome"]);
    $sobrenome = clear($_POST["sobrenome"]);
    $email = clear($_POST["email"]);
    $idade = clear($_POST["idade"]);
     if((filter_var($email, FILTER_VALIDATE_EMAIL)) && (filter_var($idade, FILTER_VALIDATE_INT)))  {
        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
        if(mysqli_query($connect, $sql)){
            $_SESSION["mensagem"] = "Cadastrado com sucesso";
            header('Location: ./index.php?');
        }
       
    }
    else{
        $_SESSION["mensagem"] = "Erro ao cadastrar";
        header('Location: ./index.php?');
    }
    #não é necessário inserir o ID pois ele é auto_increment
}
?>