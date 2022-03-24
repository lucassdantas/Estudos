<?php
    require_once "db_connect.php";
    session_start();
    if(isset($_POST["botao"])){
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST["login"]);
        $senha = mysqli_escape_string($connect, $_POST["senha"]);
        if(empty($login) or empty($senha)){
            $errors[] = "<p>preencha</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
        <label>LOGIN</label>
        <input type="text" name="login">
        <br>
        <label>senha</label>
        <input type="password" name="senha">
        <br>
        <button name="botao" type="submit">ENVIAR</button>
    </form>
</body>
</html>