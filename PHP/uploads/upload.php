<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["enviar"])){
        $extensoes_permitidas = ["png", "jpg", "jpeg", "gif"];
        var_dump($_FILES["arquivo"]["name"]);
        $contador = 0;
        $nArquivo = count($_FILES["arquivo"]["name"]);
       
        while($contador < $nArquivo){
            $extension = pathinfo($_FILES["arquivo"]["name"][$contador], PATHINFO_EXTENSION);
            if (in_array($extension, $extensoes_permitidas )){
                $pasta = "./archives/";
                # o primeiro parametro é o array, o segundo
                #a propriedade do arquivo (nome, tamanho, etc)
                $temp = $_FILES["arquivo"]["tmp_name"][$contador];
                $novoNome = uniqid().".$extension";
               
                #pasta. novo nome será o novo nome do arquivo
                if(move_uploaded_file($temp, $pasta.$novoNome)){
                    echo "sucess";
                    
                }
            }
            else {
                echo "failed";
            }
            $contador++;
        }
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="POST" enctype="multipart/form-data">
    <!--esse input será enviado com o nome. Como será um array,
este nome deve ser um array-->
    <input type="file" name="arquivo[]" multiple>
    <br>
    <button type="submit" name="enviar" >ENVIAR</button>
    </form>
</body>
</html>