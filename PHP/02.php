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
    include "funcoes.php";
    #oi();    
        
    $o = range(2,30,2);
    print_r($o);
    $ei = implode($o);
    echo "$ei";
    
        
        ?>
    
</body>
</html>