<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["botao"])){
            $erros = array();

            if($idade = filter_input(INPUT_POST, "numeros", FILTER_VALIDATE_INT)){
                echo "oi dnv";
            }
            else{
                echo"oi nao!";
            }
        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="nome">NOME</label>
        <input type="text" name="nome">
        <br>
        <label for="tex">Email</label>
        <input type="text" name="tex">    
        <br>
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha">
        <br>
        <label for="numeros">numeros</label>
        <input type="number" name="numeros" id="">
        <button type="submit" name="botao">Enviar</button>
    </form>
</body>
<script>
</script>
</html>