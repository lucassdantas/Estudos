<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php     
      #  $oi = "red";
       # echo "<h1> $oi </h1>";
        #echo ""
    ?>
    <style>
       /* h1{
            color: <?php // echo $oi; ?> ;
        }*/
    </style>
</head>
<body style="background-color:white;">
<h1> oi </h1>

    <?php
        /* echo "oi";
         $n4 = 5;
        // $n2 = $_GET["a"];
         #echo "quanto dá " . ($n2+$n4) . "?";
        // echo pow($n2, $n4);
         $Jesus = "Deus";
         $$Jesus = "Pai, Filho e Espirito Santo";
         echo $Jesus;
         echo $Deus;
        */
         //variável referenciada
        /* $Pai = "Pai";
         $Filho = "Filho";
         $Pai = &$Filho;
         echo $Pai;
         echo $Filho;
         $Espirito_Santo = "Espirito Santo";
         $Pai = &$Espirito_Santo; 
         $Deus = $Pai . $Filho . $Espirito_Santo;
         echo "<br>" . $Deus;*/
        // echo "<br>";

         //relacionados
        /* $x = 1;
         $z = 2;
         $y = (($x == 2 || $z == 2)? "sim":"não");
        echo $y;*/ 
     /*   $respostaano = 5;
     $er = date("y") + $respostaano;
     echo "\n";
     echo $er;
     $x = 1 ;
     $z = 2;

     if($x==3){
         echo "oi";
     }
     elseif($x == 1){
         echo "olá";
        }  
        else {
        }*/

     /*$arr = 0 ;       
     while($arr < 10) {
        echo "<h1 style='color:red'> oi </h1>";
        $arr++;
    }*/
    #$arr = 0;
    #do {
      #  echo "oi";
     #   $arr++;
    # } while($arr < 10);
    $x = 0;
    for ($x=0; $x < 3; $x++){
        echo "Contei" . $x+1;
    }
    include ("funcoes.php");
    echo "$iii" ;
     ?>

<!-- <form method="get" action="receptor.php">
         <label> Deus é Pai, Filho e Espirito Santo? </label>
         <input type="text" name="r">
         <button type="submit"> Enviar </button>
     </form> -->

</body>
</html>